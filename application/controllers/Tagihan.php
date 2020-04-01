<?php


class Tagihan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('my_helper');
		if(authorization()==false)exitApp();
		$this->control = 'tagihan';
	}

	public function index(){
		if(authorization()==true){
			$data['token'] = uniq();
			$data['page'] = $this->control;
			$data['content'] = $this->control.'/'.base64_decode($_GET['q']);
			$this->load->view('layout/index',$data);
		}
		else{
			exitApp();
		}
	}
}
