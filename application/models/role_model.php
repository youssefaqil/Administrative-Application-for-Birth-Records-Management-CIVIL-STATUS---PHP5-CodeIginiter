<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class role_model extends CI_Model{



       public function getAllRole()
        {
               
                 $this->db->select('*');
                 $this->db->from('u_has_p');
                 $this->db->order_by("Id_role","asc");
                
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
       public function Ajout_role()
        {
           $data = array(
                      'users_id_user' => $this->input->post('id_user'),
                      'permission_id_perm' => $this->input->post('id_perm')
                   );

                   $this->db->insert('u_has_p', $data); 
        }
        public function form_supp($id)
        {
        	$this->db->delete('u_has_p', array('Id_role' => $id));
        	return true;
        }
        public function getIdRole($id)
        {
             $query = $this->db->get_where('u_has_p', array('Id_role' => $id));
             return $query->result();
        }
        public function modifier($id,$data)
        {
            $this->db->where('Id_role',$id);
            $this->db->update('u_has_p', $data);
            return true;
        }
         public function getAllPrivil()
        {
               
                 $this->db->select('*');
                 $this->db->from('permission');
                 $this->db->order_by("privilege","asc");
                 
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
}