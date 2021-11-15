<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfirmasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konfirmasi_model');
        is_admin();
    }

    public function index()
    {
        $data['title'] = "Konfirmasi Transfer";
        $data['konfirmasi'] = $this->Konfirmasi_model->getNonConfirm();
        $data['jumsudahkonfir'] = $this->Konfirmasi_model->hitung_jumlah_sudah_konfirmasi();
        $data['jumbelumkonfir'] = $this->Konfirmasi_model->hitung_jumlah_belum_konfirmasi();

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/konfirmasi', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function acc()
    {
        $email = $this->input->post('email');
        $date = time();
        $dataus = [
            'is_member' => 1,
            'date_created' => $date
        ];
        $datatf = [
            'konfirmasi' => 1
        ];

        $this->db->where('email', $email);
        $this->db->update('tb_user', $dataus);
        $this->db->update('tb_pembayaran', $datatf);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konfirmasi User Berhasil</div>');
        redirect("backend/konfirmasi");
    }

    public function refuse($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Konfirmasi_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pendaftaran User tidak Dikonfirmasi</div>');
            redirect(site_url('backend/konfirmasi'));
        }
    }
}
