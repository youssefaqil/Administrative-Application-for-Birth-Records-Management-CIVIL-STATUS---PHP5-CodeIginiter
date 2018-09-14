<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class session_controller extends CI_Controller
{
	
     public function __construct()
	{
		parent::__construct();
		$this->load->model('session_model');
		$this->load->model('privilege_model');
		
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function page_error()
	{
		$this->load->view('page_error');
	}
	public function login()
	{
		$this->form_validation->set_rules('','pseudo','required|xss_clean|trim');
		$this->form_validation->set_rules('','password','required|xss_clean|trim');
		$pseudo=$this->input->post('pseudo');
		$passwor=$this->input->post('password');
		$entrer=$this->input->post('entrer');

		if(!empty($entrer) && isset($entrer))
		{
			
		
				if($this->session_model->login($pseudo,$passwor))
				{

					$this->session->set_userdata('pseudo',$pseudo);


					$this->db->select('user_type');
		            $this->db->from('users');
		            $this->db->where('pseudo',$pseudo);
		            $user=$this->db->get();
		           $this->session->set_userdata('user_type',$user->user_type); 
              if($user->num_rows()>0)
              {
              	$row=$user->row_array();
              }
                 

            $data['method_pseudo']=$this->session_model->privilege_par_pseudo($row['user_type']);
            // $data["privilege"]=$this->privilege_model->getAllPrivil();
             //Redirect('acceuil_controller/index',$data);
            $this->load->view('Acceuil',$data);
              
              
				}
				else 
					Redirect('session_controller/page_error');

		}
			
		
	}
	
	
	
}