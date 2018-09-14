<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class utilisa_controller extends CI_Controller{



	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('utili_model');
        if(!$this->_isUserConnect())redirect('session_controller/');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
	}
      
      public function liste_util()
	{
		$data["users"]=$this->utili_model->getAllUtil();
		$this->load->view('utilisateur/table_util.php',$data);
	}
	public function form_ajout()
	{
		$this->load->view('utilisateur/util_ajout');
		
	}
	public function ajout_utilis()
	{     

		 
         if ($this->input->post('save')) {
        
         	$this->utili_model->Ajout_users();
         }
            	
        redirect('utilisa_controller/liste_util');
	}
	public function form_supprim()
	{
		$id=$this->uri->segment(3);
		if($this->utili_model->form_supp($id))
		{
			redirect('utilisa_controller/liste_util');
		}
	}
	public function form_modif()
	{
		
		$data['id']=$this->uri->segment(3);
		
		$data['users']=$this->utili_model->getIdUtil($this->uri->segment(3));
		$this->load->view('utilisateur/util_modif',$data);

	}
	public function modif_user()
	{    

		  
		  if($this->input->post('update'))
		  {
                   $update = array(
                      'pseudo' => $this->input->post('pseudo'),
                      'password' => $this->input->post('password'),
                      'user_type' => $this->input->post('user_type')
                   );
                   $this->utili_model->modifier($this->uri->segment(3),$update);
		  }
		 
          redirect('utilisa_controller/liste_util');
	}
	 public function _isUserConnect()
  {
    $pseudo=$this->session->userdata('pseudo');
    return empty($pseudo)? false :true;
  }

}