<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maincontroller extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->model('mainmodel');
    }

	public function create()
	{
    	$data['name']=$this->input->post('name');
    	$data['ganre']=$this->input->post('ganre');
		
		if(!empty($data['name']) && !empty($data['ganre'])){
			
			$results = $this->mainmodel->create($data);
			var_dump($results);
			$this->load->view('main');
		}else{

			$this->load->view('login');
			die();
		}
		
		// $this->load->view('welcome_message');
    }
    public function read(){
        $results['data']=$this->mainmodel->read();
        
        $this->load->view('read',$results);

    }
    public function update($id = null){
        if($id!=null){
            $results['data']= $this->mainmodel->getid($id);
            var_dump($results);
            $this->load->view('update',$results);
        }else{
            $data['name']=$this->input->post('name');
            $data['ganre']=$this->input->post('ganre');
            $data['id']=$this->input->post('id');
              var_dump($data['id']);
            $results= $this->mainmodel->update($data);
            $this->load->view('main');
        }
    }
    public function delete($id){
        $results = $this->mainmodel->delete($id);
        $results['data']=$this->mainmodel->read();
        
        $this->load->view('read',$results);
        

    }
	
}