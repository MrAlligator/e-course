<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuntungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('keuntungan_model');
        is_admin();
    }

    public function index()
    {
        $data['title'] = "Data Keuntungan";
        $data['keuntungans'] = $this->keuntungan_model->getAll();

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/keuntungan', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('keuntungan', 'Keuntungan', 'required|trim', [
            'required' => 'Keuntungan tidak boleh kosong!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal ditambahkan</div>');
            redirect("backend/keuntungan");
        } else {
            //tampung data dari form
            $data = [
                'keuntungan' => $this->input->post('keuntungan')
            ];
            $this->db->insert('tb_keuntungan_anggota', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/keuntungan");
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('keuntungan', 'Keuntungan', 'required|trim', [
            'required' => 'Keuntungan tidak boleh kosong!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal diubah</div>');
            redirect("backend/keuntungan");
        } else {
            //tampung data dari form
            $data = [
                'keuntungan' => $this->input->post('keuntungan')
            ];
            $this->db->where('id_keuntungan', $_POST['id']);
            $this->db->update('tb_keuntungan_anggota', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect("backend/keuntungan");
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->keuntungan_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/keuntungan'));
        }
    }
}
