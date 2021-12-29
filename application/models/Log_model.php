<?php defined('BASEPATH') or exit('No direct script access allowed');

class Log_model extends CI_Model
{
    private $_table = "tb_log";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save_log($param)
    {
        $sql = $this->db->insert_string($this->_table, $param);
        $ex = $this->db->query($sql);

        return $this->db->affected_rows($sql);
    }

    public function getSome($limit, $start, $like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        return $this->db->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_log($like = '')
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

    public function clear_log()
    {
        return $this->db->truncate($this->_table);
    }
}
