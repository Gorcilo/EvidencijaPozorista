<?php

class Odobrikomentar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('komentari_model');
		$this->load->helper('url');
	}
	function index() {
		$this->load->library('form_validation');

			$this->komentari_model->odobri_komentar(
				$this->input->post('id')
			);
		$data['show_dashboard'] = TRUE;
		$data['title'] = "Odobren komentar";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('templates/uspesnodobrenjekomentara');		
		$this->load->view('templates/footer');
			
	}
}

?>

