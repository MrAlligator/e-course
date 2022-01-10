<?php defined('BASEPATH') or exit('No direct script access allowed');

class Aturan_model extends CI_Model
{
    private $_table = "tb_peraturan_forum";

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function delete($id)
    {
        $this->db->where('id_peraturan', $id);
        $this->db->delete($this->_table);
        return true;
    }
}
