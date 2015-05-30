<?php

Class Addplay_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function add_play($kategorija, $naziv, $opis, $uloge, $rezervacije, $slika, $userid, $pozoriste, $datum)
	{
		$this -> db -> select('id') -> from('kategorije') -> where('Naziv',strtolower($kategorija));
		$query = $this -> db -> get();
		$rowcount = $query->num_rows();
		$data = $query -> result_array();
		
		$num = (int)$data[0]['id'];
		$num2 = (int)$userid;	
		
		$this -> db -> set('kategorijaId', $num);
		$this -> db -> set('naziv',$naziv);
		$this -> db -> set('opis',$opis);
		$this -> db -> set('uloge',$uloge);
		$this -> db -> set('rezervacije',$rezervacije);
		$this -> db -> set('slika',$slika);
		$this -> db -> set('korisnikId',$num2);
	   
		$this -> db -> insert('predstave');
		
		$this -> db -> select('id') -> from('pozorista') -> where('naziv',$pozoriste);
		$query2 = $this -> db -> get();
		$data2 = $query2 -> result_array();
		
		$this -> db -> select('id') -> from('predstave') -> where('naziv',$naziv);
		$query3 = $this -> db -> get();
		$data3 = $query3 -> result_array();
		
		$idPoz = (int)$data2[0]['id'];
		$idPre = (int)$data3[0]['id'];
		
		$this -> db -> set('pozoristeId',$idPoz);
		$this -> db -> set('predstavaId',$idPre);
		$this -> db -> set('datum',$datum);
		
		$this -> db -> insert('repertoar');
	}
}
?>