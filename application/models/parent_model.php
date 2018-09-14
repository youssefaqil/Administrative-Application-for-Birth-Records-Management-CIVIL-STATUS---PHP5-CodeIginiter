<?php 



/**
* 
*/
class parent_model extends CI_Model
{
	public function getallparent()
	{
	
		$this->db->select('*');
		$this->db->from('parent');
		$this->db->order_by('Cin_M','desc');
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
	public function ajout_parent()
	{
		 $data = array(
                      'Cin_M' => $this->input->post('Cin_M'),
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

                   $this->db->insert('parent', $data); 
	}
	 public function form_supp($id)
        {
        	$this->db->delete('parent', array('Cin_M' => $id));
        	return true;
        }
     public function getwhereP($id)
     {
          $query = $this->db->get_where('parent', array('Cin_M' => $id));
             return $query->result();
     }
	public function modifier($id,$data)
        {
            $this->db->where('Cin_M',$id);
            $this->db->update('parent', $data);
            return true;
        }
}