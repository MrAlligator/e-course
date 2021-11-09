<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buyers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buyers_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buyers'] = $this->Buyers_model->getRandom();
        $data['title'] = "EXIM-Community | Importer data";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/buyers', $data);
        $this->load->view('frontend/articles', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('frontend/membership', $data);
        } elseif (isset($_SESSION['email']) && $_SESSION['is_member'] == 0) {
            $this->load->view('frontend/membership', $data);
        }
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buyers'] = $this->Buyers_model->getById($id);

        $raw = $this->db->where('id_buyers', $id)->get('tb_buyers')->row_array();;
        $data['title'] = "EXIM-Community | " . $raw['nama_perusahaan'];

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/buyer_detail', $data);
        $this->load->view('frontend/articles', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('frontend/membership', $data);
        }
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function get_buyers()
    {
        echo json_encode($this->Buyers_model->getAll()->result());
    }
}
