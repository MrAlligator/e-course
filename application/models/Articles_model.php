<?php defined('BASEPATH') or exit('No direct script access allowed');
class Articles_model extends CI_Model
{
	private $_table = "tb_artikel";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}