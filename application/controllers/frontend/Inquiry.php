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
        $data['title'] = "Data Permintaan";
        $data['semua'] = 0;

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/inquiries', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);     
    }

    public function getAll()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['inquiries'] = $this->Inquiry_model->getAll();
        $data['title'] = "Data Permintaan";
        $data['semua'] = 1;

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/inquiries', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);     
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['inquiries'] = $this->Inquiry_model->getById($id);
        $raw = $this->db->where('id_inquiry',$id)->get('tb_inquiry')->row_array();;
        $data['title'] = $raw['produk'];

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/inquiry_detail', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }
}