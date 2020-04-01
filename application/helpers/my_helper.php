<?php


if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('mySession')) {
	function mySession($session)
	{
		$ci = &get_instance();
		$ci->load->library('session');
		return $ci->session->userdata($session);
	}
}
if (!function_exists('rplc_')) {
	function rplc_($text)
	{
		return str_replace("_"," ",$text);
	}
}

if (!function_exists('exitApp')) {
	function exitApp()
	{
		$ci = &get_instance();
		$ci->load->library('session');
		$ci->session->unset_userdata();
		$ci->load->driver('cache');
		$ci->session->sess_destroy();
		$ci->cache->clean();
		ob_clean();
		redirect("auth");
	}
}

if (!function_exists('uniq')) {
	function uniq()
	{
		return password_hash(mySession("idr").mySession("id"),PASSWORD_BCRYPT);
	}
}

if (!function_exists('json')) {
	function json($status,$msg,$data)
	{
		return json_encode(array("status"=>$status,"msg"=>$msg,"result"=>$data));
	}
}
if (!function_exists('authorization')) {
	function authorization()
	{
		if(password_verify(mySession("idr").mySession("id"),$_GET['session'])){
			return true;
		}else{
			return false;
		}
	}
}
if (!function_exists('q')) {
	function q($param,$arg)
	{
		if($param==1){
			return '&q='.base64_encode($arg);
		}else{
			return '&oq='.base64_encode($arg);
		}

	}
}

