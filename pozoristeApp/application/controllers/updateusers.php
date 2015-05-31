<?php

class Updateusers extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('korisnik_model');
		$this->load->helper('url');
	}
	function index() {
		$this->load->library('form_validation');

			$this->korisnik_model->update_user(
				$this->input->post('id'),
				$this->input->post('tipKorisnika')
			);
		$data['show_dashboard'] = TRUE;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('templates/uspesnapromenakorisnika');		
		$this->load->view('templates/footer');
			
	}
}

?>

