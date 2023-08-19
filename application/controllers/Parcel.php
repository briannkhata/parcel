<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Parcel extends CI_Controller {

		function __construct()
		{
			parent::__construct();
		}

		function check_session(){
			if ($this->session->userdata('user_login') != 1)//not logged in
	        redirect(base_url(), 'refresh');
		}

		function index()
		{
			$this->check_session();
			$page_data['page_title']  = 'Parcel List';
			$page_data['parcels']  = $this->M_parcel->get_parcels();
			$this->load->view($this->session->userdata('role').'/index',$page_data);		
		}

		function get_data_from_post1()
		{
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('phone'),
				'role' => $this->input->post('role'),
				'gender' => $this->input->post('gender'),
				'district' => $this->input->post('district'),
				'city' => $this->input->post('city'),
				'location' => $this->input->post('location'),
				'phone' => $this->input->post('phone'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'password' => md5($this->input->post('phone'))
			);
			return $data;
		}

		function get_data_from_post2()
		{
			$data = array(
				'sender_id' => $this->input->post('sender_id'), 
				'receiver_id' => $this->input->post('receiver_id'),
				'weight' => $this->input->post('weight'),
				'charge' => $this->input->post('charge'),
				'edd' => $this->input->post('edd'),
				'parcel_desc' => $this->input->post('parcel_desc'),
				'status_id' => $this->input->post('status_id'),
			);
			return $data;
		}
	

		function save1()
		{
			$this->check_session();
			$data1 = $this->get_data_from_post1();
			$sender_id = $this->M_user->add_user($data1);
			$this->session->set_userdata('sender_id',$sender_id);
			redirect('Parcel/add_parcel2');
		}

		function save2()
		{
			$this->check_session();
			$data = $this->get_data_from_post1();
			$receiver_id = $this->M_user->add_user($data);
			$this->session->set_userdata('receiver_id',$receiver_id);
			redirect('Parcel/add_parcel3');
		}

		function save3()
		{
			$this->check_session();
			$data = $this->get_data_from_post2();
			$this->M_parcel->add_parcel($data);
			$this->session->set_flashdata('message','Parcel added successfully');
			redirect('Parcel');
		}
	
		function add_parcel()
		{
			$this->check_session();
			$data['page_title']  = 'Add Sender';
			$this->load->view($this->session->userdata('role').'/add_parcel',$data);			
		}

		function add_parcel2()
		{
			$this->check_session();
			$data['page_title']  = 'Add Receiver';
			$this->load->view($this->session->userdata('role').'/add_parcel',$data);			
		}

		function add_parcel3()
		{
			$this->check_session();
			$data['page_title']  = 'Add Payment';
			$this->load->view($this->session->userdata('role').'/add_parcel3',$data);			
		}

		function delete($param=''){
			$this->check_session();
			$data['deleted'] =  0;
			// $data['deleted_by'] =  $this->session->userdata('parcel_id');
			// $data['date_deleted'] =  date('Y-m-d');
			$this->db->update_parcel($param, $data);
			$this->session->set_flashdata('message','Parcel removed successfully');
			redirect('Parcel');
		}
			  
}