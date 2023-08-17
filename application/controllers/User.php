<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

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
			var_dump($this->session->userdata('role'));
			return;

			$this->check_session();
			$page_data['page_title']  = 'Dashboard';
			$this->load->view($this->session->userdata('role').'/index',$page_data);		
		}

		function get_users()
		{
			$this->check_session();
			$page_data['page_title']  = 'System Users';
			$page_data['users']  = $this->M_user->get_users();
			$this->load->view($this->session->userdata('role').'/users',$page_data);		
		}

		function get_data_from_post()
		{
			$data = array(
				'name' => $this->input->post('name'), 
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'role' => $this->input->post('role'),
				'gender' => $this->input->post('gender'),
				'district' => $this->input->post('district'),
				'city' => $this->input->post('city'),
				'location' => $this->input->post('location'),
				'phone' => $this->input->post('phone'),
				'password' => md5($this->input->post('password'))
			);
			return $data;
		}
	
		function get_data_from_db($update_id)
		{
			$query = $this->M_user->get_user_by_id($update_id);
			foreach ($query as $row) {
				$data['name']    = $row['name'];
				$data['email']    = $row['email'];
				$data['username']    = $row['username'];
				$data['role']    = $row['role'];
				$data['gender']    = $row['gender'];
				$data['district']    = $row['district'];
				$data['city']    = $row['city'];
				$data['location']    = $row['location'];
				$data['phone']    = $row['phone'];
			}
			return $data;
		}
	
		function save()
		{
			$this->check_session();
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (isset($update_id)){
				$this->db->update_user('tblusers', $update_id, $data);
			 }else{
				$inserted_id = $this->M_user->add_user($data);
			}

			$this->session->set_flashdata('message','Data saved successfully');
			if($update_id !=''):
				redirect('User/get_users');
			else:
				redirect('User/read');
			endif;
		}
	
	
		function read()
		{
			$this->check_session();
			$update_id = $this->uri->segment(3);
			if(!isset($update_id)){
				$update_id = $this->input->post('update_id',$update_id);
			}
			if(is_numeric($update_id)){
				$data = $this->get_data_from_db($update_id);
				$data['update_id'] = $update_id;
			}
			else{
				$data = $this->get_data_from_post();
			}
	
			$data['page_title']  = 'Add User';
			$this->load->view($this->session->userdata('role').'/add_user',$data);			
		}

		function delete($param=''){
			$this->check_session();
			$data['deleted'] =  0;
			$this->db->update_user('tblusers', $param, $data);
			$this->session->set_flashdata('message','User disabled successfully');
			redirect('User/get_users');
		}
			  
}