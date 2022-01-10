<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('aturan_model');
        is_admin();
    }

    public function index()
    {
        $data['title'] = "Data Peraturan Forum";
        $data['peraturans'] = $this->aturan_model->getAll();

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/aturan', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('peraturan', 'Peraturan', 'required|trim', [
            'required' => 'Peraturan tidak boleh kosong!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal ditambahkan</div>');
            redirect("backend/aturan");
        } else {
            //tampung data dari form
            $data = [
                'peraturan' => $this->input->post('peraturan')
            ];
            $this->db->insert('tb_peraturan_forum', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/aturan");
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('peraturan', 'Peraturan', 'required|trim', [
            'required' => 'Peraturan tidak boleh kosong!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal diubah</div>');
            redirect("backend/aturan");
        } else {
            //tampung data dari form
            $data = [
                'peraturan' => $this->input->post('peraturan')
            ];
            $this->db->where('id_peraturan', $_POST['id']);
            $this->db->update('tb_peraturan_forum', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect("backend/aturan");
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->aturan_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/aturan'));
        }
    }
}
