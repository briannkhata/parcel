<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Report extends CI_Controller
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

	function by_status()
	{
		$this->check_session();
		$page_data['page_title'] = 'Filter Parcels by Status';
		$this->load->view($this->session->userdata('role').'/by_status', $page_data);
	}

	function refresh_parcels()
	{
		$this->check_session();
		$status_id = $this->input->post("status_id");
		$page_data['page_title'] = 'Parcels by Status | ' .$this->M_status->get_status($status_id);
		$page_data['parcels'] = $this->M_parcel->get_parcel_by_status($status_id);
		$this->load->view($this->session->userdata('role').'/refresh_parcels', $page_data);
	}



}