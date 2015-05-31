<?php 

class predstave_model extends CI_Model{
     public function __construct()
     {
         $this->load->database();
     }
	 
	 public function get_predstava($id){
	 $this->db->select('predstave.*')
	 ->from('predstave')
	 -> where ('predstave.id', $id);
	 $query = $this->db->get();
	 return $query->result_array();
	 }	 
	 
	public function get_predstave(){
		 $query = $this->db->get('predstave');
		return $query->result_array();
	 } 
}