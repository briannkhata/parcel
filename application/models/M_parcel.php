<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class M_parcel extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
		
		function get_parcels() {
			$this->db->select('*')
			->from('tblparcels')
			->where('deleted',0)
			->where('parcel_id !=', $this->session->parceldata('parcel_id'));
      		$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result_array(); 
			} else {
				return null;
			}
		}

		function get_parcel_by_id($parcelid){
		    $this->db->where('parcelid',$parcelid);
			$query = $this->db->get('tblparcels');
			return $query->result_array();
		}

		function get_name($parcelid){
   		    $this->db->where('parcelid',$parcelid);
			$query = $this->db->get('tblparcels')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['name'];
				}
			}else {
				return '';
			}
			
		}

		function add_parcel($data)
		{
			$this->db->insert('tblparcels', $data);
			return $this->db->insert_id();
		}

		function update_parcel($where, $data)
		{
			$this->db->update('tblparcels',$data, $where);
			return $this->db->affected_rows();
		}

		function delete_parcel($where, $data)
		{
			$this->db->update('tblparcels',$data, $where);
			return $this->db->affected_rows();
		}
 
}