<?php defined('BASEPATH') or exit('No direct script access allowed');

class Komentar_model extends CI_Model
{
    private $_table = "tb_komentar";

    public function getSome($limit, $start, $like = '')
    {
        $this->db->select('a.id_komentar, a.id_user, a.id_post, a.komentar, a.tanggal, a.jam, b.id_user, b.nama, b.email, c.id_post, c.postingan');
        if ($like) {
            $this->db->where('a.komentar LIKE ' . $like);
        }
        $this->db->from('tb_komentar a');
        $this->db->join('tb_user b', 'a.id_user = b.id_user');
        $this->db->join('tb_tanggapan c', 'a.id_post = c.id_post');
        $this->db->group_by('a.id_komentar');
        return $this->db->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_komentars($like = '')
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

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_komentar" => $id));
    }
}
