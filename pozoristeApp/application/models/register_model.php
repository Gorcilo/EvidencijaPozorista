<?php

Class Register_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	function register_user($username, $password, $name, $lastname, $email)
	{
		$this -> db -> set('username',$username);
		$this -> db -> set('sifra',$password);
		$this -> db -> set('ime',$name);
		$this -> db -> set('prezime',$lastname);
		$this -> db -> set('email',$email);
		$this -> db -> set('tipKorisnika',0);
	   
		$this -> db -> insert('korisnik');
	}
}
?>