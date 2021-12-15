<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buyers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buyers_model');
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $need = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buyers'] = $this->Buyers_model->getRandom();
        $data['title'] = "Data Importir";
        $data['semua'] = 0;

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        // $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/buyers', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('frontend/membership', $data);
        } elseif (isset($_SESSION['email']) && $need['is_member'] == 0) {
            $this->load->view('frontend/membership', $data);
        }
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function getAll()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $need = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buyers'] = $this->Buyers_model->getAll();
        $data['title'] = "Data Importir";
        $data['semua'] = 1;

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/buyers', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('frontend/membership', $data);
        } elseif (isset($_SESSION['email']) && $need['is_member'] == 0) {
            $this->load->view('frontend/membership', $data);
        }
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $need = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buyers'] = $this->Buyers_model->getById($id);

        $raw = $this->db->where('id_importir', $id)->get('tb_importir')->row_array();;
        $data['title'] = $raw['nama_perusahaan'];

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        // $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/buyer_detail', $data);
        $this->load->view('frontend/articles', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('frontend/membership', $data);
        } elseif (isset($_SESSION['email']) && $need['is_member'] == 0) {
            $this->load->view('frontend/membership', $data);
        }
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function get_buyers()
    {
        echo json_encode($this->Buyers_model->getAll()->result());
    }

    public function cetak_semua()
    {
        $this->load->library('dompdf_gen');
        $data['importir'] = $this->Buyers_model->getAll();
        $this->load->view('_partials/header', $data);
        $this->load->view('frontend/print_buyer',$data);
        $this->load->view('_partials/js', $data);
        $paper_size = 'A4';
        $orientataion = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientataion);
        $this->dompdf->load_html($html);
        set_time_limit(600);
        $this->dompdf->render();
        $this->dompdf->stream("OMNIEXIM_Buyers.pdf", array('Attachment'=>0));

    }

    public function cetak()
    {
        $this->load->library('dompdf_gen');
        $keyword=$this->input->post('cari');
        $data['importir'] = $this->Buyers_model->get_buyers_keyword($keyword);
        $this->load->view('_partials/header', $data);
        $this->load->view('frontend/print_buyer',$data);
        $this->load->view('_partials/js', $data);
        $paper_size = 'A4';
        $orientataion = 'potrait';
        $html = $this->output->get_output();
        set_time_limit(600);
        $this->dompdf->set_paper($paper_size, $orientataion);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("OMNIEXIM_buyers_keyword=".$keyword.".pdf", array('Attachment'=>0));

    }
}
