<?php

/**
* 
*/
class declaration_model extends CI_Model
{
	
	
	public function getAlldec()
	{
		$this->db->select('*');
		$this->db->from('declaration');
		$this->db->order_by('AnneD');
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
	public function Ajouter_dec()
	{
		$data=array(

                  'AnneD'=>$this->input->post('AnneD'),
                  'Registre_NumR'=>$this->input->post('Registre_NumR'),
                  'Parent_Cin_M'=>$this->input->post('Parent_Cin_M'),
			);
		$this->db->insert('declaration',$data);
	}
	
	public function allParent()
	{
		$this->db->select('*');
		$this->db->from('parent');
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
	public function allRegistre()
	{

                 $this->db->select('*');
                 $this->db->from('registre');
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
	public function getWhereR($id)
	{
		$query=$this->db->get_where('declaration',array('NumD'=>$id));
		return $query->result();
	}
	public function supp_decla($id)
	{
       $this->db->delete('declaration',array('NumD'=>$id));
       return true;
	}
	
	public function modifier_dec($id,$data)
	{
		$this->db->where('NumD',$id);
		$this->db->update('declaration',$data);
		return true;
	}
	
}