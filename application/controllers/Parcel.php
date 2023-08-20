<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Parcel extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function check_session()
	{
		if ($this->session->userdata('user_login') != 1) //not logged in
			redirect(base_url(), 'refresh');
	}

	function index()
	{
		$this->check_session();
		$page_data['page_title'] = 'Parcel List';
		$page_data['parcels'] = $this->M_parcel->get_parcels();
		$this->load->view($this->session->userdata('role') . '/parcels', $page_data);
	}

	function get_data_from_post()
	{
		$data = array(
			'sname' => $this->input->post('sname'),
			'semail' => $this->input->post('semail'),
			'sphone' => $this->input->post('sphone'),
			'saddress' => $this->input->post('saddress'),
			'rname' => $this->input->post('rname'),
			'remail' => $this->input->post('remail'),
			'rphone' => $this->input->post('rphone'),
			'raddress' => $this->input->post('raddress'),
			'rlocation' => $this->input->post('rlocation'),
			'sbranch_id' => $this->M_user->get_branch_id($this->session->userdata('user_id')),
			'rbranch_id' => $this->input->post('rbranch_id'),
			'package_type_id' => $this->input->post('package_type_id'),
			'service_id' => $this->input->post('service_id'),
			'weight' => $this->input->post('weight'),
			'charge' => $this->input->post('charge'),
			'edd' => $this->input->post('edd'),
			'parcel_desc' => $this->input->post('parcel_desc'),
			'status_id' => $this->input->post('status_id'),
			'tracking_code' => $this->input->post('tracking_code'),

		);
		return $data;
	}

	function get_data_from_db($update_id)
	{
		$query = $this->M_parcel->get_parcel_by_id($update_id);
		foreach ($query as $row) {
			$data = array(
				'sname' => $row['sname'],
				'semail' => $row['semail'],
				'sphone' => $row['sphone'],
				'saddress' => $row['saddress'],
				'rname' => $row['rname'],
				'remail' => $row['remail'],
				'rphone' => $row['rphone'],
				'raddress' => $row['raddress'],
				'rlocation' => $row['rlocation'],
				'sbranch_id' => $row['sbranch_id'],
				'rbranch_id' => $row['rbranch_id'],
				'package_type_id' => $row['package_type_id'],
				'service_id' => $row['service_id'],
				'weight' => $row['weight'],
				'charge' => $row['charge'],
				'edd' => $row['edd'],
				'parcel_desc' => $row['parcel_desc'],
				'status_id' => $row['status_id'],
				'tracking_code' => $row['tracking_code'],

			);
		}
		return $data;
	}


	function save()
	{
		$this->check_session();
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)) {
			$this->M_parcel->update_parcel($update_id, $data);
		} else {
			$this->M_parcel->add_parcel($data);
		}

		$this->session->set_flashdata('message', 'parcel saved successfully');
		if ($update_id != ''):
			redirect('Parcel');
		else:
			redirect('Parcel/read');
		endif;
	}


	function read()
	{
		$this->check_session();
		$update_id = $this->uri->segment(3);
		if (!isset($update_id)) {
			$update_id = $this->input->post('update_id', $update_id);
		}
		if (is_numeric($update_id)) {
			$data = $this->get_data_from_db($update_id);
			$data['update_id'] = $update_id;
		} else {
			$data = $this->get_data_from_post();
		}

		$data['page_title'] = 'Add parcel';
		$this->load->view($this->session->userdata('role') . '/add_parcel', $data);
	}

	function delete($param = '')
	{
		$this->check_session();
		$data['deleted'] = 0;
		$this->db->update_parcel($param, $data);
		$this->session->set_flashdata('message', 'Parcel removed successfully');
		redirect('Parcel');
	}

}