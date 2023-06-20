<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function insertDataBooking($data)
    {
        $this->db->insert('t_booking', $data);
    }
}
