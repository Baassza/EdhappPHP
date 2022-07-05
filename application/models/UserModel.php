<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserModel extends CI_Model
{
    public function get_user($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->row_array();
    }
    public function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row_array();
    }
    public function set_user()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'role' => 'user'
        );
        if ($this->input->post('firstname') != '') {
            $data['name'] = $this->input->post('firstname') . " " . $this->input->post('lastname');
        } else {
            $data['name'] = $this->input->post('name');
        }
        $this->db->insert('users', $data);
    }
}
