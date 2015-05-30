<?php
 
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('login_model','',TRUE);
   $this->load->library('session');
   $this->load->helper('url');
 }
 
 function index()
 {
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('sifra', 'Sifra', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //neuspesna validacija
     $this->load->view('templates/proba');
   }
   else
   {
     redirect('pages/logger', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
  
   $username = $this->input->post('username');
   $result = $this->login_model->login_user($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username,
		 'type' => $row->tipKorisnika
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>