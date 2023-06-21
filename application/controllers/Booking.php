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
        $data['count_days'] = ceil(($co - $ci) / 86400);

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
        $data['ci_s'] = $ci;
        $data['co_s'] = $co;
        $data['ci'] = date('D, d M, Y', $ci);
        $data['co'] = date('D, d M, Y', $co);
        $data['count_days'] = ceil(($co - $ci) / 86400);

        $data['user'] = $this->User_model->getUserBySessionEmail();
        $data['room'] = $this->Rooms_model->getRoomById($id_jenis_kamar);
        $data['harga_kamar'] = ($data['room']['harga_kamar'] * $data['count_days']);
        $data['service_charge'] = ceil($data['harga_kamar'] * 0.05);
        $data['tax'] = ceil(($data['harga_kamar'] + $data['service_charge']) * 0.1);
        $data['total_harga'] = $data['harga_kamar'] + $data['service_charge'] + $data['tax'];

        $this->load->view('templates/header', $data);
        $this->load->view('booking/details', $data);
        $this->load->view('templates/footer');
    }

    public function bookingRoom()
    {
        $data = [
            'id_customer' => htmlspecialchars($this->input->post('id_customer', true)),
            'id_kamar' => htmlspecialchars($this->input->post('id_kamar', true)),
            'id_pembayaran' => 1,
            'check_in' => htmlspecialchars($this->input->post('check_in', true)),
            'check_out' => htmlspecialchars($this->input->post('check_out', true)),
            'harga_kamar' => htmlspecialchars($this->input->post('harga_kamar', true)),
            'pajak' => htmlspecialchars($this->input->post('pajak', true)),
            'service' => htmlspecialchars($this->input->post('service', true)),
            'total_harga' => htmlspecialchars($this->input->post('total_harga', true)),
            'jumlah_malam' => htmlspecialchars($this->input->post('jumlah_malam', true))
        ];

        $this->Booking_model->insertDataBooking($data);

        redirect('user/bookings');
    }
}
