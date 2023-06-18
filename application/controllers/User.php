<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function profile()
    {
        $data['judul'] = 'My Profile';
        $data['prefix'] = ['Dr.', 'Miss.', 'Mr.', 'Mrs.', 'Ms.', 'Pr.', 'Prof.', 'Rev.'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav');
        $this->load->view('user/profile', $data);
        $this->load->view('templates/js');
    }

    public function bookings()
    {
        $data['judul'] = 'My Bookings';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav');
        $this->load->view('user/bookings');
        $this->load->view('templates/js');
    }
}
