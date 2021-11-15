<?php defined('BASEPATH') or exit('No direct script access allowed');

class Inquiry_model extends CI_Model
{
    private $_table = "tb_inquiry";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result_array();
    }

    public function getRandom()
    {
        return $this->db->order_by('rand()')->limit(10)->get($this->_table)->result();
    }

    public function hitung_jumlah_inquiries()
    {
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function getById($id)
    {
        return $this->db->where('id_inquiry', $id)->get($this->_table)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_inquiry" => $id));
    }
}
