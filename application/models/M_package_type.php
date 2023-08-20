<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_package_type extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_package_types()
	{
		$query = $this->db->select('*')
			->from('tblpackage_types')
			->where('deleted', 0)
			->get();
		return $query->result_array();

	}

	function get_package_type($package_type_id)
	{
		$this->db->where('package_type_id', $package_type_id);
		$query = $this->db->get('tblpackage_types')->result_array();
		if (count($query) > 0) {
			foreach ($query as $row) {
				return $row['package_type'];
			}
		} else {
			return '';
		}
	}

	function get_package_type_by_id($package_type_id)
	{
		$this->db->where('package_type_id', $package_type_id);
		$query = $this->db->get('tblpackage_types');
		return $query->result_array();
	}

	function add_package_type($data)
	{
		$this->db->insert('tblpackage_types', $data);
		return $this->db->insert_id();
	}

	function update_package_type($where, $data)
	{
		$this->db->update('tblpackage_types', $data, $where);
		return $this->db->affected_rows();
	}

	function delete_package_type($where, $data)
	{
		$this->db->update('tblpackage_types', $data, $where);
		return $this->db->affected_rows();
	}

}