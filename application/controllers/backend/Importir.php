<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Importir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buyers_model');
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['buyers'] = $this->Buyers_model->getAll();

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/importir', $data);
        $this->load->view('_partadm/footer', $data);
        $this->load->view('_partadm/js', $data);
    }
}
