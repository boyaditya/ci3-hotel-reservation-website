<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rooms_model extends CI_Model
{
    public function getRoomById($id_jenis_kamar)
    {
        $this->db->select('*');
        $this->db->from('t_jenis_kamar');
        $this->db->join('t_jenis_ranjang', 't_jenis_kamar.jenis_ranjang = t_jenis_ranjang.id_jenis_ranjang');
        $this->db->where('id_jenis_kamar', $id_jenis_kamar);
        return $this->db->get('')->row_array();
    }

    public function getDisplayRoom()
    {
        $this->db->select('*');
        $this->db->from('t_jenis_kamar');
        $this->db->join('t_jenis_ranjang', 't_jenis_kamar.jenis_ranjang = t_jenis_ranjang.id_jenis_ranjang');
        return $this->db->get('')->result_array();
    }
}
