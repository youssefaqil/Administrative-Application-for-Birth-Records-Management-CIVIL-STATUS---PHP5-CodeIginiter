<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registre_controller extends CI_Controller{



	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('registre_model');
        if(!$this->_isUserConnect())redirect('session_controller/');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
	}
      
      public function liste_registre()
	{
		$data["registres"]=$this->registre_model->getAllRegis();
		$this->load->view('Registre/table_registre.php',$data);
	}
	public function form_ajout()
	{
		$this->load->view('Registre/registre_ajout');
		
	}
	public function ajout_registre()
	{     

		 $this->form_validation->set_rules('Anne','Anne_REGISTRE', 'required|max_length[12]|min_length[6]|integer');
        
         if ($this->input->post('save') && $this->form_validation->run() == TRUE) {
        
         	$this->registre_model->Ajout_registre();
         }
            	
        redirect('registre_controller/index');
	}
	public function form_supprim()
	{
		$id=$this->uri->segment(3);
		if($this->registre_model->form_supp($id))
		{
			redirect('registre_controller/index');
		}
	}
	public function form_modif()
	{
		
		$data['id']=$this->uri->segment(3);
		
		$data['registres']=$this->registre_model->getIdRegis($this->uri->segment(3));
		$this->load->view('Registre/registre_modif',$data);

	}
	public function modif_regist()
	{    

		  
		  if($this->input->post('update'))
		  {
                   $update = array(
                      'Anne' => $this->input->post('Anne')
                   );
                   $this->registre_model->modifier($this->uri->segment(3),$update);
		  }
		 
          redirect('registre_controller/index');
	}
	public function _isUserConnect()
  {
    $pseudo=$this->session->userdata('pseudo');
    return empty($pseudo)? false :true;
  }
	

}