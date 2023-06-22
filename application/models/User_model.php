<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getUserBySessionEmail()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function uploadUserImage()
    {
        $new_image = $this->upload->data('file_name');
        $this->db->set('image', $new_image);
    }

    public function editUserProfile($name, $phone, $title, $email)
    {
        $this->db->set('name', $name);
        $this->db->set('phone', $phone);
        $this->db->set('title', $title);
        $this->db->where('email', $email);
        $this->db->update('user');
    }

    public function changeUserPassword($password_hash)
    {
        $this->db->set('password', $password_hash);
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('user');
    }

    public function insertTestimonial($data)
    {
        $this->db->insert('t_testimonial', $data);
    }
}
