<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('user')) {
			redirect('/');
		}
		$this->load->view('login');
	}

	public function auth()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$remember = $this->input->post('remember');
		$user = $this->UserModel->get_user($email);
		if ($user) {
			if (password_verify($password, $user['password'])) {
				if ($remember) {
					$this->session->set_userdata('user', $user);
				}else{
					$this->session->set_flashdata('temp_user', $user);
				}
				redirect('/');
			} else {
				$this->session->set_flashdata('error', 'Password is incorrect.');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('error', 'Email not found.');
			redirect('login');
		}
	}
	
	public function gmail_login()
	{
		$email = $this->input->post('email');
		$user = $this->UserModel->get_user($email);
		if ($user) {
			$this->session->set_userdata('user', $user);
		} else {
			$this->UserModel->set_user();
			$user = $this->UserModel->get_user($email);
			$this->session->set_userdata('user', $user);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/login');
	}
}
