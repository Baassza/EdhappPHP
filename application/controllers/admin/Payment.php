<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{

	public function index()
	{
		$this->load->view('/admin/payment');
	}
}