<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class privilege_controller extends CI_Controller{



	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('privilege_model');
        if(!$this->_isUserConnect())redirect('session_controller/');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
	}
      
      public function liste_privilege()
	{
		$data["privilege"]=$this->privilege_model->getAllPrivil();
		$this->load->view('privilege/table_privilege',$data);
	}
	 public function _isUserConnect()
  {
    $pseudo=$this->session->userdata('pseudo');
    return empty($pseudo)? false :true;
  }
	
	

}