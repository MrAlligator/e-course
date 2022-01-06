<?php

function helper_log($tipe = "", $str = "")
{
    $CI = &get_instance();

    if (strtolower($tipe) == "view") {
        $log_tipe = 0;
    }


    //load model log
    $CI->load->model('Log_model');

    //simpan ke database
    $user = $CI->session->userdata('nama');
    $hits = $CI->db->query("SELECT * FROM tb_log WHERE log_user = '" . $user . "' AND log_desc = '" . $str . "'")->row_array();
    $check = $CI->Log_model->check($user, $str);
    $chk = isset($check) ? ($check) : 0;
    if ($chk == 0) {
        //parameter
        $param['log_user'] = $CI->session->userdata('nama');
        $param['log_tipe'] = $log_tipe;
        $param['log_desc'] = $str;
        $param['log_hits'] = 1;
        $CI->Log_model->save_log($param);
    } else {
        $param['log_hits'] = $hits['log_hits'] + 1;
        $CI->Log_model->update($user, $str, $param);
    }
}

function log_pengunjung()
{
    $CI = &get_instance();

    $param['visitor_ip'] = $CI->input->ip_address();
    $param['visitor_date'] = date('d');
    $param['visitor_month'] = date('m');
    $param['visitor_year'] = date('Y');

    $CI->load->model('Log_model');
    $ip = $CI->input->ip_address();
    $date = date('d');
    $s = $CI->db->query("SELECT * FROM tb_visitor WHERE visitor_ip='" . $ip . "' AND visitor_date='" . $date . "'")->num_rows();
    $ss = isset($s) ? ($s) : 0;

    if ($ss == 0) {
        $CI->Log_model->save_visit($param);
    }
}
