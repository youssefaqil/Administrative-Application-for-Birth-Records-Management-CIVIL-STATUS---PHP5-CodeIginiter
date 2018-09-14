<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class role_controller extends CI_Controller{



	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('role_model');
        if(!$this->_isUserConnect())redirect('session_controller/');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
	}
      
      public function liste_role()
	{
		$data["roles"]=$this->role_model->getAllRole();
		$data["users"]=$this->role_model->getAllUtil();
		$data["privilege"]=$this->role_model->getAllPrivil();
		$this->load->view('Role/table_role',$data);
	}
	public function form_ajout()
	{
		$data["users"]=$this->role_model->getAllUtil();
		$data["privilege"]=$this->role_model->getAllPrivil();
		$this->load->view('Role/role_ajout',$data);
		
	}
	public function Ajout_role()
	{     

		 
         if ($this->input->post('save')) {
        
         	$this->role_model->Ajout_role();
         }
            	
        redirect('role_controller/liste_role');
	}
	public function form_supprim()
	{
		$id=$this->uri->segment(3);
		if($this->role_model->form_supp($id))
		{
			redirect('role_controller/liste_role');
		}
	}
	public function form_modif()
	{
		
		$data['id']=$this->uri->segment(3);
		$data["users"]=$this->role_model->getAllUtil();
		$data["privilege"]=$this->role_model->getAllPrivil();
		$data['roles']=$this->role_model->getIdRole($this->uri->segment(3));
		$this->load->view('Role/role_modif',$data);

	}
	public function modif_role()
	{    

		  
		  if($this->input->post('update'))
		  {
                   $update = array(
                      'users_id_user' => $this->input->post('users_id_user'),
                      'permission_id_perm' => $this->input->post('permission_id_perm')
                      
                   );
                   $this->role_model->modifier($this->uri->segment(3),$update);
		  }
		 
          redirect('role_controller/liste_role');
	}
	public function _isUserConnect()
  {
    $pseudo=$this->session->userdata('pseudo');
    return empty($pseudo)? false :true;
  }

}