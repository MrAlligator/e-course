<?php defined('BASEPATH') or exit('No direct script access allowed');

class Inquiry_model extends CI_Model
{
    private $_table = "tb_inquiry";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getRandom()
    {
        return $this->db->get($this->_table)->result();
    }
}
