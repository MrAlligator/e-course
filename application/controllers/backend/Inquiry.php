<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inquiry extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inquiry_model');
        is_admin();
    }

    public function index()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/inquiry/index';
        $config['total_rows'] = $this->Inquiry_model->hitung_jumlah_inquiries();
        $config['per_page'] = '10';

        //Styling
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //Initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(4);
        $data['title'] = "Permintaan";
        $data['buyers'] = $this->Inquiry_model->getSome($config['per_page'], $data['start']);

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/inquiry', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('produk', 'Produk', 'required|trim', [
            'required' => 'Produk tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('negara', 'Negara', 'required|trim', [
            'required' => 'Negara tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('detail', 'Detail', 'required|trim', [
            'required' => 'Detail tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal diubah</div>');
            redirect("backend/inquiry");
        } else {
            //tampung data dari form
            $date = time();
            $produk = $this->input->post('produk');
            $detail = $this->input->post('detail');
            $negara = $this->input->post('negara');

            $data = [
                'tanggal_input' => $date,
                'produk' => $produk,
                'negara' => $negara,
                'detail' => $detail
            ];
            $this->db->insert('tb_inquiry', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/inquiry");
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('produk', 'Produk', 'required|trim', [
            'required' => 'Produk tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('negara', 'Negara', 'required|trim', [
            'required' => 'Negara tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('detail', 'Detail', 'required|trim', [
            'required' => 'Detail tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal diubah</div>');
            redirect("backend/inquiry");
        } else {
            //tampung data dari form
            $produk = $this->input->post('produk');
            $detail = $this->input->post('detail');
            $negara = $this->input->post('negara');

            $data = [
                'produk' => $produk,
                'negara' => $negara,
                'detail' => $detail
            ];
            $this->db->where('id_inquiry', $_POST['id']);
            $this->db->update('tb_inquiry', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect("backend/inquiry");
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Inquiry_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/inquiry'));
        }
    }
}
