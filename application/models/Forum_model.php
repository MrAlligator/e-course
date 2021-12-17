<?php defined('BASEPATH') or exit('No direct script access allowed');

class Forum_model extends CI_Model
{
    private $_table = "tb_tanggapan";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByKategori($id)
    {
        return $this->db->where('id_kategori', $id)->get($this->_table)->result();
    }

    public function getKategori()
    {
        return $this->db->get('tb_pertanyaan')->result();
    }

    public function getRandom()
    {
        return $this->db->order_by('rand()')->limit(10)->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->where('id_buyers', $id)->get($this->_table)->result();
    }

    public function delete($id)
    {
        $this->db->delete($this->_table, ['id_post' => $id]);
        return $this->db->get($this->_table)->result();
    }

    public function create($data)
    {
        $this->db->insert($this->_table, $data);
        return $this->db->get($this->_table)->result();
    }
}
