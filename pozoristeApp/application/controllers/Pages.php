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
		$this->load->helper('url');
		
		$data['tag'] = "string";
		$data['lista_pozoirsta'] = $this->pozorista->get_pozorista();
		
		$data['title'] = "Home"; 

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function repertoar($name)
	{
		if ( ! file_exists(APPPATH.'/views/pages/repertoar.php'))
		{
			show_404();
		}
		$this->load->helper('url');
		
		$data['title'] = $name; 
		$data['rep'] = $this->repertoar->get_repertoar($name);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('pages/repertoar', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function login()
	{
		if ( ! file_exists(APPPATH.'/views/pages/login.php'))
		{
			show_404();
		}
		if($this->session->userdata('logged_in')) {
			echo "Already logged in!";
			redirect('pages/logger', 'refresh');
		}
		else {
			$data['title'] = "Login"; 
			$this->load->helper(array('form'));
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav');
			$this->load->view('pages/login', $data);
			$this->load->view('templates/footer');		
		}
		
	}
	
	public function register()
	{
		if ( ! file_exists(APPPATH.'/views/pages/register.php'))
		{
			show_404();
		}
		$this->load->helper(array('form'));
		$data['title'] = "Registration"; 
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('pages/register', $data);
		$this->load->view('templates/footer');
	}
	
	public function addtheatre()
	{
		if ( ! file_exists(APPPATH.'/views/pages/addtheatreview.php'))
		{
			show_404();
		}
		$data['title'] = "Dodavanje pozorista"; 
		$this->load->helper(array('form'));
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('pages/addtheatreview');
		$this->load->view('templates/footer');
	}
	
	public function addplay()
	{
		if ( ! file_exists(APPPATH.'/views/pages/addplayview.php'))
		{
			show_404();
		}
		$data['title'] = "Dodavanje predstave"; 
		$this->load->helper(array('form'));
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('pages/addplayview');
		$this->load->view('templates/footer');
		
	}
	
	public function logger()
	{
	   if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		$data['title'] = $session_data['username']; 
		if($session_data['type'] == 1 )
		 {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav');
			$this->load->view('pages/moderatorhome', $data);
			$this->load->view('templates/footer', $data);
		 } 
		 if ($session_data['type'] == 2) 
		 {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav');
			$this->load->view('pages/adminhome', $data);
			$this->load->view('templates/footer', $data);
		 } 
		 if($session_data['type'] == 0 )
		 {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav');
			$this->load->view('pages/dashboard', $data);
			$this->load->view('templates/footer', $data);				 
		 }
		 
	   }
	   else
	   {
		 $this->home();
	   }
	}
	 
	public function logout()
	{
		if($this->session->userdata('logged_in')) {
			$this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
			$data['tag'] = '';
			$data['title'] = "Log out"; 
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav');
			$this->load->view('templates/homepage',$data);	
			$this->load->view('templates/footer', $data);
					
		}
		else {
			echo "Session doesn't exists!";
		}
	}
}