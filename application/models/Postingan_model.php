<?php defined('BASEPATH') or exit('No direct script access allowed');
class Postingan_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('a.id_post, a.id_user, a.id_kategori, a.postingan, a.like, a.dislike, a.tanggal, a.jam,
                            b.id_user, b.nama, b.email, c.id_kategori, c.nama_kategori');
        $this->db->from('tb_post a');
        $this->db->join('tb_user b', 'a.id_user = b.id_user');
        $this->db->join('tb_kategori c', 'a.id_kategori = c.id_kategori');
        $this->db->group_by('a.id_post');
        return $this->db->get()->result_array();
    }

    public function delete($id)
    {
        return $this->db->delete('tb_post', array("id_post" => $id));
    }
}
