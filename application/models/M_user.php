<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class M_user extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
		
		function get_users() {
			$this->db->select('*')
			->from('tblusers')
			->where('userid !=', $this->session->userdata('userid'));
      		$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result_array(); 
			} else {
				return null;
			}
		}

		function authenticate($username, $password) {
			$this->db->select('*')
			->from('tblusers')
			->where('username', $username)
			->where('password', $password);
      		$query = $this->db->get();
			if ($query->num_rows() === 1) {
				return $query->row(); 
			} else {
				return null;
			}
		}

		function get_user_by_id($userid){
		    $this->db->where('userid',$userid);
			$query = $this->db->get('tblusers');
			return $query->result_array();
		}

		function get_name($userid){
   		    $this->db->where('userid',$userid);
			$query = $this->db->get('tblusers')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['name'];
				}
			}else {
				return '';
			}
			
		}

		function add_user($data)
		{
			$this->db->insert('tblusers', $data);
			return $this->db->insert_id();
		}

		function update_user($where, $data)
		{
			$this->db->update('tblusers',$data, $where);
			return $this->db->affected_rows();
		}

		function delete_user($where, $data)
		{
			$this->db->update('tbl',$data, $where);
			return $this->db->affected_rows();
		}

		function generateRandomString($length = 5)
		{
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}
 
}