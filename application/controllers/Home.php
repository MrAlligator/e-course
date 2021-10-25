<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/about', $data);
        $this->load->view('frontend/why-us', $data);
        $this->load->view('frontend/skills', $data);
        $this->load->view('frontend/services', $data);
        $this->load->view('frontend/cta', $data);
        $this->load->view('frontend/portofolio', $data);
        $this->load->view('frontend/team', $data);
        $this->load->view('frontend/pricing', $data);
        $this->load->view('frontend/frequently', $data);
        $this->load->view('frontend/contact', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }
}
