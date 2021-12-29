<?php defined('BASEPATH') or exit('No direct script access allowed');

class Buyers_model extends CI_Model
{
    private $_table = "tb_importir";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getRandom()
    {
        return $this->db->order_by('rand()')->limit(50)->get($this->_table)->result();
    }

    public function import($data)
    {
        $import = $this->db->insert_batch($this->_table, $data);
        if ($import) {
            return true;
        }
    }

    public function getById($id)
    {
        return $this->db->where('id_importir', $id)->get($this->_table)->result();
    }

    public function getSome($limit, $start, $like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        return $this->db->order_by('id_importir', 'DESC')->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_buyers($like = '')
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

    public function create($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_importir" => $id));
    }
}
