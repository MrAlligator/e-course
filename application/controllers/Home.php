<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/topbar');
        $this->load->view('_partials/hero');
        $this->load->view('frontend/about');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/js');
    }
}
