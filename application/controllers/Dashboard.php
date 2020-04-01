<?php 

class Dashboard extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('my_helper');
		$this->control = 'dashboard';
		if(authorization()==false)exitApp();
	}
	public function index(){
		if(authorization()==true){
			$data['token'] = uniq();
			$data['page'] = $this->control;
			$data['content'] = $this->control.'/index';
			$this->load->view('layout/index',$data);
		}
		else{
			exitApp();
		}

    }



}
