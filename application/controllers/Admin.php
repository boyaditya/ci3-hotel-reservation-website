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

        $data['user'] = $this->Admin_model->getUserBySessionEmail();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav_admin');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/js');
    }

    public function customerList()
    {
        $data['judul'] = 'Customer List';

        $data['user'] = $this->Admin_model->getUserBySessionEmail();
        $data['customers'] = $this->Admin_model->getAllCustomer();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav_admin');
        $this->load->view('admin/customerlist', $data);
        $this->load->view('templates/js');
    }

    public function invoiceList()
    {
        $data['judul'] = 'Invoice List';

        $data['user'] = $this->Admin_model->getUserBySessionEmail();
        $data['customers'] = $this->Admin_model->getAllCustomer();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav_admin');
        $this->load->view('admin/invoicelist', $data);
        $this->load->view('templates/js');
    }
}
