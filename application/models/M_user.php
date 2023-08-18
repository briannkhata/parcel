<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_user extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_users()
	{
		$this->db->select('*')
			->from('tblusers')
			->where('deleted', 0)
			->order_by('date_added', 'DESC')
			->where('user_id !=', $this->session->userdata('user_id'));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}


	function get_districts()
	{
		$this->db->select('*')
			->from('tbldistricts');
    		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}


	function get_senders()
	{
		$this->db->select('*')
			->from('tblusers')
			->where('deleted', 0)
			->where('role', 'sender')
			->order_by('date_added', 'DESC');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}

	function get_receivers()
	{
		$this->db->select('*')
			->from('tblusers')
			->where('deleted', 0)
			->where('role', 'receiver')
			->order_by('date_added', 'DESC');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}

	function authenticate($username, $password)
	{
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

	function get_user_by_id($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('tblusers');
		return $query->result_array();
	}

	function get_name($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('tblusers')->result_array();
		if (count($query) > 0) {
			foreach ($query as $row) {
				return $row['name'];
			}
		} else {
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
		$this->db->update('tblusers', $data, $where);
		return $this->db->affected_rows();
	}

	function delete_user($where, $data)
	{
		$this->db->update('tblusers', $data, $where);
		return $this->db->affected_rows();
	}

}