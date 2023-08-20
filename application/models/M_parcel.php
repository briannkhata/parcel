<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class M_parcel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_parcels()
	{
		$this->db->select('*')
			->from('tblparcels')
			->where('deleted', 0);
		$query = $this->db->get();
		return $query->result_array();
		
	}

	function get_parcel_by_id($parcel_id)
	{
		$this->db->where('parcel_id', $parcel_id);
		$query = $this->db->get('tblparcels');
		return $query->result_array();
	}

	function get_parcel_by_status($status_id)
	{
		$this->db->where('status_id', $status_id);
		$query = $this->db->get('tblparcels');
		return $query->result_array();
	}

	function get_parcel_payments($parcel_id)
	{
		$this->db->where('parcel_id', $parcel_id);
		$query = $this->db->get('tblpayments');
		return $query->result_array();
	}

	function get_parcel_daily_sales()
	{
		$this->db->select_sum('charge');
		// $this->db->where('payment_date >=', date('Y-m-d'));
		// $this->db->where('payment_date <=', date('Y-m-d'));  
  		$query = $this->db->get('tblpayments');
		$result = $query->row();
		return $result->charge;
	}

	function get_parcel_events($parcel_id)
	{
		$this->db->where('parcel_id', $parcel_id);
		$query = $this->db->get('tblevents');
		return $query->result_array();
	}

	function get_parcel_by_code($tracking_code)
	{
		$this->db->where('tracking_code', $tracking_code);
		$query = $this->db->get('tblparcels');
		return $query->result_array();
	}

	function get_charge($parcel_id)
	{
		$this->db->where('parcel_id', $parcel_id);
		$query = $this->db->get('tblparcels')->result_array();
		if (count($query) > 0) {
			foreach ($query as $row) {
				return $row['charge'];
			}
		} else {
			return '';
		}
	}

	function get_status_id($parcel_id)
	{
		$this->db->where('parcel_id', $parcel_id);
		$query = $this->db->get('tblparcels')->result_array();
		if (count($query) > 0) {
			foreach ($query as $row) {
				return $row['status_id'];
			}
		} else {
			return '';
		}
	}

	function get_paid($parcel_id)
	{
		$this->db->where('parcel_id', $parcel_id);
		$query = $this->db->get('tblparcels')->result_array();
		if (count($query) > 0) {
			foreach ($query as $row) {
				return $row['paid'];
			}
		} else {
			return '';
		}
	}

	function add_parcel($data)
	{
		$this->db->insert('tblparcels', $data);
		return $this->db->insert_id();
	}

	function save_payment($data)
	{
		$this->db->insert('tblpayments', $data);
		return $this->db->insert_id();
	}

	function save_event($data)
	{
		$this->db->insert('tblevents', $data);
		return $this->db->insert_id();
	}

	function update_parcel($where, $data)
	{
		$this->db->where('parcel_id',$where);
		$this->db->update('tblparcels', $data);
		return $this->db->affected_rows();
	}

	function toggle_status($where, $data)
	{
		$this->db->where('parcel_id',$where);
		$this->db->update('tblparcels', $data);
		return $this->db->affected_rows();
	}

	function toggle_paid($where, $data)
	{
		$this->db->where('parcel_id',$where);
		$this->db->update('tblparcels', $data);
		return $this->db->affected_rows();
	}

	function delete_payment($where)
	{
		$this->db->where('payment_id',$where);
		$this->db->delete('tblpayments');
		return $this->db->affected_rows();
	}

	function delete_parcel($where, $data)
	{
		$this->db->where('parcel_id',$where);
		$this->db->update('tblparcels', $data);
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