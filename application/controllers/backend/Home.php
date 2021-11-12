<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Forum_model');
    }

    public function index()
    {
        $data['title'] = "Dashboard";

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/dashboard', $data);
        $this->load->view('_partadm/js', $data);
    }
}
