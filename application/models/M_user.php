<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class M_user extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
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