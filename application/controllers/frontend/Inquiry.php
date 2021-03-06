<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inquiry extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inquiry_model');
        is_logged_in();
        helper_log('view', 'Mengunjungi Halaman Inquiry');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['inquiries'] = $this->Inquiry_model->getAll();
        $data['title'] = "Data Permintaan";
        $data['semua'] = 0;

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/inquiries', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function getAll()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['inquiries'] = $this->Inquiry_model->getAll();
        $data['title'] = "Data Permintaan (Inquiry)";
        $data['semua'] = 1;

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/inquiries', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['inquiries'] = $this->Inquiry_model->getById($id);
        $raw = $this->db->where('id_inquiry', $id)->get('tb_inquiry')->row_array();;
        $data['title'] = $raw['produk'];

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/inquiry_detail', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }
    public function cetak_semua()
    {
        $this->load->library('dompdf_gen');
        $data['inquiries'] = $this->Inquiry_model->getAll();
        $this->load->view('_partials/header', $data);
        $this->load->view('frontend/print_inquiry', $data);
        $this->load->view('_partials/js', $data);
        $paper_size = 'A4';
        $orientataion = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientataion);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("OMNIEXIM_Inquiry.pdf", array('Attachment' => 0));
    }

    public function cetak()
    {
        $this->load->library('dompdf_gen');
        $keyword = $this->input->post('cari');
        $data['inquiries'] = $this->Inquiry_model->get_inquiry_keyword($keyword);
        $this->load->view('_partials/header', $data);
        $this->load->view('frontend/print_inquiry', $data);
        $this->load->view('_partials/js', $data);
        $paper_size = 'A4';
        $orientataion = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientataion);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("OMNIEXIM_Inquiry_keyword=" . $keyword . ".pdf", array('Attachment' => 0));
    }
}
