<?php


class Cicilan extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('my_helper');
		if(authorization()==false)exitApp();
		$this->control = 'cicilan';
	}

	public function index(){
		if(authorization()==true){
			$q=base64_decode($_GET['q']);
			$data['token'] = uniq();
			$data['page'] = $q;
			$data['content'] = $this->control.'/'.substr($q,8,strlen($q));
			$this->load->view('layout/index',$data);
		}
		else{
			exitApp();
		}
	}

}
