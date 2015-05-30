<?php
class Pozorista_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_pozorista() 
	{
		$query = $this->db->get('pozorista');
		return $query->result_array();
	}
}