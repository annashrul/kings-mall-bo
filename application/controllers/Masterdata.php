<?php class Masterdata extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('my_helper');
		if(authorization()==false)exitApp();
		$this->control = 'masterdata';
	}

	public function index(){
		if(authorization()==true){
			$side_menu=array('0','unit','tipe','lantai','bank','tenant','pengguna','level_pengguna');
			$data['token'] = uniq();
			$data['page'] = base64_decode($_GET['q']);
			$data['control'] = $this->control;
			$data['content'] = $this->control.'/'.base64_decode($_GET['q']);
			if(array_search($data['page'],$side_menu) != false){
				$this->load->view('layout/index',$data);
			}else{
				exitApp();
			}
		}
		else{
			exitApp();
		}
	}

	public function unit($action=null){
		if(authorization()==true){
			if($action == 'simpan'){
				echo json("success","data berhasil disimpan",'');
			}else{
				echo json("failed","data gagal disimpan",'');
			}
		}else{
			echo json("failed","parameter tidak sesuai",'');
		}
	}

	public function tipe($action=null){
		if(authorization()==true){
			if($action == 'simpan'){
				$input=$this->input->post();
				$form=array("namaTipe"=>$input['namaTipe']);
				if($input!=null){
					echo json("success","data berhasil disimpan",$form);
				}else{
					echo json("failed","data gagal disimpan",$form);
				}
			}
		}else{
			echo json("failed","parameter tidak sesuai",'');
		}
	}


	public function level_pengguna($action=null){
		if(authorization()==true){
			if($action == 'simpan'){
				$super = null; $access = null;
				for($i=0;$i<=$_POST['jumlah'];$i++){
					$post = $this->input->post($i);
					if(empty($post)){ $access .= '0'; }
					else{ $access .= $post; }
					$super .= '1';
				}
				echo json("success","data berhasil disimpan",$access);
			}else{
				echo json("failed","data gagal disimpan","");
			}
		}else{
			echo json("failed","parameter tidak sesuai",'');
		}

	}
}
