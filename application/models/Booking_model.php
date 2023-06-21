<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{
    public function insertDataBooking($data)
    {
        $this->db->insert('t_booking', $data);
    }

    public function getAllBookings()
    {
        $this->db->join('t_jenis_kamar', 't_booking.id_kamar = t_jenis_kamar.id_jenis_kamar');
        $this->db->order_by('id_booking', 'DESC');
        return $this->db->get_where('t_booking', ['id_customer' => $this->session->userdata('id')])->result_array();
    }

    public function getBookingsById($id)
    {
        $this->db->select('*');
        $this->db->from('t_booking');
        $this->db->join('t_jenis_kamar', 't_booking.id_kamar = t_jenis_kamar.id_jenis_kamar');
        $this->db->join('user', 'user.id = t_booking.id_customer');
        return $this->db->get_where('', ['id_booking' => $id])->row_array();
    }
}
