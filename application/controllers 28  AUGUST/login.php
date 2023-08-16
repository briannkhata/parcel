<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		 
    } 

/*	function fura()
	{
		$this->load->dbutil();
        $prefs = array(     
                'format'      => 'zip',             
                'filename'    => 'my_db_backup.sql'
              );
        $backup =& $this->dbutil->backup($prefs); 
        $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $save = './db_backups/'.$db_name;
        $this->load->helper('file');
        write_file($save, $backup); 
        $this->load->helper('download');
        force_download($db_name, $backup); 
	}  */
	
						
	function backup_db()
		{
			$this->load->database();
			$this->load->dbforge();
			$this->load->dbutil(); 
			// START DB BACKUP
			$prefs = array(     
					//'format'      => 'zip',             
					'format'      => 'sql',             
					'filename'    => 'database_backup.sql'
				  );
			$backup = $this->dbutil->backup($prefs); 
			//$backup =& $this->dbutil->backup($prefs); 
			//$db_name = 'BACKUP'. date("Y-m-d-H-i-s") .'.zip';
			$db_name = 'BACKUP-'. date("d-F-Y H ia") .'.sql';
			$save = './db_backups/'.$db_name;
			$this->load->helper('file');
			//write_file($save, $backup); 
			$this->load->helper('download');
			force_download($db_name, $backup); 
			// REDIRECT
			$page_data['system']  	  = 'payrollSoft';
			$page_data['page_title']  = 'Login';
			$page_data['status'] 	  = '<b style="color:blue;">DATABASE BACKUP SUCCESSFUL, COPY IT</b>';	
			$this->load->view('index',$page_data);
			return ;
		}
	
	function upload_db($param1 = '')
		{
			
			$this->load->database();
			$this->load->dbforge();
			$this->load->dbutil(); 
		
			if ($param1 == 'save' && $_FILES['userfile']['name'] != '' ) // UPLOAD ONLY IF DB IS CHOSEN
				{
						$get_ext              = $_FILES['userfile']['name'];
						move_uploaded_file($_FILES['userfile']['tmp_name'], 'db_uploads/'.$get_ext);
					   
						// START DB BACKUP
					    $prefs = array(     
								'format'      => 'zip',             
								'filename'    => 'my_db_backup.sql'
							  );
						$backup = $this->dbutil->backup($prefs); 
						//$backup =& $this->dbutil->backup($prefs); 
						$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
						$save = './db_backups/'.$db_name;
						$this->load->helper('file');
						write_file($save, $backup);  
			
						// TRUNCATE DATABASE AFTER BACKUP AND RESET AUTO_INCREMENTS
						$query = $this->db->query("SHOW TABLES");
						  $name = $this->db->database;
						  foreach ($query->result_array() as $row)
						  {
							$table = $row['Tables_in_' . $name];
							$this->db->query("TRUNCATE " . $table);
							$this->db->query("ALTER TABLE ".$table." AUTO_INCREMENT = 1");
						  }
					
						// START UPLOADING THE NEW DATABASE
						$schemas = read_file('./db_uploads/'.$get_ext);
								$query = rtrim(trim($schemas), "\n;");
								$query_list = explode(";", $query);
								
								foreach($query_list as $query)
									 $this->db->query($query);
						
						// REDIRECT
					    $page_data['system']  	  = 'payrollSoft';
						$page_data['page_title']  = 'Login';
						$page_data['status'] 	  = '<b style="color:blue;">DATABASE UPDATED SUCCESSFUL</b>';	
						$this->load->view('index',$page_data);
						return ;
					}
				
				if ($param1 == 'save' && $_FILES['userfile']['name'] == '' )  // SHOW ERROR IF DB IS NOT SELECTED
					{
						$page_data['system']  	  = 'payrollSoft';
						$page_data['page_title']  = 'Login';
						$page_data['status'] 	  = '<b style="color:red;">ERROR, PLEASE SELECT DATABASE</b>';	
						$this->load->view('index',$page_data);
						return ;
					}
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
