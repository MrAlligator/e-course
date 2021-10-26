<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('_partials/hero', $data);
        $this->load->view('frontend/profile', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function changePass()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('old-password', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('new-password', 'Password Baru', 'required|trim|min_length[8]|matches[konfirm_pass]');
        $this->form_validation->set_rules('konf-password', 'Konfirmasi Password Baru', 'required|trim|min_length[8]|matches[password_baru]');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', "Data Gagal Di Edit");
            redirect('frontend/profile');
        } else {
            $current_password = $this->input->post('old_password');
            $new_password = $this->input->post('new_password');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama Salah!</div>');
                redirect('frontend/profile');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan Password lama!</div>');
                    redirect('frontend/profile');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tb_user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diganti!</div>');
                    redirect('frontend/profile');
                }
            }
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->User_model->delete($id)) {
            redirect(site_url('home'));
        }
    }
}
