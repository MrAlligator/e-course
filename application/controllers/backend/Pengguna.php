<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Konfirmasi_model');
        is_admin();
    }

    public function index()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/pengguna/index';
        $config['total_rows'] = $this->User_model->hitung_jumlah_user();
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
        $data['title'] = "Data Pengguna";
        $data['user'] = $this->User_model->getSome($config['per_page'], $data['start']);
        $data['jumuser'] = $this->User_model->hitung_jumlah_user();
        $data['jumfree'] = $this->User_model->hitung_jumlah_free();
        $data['jumprem'] = $this->User_model->hitung_jumlah_premium();
        $data['notif'] = json_decode($this->Konfirmasi_model->hitung_jumlah_belum_konfirmasi());

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/pengguna', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->User_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pendaftaran User tidak Dikonfirmasi</div>');
            redirect(site_url('backend/pengguna'));
        }
    }
}
