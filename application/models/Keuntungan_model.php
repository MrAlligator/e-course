<?php defined('BASEPATH') or exit('No direct script access allowed');

class Keuntungan_model extends CI_Model
{
    private $_table = "tb_keuntungan_anggota";

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function delete($id)
    {
        $this->db->where('id_keuntungan', $id);
        $this->db->delete($this->_table);
        return true;
    }
}
