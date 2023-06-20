<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index($ci, $co)
    {
        $data['judul'] = 'Booking';
        $data['user'] = $this->User_model->getUserBySessionEmail();
        $data['ci'] = $ci;
        $data['co'] = $co;
        $data['rooms'] = $this->Home_model->getDisplayRoom();

        $this->load->view('templates/header', $data);
        $this->load->view('booking/index', $data);
        $this->load->view('templates/footer');
    }

    public function checkAvailability()
    {
        $ci = $this->input->post('ci', true);
        $co = $this->input->post('co', true);

        redirect('booking/index/' . strtotime($ci) . '/' . strtotime($co));
    }

    public function details($id_jenis_kamar, $ci, $co)
    {
        $data['judul'] = 'Booking Details';
        $data['title'] = ['Dr.', 'Mr.', 'Mrs.', 'Ms.'];
        $data['user'] = $this->User_model->getUserBySessionEmail();
        $data['id_jenis_kamar'] = $id_jenis_kamar;
        $data['ci_s'] = $ci;
        $data['co_s'] = $co;
        $data['ci'] = date('D, d M, Y', $ci);
        $data['co'] = date('D, d M, Y', $co);
        $data['count_days'] = ceil(($co - $ci) / 86400);

        $this->load->view('templates/header', $data);
        $this->load->view('booking/details', $data);
        $this->load->view('templates/footer');
    }

    public function bookingRoom()
    {
        $data = [
            'id_customer' => $this->input->post('id', true),
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'phone' => htmlspecialchars($this->input->post('phone', true)),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
        ];
    }
}
