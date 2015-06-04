<?php

class Comments extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('ocene_model');
		$this->load->model('komentari_model');
		$this->load->library('session');
	}
	function index($param = 0) {
		//$echo $param;
		$this->load->library('form_validation');

		$this->form_validation->set_rules('komentar', 'Komentar', 'required');

		$this->form_validation->set_rules('ocena', 'Ocena', 'required');			

		$data1['id'] = $param;
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('templates/neuspesnododatkomentarocena',$data1);
		} 
		else 
		{
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			
			$this->komentari_model->add_komentar(
				$data['id'],
				$param,
				$this->input->post('komentar')
			);
			
			$this->ocene_model->add_ocena(
				$this->input->post('ocena'),
				$data['id'],
				$param
			);
			
			$this->load->view('templates/uspesnododatkomentarocena',$data1);
		}
	}
}


?>

