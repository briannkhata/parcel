<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_charge extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_charges()
	{
		$this->db->select('*')
			->from('tblcharges')
			->where('deleted', 0);
		$query = $this->db->get();
		return $query->result_array();
		
	}


	function get_charge_by_id($charge_id)
	{
		$this->db->where('charge_id', $charge_id);
		$query = $this->db->get('tblcharges');
		return $query->result_array();
	}

	function get_name($charge_id)
	{
		$this->db->where('charge_id', $charge_id);
		$query = $this->db->get('tblcharges')->result_array();
		if (count($query) > 0) {
			foreach ($query as $row) {
				return $row['name'];
			}
		} else {
			return '';
		}

	}

	function add_charge($data)
	{
		$this->db->insert('tblcharges', $data);
		return $this->db->insert_id();
	}

	function update_charge($where, $data)
	{
		$this->db->where('charge_id',$where);
		$this->db->update('tblcharges', $data);
		return $this->db->affected_rows();
	}

	function delete_charge($where, $data)
	{
		$this->db->where('charge_id',$where);
		$this->db->update('tblcharges', $data);
		return $this->db->affected_rows();
	}

}