<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_branch extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_branches()
	{
		$query = $this->db->select('*')
			->from('tblbranches')
			->where('deleted', 0)
			->get();
		return $query->result_array();

	}

	function get_name($branch_id)
	{
		$this->db->where('branch_id', $branch_id);
		$query = $this->db->get('tblbranches')->result_array();
		if (count($query) > 0) {
			foreach ($query as $row) {
				return $row['branch'];
			}
		} else {
			return '';
		}
	}

	function get_branch_by_id($branch_id)
	{
		$this->db->where('branch_id', $branch_id);
		$query = $this->db->get('tblbranches');
		return $query->result_array();
	}

	function add_branch($data)
	{
		$this->db->insert('tblbranches', $data);
		return $this->db->insert_id();
	}

	function update_branch($where, $data)
	{
		$this->db->update('tblbranches', $data, $where);
		return $this->db->affected_rows();
	}

	function delete_branch($where, $data)
	{
		$this->db->update('tblbranches', $data, $where);
		return $this->db->affected_rows();
	}

}