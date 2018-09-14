<?php

/**
* 
*/
class parent_controller extends CI_Controller
{
	
	 function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('parent_model');
         if(!$this->_isUserConnect())redirect('session_controller/');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
	}

	public function parent_s()
	{
         $data['allparents']=$this->parent_model->getallparent();
         $this->load->view('parent/table_parent_sup',$data);
	}
	public function parent_m()
	{
         $data['allparents']=$this->parent_model->getallparent();
         $this->load->view('parent/table_parent_modif',$data);
	}
	public function liste_parent()
	{   
		$data['allparents']=$this->parent_model->getallparent();
		$this->load->view('parent/table_parent_aj',$data);
	}
	public function ajout_parent()
	{
		$this->load->view('parent/parent_ajout');
	}
	public function Ajout_p()
	{
		if($this->input->post('save'))
		{
              $this->parent_model->ajout_parent();
		}
		redirect('parent_controller/liste_parent');
	}
	public function form_supp()
	{
		$data['id']=$this->uri->segment(3);
		$data['parents']=$this->parent_model->getwhereP($this->uri->segment(3));
		$this->load->view('parent/parent_supp',$data);
		
	}
	public function supp_parent()
	{
		$id=$this->uri->segment(3);
		if($this->parent_model->form_supp($id))
		{
            redirect('parent_controller/parent_s');
		}
	}
	public function form_modif()
	{
		$data['id']=$this->uri->segment(3);
		$data['parents']=$this->parent_model->getwhereP($this->uri->segment(3));
		$this->load->view('parent/parent_modif',$data);
		
	}
	public function modif_regist()
	{    

		  
		  if($this->input->post('update'))
		  {
                   $update = array(
                      'NomP' => $this->input->post('NomP'),
                      'Nom_ar' => $this->input->post('Nom_ar'),
                      'PrenomP' => $this->input->post('PrenomP'),
                      'Prenom_ar' => $this->input->post('Prenom_ar'),
                      'DateNaissP' => $this->input->post('DateNaissP'),
                      'Date_ar' => $this->input->post('Date_ar'),
                      'LieuNaissP' => $this->input->post('LieuNaissP'),
                      'LieuNaissP_ar' => $this->input->post('LieuNaissP_ar'),
                      'AdresseP' => $this->input->post('AdresseP'),
                      'AdressP_ar' => $this->input->post('AdressP_ar'),
                      'Profession' => $this->input->post('Profession'),
                      'Profession_ar' => $this->input->post('Profession_ar'),
                      'Sexe' => $this->input->post('Sexe'),
                      'Sexe_ar' => $this->input->post('Sexe_ar')
                   );
                   $this->parent_model->modifier($this->uri->segment(3),$update);
		  }
		 
          redirect('parent_controller/parent_m');
	}
	 public function _isUserConnect()
  {
    $pseudo=$this->session->userdata('pseudo');
    return empty($pseudo)? false :true;
  }
	

}