<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class predstave_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }
	 
	 function get_predstava($id){
	 $this->db->select('predstave.*')
	 ->from('predstave')
	 -> where ('predstave.id', $id);
	 $query = $this->db->get();
	 return $query->result_array();
	 }	 
	 }