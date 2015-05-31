<?php

class Komentari_model extends CI_Model{
	
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
	 
	 public function get_pending_comments(){
		 $query = $this->db->get_where('komentari', array('statusKomentara' => '0'));
		return $query->result_array();
	 } 
	 
	 public function odobri_komentar($id)
	{
		$this -> db -> set('statusKomentara', 1);
		
		$this->db->where('id', $id);
		$this->db->update('komentari');
	}

}
