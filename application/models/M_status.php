<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_status extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_statuses()
	{
		$query = $this->db->select('*')
			->from('tblstatuses')
			->where('deleted', 0)
			->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
		}
	}

	function get_status($status_id)
	{
		$this->db->where('status_id', $status_id);
		$query = $this->db->get('tblstatuses')->result_array();
		if (count($query) > 0) {
			foreach ($query as $row) {
				return $row['status_name'];
			}
		} else {
			return '';
		}
	}

	function get_status_by_id($statusid)
	{
		$this->db->where('status_id', $statusid);
		$query = $this->db->get('tblstatuses');
		return $query->result_array();
	}

	function add_status($data)
	{
		$this->db->insert('tblstatuses', $data);
		return $this->db->insert_id();
	}

	function update_status($where, $data)
	{
		$this->db->where('status_id',$where);
		$this->db->update('tblstatuses', $data);
		return $this->db->affected_rows();
	}

	function delete_status($where, $data)
	{
		$this->db->where('status_id',$where);
		$this->db->update('tblstatuses', $data);
		return $this->db->affected_rows();
	}

}