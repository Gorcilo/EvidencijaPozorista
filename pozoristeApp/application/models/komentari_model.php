<?php

class Komentari_model extends CI_Model{
	
     public function __construct()
     {
          $this->load->database();
		  $this->load->helper('date');
     }
	 
	 public function get_all($id){
	 $this->db->select('komentari.*')
	 ->from('komentari')
	 -> where ('komentari.predstavaid', $id)
	 -> where ('statusKomentara', 1);
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
	public function obrisi_komentar($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('komentari');
	}
	
	public function add_komentar($korisnikId, $predstavaId, $tekst)
	{ 
		$datestring = "%j %M %Y";
		$time = time(); 
		$data['current_date'] = mdate($datestring, $time);
	
		$this -> db -> set('korisnikId', $korisnikId);
		$this -> db -> set('predstavaId', $predstavaId);
		$this -> db -> set('tekst', $tekst);
		$this -> db -> set('statusKomentara', 0);
		$this -> db -> set('datum', $data['current_date']);
		
		$this -> db -> insert('komentari');
	}

}
