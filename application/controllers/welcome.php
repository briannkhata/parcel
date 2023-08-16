<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{		
				$page_data['system']  	  = 'payrollSoft';
				$page_data['page_title']  = 'Login';
				$page_data['status'] 	  = ''; // shows blank when new updated db is not uploaded
				//$this->session->set_userdata('my_database','payroll');
				$this->load->view('index',$page_data);	
		}
		
		
		
	
}
