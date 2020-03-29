<?php


class Dealform extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('my_helper');
		if($this->session->userdata('logged_in') == false){
			redirect("auth");
		}
	}

	public function index(){
		$view = 'index';
		if(password_verify(mySession("username").mySession("id"),$_GET['session'])){
			$data['token'] = password_hash(mySession("username").mySession("id"),PASSWORD_DEFAULT);
			$data['page'] = $view;
			$data['content'] = 'dealform/'.$view;
			$this->load->view('layout/index',$data);
		}
		else{
			$this->session->unset_userdata();
			redirect("auth");
		}
	}
}