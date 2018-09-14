<?php

/**
* 
*/
class acceuil_controller extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
       $this->load->model('privilege_model');
    if(!$this->_isUserConnect())redirect('session_controller/');
  }

  public function index()
  {      
  	     //$data["privilege"]=$this->privilege_model->getAllPrivil();
         $this->load->view('Acceuil');
  }
  

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('session_controller/');
  }

  

  public function _isUserConnect()
  {
    $pseudo=$this->session->userdata('pseudo');
    return empty($pseudo)? false :true;
  }
 


}

