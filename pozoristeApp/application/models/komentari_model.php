<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class komentari_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }
	 
	 function get_all($id){
	 $this->db->select('komentari.*')
	 ->from('komentari')
	 -> where ('komentari.predstavaid', $id);
	 $query = $this->db->get();
	 return $query->result_array();
	 }	 
	 }