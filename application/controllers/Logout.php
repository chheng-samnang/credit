<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
	}
	public function index()
	{   		
		session_destroy();
		$data['msg'] = 'This user has been logout successfully.';	
		$this->load->view('template/login',$data);
		
	}
}
