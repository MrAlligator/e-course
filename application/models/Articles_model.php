<?php defined('BASEPATH') or exit('No direct script access allowed');
class Articles_model extends CI_Model
{
    private $_table = "tb_artikel";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->where('id_artikel', $id)->get($this->_table)->result();
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

    public function delete($id)
    {
        $row = $this->db->where('id_artikel', $id)->get('tb_artikel')->row_array();
        $old_image = $row['gambar'];
        unlink('./assets/img/articles/' . $old_image);
        $this->db->where('id_artikel', $id);
        $this->db->delete($this->_table);
        return true;
    }
}
