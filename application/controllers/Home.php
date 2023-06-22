<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['user'] = $this->User_model->getUserBySessionEmail();
        $data['rooms'] = $this->Home_model->getDisplayRoom();
        $data['testimonials'] = $this->Admin_model->getAllDisplayTestimonials();

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

}
