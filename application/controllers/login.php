<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct(); 
	} 

	function authenticate()
	{   
		if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
			{
				$username	=	$this->input->post('username');
				$password	=	$this->input->post('password');			  
				$findUser  =   $this->M_user->authenticate($username,$password);        
				if ($findUser) {
						$username   =	$findUser->username;
						$name		=	$findUser->name;
						$user_id	=	$findUser->user_id;
						$role	=	$findUser->role;

						$this->session->set_userdata('user_login', 1);
						$this->session->set_userdata('user_id',$user_id);
						$this->session->set_userdata('name',$name);
						$this->session->set_userdata('username',$username);
						$this->session->set_userdata('role',$role);
						redirect(base_url() .'User');
					} else {
						$page_data['page_title']  = 'Login';
						$this->session->set_flashdata('message','Invalid Username or Password');
						return $this->load->view('index',$page_data);
					}
										   
			}
						
	}
	
}