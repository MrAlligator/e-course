<?php defined('BASEPATH') or exit('No direct script access allowed');
class Pertanyaan_model extends CI_Model
{
    private $_table = "tb_kategori";

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }
}
