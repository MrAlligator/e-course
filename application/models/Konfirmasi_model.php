<?php defined('BASEPATH') or exit('No direct script access allowed');
class Konfirmasi_model extends CI_Model
{
    private $_table = "tb_pembayaran";

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function getNonConfirm()
    {
        return $this->db->where('konfirmasi', 0)->get($this->_table)->result_array();
    }

    public function hitung_jumlah_belum_konfirmasi()
    {
        $query = $this->db->where('konfirmasi', 0)->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitung_jumlah_sudah_konfirmasi()
    {
        $query = $this->db->where('konfirmasi', 1)->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function delete($id)
    {
        $row = $this->db->where('id_pembayaran', $id)->get('tb_pembayaran')->row_array();
        $old_image = $row['buktitf'];
        unlink('./assets/img/buktitransfer/' . $old_image);
        $this->db->where('id_pembayaran', $id);
        $this->db->delete($this->_table);
        return true;
    }
}
