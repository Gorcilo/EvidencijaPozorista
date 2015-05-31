<?php
class Korisnik_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_korisnike() 
	{
		$query = $this->db->get('korisnik');
		return $query->result_array();
	}
	
	public function update_user($id, $tipKorisnika)
	{
		$this -> db -> set('tipKorisnika',$tipKorisnika);
		
		$this->db->where('id', $id);
		$this->db->update('korisnik');
	}
}