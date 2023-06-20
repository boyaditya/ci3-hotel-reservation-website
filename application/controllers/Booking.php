<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Booking';
        $this->load->view('templates/header', $data);
        $this->load->view('booking/index');
        $this->load->view('templates/footer');
    }
    
    public function details()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Booking Details';
        $this->load->view('templates/header', $data);
        $this->load->view('booking/details', $data);
        $this->load->view('templates/footer');
    }


}
