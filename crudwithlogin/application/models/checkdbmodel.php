<?php

class checkdbmodel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($data) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);
	    $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
}