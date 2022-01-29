<?php defined('BASEPATH') or exit('No direct script access allowed');

class Forum_model extends CI_Model
{
    private $_table = "tb_pertanyaan";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByKategori($id)
    {
        return $this->db->where('id_kategori', $id)->get('tb_tanggapan')->result();
    }

    public function getById($id)
    {
        return $this->db->where('id_kategori', $id)->get($this->_table)->result();
    }

    public function getKategori()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getKategoriTerbaru()
    {
        return $this->db->order_by('id_kategori', 'DESC')->get($this->_table)->result();
    }

    public function getKategoriTerpopuler()
    {
        return $this->db->order_by('tanggapan', 'DESC')->get($this->_table)->result();
    }

    public function getRandom()
    {
        return $this->db->order_by('rand()')->limit(10)->get($this->_table)->result();
    }

    public function delete_post($id)
    {
        $all_komen = $this->db->get_where('tb_komentar', ['id_post' => $id])->result_array();

        foreach ($all_komen as $komen) {
            $this->delete_komen($komen['id_komentar']);
        }

        $this->db->delete('tb_tanggapan', ['id_post' => $id]);
        return $this->db->get('tb_tanggapan')->result();
    }

    public function create($data)
    {
        $this->db->insert($this->_table, $data);
        return $this->db->get($this->_table)->result();
    }

    public function create_post($data)
    {
        $this->db->insert('tb_tanggapan', $data);
        return $this->db->get('tb_tanggapan')->result();
    }

    public function create_komen($data)
    {
        $this->db->insert('tb_komentar', $data);
        return $this->db->get('tb_komentar')->result();
    }

    public function delete_komen($id)
    {
        $this->db->delete('tb_komentar', ['id_komentar' => $id]);
        return $this->db->get('tb_komentar')->result();
    }
}
