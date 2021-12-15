<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komentar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_admin();
    }

    public function index()
    {
        $data['title'] = "Data Komentar";

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/komentar', $data);
        $this->load->view('_partadm/js', $data);
    }
}
