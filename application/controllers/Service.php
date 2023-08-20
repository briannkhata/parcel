<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends CI_Controller {

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
			$page_data['page_title']  = 'Service List';
			$page_data['services']  = $this->M_service->get_services();
			$this->load->view($this->session->userdata('role').'/services',$page_data);		
		}

		function get_data_from_post()
		{
			$data = array(
				'service' => $this->input->post('service'), 
			);
			return $data;
		}
	
		function get_data_from_db($update_id)
		{
			$query = $this->M_service->get_service_by_id($update_id);
			foreach ($query as $row) {
				$data['service']    = $row['service'];
			}
			return $data;
		}
	
		function save()
		{
			$this->check_session();
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (isset($update_id)){
				$this->M_service->update_service($update_id, $data);
			 }else{
				$this->M_service->add_service($data);
			}

			$this->session->set_flashdata('message','service saved successfully');
			if($update_id !=''):
				redirect('service/services');
			else:
				redirect('service/read');
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
	
			$data['page_title']  = 'Add service';
			$this->load->view($this->session->userdata('role').'/add_service',$data);			
		}

		function delete($param=''){
			$this->check_session();
			$data['deleted'] =  0;
			$this->db->update_service($param, $data);
			$this->session->set_flashdata('message','service disabled successfully');
			redirect('service');
		}
			  
}