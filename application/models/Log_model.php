<?php defined('BASEPATH') or exit('No direct script access allowed');

class Log_model extends CI_Model
{
    private $_table = "tb_log";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function check($user, $str)
    {
        $this->db->where('log_user', $user);
        $this->db->where('log_desc', $str);
        return $this->db->get($this->_table)->num_rows();
    }

    public function update($user, $str, $param)
    {
        return $this->db->where('log_desc', $str)->where('log_user', $user)->update($this->_table, $param);
    }

    public function getMax()
    {
        $this->db->select('*');
        $this->db->order_by('log_hits', 'desc');
        $this->db->limit(1);
        return $this->db->where('log_desc', 'Mengunjungi Halaman Kalkulator')->where('MONTH(log_time)', date('m'))->where('YEAR(log_time)', date('Y'))->get($this->_table)->row_array();
    }

    public function getMaxBuyers()
    {
        $this->db->select('*');
        $this->db->order_by('log_hits', 'desc');
        $this->db->limit(1);
        return $this->db->where('log_desc', 'Mengunjungi Halaman Buyers')->where('MONTH(log_time)', date('m'))->where('YEAR(log_time)', date('Y'))->get($this->_table)->row_array();
    }

    public function getMaxInquiries()
    {
        $this->db->select('*');
        $this->db->order_by('log_hits', 'desc');
        $this->db->limit(1);
        return $this->db->where('log_desc', 'Mengunjungi Halaman Inquiry')->where('MONTH(log_time)', date('m'))->where('YEAR(log_time)', date('Y'))->get($this->_table)->row_array();
    }

    public function getById($user)
    {
        return $this->db->where('log_user', $user)->get($this->_table)->row_array();
    }

    public function getVisitor()
    {
        $this->db->group_by('visitor_date');
        $this->db->select('visitor_date');
        $this->db->select('visitor_month');
        $this->db->select('visitor_year');
        $this->db->select("count(*) as total");
        $this->db->where('visitor_year', date('Y'));
        $this->db->where('visitor_month', date('m'));

        return $this->db->get('tb_visitor')->result();
    }

    public function save_visit($param)
    {
        return $this->db->insert('tb_visitor', $param);
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
        return $this->db->where('log_desc', 'Mengunjungi Halaman Kalkulator')->where('MONTH(log_time)', date('m'))->where('YEAR(log_time)', date('Y'))->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_log($like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        $query = $this->db->where('log_desc', 'Mengunjungi Halaman Kalkulator')->where('MONTH(log_time)', date('m'))->where('YEAR(log_time)', date('Y'))->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function getSomeBuyers($limit, $start, $like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        return $this->db->where('log_desc', 'Mengunjungi Halaman Buyers')->where('MONTH(log_time)', date('m'))->where('YEAR(log_time)', date('Y'))->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_logBuyers($like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        $query = $this->db->where('log_desc', 'Mengunjungi Halaman Buyers')->where('MONTH(log_time)', date('m'))->where('YEAR(log_time)', date('Y'))->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function getSomeInquiry($limit, $start, $like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        return $this->db->where('log_desc', 'Mengunjungi Halaman Inquiry')->where('MONTH(log_time)', date('m'))->where('YEAR(log_time)', date('Y'))->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_logInquiry($like = '')
    {
        if ($like) {
            $this->db->where($like);
        }
        $query = $this->db->where('log_desc', 'Mengunjungi Halaman Inquiry')->where('MONTH(log_time)', date('m'))->where('YEAR(log_time)', date('Y'))->get($this->_table);
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

    public function newer_log()
    {
        return $this->db->order_by('log_time', 'DESC')->limit(15)->get($this->_table)->result_array();
    }
}
