<?php

class Obrisikomentar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('komentari_model');
		$this->load->helper('url');
	}
	function index() {
		$this->load->library('form_validation');

			$this->komentari_model->obrisi_komentar(
				$this->input->post('id')
			);
		$data['show_dashboard'] = TRUE;
		$data['title'] = "Obrisan komentar";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('templates/uspesnoobrisankomentar');		
		$this->load->view('templates/footer');
			
	}
}

?>

