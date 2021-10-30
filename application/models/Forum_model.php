<?php defined('BASEPATH') or exit('No direct script access allowed');

class Forum_model extends CI_Model
{
    private $_table = "tb_post";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getRandom()
    {
        return $this->db->order_by('rand()')->limit(10)->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->where('id_buyers',$id)->get($this->_table)->result();
    }

    public function create($data)
    {
        return $this->db->insert($this->_table, $data)->result();
    }
    
}