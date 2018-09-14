<?php 



/**
* 
*/
class enfant_model extends CI_Model
{
	public function getallenfant()
	{
	
		$this->db->select('*');
		$this->db->from('enfant');
		$this->db->order_by('idEnfant','desc');
		$query=$this->db->get();
		if($query->num_rows>0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	public function ajout_enfant()
	{
		 $data = array(
                      
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

                   $this->db->insert('enfant', $data); 
	}
	 public function form_supp($id)
        {
        	$this->db->delete('enfant', array('idEnfant' => $id));
        	return true;
        }
     public function getwhereP($id)
     {
          $query = $this->db->get_where('enfant', array('idEnfant' => $id));
             return $query->result();
     }
	public function modifier($id,$data)
        {
            $this->db->where('idEnfant',$id);
            $this->db->update('enfant', $data);
            return true;
        }
        public function getanneR()
        {
          $this->db->select('reg.Anne');
          $this->db->select('ef.idEnfant');
          $this->db->from('registre reg');
          $this->db->from('enfant ef');
          $this->db->where('ef.Registre_NumR = reg.NumR');
          
          $query=$this->db->get();
          return $query->result();
        }
        public function getRegistre()
        {
          $this->db->select('*');
          $this->db->from('registre');
          $this->db->order_by('Anne','desc');
          $query = $this->db->get();
          if($query->num_rows>0)
          {
            return $query->result();
          }
          else
          {
            return false;
          }
        }
        public function getParent()
        {
          $this->db->select('*');
          $this->db->from('parent');
          $this->db->order_by('PrenomP','desc');
          $query = $this->db->get();
          if($query->num_rows>0)
          {
            return $query->result();
          }
          else
          {
            return false;
          }
        }
        public function getDeclar()
        {
          $this->db->select('*');
          $this->db->from('declaration');
          $query = $this->db->get();
          if($query->num_rows>0)
          {
            return $query->result();
          }
          else
          {
            return false;
          }
        }

}