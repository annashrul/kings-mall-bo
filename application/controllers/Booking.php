<?php class Booking extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('my_helper');
		if(authorization()==false)exitApp();
		$this->control = 'booking';
	}

	public function index($action = null){
		if(authorization()==true){
			$q=base64_decode($_GET['q']);
			$data['token'] = uniq();
			$data['page'] = $q;
			$data['control'] = $this->control;
			$data['content'] = $this->control.'/'.$q;
			$this->load->view('layout/index',$data);
		}else{
			exitApp();
		}
	}
}
