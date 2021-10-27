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
}
