<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('email')) {
            redirect('auth');
        } else {
            if ($this->session->userdata('role_id') != 2) {
                redirect('auth/blocked');
            }
        }
    }

    public function index()
    {
        $data['judul'] = 'My Profile';
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['user'] = $this->User_model->getUserBySessionEmail();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav');
        $this->load->view('user/index', $data);
        $this->load->view('templates/js');
    }

    public function edit()
    {
        $data['judul'] = 'Edit Profile';
        $data['title'] = ['Dr.', 'Mr.', 'Mrs.', 'Ms.'];
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['user'] = $this->User_model->getUserBySessionEmail();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidenav');
            $this->load->view('user/edit', $data);
            $this->load->view('templates/js');
        } else {
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $title = $this->input->post('title');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $this->User_model->uploadUserImage();
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('user');
                }
            }

            $this->User_model->editUserProfile($name, $phone, $title, $email);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['judul'] = 'Change Password';
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['user'] = $this->User_model->getUserBySessionEmail();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidenav');
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/js');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->User_model->changeUserPassword($password_hash);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }


    public function bookings()
    {
        $data['judul'] = 'My Bookings';
        $data['user'] = $this->User_model->getUserBySessionEmail();
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['bookings'] = $this->Booking_model->getAllBookings();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav');
        $this->load->view('user/bookings', $data);
        $this->load->view('templates/js');
    }

    public function booking_details($id)
    {
        $data['judul'] = 'Booking Details';
        $data['user'] = $this->User_model->getUserBySessionEmail();
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['booking'] = $this->Booking_model->getBookingsById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav');
        $this->load->view('user/booking_details', $data);
        $this->load->view('templates/js');
    }

    public function testimonial($id_jenis_kamar)
    {
        $data['judul'] = 'Testimonial';
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['user'] = $this->User_model->getUserBySessionEmail();
        $data['room'] = $this->Rooms_model->getRoomById($id_jenis_kamar);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav');
        $this->load->view('user/testimonial', $data);
        $this->load->view('templates/js');
    }

    public function addtestimonial($id_jenis_kamar)
    {
        $data = [
            'id_customer' => $this->input->post('id', true),
            'testimonial' => htmlspecialchars($this->input->post('testimonial', true))
        ];

        $this->User_model->insertTestimonial($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your testimonials has been sent, thank you!</div>');
        redirect('user/testimonial/' . $id_jenis_kamar);
    }
}
