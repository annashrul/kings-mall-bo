<?php


class Masterdata extends CI_Controller
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

	public function unit($action=null){
		$view = 'unit';
		if(password_verify(mySession("username").mySession("id"),$_GET['session'])){
			$data['token'] = password_hash(mySession("username").mySession("id"),PASSWORD_DEFAULT);
			$data['page'] = $view;
			$data['content'] = 'masterdata/'.$view;
			if($action == 'ambil'){
				echo json_encode(array("result"=>$this->session->all_userdata(),"msg"=>"data berhasil diambil","status"=>"success"));
			}
			elseif($action == 'simpan'){
				$input=$this->input->post();
				$form=array(
					"kode"=>$input['kode'],
					"nama"=>$input['nama'],
					"tipe"=>$input['tipe'],
					"lantai"=>$input['lantai'],
					"luas"=>$input['luas'],
					"harga"=>$input['harga'],
					"daya"=>$input['daya'],
					"jenis"=>$input['jenis'],
					"factor"=>$input['factor'],
				);
				$session = array(
					"unit" => $form
				);
				$this->session->set_userdata($session);
				if($input!=null){
					echo json_encode(array("status"=>"success","msg"=>"data berhasil disimpan","result"=>$form));
				}else{
					echo json_encode(array("status"=>"failed","msg"=>"data gagal disimpan","result"=>$form));
				}
			}
			else{
				$this->load->view('layout/index',$data);
			}

		}
		else{
			$this->session->unset_userdata();
			redirect("auth");
		}
	}
	public function tipe($action=null){
		$view = 'tipe';
		if(password_verify(mySession("username").mySession("id"),$_GET['session'])){
			$data['token'] = password_hash(mySession("username").mySession("id"),PASSWORD_DEFAULT);
			$data['page'] = $view;
			$data['content'] = 'masterdata/'.$view;
			if($action == 'simpan'){
				$input=$this->input->post();
				$form=array(
					"namaTipe"=>$input['namaTipe'],
				);
				$session = array(
					"tipe" => $form
				);
				$this->session->set_userdata($session);
				if($input!=null){
					echo json_encode(array("status"=>"success","msg"=>"data berhasil disimpan","result"=>$form));
				}else{
					echo json_encode(array("status"=>"failed","msg"=>"data gagal disimpan","result"=>$form));
				}
			}else{
				$this->load->view('layout/index',$data);
			}

		}
		else{
			$this->session->unset_userdata();
			redirect("auth");
		}
	}
	public function lantai(){
		$view = 'lantai';
		if(password_verify(mySession("username").mySession("id"),$_GET['session'])){
			$data['token'] = password_hash(mySession("username").mySession("id"),PASSWORD_DEFAULT);
			$data['page'] = $view;
			$data['content'] = 'masterdata/'.$view;
			$this->load->view('layout/index',$data);
		}
		else{
			$this->session->unset_userdata();
			redirect("auth");
		}
	}
	public function bank(){
		$view = 'bank';
		if(password_verify(mySession("username").mySession("id"),$_GET['session'])){
			$data['token'] = password_hash(mySession("username").mySession("id"),PASSWORD_DEFAULT);
			$data['page'] = $view;
			$data['content'] = 'masterdata/'.$view;
			$this->load->view('layout/index',$data);
		}
		else{
			$this->session->unset_userdata();
			redirect("auth");
		}
	}
	public function tenant(){
		$view = 'tenant';
		if(password_verify(mySession("username").mySession("id"),$_GET['session'])){
			$data['token'] = password_hash(mySession("username").mySession("id"),PASSWORD_DEFAULT);
			$data['page'] = $view;
			$data['content'] = 'masterdata/'.$view;
			$this->load->view('layout/index',$data);
		}
		else{
			$this->session->unset_userdata();
			redirect("auth");
		}
	}
	public function pengguna(){
		$view = 'pengguna';
		if(password_verify(mySession("username").mySession("id"),$_GET['session'])){
			$data['token'] = password_hash(mySession("username").mySession("id"),PASSWORD_DEFAULT);
			$data['page'] = $view;
			$data['content'] = 'masterdata/'.$view;
			$this->load->view('layout/index',$data);
		}
		else{
			$this->session->unset_userdata();
			redirect("auth");
		}
	}

}
