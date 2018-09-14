<?php
if(!defined('BASEPATH'))exit('No direct access alow');

class session_model extends CI_Model{
	private $table='users';

	public function login($pseudo,$password)
	{
		$query=$this->db->where(array('pseudo'=>$pseudo,'password'=>$password))
		             ->count_all_results($this->table);
		return ($query>0)? true :false;
	}
	 public function privilege_par_pseudo($type)
    {
    	$this->db->select('permission.privilege');
	    $this->db->from('permission');
	    $this->db->from('users');
	    $this->db->from('u_has_p');
	    $this->db->where('permission.id_perm = u_has_p.permission_id_perm');
	    $this->db->where('users.id_user = u_has_p.users_id_user');
        $this->db->where('users.user_type',$type);
        $query = $this->db->get();
        return $query->result();
    }

	

}