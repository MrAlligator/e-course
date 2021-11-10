<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Membership extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Membership";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('buktitf', 'Bukti Transfer', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/topbar');
            $this->load->view('_partials/hero');
            $this->load->view('_partials/clients');
            $this->load->view('frontend/buktitransfer');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        } else {
            $email = $this->session->userdata('email');
            $date = time();

            $config['allowed_types'] = 'jpg|png';
            $config['max_size']         = '2048';
            $config['upload_path']     = './assets/img/buktitransfer/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('buktitf')) {
                $buktitf = $this->upload->data();
                $file = $buktitf['file_name'];

                $this->db->set('email', $email);
                $this->db->set('tanggal_pembayaran', $date);
                $this->db->set('buktitf', $file);

                $this->db->insert('tb_pembayaran');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran Berhasil, Tunggu Konfirmasi Admin..!!</div>');
                redirect('frontend/membership');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('frontend/membership');
            }
        }
    }
}
