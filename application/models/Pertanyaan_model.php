<?php defined('BASEPATH') or exit('No direct script access allowed');
class Pertanyaan_model extends CI_Model
{
    private $_table = "tb_pertanyaan";

    public function getSome($limit, $start, $like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        return $this->db->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_pertanyaan($like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kategori" => $id));
    }
}
