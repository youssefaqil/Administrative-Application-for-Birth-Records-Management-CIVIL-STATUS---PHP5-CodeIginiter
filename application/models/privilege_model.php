<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class privilege_model extends CI_Model{



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
}