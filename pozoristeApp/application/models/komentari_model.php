<?php

class komentari_model extends CI_Model{
     public function __construct()
     {
          $this->load->database();
     }
	 
	 public function get_all($id){
	 $this->db->select('komentari.*')
	 ->from('komentari')
	 -> where ('komentari.predstavaid', $id);
	 $query = $this->db->get();
	 return $query->result_array();
	 }	 
	 }