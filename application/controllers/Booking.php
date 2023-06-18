<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Booking';
        $this->load->view('templates/header', $data);
        $this->load->view('booking/index');
        $this->load->view('templates/footer');
    }
    
    public function Details()
    {
        $data['judul'] = 'Booking Details';
        $this->load->view('templates/header', $data);
        $this->load->view('booking/details', $data);
        $this->load->view('templates/footer');
    }


}
