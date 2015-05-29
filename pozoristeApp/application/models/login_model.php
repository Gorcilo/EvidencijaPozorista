<?php
Class Login_model extends CI_Model
{
 function login_user($username, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('korisnik');
   $this -> db -> where('username', $username);
   $this -> db -> where('sifra', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>