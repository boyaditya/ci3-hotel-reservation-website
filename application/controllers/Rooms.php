<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rooms extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Rooms';
        $data['user'] = $this->User_model->getUserBySessionEmail();

        $this->load->view('templates/header', $data);
        $this->load->view('rooms/index');
        $this->load->view('templates/footer');
    }

    public function details()
    {
        $data['judul'] = 'Room Details';
        $data['user'] = $this->User_model->getUserBySessionEmail();
        
        $this->load->view('templates/header', $data);
        $this->load->view('rooms/details');
        $this->load->view('templates/footer');
    }
}
