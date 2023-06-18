<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Register';
        $data['prefix'] = ['Dr.', 'Miss.', 'Mr.', 'Mrs.', 'Ms.', 'Pr.', 'Prof.', 'Rev.'];
        $this->load->view('templates/header', $data);
        $this->load->view('register/index', $data);
        $this->load->view('templates/js');
    }
}
