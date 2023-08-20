<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class branch extends CI_Controller {

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
			$page_data['page_title']  = 'branch List';
			$page_data['branches']  = $this->M_branch->get_branches();
			$this->load->view($this->session->userdata('role').'/branches',$page_data);		
		}

		function get_data_from_post()
		{
			$data = array(
				'branch' => $this->input->post('branch'), 
			);
			return $data;
		}
	
		function get_data_from_db($update_id)
		{
			$query = $this->M_branch->get_branch_by_id($update_id);
			foreach ($query as $row) {
				$data['branch']    = $row['branch'];
			}
			return $data;
		}
	
		function save()
		{
			$this->check_session();
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (isset($update_id)){
				$this->M_branch->update_branch($update_id, $data);
			 }else{
				$this->M_branch->add_branch($data);
			}

			$this->session->set_flashdata('message','branch saved successfully');
			if($update_id !=''):
				redirect('branch/');
			else:
				redirect('branch/read');
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
	
			$data['page_title']  = 'Add branch';
			$this->load->view($this->session->userdata('role').'/add_branch',$data);			
		}

		function delete($param=''){
			$this->check_session();
			$data['deleted'] =  0;
			$this->db->update_branch($param, $data);
			$this->session->set_flashdata('message','branch disabled successfully');
			redirect('branch');
		}
			  
}