<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('user')) {
			redirect('/');
		}
		$this->load->view('register');
	}
	public function setuser()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('re-password', 'Re-Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$this->UserModel->set_user();
			$this->load->view('login');
		}
	}
}
