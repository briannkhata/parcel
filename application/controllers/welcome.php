<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{		
			$page_data['page_title']  = 'Login';
			$this->load->view('index',$page_data);	
		}
		
}