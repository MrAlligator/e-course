<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pertanyaan_model');
        is_admin();
    }

    public function index()
    {
        $data['title'] = "Data Pertanyaan";
        $data['pertanyaan'] = $this->Pertanyaan_model->getAll();

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/pertanyaan', $data);
        $this->load->view('_partadm/js', $data);
    }
}
