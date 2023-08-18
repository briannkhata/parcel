<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Charge extends CI_Controller
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
		$page_data['page_title'] = 'Charge List';
		$page_data['charges'] = $this->M_charge->get_charges();
		$this->load->view($this->session->userdata('role') . '/charges', $page_data);
	}

	function get_data_from_post()
	{
		$data = array(
			'charge' => $this->input->post('charge'),
			'weight_from' => $this->input->post('weight_from'),
			'weight_to' => $this->input->post('weight_to'),
			'charge' => $this->input->post('charge'),
		);
		return $data;
	}

	function get_data_from_db($update_id)
	{
		$query = $this->M_charge->get_charge_by_id($update_id);
		foreach ($query as $row) {
			$data['charge'] = $row['charge'];
			$data['weight_from'] = $row['weight_from'];
			$data['weight_to'] = $row['weight_to'];
			$data['charge'] = $row['charge'];
		}
		return $data;
	}

	function save()
	{
		$this->check_session();
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)) {
			$this->M_charge->update_charge($update_id, $data);
		} else {
			$inserted_id = $this->M_charge->add_charge($data);
		}

		$this->session->set_flashdata('message', 'Charge saved successfully');
		if ($update_id != ''):
			redirect('Charge/');
		else:
			redirect('Charge/read');
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

		$data['page_title'] = 'Add charge';
		$this->load->view($this->session->userdata('role') . '/add_charge', $data);
	}

	function delete($param = '')
	{
		$this->check_session();
		$data['deleted'] = 0;
		$this->db->update_charge($param, $data);
		$this->session->set_flashdata('message', 'Charge disabled successfully');
		redirect('Charge');
	}

}