<?php
class Model_functions extends CI_Model {

	public function get_results($sql){
		$res = $this->db->query($sql);
		if ($res->num_rows() > 0)
		{
			return $res->result_array();
		}
		else
		{
			return false;
		}
	}
	public function get_row($sql){
		$res = $this->db->query($sql);
		if ($res->num_rows() > 0)
		{
			$resp = $res->result_array();
			return $resp[0];
		}
		else
		{
			return false;
		}
	}
	
	public function login($username, $password, $check = FALSE)
	{
		$username = $this->db->escape(strtolower($username));
		if(!$check){$password = md5($this->db->escape($password));}
		return $this->db->get_row("SELECT * FROM `user` WHERE `username` = \"$username\" AND `password` = \"$password\";");
	}
	public function setting($id)
	{
		return $this->get_row("SELECT * FROM `setting` WHERE `setting_id` = '$id';");
	}

	public function pages()
	{
		return $this->get_results("SELECT * FROM `page` ORDER BY `title` ASC;");
	}
	public function get_page_byid($id)
	{
		return $this->get_row("SELECT * FROM `page` WHERE `page_id` = '$id';");
	}
	public function our_mission()
	{
		return $this->get_row("SELECT * FROM `page` WHERE `page_id` = 15;");
	}
	/*Blog*/
	public function blog($limit = 0)
	{
		if ($limit != 0) {
			return $this->get_results("SELECT `title`,`slug`,`short`,`image`,`at` FROM `blog` ORDER BY `at` DESC LIMIT $limit;");
		}
		else{
			return $this->get_results("SELECT `title`,`slug`,`short`,`image`,`at` FROM `blog` ORDER BY `at` DESC;");
		}
	}
	public function get_blog_post($slug)
	{
		return $this->get_row("SELECT * FROM `blog` WHERE `slug` = '$slug';");
	}
	/*Team*/
	public function team()
	{
		return $this->get_results("SELECT * FROM `team` ORDER BY `order` ASC;");
	}
	/*Testimonial*/
	public function testimonials()
	{
		return $this->get_results("SELECT * FROM `testimonial` ORDER BY `name` ASC;");
	}
	/*FAQs*/
	public function faqs()
	{
		return $this->get_results("SELECT * FROM `faq` ORDER BY `faq_id` ASC;");
	}
}