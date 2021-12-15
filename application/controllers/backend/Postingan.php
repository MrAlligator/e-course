<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postingan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Postingan_model');
        is_admin();
    }

    public function index()
    {
        $data['title'] = "Data Postingan";
        $data['postingan'] = $this->Postingan_model->getAll();

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/postingan', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Postingan_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/postingan'));
        }
    }
}
