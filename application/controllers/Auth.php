<?php

class Auth extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('my_helper');
		$this->load->library('form_validation');
	}
    public function index(){
		$input = $this->input->post();
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Passwrod','required');
		if($this->form_validation->run() != false){
			if($input['email'] == 'admin@gmail.com' && $input['password'] == '123456789'){
				$session = array(
					'idr' 		=> rand(5, 15),
					'id' 		=> '12345678',
					'username'  => $input['email'],
					'email'     => $input['email'],
					'logged_in' => TRUE,
					'logged' 	=> TRUE,
				);
				$this->session->set_userdata($session);
				redirect("dashboard?session=".password_hash($this->session->userdata("idr").$this->session->userdata("id"),PASSWORD_BCRYPT), 'refresh');
//				redirect("dashboard?session=".bin2hex(bin2hex($this->session->userdata("username").$this->session->userdata("id"))), 'refresh');
			}else{
				echo '<script>alert("email atau password salah");window.location="'.base_url("auth").'"</script>';
			}
		}else{
			$this->load->view("auth/auth");
		}

    }
	public function sendRequest(){
		$input = $this->input->post();
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Passwrod','required');
		if($this->form_validation->run() != false){
			if($input['email'] == 'admin@gmail.com' && $input['pass'] == '123456789'){
				$session = array(
					'id' 		=> '12345678',
					'username'  => $input['email'],
					'email'     => $input['email'],
					'logged_in' => TRUE,
					'logged' 	=> TRUE,
				);
				$this->session->set_userdata($session);
				redirect("dashboard?session=".password_hash($this->session->userdata("username").$this->session->userdata("id"),PASSWORD_DEFAULT), 'refresh');
			}else{
				echo '<script>alert("email atau password salah");window.location="'.base_url("auth").'"</script>';
			}
		}else{
			redirect();
		}
//		if($input['email'] == 'admin@gmail.com' && $input['pass'] == '123456789'){
//			$session = array(
//				'id' 		=> '12345678',
//				'username'  => $input['email'],
//				'email'     => $input['email'],
//				'logged_in' => TRUE,
//				'logged' 	=> TRUE,
//			);
//			$this->session->set_userdata($session);
//			redirect("dashboard?session=".password_hash($this->session->userdata("username").$this->session->userdata("id"),PASSWORD_DEFAULT), 'refresh');
//		}
//		else{
//			$response = array(
//				"status"=>"error",
//				"pesan"=>"maaf kombinasi yang anda masukan salah",
//				"class"=>"error",
//				"redirect"=>base_url("Sign")
//			);
//		}
//
//		echo json_encode($response);
	}
	public function logout(){
		exitApp();
	}
}
