<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Package_type extends CI_Controller {

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
			$page_data['page_title']  = 'Package Type List';
			$page_data['package_types']  = $this->M_package_type->get_package_types();
			$this->load->view($this->session->userdata('role').'/package_types',$page_data);		
		}

		function get_data_from_post()
		{
			$data = array(
				'package_type' => $this->input->post('package_type'), 
			);
			return $data;
		}
	
		function get_data_from_db($update_id)
		{
			$query = $this->M_package_type->get_package_type_by_id($update_id);
			foreach ($query as $row) {
				$data['package_type']    = $row['package_type'];
			}
			return $data;
		}
	
		function save()
		{
			$this->check_session();
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (isset($update_id)){
				$this->M_package_type->update_package_type($update_id, $data);
			 }else{
				$this->M_package_type->add_package_type($data);
			}

			$this->session->set_flashdata('message','Package_type saved successfully');
			if($update_id !=''):
				redirect('Package_type/package_types');
			else:
				redirect('Package_type/read');
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
	
			$data['page_title']  = 'Add package_type';
			$this->load->view($this->session->userdata('role').'/add_package_type',$data);			
		}

		function delete($param=''){
			$this->check_session();
			$data['deleted'] =  0;
			$this->db->update_package_type($param, $data);
			$this->session->set_flashdata('message','package_type disabled successfully');
			redirect('Package_type');
		}
			  
}