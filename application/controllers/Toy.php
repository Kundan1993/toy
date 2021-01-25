<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toy extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['title']="Home";
		$this->load->view('welcome_message',$data);
	}

	public function admin_toy(){
		$data['title']="Add Toy";
		$this->load->view('admin/add_toy_page',$data);
	}
}
