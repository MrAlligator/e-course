<?php defined('BASEPATH') or exit('No direct script access allowed');
class Artikel_model extends CI_Model
{
    private $_table = "tb_artikel";

    public function rules()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required'
            ],

            [
                'field' => 'isi',
                'label' => 'Isi',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getRandom()
    {
        return $this->db->order_by('rand()')->limit(3)->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->where('id_artikel', $id)->get($this->_table)->row_array();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_artikel()
    {
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_artikel = $post["id"];
        $this->judul = $post["judul"];
        $this->isi = $post["detail"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->foto_produk = $this->_uploadImage();
        } else {
            $this->foto_produk = $post["old_image"];
        }
        return $this->db->update($this->_table, $this, array('id_artikel' => $post['id']));
    }

    public function delete($id)
    {
        $row = $this->db->where('id_artikel', $id)->get('tb_artikel')->row_array();
        $old_image = $row['gambar'];
        unlink('./assets/img/articles/' . $old_image);
        $this->db->where('id_artikel', $id);
        $this->db->delete($this->_table);
        return true;
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/articles/';
        $config['allowed_types']        = 'jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 20480;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }
}
