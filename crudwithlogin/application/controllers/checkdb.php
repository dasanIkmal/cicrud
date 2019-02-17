<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkdb extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->model('checkdbmodel');
    }

	public function login()
	{
    	$data['username']=$this->input->post('username');
    	$password=$this->input->post('password');
		
		if(!empty($data['username']) && !empty($password)){
			$data['password']=md5($password);
			$results = $this->checkdbmodel->login($data);
			// var_dump($results);
			$this->load->view('main');
		}else{

			$this->load->view('login');
			die();
		}
		
		// $this->load->view('welcome_message');
	}
	public function register(){
		$this->load->view('register');
	}
}