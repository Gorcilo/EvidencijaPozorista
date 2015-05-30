<?php

Class Addtheatre_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function add_theatre($naziv, $adresa, $website, $telefon, $email, $opis, $slika)
	{
	
		$this -> db -> set('naziv', $naziv);
		$this -> db -> set('adresa',$adresa);
		$this -> db -> set('website',$website);
		$this -> db -> set('telefon',$telefon);
		$this -> db -> set('email',$email);
		$this -> db -> set('opis',$opis);
		$this -> db -> set('slika',$slika);
	   
		$this -> db -> insert('pozorista');
	}
}
?>