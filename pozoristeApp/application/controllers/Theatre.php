<?php

class Theatre extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('addtheatre_model');
		$this->load->helper('url');
	}
	function index() {
		$this->load->library('form_validation');

		//$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('naziv', 'Naziv', 'required');

		$this->form_validation->set_rules('adresa', 'Adresa', 'required');

		$this->form_validation->set_rules('website', 'Website', 'required');

		$this->form_validation->set_rules('telefon', 'Telefon', 'required');
		
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('templates/neuspesnododavanje');
		} 
		else 
		{
			
			$this->addtheatre_model->add_theatre(
				$this->input->post('naziv'),
				$this->input->post('adresa'),
				$this->input->post('website'),
				$this->input->post('telefon'),
				$this->input->post('email'),
				$this->input->post('opis'),
				$this->input->post('slika')
			);
			$data['show_dashboard'] = TRUE;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('templates/uspesnopozoriste');
		$this->load->view('templates/footer', $data);
			
		}
	}

}

?>

