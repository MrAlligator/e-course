<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('_partials/header');
        $this->load->view('frontend/login');
        $this->load->view('_partials/clients');
        $this->load->view('_partials/js');
    }

    public function register()
    {
        $this->load->view('_partials/header');
        $this->load->view('frontend/register');
        $this->load->view('_partials/clients');
        $this->load->view('_partials/js');
    }
}
