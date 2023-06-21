<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rooms extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Rooms';
        $data['user'] = $this->User_model->getUserBySessionEmail();
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();

        $this->load->view('templates/header', $data);
        $this->load->view('rooms/index', $data);
        $this->load->view('templates/footer');
    }

    public function details($id, $folder)
    {
        $data['judul'] = 'Room Details';
        $data['user'] = $this->User_model->getUserBySessionEmail();
        $data['room'] = $this->Rooms_model->getRoomById($id);
        $data['folder'] = $folder;
        
        $this->load->view('templates/header', $data);
        $this->load->view('rooms/details', $data);
        $this->load->view('templates/footer');
    }
}
