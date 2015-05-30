<?php
class Repertoar_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_repertoar($pozoriste) 
	{
		$this->db->select('predstave.*,repertoar.datum')
		->from('predstave')
		->join('repertoar','repertoar.predstavaId = predstave.id')
		->join('pozorista','pozorista.id = repertoar.pozoristeId')
		->where('pozorista.naziv',$pozoriste);
		$query = $this->db->get();
		return $query->result_array();
	}
}