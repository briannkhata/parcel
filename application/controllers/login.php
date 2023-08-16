<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct(); 
    } 

	
	
	function signin()
	{   
	
		if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
				{
				    $username	=	$this->input->post('username');
				    $password	=	MD5($this->input->post('password'));			  
				    $admin      =   $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
				    $row = $admin->row();
						if (isset($row))
						{
								
									$username   =	$row->username;
									$password	=	$row->password;
									$fname		=	$row->fname;
									$lname		=	$row->lname;
									$user_id	=	$row->user_id;
													
									$this->session->set_userdata('user_login', '1');
									$this->session->set_userdata('user_id',$user_id);
									$this->session->set_userdata('account_type','admin');
									redirect(base_url() .'admin/dashboard', 'refresh');
						}
										   
									   
								$page_data['system']  	  = 'payrollSoft';
								$page_data['page_title']  = 'Login';
						    	//$page_data['err'] 	  = 'Invalid Username or Password';	
						    	$this->session->set_flashdata('message','Invalid Username or Password');
								return $this->load->view('index',$page_data);
										   
				
			    }
				
				
	}
	

	
}