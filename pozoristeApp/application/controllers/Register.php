<?php

class Register extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('register_model');
	}
	function index() {
		$this->load->library('form_validation');

		//$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]');

		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_rules('firstname', 'First Name', 'required');

		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('templates/failedregistration');
		} 
		else 
		{
			
			$this->register_model->register_user(
				$this->input->post('username'),
				$this->input->post('password'),
				$this->input->post('firstname'),
				$this->input->post('lastname'),
				$this->input->post('email')
			);

			$this->load->view('templates/successfulregistration');
		}
	}

}

?>

