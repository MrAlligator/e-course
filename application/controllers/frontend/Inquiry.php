<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inquiry extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inquiry_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['inquiries'] = $this->Inquiry_model->getRandom();
        $data['title'] = "EXIM-Community | Inquiry Data";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/inquiries', $data);
        $this->load->view('frontend/articles', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('frontend/membership', $data);
            }
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
        
    }

    public function detail()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "EXIM-Community | Inquiries Detail";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/inquiry_detail', $data);
        $this->load->view('frontend/articles', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('frontend/membership', $data);
        }$this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }
}