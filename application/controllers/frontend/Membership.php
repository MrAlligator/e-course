<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Membership extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Membership";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/topbar');
            $this->load->view('_partials/hero');
            $this->load->view('_partials/clients');
            $this->load->view('frontend/buktitransfer');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/js');
        } else {
        }
    }
}
