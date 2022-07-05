<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{

	public function index()
	{
		$this->load->view('/admin/course');
	}
	public function get_course()
	{
		$data = $this->CourseModel->get_courses();
		echo json_encode($data);
	}
}

