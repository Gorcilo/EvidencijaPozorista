<?php
class Ocene_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_ocene($id){
		$this->db->select_avg('vrednost')
		->from('ocene')
		->where('ocene.predstavaid', $id)
		->group_by('ocene.predstavaid');
		$query = $this->db->get();
		return $query;
	}
	
	public function add_ocena($vrednost,$korisnik,$predstavaid)
	{
		$this -> db -> set('vrednost',$vrednost);
		$this -> db -> set('korisnikId',$korisnik);
		$this -> db -> set('predstavaId',$predstavaid);
		
		$this -> db -> insert('ocene'); 
	}
}
?>