<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logger extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Log_model');
        is_admin();
    }

    public function index()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/logger/index';
        $config['total_rows'] = $this->Log_model->hitung_jumlah_log();
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
        $data['total_row'] = $this->Log_model->hitung_jumlah_log();
        $data['title'] = "Data Log Kunjungan Kalkulator Ekspor Bulan Ini";
        $data['peringatankosong'] = 'Belum ada kunjungan pada bulan ini';
        $data['max'] = $this->Log_model->getMax();
        $pengunjung = $this->db->query("SELECT COUNT(log_hits) as hits FROM tb_log WHERE log_desc = 'Mengunjungi Halaman Kalkulator'")->row();
        $totalpengunjung = isset($pengunjung->hits) ? ($pengunjung->hits) : 0;
        $data['pengunjung'] = $totalpengunjung;
        $data['loggers'] = $this->Log_model->getSome($config['per_page'], $data['start']);

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/logview', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function search()
    {
        //SEARCH
        $search = (trim($this->input->post('key', true))) ? trim($this->input->post('key', true)) : '';
        $search = ($this->uri->segment(4)) ? $this->uri->segment(4) : $search;
        $like = '';
        if ($search) $like = "(log_desc LIKE '%$search%' OR log_user LIKE '%$search%')";

        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/logger/index';
        $config['total_rows'] = $this->Log_model->hitung_jumlah_log($like);
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
        $data['title'] = "Data Log Kunjungan Kalkulator Ekspor Bulan Ini";
        $data['peringatankosong'] = 'Kunjungan yang anda cari tidak ada';
        $data['max'] = $this->Log_model->getMax();
        $pengunjung = $this->db->query("SELECT COUNT(log_hits) as hits FROM tb_log WHERE log_desc = 'Mengunjungi Halaman Kalkulator'")->row();
        $totalpengunjung = isset($pengunjung->hits) ? ($pengunjung->hits) : 0;
        $data['pengunjung'] = $totalpengunjung;
        $data['total_row'] = $this->Log_model->hitung_jumlah_log($like);
        $data['loggers'] = $this->Log_model->getSome($config['per_page'], $data['start'], $like);

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/logview', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function indexBuyers()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/logger/indexBuyers';
        $config['total_rows'] = $this->Log_model->hitung_jumlah_logBuyers();
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
        $data['peringatankosong'] = 'Belum ada kunjungan pada bulan ini';
        $data['title'] = "Data Log Kunjungan Buyers / Importir Bulan Ini";
        $data['max'] = $this->Log_model->getMaxBuyers();
        $pengunjung = $this->db->query("SELECT COUNT(log_hits) as hits FROM tb_log WHERE log_desc = 'Mengunjungi Halaman Buyers'")->row();
        $totalpengunjung = isset($pengunjung->hits) ? ($pengunjung->hits) : 0;
        $data['pengunjung'] = $totalpengunjung;
        $data['total_row'] = $this->Log_model->hitung_jumlah_logBuyers();
        $data['loggers'] = $this->Log_model->getSomeBuyers($config['per_page'], $data['start']);

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/logviewbuyers', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function searchBuyers()
    {
        //SEARCH
        $search = (trim($this->input->post('key', true))) ? trim($this->input->post('key', true)) : '';
        $search = ($this->uri->segment(4)) ? $this->uri->segment(4) : $search;
        $like = '';
        if ($search) $like = "(log_desc LIKE '%$search%' OR log_user LIKE '%$search%')";

        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/logger/indexBuyers';
        $config['total_rows'] = $this->Log_model->hitung_jumlah_logBuyers($like);
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
        $data['title'] = "Data Log Kunjungan Buyers / Importir Bulan Ini";
        $data['peringatankosong'] = 'Kunjungan yang anda cari tidak ada';
        $data['max'] = $this->Log_model->getMaxBuyers();
        $pengunjung = $this->db->query("SELECT COUNT(log_hits) as hits FROM tb_log WHERE log_desc = 'Mengunjungi Halaman Buyers'")->row();
        $totalpengunjung = isset($pengunjung->hits) ? ($pengunjung->hits) : 0;
        $data['pengunjung'] = $totalpengunjung;
        $data['total_row'] = $this->Log_model->hitung_jumlah_logBuyers($like);
        $data['loggers'] = $this->Log_model->getSomeBuyers($config['per_page'], $data['start'], $like);

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/logviewbuyers', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function indexInquiry()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/logger/indexInquiry';
        $config['total_rows'] = $this->Log_model->hitung_jumlah_logInquiry();
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
        $data['total_row'] = $this->Log_model->hitung_jumlah_logInquiry();
        $data['peringatankosong'] = 'Belum ada kunjungan pada bulan ini';
        $data['title'] = "Data Log Kunjungan Inquiry / Permintaan Bulan Ini";
        $data['max'] = $this->Log_model->getMaxInquiries();
        $pengunjung = $this->db->query("SELECT COUNT(log_hits) as hits FROM tb_log WHERE log_desc = 'Mengunjungi Halaman Inquiry'")->row();
        $totalpengunjung = isset($pengunjung->hits) ? ($pengunjung->hits) : 0;
        $data['pengunjung'] = $totalpengunjung;
        $data['loggers'] = $this->Log_model->getSomeInquiry($config['per_page'], $data['start']);

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/logviewinquiries', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function searchInquiry()
    {
        //SEARCH
        $search = (trim($this->input->post('key', true))) ? trim($this->input->post('key', true)) : '';
        $search = ($this->uri->segment(4)) ? $this->uri->segment(4) : $search;
        $like = '';
        if ($search) $like = "(log_desc LIKE '%$search%' OR log_user LIKE '%$search%')";

        //PAGINATION
        //Config
        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . 'backend/logger/indexInquiry';
        $config['total_rows'] = $this->Log_model->hitung_jumlah_logInquiry($like);
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
        $data['total_row'] = $this->Log_model->hitung_jumlah_logInquiry($like);
        $data['peringatankosong'] = 'Kunjungan yang anda cari tidak ada';
        $data['title'] = "Data Log Kunjungan Inquiry / Permintaan Bulan Ini";
        $data['max'] = $this->Log_model->getMaxInquiries();
        $pengunjung = $this->db->query("SELECT COUNT(log_hits) as hits FROM tb_log WHERE log_desc = 'Mengunjungi Halaman Inquiry'")->row();
        $totalpengunjung = isset($pengunjung->hits) ? ($pengunjung->hits) : 0;
        $data['pengunjung'] = $totalpengunjung;
        $data['loggers'] = $this->Log_model->getSomeInquiry($config['per_page'], $data['start'], $like);

        $this->load->view('_partadm/head', $data);
        $this->load->view('_partadm/sidebar', $data);
        $this->load->view('_partadm/topbar', $data);
        $this->load->view('backend/logviewinquiries', $data);
        $this->load->view('_partadm/js', $data);
    }

    public function clear_log()
    {
        $this->Log_model->clear_log();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dibersihkan</div>');
        redirect('backend/logger');
    }

    public function download()
    {
        //Plugin PHPEXCEL
        include APPPATH . 'third_party/PHPExcel.php';
        //Panggil Class PHPEXCEL
        $excel = new PHPExcel();
        //Setting Awal File
        $excel->getProperties()->setCreator('Komunitas Export Indonesia')
            ->setLastModifiedBy('Admin Komunitas Export Indonesia')
            ->setTitle("Data Log Kunjungan")
            ->setSubject("Log")
            ->setDescription("Laporan Semua Data Log Kunjungan")
            ->setKeywords("Data Log Kunjungan");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA LOG KUNJUNGAN");
        $excel->getActiveSheet()->mergeCells('A1:E1');
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A3', "No"); // Set kolom A3 dengan tulisan "No"
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "Waktu Kunjungan"); // Set kolom B3 dengan tulisan "Waktu Kunjungan"
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "User Yang Mengakses"); // Set kolom C3 dengan tulisan "User Yang Mengakses"
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "Deskripsi Log"); // Set kolom D3 dengan tulisan "Deskripsi Log"
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        // Panggil function view yang ada di Log_Model untuk menampilkan semua data lognya
        $loggers = $this->Log_model->getAll();
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach ($loggers as $data) { // Lakukan looping pada variabel loggers
            $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data->log_time);
            $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data->log_user);
            $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data->log_desc);

            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);

            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D

        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Laporan Data Log Kunjungan");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Log Kunjungan.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = new PHPExcel_Writer_Excel2007($excel);
        $write->save('php://output');

        redirect('backend/logger');
    }
}
