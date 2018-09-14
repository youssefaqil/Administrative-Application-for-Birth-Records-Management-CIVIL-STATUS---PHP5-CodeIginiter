<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class utili_model extends CI_Model{



       public function getAllUtil()
        {
               
                 $this->db->select('*');
                 $this->db->from('users');
                
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
       public function Ajout_users()
        {
           $data = array(
                      'pseudo' => $this->input->post('pseudo'),
                      'password' => $this->input->post('password'),
                      'user_type' => $this->input->post('user_type')
                   );

                   $this->db->insert('users', $data); 
        }
        public function form_supp($id)
        {
        	$this->db->delete('users', array('id_user' => $id));
        	return true;
        }
        public function getIdUtil($id)
        {
             $query = $this->db->get_where('users', array('id_user' => $id));
             return $query->result();
        }
        public function modifier($id,$data)
        {
            $this->db->where('id_user',$id);
            $this->db->update('users', $data);
            return true;
        }
}