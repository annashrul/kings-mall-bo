<?php

class Auth extends CI_Controller{
    public function index(){
        $this->load->view("auth/auth");
    }




	public function sendRequest(){
		$response = array();
		$input = $this->input->post();
		if($input['email'] == 'admin@gmail.com' && $input['pass'] == '123456789'){
			$session = array(
				'id' 		=> '12345678',
				'username'  => $input['email'],
				'email'     => $input['email'],
				'logged_in' => TRUE,
				'logged' 	=> TRUE,
			);
			$this->session->set_userdata($session);
			$response = array(
				"status"=>"success",
				"pesan"=>"Login Berhasil",
				"class"=>"success",
				"redirect"=>base_url("dashboard?session=".password_hash($this->session->userdata("username").$this->session->userdata("id"),PASSWORD_DEFAULT))
			);
		}else{
			$response = array(
				"status"=>"error",
				"pesan"=>"maaf kombinasi yang anda masukan salah",
				"class"=>"error",
				"redirect"=>base_url("Sign")
			);
		}

		echo json_encode($response);
	}
	public function logout(){
		$this->session->unset_userdata();
		redirect("auth");
	}
}
