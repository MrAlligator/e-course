<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Forum_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Beranda";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/about', $data);
        $this->load->view('frontend/articles', $data);
        if (!isset($_SESSION['email']) || isset($_SESSION['email']) && $_SESSION['is_member'] == 0) {
            $this->load->view('frontend/membership', $data);
        }
        $this->load->view('frontend/team', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function membership()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Membership";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/membership', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function forum()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['post'] = $this->Forum_model->getAll();
        $data['title'] = "Forum";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/forum', $data);
        $this->load->view('frontend/articles', $data);
        if (!isset($_SESSION['email']) || isset($_SESSION['email']) && $_SESSION['is_member'] == 0) {
            $this->load->view('frontend/membership', $data);
        }
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function articles()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "EXIM-Community | Semua Artikel";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/articles_all', $data);
        if (!isset($_SESSION['email']) || isset($_SESSION['email']) && $_SESSION['is_member'] == 0) {
            $this->load->view('frontend/membership', $data);
        }
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function post_forum()
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'postingan' => $this->input->post('postingan'),
            'like' => $this->input->post('like'),
            'dislike' => $this->input->post('dislike'),
            'tanggal' => $this->input->post('tanggal'),
            'jam' => $this->input->post('jam')
        ];

        $this->Forum_model->create($data);
        redirect('home/forum');
    }

    public function del_post($id)
    {
        $this->Forum_model->delete($id);
        redirect('home/forum');
    }

    public function article_read()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "EXIM-Community | Baca Artikel";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('_partials/clients', $data);
        $this->load->view('frontend/articles_read', $data);
        if (!isset($_SESSION['email']) || isset($_SESSION['email']) && $_SESSION['is_member'] == 0) {
            $this->load->view('frontend/membership', $data);
        }
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }
}
