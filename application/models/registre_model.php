<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registre_model extends CI_Model{



       public function getAllRegis()
        {
               
                 $this->db->select('*');
                 $this->db->from('registre');
                 $this->db->order_by("Anne","desc");
                 //$this->db->limit(3);
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
       public function Ajout_registre()
        {
           $data = array(
                      'Anne' => $this->input->post('Anne')
                   );

                   $this->db->insert('registre', $data); 
        }
        public function form_supp($id)
        {
        	$this->db->delete('registre', array('NumR' => $id));
        	return true;
        }
        public function getIdRegis($id)
        {
             $query = $this->db->get_where('registre', array('NumR' => $id));
             return $query->result();
        }
        public function modifier($id,$data)
        {
            $this->db->where('NumR',$id);
            $this->db->update('registre', $data);
            return true;
        }
}