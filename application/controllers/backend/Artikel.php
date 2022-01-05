<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        is_admin();
    }

    public function index()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/artikel/index';
        $config['total_rows'] = $this->Artikel_model->hitung_jumlah_artikel();
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
        $data['title'] = "Artikel";
        $data['artikel'] = $this->Artikel_model->getSome($config['per_page'], $data['start']);

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/artikel', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('gambar', 'Gambar', 'required', [
            'required' => 'Pilih file gambar terlebih dahulu!'
        ]);
        $this->form_validation->set_rules('detail', 'Detail', 'required|trim', [
            'required' => 'Detail tidak boleh kosong!'
        ]);
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG|JPG';
        $config['max_size']             = 20480;
        $config['upload_path']         = './assets/img/articles/';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) //sesuai dengan name pada form 
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Perhatikan file yang diupload</div>');
            redirect("backend/artikel");
        } else {
            //tampung data dari form
            $title = $this->input->post('judul');
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $context = $this->input->post('detail');

            $data = [
                'judul' => $title,
                'isi' => $context,
                'gambar' => $gambar,
                'tanggal_input' => time()
            ];

            $this->db->insert('tb_artikel', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/artikel");
        }   
    }

    public function edit()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('gambar', 'Gambar', 'required', [
            'required' => 'Pilih file gambar terlebih dahulu!'
        ]);
        $this->form_validation->set_rules('detail', 'Detail', 'required|trim', [
            'required' => 'Detail tidak boleh kosong!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan</div>');
            redirect("backend/artikel");
        } else {
            $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG|JPG';
            $config['max_size']             = 20480;
            $config['upload_path']         = './assets/img/articles/';

            $this->load->library('upload', $config);

            $this->upload->do_upload('gambar'); //sesuai dengan name pada form 
            //tampung data dari form
            $title = $this->input->post('judul');
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $context = $this->input->post('detail');

            if ($gambar != null) {
                $data = [
                    'judul' => $title,
                    'isi' => $context,
                    'gambar' => $gambar
                ];

                $this->db->where('id_artikel', $_POST['id']);
                $this->db->update('tb_artikel', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
                redirect("backend/artikel");
            } else {
                $data = [
                    'judul' => $title,
                    'isi' => $context
                ];

                $this->db->where('id_artikel', $_POST['id']);
                $this->db->update('tb_artikel', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
                redirect("backend/artikel");
            }
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Artikel_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/artikel'));
        }
    }
}
