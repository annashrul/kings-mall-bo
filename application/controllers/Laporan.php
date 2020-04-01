<?php


class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('my_helper');
		if(authorization()==false)exitApp();
		$this->control = 'laporan';
	}

	public function index(){
		if(authorization()==true){
			$q=base64_decode($_GET['q']);
			$data['token'] = uniq();
			$data['page'] = $q;
			$data['content'] = $this->control.'/'.$q;
			$this->load->view('layout/index',$data);
		}
		else{
			exitApp();
		}
	}
}
