<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Masuk";
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Email Tidak Valid',
            'required' => 'Email Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Kata Sandi Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('_partadm/head_auth', $data);
            $this->load->view('_partadm/top_auth');
            $this->load->view('backend/auth');
            $this->load->view('_partadm/js');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
        //jika user ada
        if ($user) {
            //cek aktif
            if ($user['is_active'] == 1) {
                //cek role
                if ($user['role_id'] == 1) {
                    //cek pass
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'id_user' => $user['id_user'],
                            'nama' => $user['nama'],
                            'role_id' => $user['role_id']
                        ];
                        $this->session->set_userdata($data);
                        redirect('dashboard');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                        redirect('admin');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Tidak Memiliki hak untuk Mengakses Halaman Ini</div>');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda belum diaktivasi</div>');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar</div>');
            redirect('admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Sudah Logout</div>');
        redirect('admin');
    }

    public function sendmail()
    {
        $to                 = $this->request->getPost('to');
        $subject            = $this->request->getPost('subject');
        $message            = $this->request->getPost('message');
 
        $mail = new PHPMailer(true);
 
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.googlemail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'alamatemailanda@gmail.com'; // ubah dengan alamat email Anda
            $mail->Password   = 'passAnda'; // ubah dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
 
            $mail->setFrom('alamatemailanda@gmail.com', 'Niagahoster Tutorial'); // ubah dengan alamat email Anda
            $mail->addAddress($to);
            $mail->addReplyTo('alamatemailanda@gmail.com', 'Niagahoster Tutorial'); // ubah dengan alamat email Anda
 
            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
 
            $mail->send();
 
         // Pesan Berhasil Kirim Email/Pesan Error
 
            session()->setFlashdata('success', 'Selamat, email berhasil terkirim!');
            return redirect()->to('/email');
        } catch (Exception $e) {
            session()->setFlashdata('error', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
            return redirect()->to('/email');
        }
    }
}
