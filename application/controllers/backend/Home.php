<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buyers_model');
        $this->load->model('Inquiry_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['jumlah_user_gratis'] = $this->User_model->hitung_jumlah_user_gratis();
        $data['jumlah_user_premium'] = $this->User_model->hitung_jumlah_user_premium();
        $data['jumlah_importir'] = $this->Buyers_model->hitung_jumlah_buyers();;
        $data['jumlah_permintaan'] = $this->Inquiry_model->hitung_jumlah_inquiries();;

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/dashboard', $data);
        $this->load->view('_partadm/footer', $data);
        $this->load->view('_partadm/js', $data);
    }
}
