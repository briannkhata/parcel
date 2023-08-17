<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Status extends CI_Controller {

		function __construct()
		{
			parent::__construct();
		}

		function check_session(){
			if ($this->session->statusdata('status_login') != 1)//not logged in
	        redirect(base_url(), 'refresh');
		}

		function index()
		{
			$this->check_session();
			$page_data['page_title']  = 'Status List';
			$this->load->view($this->session->statusdata('role').'/statuses',$page_data);		
		}

	

		function get_data_from_post()
		{
			$data = array(
				'status_name' => $this->input->post('status_name'), 
			);
			return $data;
		}
	
		function get_data_from_db($update_id)
		{
			$query = $this->M_status->get_status_by_id($update_id);
			foreach ($query as $row) {
				$data['status_name']    = $row['status_name'];
			}
			return $data;
		}
	
		function save()
		{
			$this->check_session();
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (isset($update_id)){
				$this->M_status->update_status($update_id, $data);
			 }else{
				$inserted_id = $this->M_status->add_status($data);
			}

			$this->session->set_flashdata('message','Status saved successfully');
			if($update_id !=''):
				redirect('status/statuss');
			else:
				redirect('status/read');
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
	
			$data['page_title']  = 'Add status';
			$this->load->view($this->session->statusdata('role').'/add_status',$data);			
		}

		function delete($param=''){
			$this->check_session();
			$data['deleted'] =  0;
			$this->db->update_status($param, $data);
			$this->session->set_flashdata('message','status disabled successfully');
			redirect('status/get_statuss');
		}
			  
}