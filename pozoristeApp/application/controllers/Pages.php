<?php

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pozorista_model','pozorista');
		$this->load->model('repertoar_model','repertoar');
		$this->load->library('session');
		$this->load->helper('url');
	}
	
	public function home() 
	{
		if ( ! file_exists(APPPATH.'/views/pages/home.php'))
		{
			show_404();
		}
		
		$data['tag'] = "string";
		$data['lista_pozoirsta'] = $this->pozorista->get_pozorista();
		
		$data['title'] = "Home"; 

		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function repertoar($name)
	{
		if ( ! file_exists(APPPATH.'/views/pages/repertoar.php'))
		{
			show_404();
		}
		
		$data['title'] = "Home"; 
		$data['rep'] = $this->repertoar->get_repertoar($name);
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/repertoar', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function login()
	{
		if ( ! file_exists(APPPATH.'/views/pages/login.php'))
		{
			show_404();
		}
		$this->load->helper(array('form'));
		$this->load->view('pages/login');
	}
	
	public function register()
	{
		if ( ! file_exists(APPPATH.'/views/pages/login.php'))
		{
			show_404();
		}
		$this->load->helper(array('form'));
		$this->load->view('pages/register');
	}
	
	public function logger()
	{
	   if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		 $this->load->view('templates/dashboard', $data);
	   }
	   else
	   {
		 $this->home();
	   }
	}
	 
	public function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   $this->session->sess_destroy();
	   $data['tag'] = '';
	   $this->load->view('templates/homepage',$data);
	}
}