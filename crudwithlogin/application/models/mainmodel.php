<?php

class mainmodel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function create($data) {
        $values = array('name'=>$data['name'],'genre'=>$data['ganre']);

        $this->db->insert('movies',$values);
        return $this->db->insert_id();
        
    }
     public function read(){
         $this->db->select('*');
         $this->db->from('movies');
         $query = $this->db->get();
         return $query->result();
     }
     public function getid($id){
        $this->db->select('*');
        $this->db->from('movies');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result();
     }
     public function update($data){
        $values = array('name'=>$data['name'],'genre'=>$data['ganre']);
		$this->db->where('id',$data['id']);
		$this->db->update('movies',$values);
     }
     public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('movies');
     }
}