<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$data['title']="Login";
		$this->load->view('admin/login_page',$data);
	}

	public function auth(){
		$this->form_validation->set_rules('email', 'Username', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<p class="help-block">', '</p>');
		if ($this->form_validation->run() == FALSE) {
			// $formdata['action'] = base_url() . 'Login/';
			// $formdata['data'] = $_POST;
			$message = array('message' => 'Please enter valid username and password', 'class' => 'alert alert-danger');
			$this->session->set_flashdata('item', $message);
			// $this->load->view('login_page', $formdata);
			redirect(base_url()."login/");
		}else{
			$data = $this->login_model->CheckLogin($_POST);
			if ($data) {
				$newdata = array(
					'user_id'  => $data[0]->id,
					'name'  => $data[0]->name, 
					'username' => $data[0]->username,
					'profile_image'=> $data[0]->profile_image,
				);
				$kk = $this->session->set_userdata($newdata);
				$message = array('message' => 'Welcome to dashboard '.$data[0]->name, 'class' => 'alert alert-success');
				$this->session->set_flashdata('item', $message);
				redirect(base_url()."login/dashboard");
			}else{
				$message = array('message' => 'Please enter valid username and password', 'class' => 'alert alert-danger');
				$this->session->set_flashdata('item', $message);
				// $this->load->view('login_page');
				redirect(base_url()."login/");	
			}
		}
				
	}

	function logout()
	{
		$userlog = $this->session->userdata();

			$array_unset = array(
				'user_id' => '', 'name' => '', 'username' => '', 'profile_image' => ''	);
			$this->session->set_userdata($array_unset);
			$this->session->sess_destroy();
			// $get_message = $this->System_messages_model->get_system_message('Logout_success');
			// $message = array('message' => $get_message->message, 'class' => 'alert alert-success');
			// $this->session->set_flashdata('item', $message);
			
			redirect(base_url()."login/");
	}

	public function dashboard(){
		$userdata = $this->session->userdata;
		if ($this->session->userdata('user_id') == '') {
			redirect('Login/logout');
		}
		if ($this->session->userdata('user_id') != '') {
			$data['active_tab'] = 'Dashboard';
			$data['title'] = 'Dashboard';
			$this->load->view('admin/dashboard_page',$data);
		}

	}

}
