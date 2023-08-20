<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_service extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_services()
	{
		$query = $this->db->select('*')
			->from('tblservices')
			->where('deleted', 0)
			->get();
		return $query->result_array();

	}

	function get_service($service_id)
	{
		$this->db->where('service_id', $service_id);
		$query = $this->db->get('tblservices')->result_array();
		if (count($query) > 0) {
			foreach ($query as $row) {
				return $row['service'];
			}
		} else {
			return '';
		}
	}

	function get_service_by_id($service_id)
	{
		$this->db->where('service_id', $service_id);
		$query = $this->db->get('tblservices');
		return $query->result_array();
	}

	function add_service($data)
	{
		$this->db->insert('tblservices', $data);
		return $this->db->insert_id();
	}

	function update_service($where, $data)
	{
		$this->db->where('service_id',$where);
		$this->db->update('tblservices', $data);
		return $this->db->affected_rows();
	}

	function delete_service($where, $data)
	{
		$this->db->where('service_id',$where);
		$this->db->update('tblservices', $data);
		return $this->db->affected_rows();
	}

}