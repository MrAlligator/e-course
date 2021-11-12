<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inquiry extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inquiry_model');
    }

    public function index()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/importir/index';
        $config['total_rows'] = $this->Inquiry_model->hitung_jumlah_inquiries();
        $config['per_page'] = '100';

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
        $data['title'] = "Importir";
        $data['buyers'] = $this->Inquiry_model->getSome($config['per_page'], $data['start']);

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/inquiry', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('perusahaan', 'Nama Perusahaan', 'required|trim', [
            'required' => 'Nama Perusahaan tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('cp', 'Contact Person', 'required|trim', [
            'required' => 'Contact Person tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('negara', 'Negara', 'required|trim', [
            'required' => 'Negara tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('website', 'Website', 'required|trim', [
            'required' => 'Website tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim', [
            'required' => 'Telepon tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('fax', 'Faximile', 'required|trim', [
            'required' => 'Faximile tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required' => 'Email tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('produk', 'Produk', 'required|trim', [
            'required' => 'Produk tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal ditambahkan</div>');
            redirect("backend/importir");
        } else {
            //tampung data dari form
            $perusahaan = $this->input->post('perusahaan');
            $cp = $this->input->post('cp');
            $alamat = $this->input->post('alamat');
            $negara = $this->input->post('negara');
            $website = $this->input->post('website');
            $telepon = $this->input->post('telepon');
            $fax = $this->input->post('fax');
            $email = $this->input->post('email');
            $produk = $this->input->post('produk');
            $date = time();

            $data = [
                'nama_perusahaan' => $perusahaan,
                'alamat' => $alamat,
                'negara' => $negara,
                'telepon' => $telepon,
                'fax' => $fax,
                'email' => $email,
                'website' => $website,
                'produk' => $produk,
                'contact_person' => $cp,
                'tgl_input' => $date
            ];
            $this->db->insert('tb_importir', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect("backend/importir");
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('perusahaan', 'Nama Perusahaan', 'required|trim', [
            'required' => 'Nama Perusahaan tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('cp', 'Contact Person', 'required|trim', [
            'required' => 'Contact Person tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('negara', 'Negara', 'required|trim', [
            'required' => 'Negara tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('website', 'Website', 'required|trim', [
            'required' => 'Website tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim', [
            'required' => 'Telepon tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('fax', 'Faximile', 'required|trim', [
            'required' => 'Faximile tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required' => 'Email tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('produk', 'Produk', 'required|trim', [
            'required' => 'Produk tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal diubah</div>');
            redirect("backend/importir");
        } else {
            //tampung data dari form
            $perusahaan = $this->input->post('perusahaan');
            $cp = $this->input->post('cp');
            $alamat = $this->input->post('alamat');
            $negara = $this->input->post('negara');
            $website = $this->input->post('website');
            $telepon = $this->input->post('telepon');
            $fax = $this->input->post('fax');
            $email = $this->input->post('email');
            $produk = $this->input->post('produk');
            $date = time();

            $data = [
                'nama_perusahaan' => $perusahaan,
                'alamat' => $alamat,
                'negara' => $negara,
                'telepon' => $telepon,
                'fax' => $fax,
                'email' => $email,
                'website' => $website,
                'produk' => $produk,
                'contact_person' => $cp,
                'tgl_input' => $date
            ];
            $this->db->where('id_importir', $_POST['id']);
            $this->db->update('tb_importir', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect("backend/importir");
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Buyers_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('backend/importir'));
        }
    }
}
