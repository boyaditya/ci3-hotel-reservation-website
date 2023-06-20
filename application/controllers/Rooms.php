<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rooms extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Rooms';
        $this->load->view('templates/header', $data);
        $this->load->view('rooms/index');
        $this->load->view('templates/footer');
    }

    public function details()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Room Details';
        $this->load->view('templates/header', $data);
        $this->load->view('rooms/details');
        $this->load->view('templates/footer');
    }
}
