<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('_partials/hero', $data);
            $this->load->view('frontend/profile', $data);
            $this->load->view('_partials/footer', $data);
            $this->load->view('_partials/js', $data);
        } else {
            // $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
            // $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|trim|min_length[8]|matches[konfirm_pass]', [
            //     'matches' => 'Password tidak Sama!',
            //     'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
            // ]);
            // $this->form_validation->set_rules('konfirm_pass', 'Konfirmasi Password Baru', 'required|trim|min_length[8]|matches[password_baru]', [
            //     'matches' => 'Password tidak Sama!',
            //     'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
            // ]);
            $current_password = $this->input->post('old-password');
            $new_password = $this->input->post('new-password');
            var_dump($new_password);
            die;
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama Salah!</div>');
                redirect('auth');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan Password lama!</div>');
                    redirect('frontend/profile');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->set('view_password', $new_password);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tb_user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diganti!</div>');
                    redirect('home');
                }
            }
        }
    }

    public function changepass()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('old-password', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('new-password', 'Password Baru', 'required|trim|min_length[8]|matches[konfirm_pass]');
        $this->form_validation->set_rules('konf-password', 'Konfirmasi Password Baru', 'required|trim|min_length[8]|matches[password_baru]');

        redirect('auth');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->User_model->delete($id)) {
            redirect(site_url('home'));
        }
    }

    public function changeImage()
    {
        $config['upload_path']          = './assets/img/userimage';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|PNG|JPG';
		$config['max_size']         	= 20480;

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto')){
					$data = $this->upload->data();
					$file = $data['file_name'];
					$data = array(
            				'foto_user' => $file);
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah</div>');
                redirect('frontend/profile');
            }
				
        
        if($this->User_model->update($this->input->post('id_user'), $data)){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'.$file.'Data diubah</div>');
            redirect('frontend/profile');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah</div>');
            redirect('frontend/profile');
        }
    }
}
