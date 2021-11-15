<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "tb_user";

    public $id_user;
    public $nama;
    public $email;
    public $foto_user;
    public $password;
    public $view_password;
    public $role_id;
    public $is_active;
    public $date_created;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function delete($id)
    {
        $row = $this->db->where('id_user', $id)->get('tb_user')->row_array();
        $old_image = $row['foto_user'];
        if ($old_image != 'default.png') {
            unlink('./assets/img/userimage/' . $old_image);
            $this->db->where('id_user', $id);
            $this->db->delete($this->_table);
            return true;
        } else {
            return $this->db->delete($this->_table, array("id_user" => $id));
        }
    }

    public function update($id, $data)
    {
        return $this->db->where('id_user', $id)->update($this->_table, $data);
    }

    public function getSome($limit, $start)
    {
        return $this->db->where('role_id', 2)->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_user()
    {
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitung_jumlah_free()
    {
        $query = $this->db->where('is_member', 0)->where('role_id', 2)->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitung_jumlah_premium()
    {
        $query = $this->db->where('is_member', 1)->where('role_id', 2)->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitung_jumlah_user_premium()
    {
        return $this->db->where('role_id', 3)->get($this->_table)->num_rows();
    }
    public function hitung_jumlah_user_gratis()
    {
        return $this->db->where('role_id', 2)->get($this->_table)->num_rows();
    }
}
