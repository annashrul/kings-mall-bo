<?php


class Dealform extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('my_helper');
		if(authorization()==false)exitApp();
		$this->control = 'dealform';
	}

	public function index(){
		$view = 'index';
		if(authorization()==true){
			$data['token'] = uniq();
			$data['page'] = 'dealform';
			$data['content'] = $this->control.'/'.$view;
			$this->load->view('layout/index',$data);
		}
		else{
			exitApp();
		}
	}
}
