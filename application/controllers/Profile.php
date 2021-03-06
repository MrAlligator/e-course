<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        is_logged_in();
    }
    public function cek()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_detail'] = $this->db->get_where('tb_user_detail', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $raw = $this->db->where('email', $this->session->userdata('email'))->get('tb_user')->row_array();
        $data['title'] = $raw['nama'];
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('_partials/hero', $data);
        }
        $this->load->view('frontend/profile_edit', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_detail'] = $this->db->get_where('tb_user_detail', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $raw = $this->db->where('email', $this->session->userdata('email'))->get('tb_user')->row_array();
        $data['title'] = $raw['nama'];


        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/topbar', $data);
        if (!isset($_SESSION['email'])) {
            $this->load->view('_partials/hero', $data);
        }
        $this->load->view('frontend/profile', $data);
        $this->load->view('_partials/footer', $data);
        $this->load->view('_partials/js', $data);


        if (isset($_SESSION['message'])) {
            unset($_SESSION['message']);
        }
        if (isset($_SESSION['password_error_message'])) {
            unset($_SESSION['password_error_message']);
        }
    }
    public function changePassword()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('old-password', 'Password Lama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('new-password', 'Password Baru', 'required|trim|min_length[8]', [
            'required' => 'Field tidak boleh kosong',
            'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
        ]);
        $this->form_validation->set_rules('konf-password', 'Konfirmasi Password Baru', 'required|trim|min_length[8]|matches[new-password]', [
            'required' => 'Field tidak boleh kosong',
            'matches' => 'Password tidak Sama!',
            'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
        ]);

        // url ini buat kembali ke rute '/profile', biar g stuck di fungsi changePassword
        // oh iya ini tanpa di reload ya, jadi tampilan validasi errornya masih aman :)
        $pageTitle = 'Komunitas Ekspor Indonesia | ' . $this->session->userdata("nama");
        $pageNext = base_url('/profile');

        $url = sprintf('<script>window.history.pushState("","%s","%s")</script>', $pageTitle, $pageNext);

        if ($this->form_validation->run() == FALSE) {
            // echo '<script type="text/javascript">alert("Password Gagal diubah");</script>';
            $this->session->set_flashdata('password_error_message', '<div class="alert alert-danger" role="alert">Password gagal diubah!</div>');
            // redirect('profile');
            $this->index();

            echo $url;
        } else {
            $current_password = $this->input->post('old-password');
            $new_password = $this->input->post('new-password');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('password_error_message', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
                // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama Salah!</div>');
                // redirect('profile');

                $this->index();

                echo $url;
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('password_error_message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan Password lama!</div>');
                    // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan Password lama!</div>');
                    // redirect('profile');

                    $this->index();

                    echo $url;
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->set('view_password', $new_password);

                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tb_user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diganti!</div>');
                    redirect('profile');
                }
            }
        }
    }

    public function changeDataDiri()
    {
        $data = [
            'tanggal_lahir' => strtotime($this->input->post('tanggal_lahir')),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kota_tempat_tinggal' => $this->input->post('kota_tinggal')
        ];

        $data1 = [
            'nomor_hp' => $this->input->post('nomor')
        ];

        $this->db->update('tb_user_detail', $data, ['email' => $_SESSION['email']]);
        $this->db->update('tb_user', $data1, ['id_user' => $_SESSION['id_user']]);
        redirect('profile');
    }

    public function changeProfile()
    {
        $config['upload_path']          = './assets/img/userimage';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG|JPG';
        $config['max_size']             = 20480;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if ($_FILES['foto_user']['size'] != 0) {
            $this->upload->do_upload('foto_user');
            $name = $this->upload->data();
            $file = $name['file_name'];

            $get_user_info = $this->db->get_where('tb_user', ['id_user' => $_SESSION['id_user']])->row_array();

            if ($get_user_info['foto_user'] !== 'default.png') {
                unlink('./assets/img/userimage/' . $this->input->post('fotoDulu'));
            }

            $data = array(
                'foto_user' => $file,
                'nama' => $this->input->post('newName')
            );
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah</div>');
            redirect('profile');
        }

        if ($this->User_model->update($_SESSION['id_user'], $data)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $file . 'Data diubah</div>');
            redirect('profile');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah</div>');
            redirect('profile');
        }
    }

    public function delete($id)
    {
        // $id = base64_decode($id);
        if (!isset($id)) show_404();

        echo '<script type="text/javascript">alert("Anda keluar dari sesi saat ini..");</script>';
        if ($this->db->where('id_user', $id)->update('tb_user', ['is_active' => 0])) {
            redirect('auth/logout');
        }
    }
    public function prop()
    {
        echo var_dump($_SESSION);
    }

    public function changeDataPerusahaan()
    {
        $data = [
            'nama_usaha' => $this->input->post('nama_usaha'),
            'alamat_usaha' => $this->input->post('alamat_usaha'),
            'kota_lokasi_usaha' => $this->input->post('kota_usaha'),
            'tahun_berdiri_usaha' => $this->input->post('tahun_berdiri'),
            'no_telepon' => $this->input->post('telp_usaha'),
            'email_usaha' => $this->input->post('email_usaha'),
            'produk_ekspor' => $this->input->post('produk_ekspor'),
            'jumlah_karyawan' => $this->input->post('jumlah_karyawan'),
            'omset_pertahun' => $this->input->post('omset')
        ];

        $this->db->where('email', $_SESSION['email']);
        $this->db->update('tb_user_detail', $data);
        redirect('profile');
    }
}
