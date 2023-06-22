<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        } else {
            if ($this->session->userdata('role_id') != 1) {
                redirect('auth/blocked');
            }
        }
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['user'] = $this->Admin_model->getUserBySessionEmail();
        $data['total_users'] = $this->Admin_model->getCountUsers();
        $data['earnings'] = $this->Admin_model->getEarnings();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav_admin');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/js');
    }

    public function customerList()
    {
        $data['judul'] = 'Customer List';
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['user'] = $this->Admin_model->getUserBySessionEmail();
        $data['customers'] = $this->Admin_model->getAllCustomer();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav_admin');
        $this->load->view('admin/customerlist', $data);
        $this->load->view('templates/js');
    }

    public function bookingList()
    {
        $data['judul'] = 'Booking List';
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['user'] = $this->Admin_model->getUserBySessionEmail();
        $data['booking'] = $this->Booking_model->getAllUserBookings();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav_admin');
        $this->load->view('admin/bookinglist', $data);
        $this->load->view('templates/js');
    }

    public function booking_details($id)
    {
        $data['judul'] = 'Booking Details';
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['user'] = $this->Admin_model->getUserBySessionEmail();
        $data['booking'] = $this->Booking_model->getBookingsById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav_admin');
        $this->load->view('admin/booking_details', $data);
        $this->load->view('templates/js');
    }

    public function testimonialList()
    {
        $data['judul'] = 'Testimonial List';
        $data['rooms'] = $this->Rooms_model->getDisplayRoom();
        $data['user'] = $this->Admin_model->getUserBySessionEmail();
        $data['testimonials'] = $this->Admin_model->getAllTestimonials();
        $data['display_testimonials'] = $this->Admin_model->getAllDisplayTestimonials();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav_admin');
        $this->load->view('admin/testimonialList', $data);
        $this->load->view('templates/js');
    }

    public function addToDisplayTestimonial()
    {
        $data = [
            'id_testimonial' => $this->input->post('id_testimonial', true)
        ];

        $this->Admin_model->insertDisplayTestimonials($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Testimonials has been displayed!</div>');
        redirect('admin/testimoniallist');
    }

    public function deleteDisplayTestimonial()
    {
        $id = $this->input->post('id_display', true);

        $this->Admin_model->deleteDisplayTestimonials($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Testimonials display has been deleted!</div>');

        redirect('admin/testimoniallist');
    }
}
