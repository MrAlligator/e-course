<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Forum_model');
        $this->load->model('Artikel_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $need = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Beranda";
        $data['artikel'] = $this->Artikel_model->getRandom();

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/about', $data);
        $this->load->view('frontend/articles', $data);
        $this->load->view('frontend/team', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function membership()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "KEANGGOTAAN";
        $data['artikel'] = $this->Artikel_model->getRandom();


        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('frontend/membership', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function kalkulator()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Kalkulator ";
        $data['subtitle'] = "Kalkulator perhitungan harga dalam melakukan transaksi ekspor ";
        $data['artikel'] = $this->Artikel_model->getRandom();


        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/calculator', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function forum()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $need = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Forum_model->getKategori();
        $data['title'] = "Forum";
        $data['artikel'] = $this->Artikel_model->getRandom();

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('_partials/hero', $data);
        }
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/forum', $data);
        $this->load->view('frontend/articles', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function kategori($id_kategori)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $need = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['post'] = $this->Forum_model->getByKategori($id_kategori);
        $data['pertanyaan'] = $this->Forum_model->getById($id_kategori);
        $data['id_kategori'] = $id_kategori;
        $data['kategori'] = $this->Forum_model->getKategori();
        $data['artikel'] = $this->Artikel_model->getRandom();


        $raw = $this->db->where('id_kategori', $id_kategori)->get('tb_pertanyaan')->row_array();;
        $data['title'] = $raw['nama_kategori'];

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('_partials/hero', $data);
        }
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/kategori', $data);
        $this->load->view('frontend/articles', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function articles()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $need = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Semua Artikel";
        $data['artikel'] = $this->Artikel_model->getAll();
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('_partials/hero', $data);
        }
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/articles_all', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function post_forum()
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'id_kategori' => $this->input->post('id_kategori'),
            'postingan' => $this->input->post('postingan'),
            'like' => $this->input->post('like'),
            'dislike' => $this->input->post('dislike'),
            'tanggal' => $this->input->post('tanggal'),
            'jam' => $this->input->post('jam')
        ];

        $this->Forum_model->create($data);
        redirect('home/kategori/' . $this->input->post('id_kategori'));
    }

    public function del_post($id)
    {
        $this->Forum_model->delete($id);
        redirect('home/forum');
    }

    public function article_read($id)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $need = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Baca Artikel";
        $data['artikel'] = $this->Artikel_model->getById($id);
        $data['artikel_lainnya'] = $this->Artikel_model->getRandom();

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('_partials/hero', $data);
        }
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/articles_read', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }
}
