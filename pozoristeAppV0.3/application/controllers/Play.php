<?php

class Play extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('addplay_model');
		$this->load->library('session');
	}
	function index() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kategorija', 'Kategorija', 'required');

		$this->form_validation->set_rules('naziv', 'Naziv', 'required');

		$this->form_validation->set_rules('opis', 'Opis', 'required');

		$this->form_validation->set_rules('uloge', 'Uloge', 'required');
		
		$this->form_validation->set_rules('pozoriste', 'Pozoriste', 'required');
				

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('templates/failedregistration');
		} 
		else 
		{
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			
			$this->addplay_model->add_play(
				$this->input->post('kategorija'),
				$this->input->post('naziv'),
				$this->input->post('opis'),
				$this->input->post('uloge'),
				$this->input->post('rezervacije'),
				$this->input->post('slika'),
				$data['id'],
				$this->input->post('pozoriste'),
				$this->input->post('datum')
			);

			$this->load->view('templates/uspesnapredstava');
		}
	}

}

?>

