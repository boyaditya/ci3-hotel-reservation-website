<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function getDisplayRoom()
    {
        $this->db->select('*');
        $this->db->from('t_jenis_kamar');
        $this->db->join('t_jenis_ranjang', 't_jenis_kamar.jenis_ranjang = t_jenis_ranjang.id_jenis_ranjang');
        return $this->db->get('')->result_array();
    }
}
