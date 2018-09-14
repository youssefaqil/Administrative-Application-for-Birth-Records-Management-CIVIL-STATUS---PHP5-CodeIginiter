<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class declaration_controller extends CI_Controller
{   

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('declaration_model');
		if(!$this->_isUserConnect())redirect('session_controller/');
	}
	public function declaration()
	{   
		$data['registres']=$this->declaration_model->allRegistre();
		$data['declarations']=$this->declaration_model->getAlldec();
		$this->load->view('declaration/table_declaration_aj',$data);
	}
	public function form_ajout()
	{
        $data['parents']=$this->declaration_model->allParent();
	    $data['registres']=$this->declaration_model->allRegistre();
		$this->load->view('declaration/declaration_ajout',$data);
	}
	public function declaration_s()
	{     
		$data['registres']=$this->declaration_model->allRegistre();
		$data['declarations']=$this->declaration_model->getAlldec();
          $this->load->view('declaration/table_declaration_sup',$data);
	}
	public function declaration_modif()
	{

		$data['registres']=$this->declaration_model->allRegistre();
		$data['declarations']=$this->declaration_model->getAlldec();
		$this->load->view('declaration/table_declaration_modif',$data);
	}
	public function declaration_aj()
	{  

	    if($this->input->post('save'))
	    {

	    $this->declaration_model->Ajouter_dec();

	    }
	    Redirect('declaration_controller/declaration');
		
	}
	public function form_supp()
	{
		$data['declarations_sup']=$this->declaration_model->getWhereR($this->uri->segment(3));
		$this->load->view('declaration/declaration_suppr',$data);
	}
	public function supprim_dec()
	{
		$id=$this->uri->segment(3);
		if($this->declaration_model->supp_decla($id))
		{
             Redirect('declaration_controller/declaration_s');
		}
	}
	public function form_modif()
	{    
		$data['registres']=$this->declaration_model->allRegistre();
		$data['parents']=$this->declaration_model->allParent();
		$data['declarations']=$this->declaration_model->getWhereR($this->uri->segment(3));
		$this->load->view('declaration/declaration_modif',$data);
	}
	public function modifier_dec()
	{
        if($this->input->post('update'))
        {
           $update=array(
                    
                   "AnneD"=>$this->input->post('AnneD'),
                   "Registre_NumR"=>$this->input->post('Registre_NumR'),
                   "Parent_Cin_M"=>$this->input->post('Parent_Cin_M')
      
           	);
           $this->declaration_model->modifier_dec($this->uri->segment(3),$update);
        }
        Redirect('declaration_controller/declaration_modif');
	}
	public function _isUserConnect()
  {
    $pseudo=$this->session->userdata('pseudo');
    return empty($pseudo)? false :true;
  }
	
}


