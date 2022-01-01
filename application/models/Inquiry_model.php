<?php defined('BASEPATH') or exit('No direct script access allowed');

class Inquiry_model extends CI_Model
{
    private $_table = "tb_inquiry";

    public function getAll()
    {
        return $this->db->order_by('id_inquiry', 'DESC')->get($this->_table)->result();
    }

    public function import($data)
    {
        $import = $this->db->insert_batch($this->_table, $data);
        if ($import) {
            return true;
        }
    }

    public function getSome($limit, $start, $like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        return $this->db->order_by('id_inquiry', 'DESC')->get($this->_table, $limit, $start)->result_array();
    }

    public function getRandom()
    {
        return $this->db->order_by('rand()')->limit(10)->get($this->_table)->result();
    }

    public function hitung_jumlah_inquiries($like = '')
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

    public function get_inquiry_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->like('produk', $keyword);
        $this->db->or_like('negara', $keyword);
        return $this->db->get()->result();
    }

    public function getById($id)
    {
        return $this->db->where('id_inquiry', $id)->get($this->_table)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_inquiry" => $id));
    }

    public function jumlah_penambahan()
    {
        $bulan = date('m');
        $tahun = date('Y');
        $this->db->where('month(tanggal_input)', $bulan);
        $this->db->where('year(tanggal_input)', $tahun);
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
