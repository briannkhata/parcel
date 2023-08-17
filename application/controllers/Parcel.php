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

		function get_data_from_post()
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
	
		function get_data_from_db($update_id)
		{
			$query = $this->M_parcel->get_parcel_by_id($update_id);
			foreach ($query as $row) {
				$data['receiver_id']    = $row['receiver_id'];
				$data['sender_id']    = $row['sender_id'];
				$data['weight']    = $row['weight'];
				$data['charge']    = $row['charge'];
				$data['edd']    = $row['edd'];
				$data['parcel_desc']    = $row['parcel_desc'];
				$data['status_id']    = $row['status_id'];
			}
			return $data;
		}
	
		function save()
		{
			$this->check_session();
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (isset($update_id)){
				$this->M_parcel->update_parcel($update_id, $data);
			 }else{
				$inserted_id = $this->M_parcel->add_parcel($data);
			}

			$this->session->set_flashdata('message','Parcel saved successfully');
			if($update_id !=''):
				redirect('parcel/');
			else:
				redirect('parcel/read');
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
	
			$data['page_title']  = 'Add Parcel';
			$this->load->view($this->session->userdata('role').'/add_parcel',$data);			
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