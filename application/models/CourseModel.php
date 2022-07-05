<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CourseModel extends CI_Model
{
    // get all courses
    public function get_courses()
    {
        $query = $this->db->get('course');
        return $query->result_array();
    }

    public function get_courses_count()
    {
        $query = $this->db->get('course');
        return $query->num_rows();
    }

    public function get_courses_pagination($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('course');
        return $query->result_array();
    }
}