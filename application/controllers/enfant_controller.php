<?php

/**
* 
*/
class enfant_controller extends CI_Controller
{
	
	 function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('enfant_model');
        if(!$this->_isUserConnect())redirect('session_controller/');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
	}

	public function enfant_s()
	{    
         $data['allenfants']=$this->enfant_model->getallenfant();
         $data['enf_reg']=$this->enfant_model->getanneR();
         $this->load->view('enfant/table_enfant_sup',$data);
	}
	public function enfant_m()
	{
         $data['allenfants']=$this->enfant_model->getallenfant();
         $data['enf_reg']=$this->enfant_model->getanneR();
         $this->load->view('enfant/table_enfant_modif',$data);
	}
	public function form_ajou()
	{
		$data['allDeclar']=$this->enfant_model->getDeclar();
		$data['allParent']=$this->enfant_model->getParent();
		$data['AllRegistre']=$this->enfant_model->getRegistre();
		$this->load->view('enfant/enfant_ajout',$data);
	}
	public function ajout_enfant()
	{
		$data['allenfants']=$this->enfant_model->getallenfant();
		$data['enf_reg']=$this->enfant_model->getanneR();
		$this->load->view('enfant/table_enfant_aj',$data);
	}
	public function Ajout_enf()
	{
		if($this->input->post('save'))
		{
              $this->enfant_model->ajout_enfant();
		}
		redirect('enfant_controller/ajout_enfant');
	}
	public function form_supp()
	{
		$data['id']=$this->uri->segment(3);
		$data['enfants']=$this->enfant_model->getwhereP($this->uri->segment(3));
		$this->load->view('enfant/enfant_supp',$data);
		
	}
	public function supp_enfant()
	{
		$id=$this->uri->segment(3);
		if($this->enfant_model->form_supp($id))
		{
            redirect('enfant_controller/enfant_s');
		}
	}
	public function form_modif()
	{
		$data['id']=$this->uri->segment(3);
		$data['enfants']=$this->enfant_model->getwhereP($this->uri->segment(3));
		$data['allParent']=$this->enfant_model->getParent();
		$data['AllRegistre']=$this->enfant_model->getRegistre();
		$data['enf_reg']=$this->enfant_model->getanneR();
		$data['allDeclar']=$this->enfant_model->getDeclar();
		$this->load->view('enfant/enfant_modif',$data);
		
	}
	public function modif_enf()
	{    

		  
		  if($this->input->post('update'))
		  {
                   $update = array(
                      'NomE' => $this->input->post('NomE'),
                      'Nom_ar' => $this->input->post('Nom_ar'),
                      'PreNomE' => $this->input->post('PreNomE'),
                      'Prenom_ar' => $this->input->post('Prenom_ar'),
                      'DateNaiss_arabic_ar'=>$this->input->post('DateNaiss_arabic_ar'),
                      'DateNaiss_arabic_fr'=>$this->input->post('DateNaiss_arabic_fr'),
                      'DateNaissE' => $this->input->post('DateNaissE'),
                      'DateNaiss_ar' => $this->input->post('DateNaiss_ar'),
                      'LieuNaissE' => $this->input->post('LieuNaissE'),
                      'LieuNaiss_ar' => $this->input->post('LieuNaiss_ar'),
                      'Adresse' => $this->input->post('Adresse'),
                      'Adresse_ar' => $this->input->post('Adresse_ar'),
                      'Sexe' => $this->input->post('Sexe'),
                      'Sexe_ar' => $this->input->post('Sexe_ar'),
                      'Nationalite_fr'=>$this->input->post('Nationalite_fr'),
                      'Nationalitr_ar'=>$this->input->post('Nationalitr_ar'),
                      'Parent_Cin_M' => $this->input->post('Cin_M'),
                      'Registre_NumR' => $this->input->post('NumR'),
                      'Declaration_NumD'=>$this->input->post('Declaration_NumD')
                   );
                   $this->enfant_model->modifier($this->uri->segment(3),$update);
		  }
		 
          redirect('enfant_controller/enfant_m');
	}
	
	public function _isUserConnect()
  {
    $pseudo=$this->session->userdata('pseudo');
    return empty($pseudo)? false :true;
  }

}