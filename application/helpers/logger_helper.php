<?php

function helper_log($tipe = "", $str = "")
{
    $CI = &get_instance();

    if (strtolower($tipe) == "view") {
        $log_tipe = 0;
    }

    //parameter
    $param['log_user'] = $CI->session->userdata('nama');
    $param['log_tipe'] = $log_tipe;
    $param['log_desc'] = $str;

    //load model log
    $CI->load->model('Log_model');

    //simpan ke database
    $CI->Log_model->save_log($param);
}
