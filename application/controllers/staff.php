<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Staff extends CI_Controller {

		function __construct()
		{
			parent::__construct();
		}
		
		function new_salary_add()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$maintain = $this->input->post('maintain');
			$data['employee_id'] = $this->input->post('employee_id');
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');
     		$data['date_changed'] = date('Y-m-d H:i:s');
     		if(isset($maintain)){
     			$data['salary'] = $this->db->get_where('employees',array('employee_id' =>$data['employee_id']))->row()->bsalary; 
     		}
     		else{
     		    $data['salary']   = $this->input->post('salary');
     		}
			$this->db->insert('salary_change',$data);
			$this->session->set_flashdata('message','SALARY CHANGED SUCCESSFULLY');
			//redirect('admin/new_salary_change2','refresh');
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'New Salary Change';
			$this->load->view('new_salary_change2',$data);		

	
		}

		function maintain_salary()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$employee_id = $this->input->post('employee_id');
			foreach ($employee_id as $value) {
				$data['employee_id'] = $value;
				$data['month'] = date('F');
				$data['year'] = date('Y');
				$data['salary']   = $this->db->get_where('employees',array('employee_id' =>$value))->row()->bsalary;
	     		$data['date_changed'] = date('Y-m-d H:i:s');
				$this->db->insert('salary_change',$data);
			}
			echo json_encode(array("status" => TRUE));
	
		}


		function new_salary_update()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$salary_change_id = $this->input->post('salary_change_id');
			//$data['employee_id'] = $this->input->post('employee_id');
			//$data['month'] = $this->input->post('month');
			//$data['year'] = $this->input->post('year');
			$data['salary']   = $this->input->post('salary');

			$this->db->where('salary_change_id',$salary_change_id);
			$this->db->update('salary_change',$data);

			//$datao['bsalary'] = $data['salary'];
			//$this->db->where('employee_id',$data['employee_id']);
			//$this->db->update('employees',$datao);
			echo json_encode(array("status" => TRUE));
		}



		function new_salary_delete($id)
		{
		$this->db->where('salary_change_id',$id);
		$this->db->delete('salary_change');
		echo json_encode(array("status" => TRUE));
		}
		
		
		####ARREARS####
		function arrear_add()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['employee_id'] = $this->input->post('employee_id');
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');
			$data['amount']   = $this->input->post('amount');
			$data['description']  = $this->input->post('description');
     		$data['date'] = date('Y-m-d H:i:s');
			$insert = $this->crud_model->arrear_add($data);
			echo json_encode(array("status" => TRUE));
	
		}
		
		function arrear_update()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['employee_id'] = $this->input->post('employee_id');
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');
			$data['amount']   = $this->input->post('amount');
			$data['description']  = $this->input->post('description');
     		$data['update'] = date('Y-m-d H:i:s');
			$this->crud_model->arrear_update(array('arrear_id' => $this->input->post('arrear_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
			
		function arrear_delete($id)
		{
		$this->crud_model->delete_arrear($id);
		echo json_encode(array("status" => TRUE));
		}
		
		function arrear_edit($id)
		{
			$data = $this->crud_model->get_arrear($id); 
			echo json_encode($data);
		}
		
		####BONUSES####
		function bonus_add()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['employee_id'] = $this->input->post('employee_id');
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');
			$data['amount']   = $this->input->post('amount');
			$data['description']  = $this->input->post('description');
     		$data['date'] = date('Y-m-d H:i:s');
			$insert = $this->crud_model->bonus_add($data);
			echo json_encode(array("status" => TRUE));
	
		}
		
		function bonus_update()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['employee_id'] = $this->input->post('employee_id');
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');
			$data['amount']   = $this->input->post('amount');
			$data['description']  = $this->input->post('description');
     		$data['update'] = date('Y-m-d H:i:s');
			$this->crud_model->bonus_update(array('bonus_id' => $this->input->post('bonus_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
			
		function bonus_delete($id)
		{
		$this->crud_model->delete_bonus($id);
		echo json_encode(array("status" => TRUE));
		}
		
		function bonus_edit($id)
		{
			$data = $this->crud_model->get_bonus($id); 
			echo json_encode($data);
		}
		
		
		####DEPARTMENT####
		function department_add()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['depot_id'] = $this->input->post('depot_id');
			$data['department'] = $this->input->post('department');
			$data['description']  = $this->input->post('description');
			$insert = $this->crud_model->department_add($data);
			echo json_encode(array("status" => TRUE));
	
		}
		
		function department_update()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['depot_id'] = $this->input->post('depot_id');
			$data['department'] = $this->input->post('department');
			$data['description']  = $this->input->post('description');
			$this->crud_model->department_update(array('department_id' => $this->input->post('department_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
			
		function department_delete($id)
		{
		$this->crud_model->delete_department($id);
		echo json_encode(array("status" => TRUE));
		}
		
		function department_edit($id)
		{
			$data = $this->crud_model->get_department($id); 
			echo json_encode($data);
		}




		function bank_add()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['bank'] = $this->input->post('bank');
			$data['bank_code'] = $this->input->post('bank_code');
			$data['abbrev']  = $this->input->post('abbrev');
			$this->db->insert('bank',$data);
			echo json_encode(array("status" => TRUE));
	
		}

		function bank_update()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$bank_id = $this->input->post('bank_id');
			$data['bank'] = $this->input->post('bank');
			$data['bank_code'] = $this->input->post('bank_code');
			$data['abbrev']  = $this->input->post('abbrev');
			$this->db->where('bank_id',$bank_id);
			$this->db->update('bank',$data);
			echo json_encode(array("status" => TRUE));
		}
		function bank_delete($id)
		{

			$data['deleted'] = 1;
			$this->db->where('bank_id',$id);
			$this->db->update('bank',$data);
			echo json_encode(array("status" => TRUE));
		}
		function bank_edit($id)
		{

			$data = $this->crud_model->get_banka($id); 
			echo json_encode($data);
			
		}
		
		
			####DEPOT####
		function depot_add()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['address'] = $this->input->post('address');
			$data['depot'] = $this->input->post('depot');
			$data['description']  = $this->input->post('description');
			$insert = $this->crud_model->depot_add($data);
			echo json_encode(array("status" => TRUE));
	
		}
		
		function depot_update()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['address'] = $this->input->post('address');
			$data['depot'] = $this->input->post('depot');
			$data['description']  = $this->input->post('description');
			$this->crud_model->bonus_update(array('depot_id' => $this->input->post('depot_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
			
		function depot_delete($id)
		{
		$this->crud_model->delete_depot($id);
		echo json_encode(array("status" => TRUE));
		}
		
		function depot_edit($id)
		{
			$data = $this->crud_model->get_depot($id); 
			echo json_encode($data);
		}
		
		
		####DEPOT####
			function taxband_add(){
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');


        	$current  = $this->input->post('current');
			$mantain  = $this->input->post('mantain');
			if(isset($current)){
			   $current = 1;
			}else{
			   $current = 0;
			}

			if(isset($mantain)){
				$company = $this->db->get_where('pension_para',array('current' => 1))->row()->company;
		    	$staff =$this->db->get_where('pension_para',array('current' => 1))->row()->staff;
		    	$gla = $this->db->get_where('pension_para',array('current' => 1))->row()->gla;
		    	$broker = $this->db->get_where('pension_para',array('current' => 1))->row()->broker;

				$band1_top = $this->db->get_where('tax_config',array('current' => 1))->row()->band1_top;
				$band2_top = $this->db->get_where('tax_config',array('current' => 1))->row()->band2_top;
				$band3_top = $this->db->get_where('tax_config',array('current' => 1))->row()->band3_top;
				$band4_top = $this->db->get_where('tax_config',array('current' => 1))->row()->band4_top;
				$band1_rate = $this->db->get_where('tax_config',array('current' => 1))->row()->band1_rate;
			    $band2_rate = $this->db->get_where('tax_config',array('current' => 1))->row()->band2_rate;
			    $band3_rate  = $this->db->get_where('tax_config',array('current' => 1))->row()->band3_rate;
			    $band4_rate  = $this->db->get_where('tax_config',array('current' => 1))->row()->band4_rate;
			}else{
			   
				$band1_top = $this->input->post('band1_top');
				$band2_top = $this->input->post('band2_top');
				$band3_top = $this->input->post('band3_top');
				$band4_top = $this->input->post('band4_top');
				$band1_rate = $this->input->post('band1_rate');
			    $band2_rate = $this->input->post('band2_rate');
			    $band3_rate  = $this->input->post('band3_rate');
			    $band4_rate  = $this->input->post('band4_rate');
			}

		    $year  = $this->input->post('year',TRUE);
		    $month  = $this->input->post('month',TRUE);

			foreach ($month as $key => $a) {
			   $data = array(
			   		'month' => $a,
			   		'year' => $year,
					'band1_top' => $band1_top,
					'band2_top' => $band2_top,
					'band3_top' => $band3_top,
					'band4_top' => $band4_top,
					'band1_rate' => $band1_rate,
					'band2_rate' => $band2_rate,
					'band3_rate' => $band3_rate,
					'band4_rate' => $band4_rate,
					'current' => $current,

								);
			    $this->db->insert('tax_config',$data);

			}
			$page_data['system']  	    = 'payrollSoft';
			$page_data['page_title']    = 'add Tax Parameters';	
			$this->load->view('add_taxband',$page_data);
		}
			function salary_edit($id)
		{
			$data = $this->crud_model->get_new_salary($id); 
			echo json_encode($data);
		}
		
		function taxband_update(){
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['band1_top'] = $this->input->post('band1_top');
			$data['band2_top'] = $this->input->post('band2_top');
			$data['band3_top'] = $this->input->post('band3_top');
			$data['band4_top'] = $this->input->post('band4_top');
			$data['band1_rate'] = $this->input->post('band1_rate');
		    $data['band2_rate'] = $this->input->post('band2_rate');
		    $data['band3_rate']  = $this->input->post('band3_rate');
		    $data['band4_rate']  = $this->input->post('band4_rate');
			$data['month']  = $this->input->post('month');
			$data['year']  = $this->input->post('year');
			$data['current']  = $this->input->post('current');
			$this->crud_model->taxband_update(array('tax_config_id' => $this->input->post('tax_config_id')),$data);
			//echo json_encode(array("status" => TRUE));
			redirect('Salary/tax_band');
		}
			
		function taxband_delete($id){
		$this->crud_model->delete_taxband($id);
		echo json_encode(array("status" => TRUE));
		}
	
		function taxband_edit($id)
		{
			$data = $this->crud_model->get_taxband($id); 
			echo json_encode($data);
		}






























        function staff_info()
	   {

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] 	 = "Staff Information";
			$data["system"]  = "Foc-EMS";
			$employee_id= $this->uri->segment(3);
			$data['employee_id']= $employee_id;
			$data['staff']  =   $this->db->select('*')->from('employees')->where('employee_id',$employee_id)->get()->result_array();
	       	$this->load->view('admin/staff_info',$data);

        }

         function view_trashed()
	   {

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Deactivation Info";
			$data["system"]  = "Foc-EMS";
			$data["trashed_id"]  = $this->uri->segment(3);
	       	$this->load->view('admin/view_deactivated',$data);

        }

         function attendance()
	   {

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Attendance";
			$data["system"]  = "Foc-EMS";
	       	$this->load->view('admin/attendance',$data);

        }





        function create_staff()
		{

            //$data['fname']          = $this->input->post('fname');
			$data['name']          = $this->input->post('name');
            $data['birthdate']      = $this->input->post('birthdate');
            $data['gender']         = $this->input->post('gender');
            $data['bsalary']        = $this->input->post('bsalary');
            $data['phone']          = $this->input->post('phone');
            $data['email']          = $this->input->post('email');
			$data['status']         = $this->input->post('status');
			$data['startdate']      = $this->input->post('startdate');
            $data['department_id']  = $this->input->post('department_id');
			$data['qualification_id']  = $this->input->post('qualification_id');
			$data['depot_id']       = $this->input->post('depot_id');
			$data['homeaddress']    = $this->input->post('homeaddress');
            $data['nextofkin']      = $this->input->post('nextofkin');
			$data['contactaddress'] = $this->input->post('contactaddress');
			$data['tea_allowance']  = $this->input->post('tea_allowance');
			$data['on_pension']     = $this->input->post('on_pension');
			$data['date_added']     = date('Y-m-d H:i:s');
            $this->db->insert('employees',$data);
            $employee_id = $this->db->insert_id();
			
			echo "<script>
			         alert('STAFF CREATED SUCCESSFULLY')
				 </script>";
            //move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employee_image/' . $employee_id . '.jpg');
            //$this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url().'staff/staff_list/','refresh');
        }

		function update_staff()
		{

            $employee_id          = $this->input->post('employee_id');
			$data['name']          = $this->input->post('name');
            $data['birthdate']      = $this->input->post('birthdate');
            $data['gender']         = $this->input->post('gender');
            $data['bsalary']        = $this->input->post('bsalary');
            $data['phone']          = $this->input->post('phone');
            $data['email']          = $this->input->post('email');
			$data['status']         = $this->input->post('status');
			$data['startdate']      = $this->input->post('startdate');
            $data['department_id']  = $this->input->post('department_id');
			$data['qualification_id']  = $this->input->post('qualification_id');
			$data['depot_id']       = $this->input->post('depot_id');
			$data['homeaddress']    = $this->input->post('homeaddress');
            $data['nextofkin']      = $this->input->post('nextofkin');
			$data['contactaddress'] = $this->input->post('contactaddress');
			$data['tea_allowance']  = $this->input->post('tea_allowance');
			$data['on_pension']     = $this->input->post('on_pension');
			$data['date_added']     = date('Y-m-d H:i:s');
			
			$this->db->where('employee_id', $employee_id);
            $this->db->update('employees', $data);
           	echo "<script>
			     alert('UPDATES SAVED SUCCESSFULLY')
				 </script>";
            //move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/employee_image/' . $employee_id . '.jpg');
            //$this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url().'staff/staff_list/','refresh');
        }

        function delete_staff() 
		{
			$employee_id  = $this->input->post('employee_id');
			$data['employee_id']    = $employee_id;
            $data['reason']      = $this->input->post('reason');
            $data['action']         = $this->input->post('action');
            $data['date_trashed']  = date('Y-m-d H:i:s');
			$this->db->insert('trashed_employees',$data);
			  
			$data0['active'] = 0;
            $this->db->where('employee_id',$employee_id);
			$this->db->update('employees',$data0);
			echo "<script>
					 alert('STAFF TRASHED SUCCESSFULLY')
					 </script>";
            //$this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url().'staff/staff_list/','refresh');
        }
		
		function activate_staff() 
		{
			$trashed_id  = $this->uri->segment(3);
			$employee_id = $this->db->get_where('trashed_employees',array('trashed_id'=>$trashed_id))->row()->employee_id;
        	
			$data0['active'] = 1;
            $this->db->where('employee_id',$employee_id);
			$this->db->update('employees',$data0);
			
			$this->db->where('trashed_id',$trashed_id);
			$this->db->delete('trashed_employees');
			
			echo "<script>
					 alert('STAFF ACTIVATED SUCCESSFULLY')
				 </script>";
            //$this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url().'staff/staff_list/','refresh');
        }
		

     	function leave()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Leave Days";
			$data["system"]  = "Foc-EMS";
			$this->load->view('admin/staff_leave_days',$data);

	    }
	    function view_leave()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Leave Details";
			$data["system"]  = "Foc-EMS";
			$data["extra_id"]  = $this->uri->segment(3);
	      	$this->load->view('admin/view_leave',$data);

	    }

	    function add_leave()
		{
		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	         $data["page_title"] = "Add Leave";
			$data["system"]  = "Foc-EMS";
	       	$this->load->view('admin/add_leave',$data);
	    }
	    function edit_leave()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Update Leave";
			$data["system"]  = "Foc-EMS";
			$data["extra_id"] = $this->uri->segment(3);
	       	$this->load->view('admin/edit_leave',$data);

	    }


        function create_leave()
		{

				$data['employee_id'] = $this->input->post('employee_id');
				$data['month']    = $this->input->post('month');
				$data['year']    = $this->input->post('year');
				$data['leave_days']   = $this->input->post('leave_days');
				$data['leave_grant']  = $this->input->post('leave_grant');
				$data['days_remaining']   = $this->input->post('days_remaining');
				$data['days_used']   = $this->input->post('days_used');
     			$data['date_added']      = date('Y-m-d H:i:s');
				$this->db->insert('extra', $data);
			 	redirect(base_url().'staff/leave/','refresh');
		}

		function update_leave()
		{

				$employee_id    = $this->input->post('employee_id');
				$extra_id    = $this->input->post('extra_id');
				$month    = $this->input->post('month');
				$year    = $this->input->post('year');
				$leave_days   = $this->input->post('leave_days');
				$days_used   = $this->input->post('days_used');
				$leave_grant   = $this->input->post('leave_grant');
				$leave1_type   = $this->input->post('leave1_type');
				$days_remaining  = $leave_days - $days_used;
								
				$data['month']      = $month;
				$data['year']      = $year;
				$data['leave1_type']  = $leave1_type;
				$data['leave_days']  = $leave_days;
				$data['days_used']      = $days_used;
				$data['leave_grant']      = $leave_grant ;
				//$data['employee_id']     = $employee_id;
				$data['days_remaining']     = $days_remaining;
				
				$this->db->where('extra_id', $extra_id);
				$this->db->update('extra', $data);
				echo "<script>
					 alert('LEAVE DAYS UPDATED SUCCESSFULLY')
					 </script>";
			 	redirect(base_url().'staff/leave/','refresh');
		}

		function scheme_list()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"]= "Scheme List";
			$data["system"]  = "Foc-EMS";
	      	$this->load->view('admin/scheme_list',$data);

	    }

	    function view_scheme()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Staff Scheme Details";
			$data["system"]  = "Foc-EMS";
			$data["health_scheme_id"]  = $this->uri->segment(3);
	      	$this->load->view('admin/view_scheme',$data);

	    }

		function add_scheme()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Add Scheme";
			$data["system"] = "Foc-EMS";
	       	$this->load->view('admin/add_scheme',$data);

	    }
	    function create_scheme()
		{

				$data['scheme_id'] = $this->input->post('scheme_id');
				$data['membership_id'] = $this->input->post('membership_id');
			    $data['membership_number'] = $this->input->post('membership_number');
				$data['employee_id'] = $this->input->post('employee_id');
			    //$data['amount'] = $this->input->post('amount');
				$data['description'] = $this->input->post('description');
				$this->db->insert('health_scheme',$data);
	
				 echo "<script>
					 alert('SCHEME DETAILS ADDED SUCCESSFULLY')
					 </script>";
			  	redirect(base_url().'staff/scheme_list/','refresh');
		}
		function edit_scheme()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Update Scheme";
			$data["system"] = "Foc-EMS";
			$data["health_scheme_id"]  = $this->uri->segment(3);
	       	$this->load->view('admin/edit_scheme',$data);

	    }

	    function add_bill()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Add Bill";
			$data["system"] = "Foc-EMS";
			$data["health_scheme_id"]  = $this->uri->segment(3);
	       	$this->load->view('admin/add_bill',$data);

	    }
	     function add_billl()
		{
				$data['employee_id'] = $this->input->post('employee_id');
			    $data['amount'] = $this->input->post('amount');
				$data['year'] = $this->input->post('year');
				$data['month'] = $this->input->post('month');
				$this->db->insert('scheme_bill',$data);
	
				 echo "<script>
					 alert('DETAILS ADDED SUCCESSFULLY')
					 </script>";
			  	redirect(base_url().'staff/scheme_list/','refresh');
		}

		 function scheme_bills()
		{
			 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Scheme Bills";
			$data["system"] = "Foc-EMS";
			$data["title"] = "Scheme Bills >> All";
	      	$this->load->view('admin/scheme_bills',$data);

		}
		
		function update_scheme()
		{

				$data['scheme_id'] = $this->input->post('scheme_id');
				$data['membership_id'] = $this->input->post('membership_id');
			    $data['membership_number'] = $this->input->post('membership_number');
				$data['employee_id'] = $this->input->post('employee_id');
		    	$data['description'] = $this->input->post('description');
				
				$health_scheme_id = $this->input->post('health_scheme_id');
				$this->db->where('health_scheme_id',$health_scheme_id);
				$this->db->update('health_scheme',$data);
	
				 echo "<script>
					 alert('SCHEME DETAILS UPDATED SUCCESSFULLY')
					 </script>";
			  	redirect(base_url().'staff/scheme_list/','refresh');
		}
		

	     function delete_scheme() 
		{
		    $health_scheme_id = $this->uri->segment(3);
            $this->db->where('health_scheme_id',$health_scheme_id);
			$this->db->delete('health_scheme');
            redirect(base_url().'staff/scheme_list/','refresh');
        }

	    function loan_add()
		{

				
				$amount   = $this->input->post('amount');
				$payrate   = $this->input->post('payrate');
				
	    	    $period  = $amount/$payrate;
			  	$data['payrate']    = $payrate;
				$data['description']   = $this->input->post('description');
				$data['balance']    = $amount;
				$data['amount']     = $amount;
				$data['period']     = $period;
				$data['employee_id']  = $this->input->post('employee_id');;
				$data['date_taken'] = date('Y-m-d H:i:s');
				$insert = $this->crud_model->loan_add($data);
				echo json_encode(array("status" => TRUE));
		
		}
		
		function loan_update()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
				$employee_id  = $this->input->post('employee_id');
				$amount   = $this->input->post('amount');
				$payrate   = $this->input->post('payrate');
				$description   = $this->input->post('description');
				
	    	    $period  = $amount/$payrate;
			  				
				$data['payrate']    = $payrate;
				$data['description']   = $description;
				$data['balance']    = $amount;
				$data['amount']     = $amount;
				$data['period']     = $period;
				$data['employee_id']  = $employee_id;
				//$data['date_taken'] = date('Y-m-d H:i:s');
			$this->crud_model->loan_update(array('loan_id' => $this->input->post('loan_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
			
		function loan_delete($id)
		{
		$this->crud_model->delete_loan($id);
		echo json_encode(array("status" => TRUE));
		}
		
		function loan_edit($id)
		{
			$data = $this->crud_model->get_loan($id); 
			echo json_encode($data);
		}
		

	
		
		
		function view_loan()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] 	 = "Loan Details";
			$data["system"]  = "Foc-EMS";
			$data["loan_id"]  = $this->uri->segment(3);
	       	$this->load->view('admin/view_loan',$data);

	    }
	    function edit_loan()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] 	 = "Update Loan";
			$data["system"] 	 = "Foc-EMS";
	    	$data["loan_id"]  = $this->uri->segment(3);
	       	$this->load->view('admin/edit_loan',$data);

	    }

	    function update_loan()
		{

				$employee_id  = $this->input->post('employee_id');
				$loan_id  = $this->input->post('loan_id');
				$amount   = $this->input->post('amount');
				$payrate   = $this->input->post('payrate');
				$description   = $this->input->post('description');
			    $period  = $amount/$payrate;
			  				
				$data['payrate']    = $payrate;
				$data['description']   = $description;
				$data['balance']    = $amount;
				$data['amount']     = $amount;
				$data['period']     = $period;
				//$data['employee_id']  = $employee_id;
			
				//$loan_id = $this->uri->segment(3);
				$this->db->where('loan_id',$loan_id);
				$this->db->update('loans',$data);
	
				 echo "<script>
					 alert('LOAN DETAILS UPDATED SUCCESSFULLY')
					 </script>";
			  	redirect(base_url().'staff/loans/','refresh');
		}
		
		function delete_loan() 
		{
		    $loan_id = $this->uri->segment(3);
			$data['visible']=0;
            $this->db->where('loan_id',$loan_id);
			$this->db->update('loans',$data);
            //$this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url().'staff/loans/','refresh');
        }

	     function add_overtime()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
					$data = [];
					$db = $this->db->select('employee_id')->from('overtime')->where('salary_date',date('F Y'))->get()->result_array();
					if(count($db) > 0)
					{
						foreach($db as $row)
						{ $data[] = $row['employee_id']; }
					}
					$this->db->select('*');
					if(!empty($data))
					$this->db->where_not_in('employee_id',$data);
					$this->db->where('active',1);
					$data['staff'] = $this->db->get('employees')->result_array();
	        $data["page_title"] = "Add Overtime";
			$data["system"] = "Foc-EMS";
			$this->load->view('admin/add_overtime',$data);

	    }

	    function overtime()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"]  = "Overtime List";
			$data["system"] = "Foc-EMS";
			$data['public_amount'] = 0;
            $data['normal_amount'] = 0;
            $data['total_overtime'] = 0;
            $month = date('F');
            $year = date('Y');
            $salary_date = date('F Y');
            $data['counter']= 0;
            $data['overtime']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('overtime','employees.employee_id=overtime.employee_id')
                              ->where('visible',1)
							  ->where('active',1)
                              ->where('overtime.salary_date',$salary_date)
                              ->order_by('date','ASC')
                              ->get()->result_array();
	       	$this->load->view('admin/over_time',$data);

	    }

        function view_overtime()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Overtime Details";
			$data["system"]  = "Foc-EMS";
			$data["overtime_id"]  = $this->uri->segment(3);
	       	$this->load->view('admin/view_overtime',$data);
		}

		function edit_overtime()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Update Overtime";
			$data["overtime_id"] = $this->uri->segment(3);
			$data["system"] 	 = "Foc-EMS";
	       	$this->load->view('admin/edit_overtime',$data);

	    }
	    function delete_overtime() 
		{
		    $overtime_id = $this->uri->segment(3);
			$data['visible']=0;
            $this->db->where('overtime_id',$overtime_id);
			$this->db->delete('overtime',$data);
            //$this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url().'staff/overtime/','refresh');
        }
		

	    function overtime_add()
		{

				$employee_id    = $this->input->post('employee_id');
				$month    = $this->input->post('month');
				$year    = $this->input->post('year');
				$public_hours   = $this->input->post('public_hours');
				$normal_hours   = $this->input->post('normal_hours');
				$bsalary	=	$this->db->get_where('employees',array('employee_id'=>$employee_id))->row()->bsalary;
				$hourly_rate=($bsalary/22)/8;//hourly rate
	 	 
	    	    $cpublic_hours  = $public_hours*2.0;
			    $public_amount = $cpublic_hours*$hourly_rate;
			    $cnormal_hours  = $normal_hours*1.5;
			    $normal_amount = $cnormal_hours*$hourly_rate;//overtime charges
		        $total_overtime = $public_amount + $normal_amount; //overtime
				
				$data['month']      = $month;
				$data['year']      = $year;
				$data['salary_date'] = $month.' '.$year;
				$data['public_hours']      = $public_hours;
				$data['normal_hours']      = $normal_hours ;
				$data['hourly_rate']       = $hourly_rate;
				$data['total_overtime']    = $total_overtime;
				$data['normal_amount']     = $normal_amount;
				$data['public_amount']     = $public_amount;
				$data['employee_id']     = $employee_id;
				$data['date']      = date('Y-m-d H:i:s');
				$insert = $this->crud_model->overtime_add($data);
				redirect(base_url() .'staff/add_overtime', 'refresh');
				$this->session->set_flashdata('message' ,"DATA SAVED SUCCESSFULLY");
       
				
		}
				
		function overtime_update()
		{
				$employee_id    = $this->input->post('employee_id');
				$month    = $this->input->post('month');
				$year    = $this->input->post('year');
				$public_hours   = $this->input->post('public_hours');
				$normal_hours   = $this->input->post('normal_hours');
				$bsalary	=	$this->db->get_where('employees',array('employee_id'=>$employee_id))->row()->bsalary;
				$hourly_rate=($bsalary/22)/8;//hourly rate
	 	 
	    	    $cpublic_hours  = $public_hours*2.0;
			    $public_amount = $cpublic_hours*$hourly_rate;
			    $cnormal_hours  = $normal_hours*1.5;
			    $normal_amount = $cnormal_hours*$hourly_rate;//overtime charges
		        $total_overtime = $public_amount + $normal_amount; //overtime
				
				$data['month']      = $month;
				$data['year']      = $year;
				$data['salary_date'] = $month.' '.$year;
				$data['public_hours']      = $public_hours;
				$data['normal_hours']      = $normal_hours ;
				$data['hourly_rate']       = $hourly_rate;
				$data['total_overtime']    = $total_overtime;
				$data['normal_amount']     = $normal_amount;
				$data['public_amount']     = $public_amount;
				$data['employee_id']     = $employee_id;
				$data['date']      = date('Y-m-d H:i:s');
				$this->crud_model->overtime_update(array('overtime_id' => $this->input->post('overtime_id')),$data);
				echo json_encode(array("status" => TRUE));
		}
		
		function overtime_delete($id)
		{
		$this->crud_model->delete_overtime($id);
		echo json_encode(array("status" => TRUE));
		}
		
		function overtime_edit($id)
		{
			$data = $this->crud_model->get_overtime($id); 
			echo json_encode($data);
		}
		
		
		
		
		
		
		
	
		function pension_list()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] 	 = "Pension List";
			$data['system'] = 'payrollSoft';
			$data['pension_total']=0;
            $data['gla'] =0;
            $data['broker']=0;
            $data['count']=1;
            $month = date('F');
            $year = date('Y');
            $salary_date = date('F Y');
            $data['pp']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('salaries.salary_date',$salary_date)
							  ->where('pension_total !=',0)
                              ->get()->result_array();
            $this->load->view('pension_list',$data);

	    }
		
		

	    function view_pension($param='')
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
			$data["page_title"] = "Pension Details";
			$data['system'] = 'payrollSoft';
			$data["salary_id"]  = $param;
			$employee_id=$this->db->get_where('salaries',array('salary_id' =>$param))->row()->employee_id;
			$data['name']=$this->db->get_where('employees',array('employee_id' =>$employee_id))->row()->name;
	       	$this->load->view('view_pension',$data);

	    }

	     function all_pension($param='')
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
			$data["page_title"] = "Pension summary";
			$data['system'] = 'payrollSoft';
			$data["salary_id"]  = $param;
			$employee_id=$this->db->get_where('salaries',array('salary_id' =>$param))->row()->employee_id;
			$data['name']=$this->db->get_where('employees',array('employee_id' =>$employee_id))->row()->name;
			$data["employee_id"]  = $employee_id;
	       	$this->load->view('all_pension',$data);

	    }
		

	    function payee_list()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Payee List for all years";
			$data['system'] = 'payrollSoft';
			$month = date('F');
            $year = date('Y');
            $salary_date=date('F Y');
            $data['count']=1;
			$data['payeee']=0;
            $data['gloss_salary']=0;
			$data['net_salary'] =0;
            $data['payee']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('payee !=',0)
                              ->get()->result_array();			
	       	$this->load->view('payee_list',$data);

	    }

	    function all_payee($param='')
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Payee Details";
			$data['system'] = 'payrollSoft';
			$data["salary_id"]  = $param;
			$employee_id=$this->db->get_where('salaries',array('salary_id' =>$param))->row()->employee_id;
			$data['name']=$this->db->get_where('employees',array('employee_id' =>$employee_id))->row()->name;
			$data["employee_id"]  = $employee_id;
		   	$this->load->view('all_payee',$data);

	    }
	

    //filters
	//=========================================================================================================

        function filter_depot()
        {


	       	  $depot_id=$this->input->post('depot_id');
	       	  $name=$this->input->post('name');
        	  $data['counter']=1;
              $data['staff']   =   $this->db->select('*')
                                 ->from('employees')
                                 ->join('department','employees.department_id=department.department_id')
                                 ->join('depot','employees.depot_id=depot.depot_id')
                                 ->where('depot.depot_id',$depot_id)
                                 ->where('active',1)
                                 ->order_by('employee_id','DESC')
                                 ->get()->result_array();
               $this->load->view('admin/depot',$data);

        }

         function filter_name()
        {


	       	  $name=$this->input->post('name');
	       	  $depot_id=$this->input->post('depot_id');
	       	  $data['counter']=1;
              $data['staff']   =   $this->db->select('*')
                                 ->from('employees')
                                 ->join('department','employees.department_id=department.department_id')
                                 ->join('depot','employees.depot_id=depot.depot_id')
                                 ->like('name',$name)
                                 //->where('depot.depot_id',$depot_id)
                                 ->where('active',1)
                                 ->order_by('employee_id','DESC')
                                 ->get()->result_array();
               $this->load->view('admin/staff_name',$data);

        }

         function filter_payee()
        {

	       	  	$month=$this->input->post('month');
	       	  	$year=$this->input->post('year');
	       	  	$var_month="All Months";
	            $var_year="All Years";

                if(!empty($year) && empty($month))//year
	            {
         
			    $data['page_title'] = 'payee List for : '. $var_month.' | '.$year;
				$data['title'] = 'payee list for '. $var_month.' | '.$year;
			    $data['count']=1;
                $data['payeee'] = 0;
                $data['gloss_salary'] = 0;
                $data['net_salary'] = 0;
                $data['payee']   =   $this->db->select('*')
				                              ->from('employees')
				                              ->join('salaries','employees.employee_id=salaries.employee_id')
				                              ->where('year',$year)
											   ->where('payee !=',0)
				                              ->get()->result_array();
               $this->load->view('filter_payee',$data);
           		}


                 if(empty($year) && !empty($month))//month
	            {
         
			    $data['page_title'] = 'payee List for : '. $month.' | '.$var_year;
				$data['title'] = 'payee list for  '. $month.' | '.$var_year;
			    $data['count']=1;
                $data['payeee'] = 0;
                $data['gloss_salary'] = 0;
                $data['net_salary'] = 0;
                $data['payee']   =   $this->db->select('*')
				                              ->from('employees')
				                              ->join('salaries','employees.employee_id=salaries.employee_id')
				                              ->where('month',$month)
											   ->where('payee !=',0)
				                              ->get()->result_array();
               $this->load->view('filter_payee',$data);
           		}


                 if(!empty($year) && !empty($month))//month and year
	            {
         
			    $data['page_title'] = 'payee list for : '. $month.' | '.$year;
				$data['title'] = 'payee List for '. $month.' | '.$year;
			    $data['count']=1;
                $data['payeee'] = 0;
                $data['gloss_salary'] = 0;
                $data['net_salary'] = 0;
                $data['payee']   =   $this->db->select('*')
				                              ->from('employees')
				                              ->join('salaries','employees.employee_id=salaries.employee_id')
				                              ->where('month',$month)
				                              ->where('year',$year)
											   ->where('payee !=',0)
				                              ->get()->result_array();
                $this->load->view('filter_payee',$data);
           		}

        }

      

         function filter_pension()
        {

        		$month=$this->input->post('month');
	       	  	$year=$this->input->post('year');
	       	  	$var_month="All Months";
	            $var_year="All Years";

                 if(!empty($year) && empty($month))//year
	            {
         
			    $data['page_title'] = 'Pension List for: '. $var_month.' | '.$year;
				$data['title'] = 'Pension List >> '. $var_month.' | '.$year;
                $data['count']=1;
                $data['pension_total']=0;
                $data['gla'] =0;
                $data['broker']=0;
                $data['pp']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('year',$year)
							  ->where('pension_total !=',0)
                              ->get()->result_array();
               $this->load->view('filter_pension',$data);
           		}

           		if(empty($year) && !empty($month))//month
	            {
         
			    $data['page_title'] = 'Pension List for: '. $month.' | '.$var_year;
				$data['title'] = 'Pension List >> '. $month.' | '.$var_year;
                $data['count']=1;
                $data['pension_total']=0;
                $data['gla'] =0;
                $data['broker']=0;
                $data['pp']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('month',$month)
							  ->where('pension_total !=',0)
                              ->get()->result_array();
               $this->load->view('filter_pension',$data);
           		}

           		 if(!empty($year) && !empty($month))//year and month
	            {
         
			    $data['page_title'] = 'Pension List for: '. $month.' | '.$year;
				$data['title'] = 'Pension List >> '. $month.' | '.$year;
                $data['count']=1;
                $data['pension_total']=0;
                $data['gla'] =0;
                $data['broker']=0;
                $data['pp']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('year',$year)
                              ->where('month',$month)
							  ->where('pension_total !=',0)
                              ->get()->result_array();
               $this->load->view('filter_pension',$data);
           		}
        }

       

			function filter_overtime()
			{
					$year=$this->input->post('year');
					$month=$this->input->post('month');
				  
					if(!empty($year) && empty($month))
					{
			 
					$data['page_title'] = 'Overtime List | '.$year;
					$data['public_amount'] = 0;
					$data['normal_amount'] = 0;
					$data['total_overtime'] = 0;
					$data['count']=1;
					$data['overtime']   =  $this->db->select('*')
												  ->from('employees')
												  ->join('overtime','employees.employee_id=overtime.employee_id')
												  ->where('visible',1)
												  ->where('active',1)
												  ->where('year',$year)
												  ->get()->result_array();
				   $this->load->view('filter_overtime',$data);
				   }

					if(empty($year) && !empty($month))//month
					{
			 
					$data['page_title'] = 'Overtime List | '.$month;
					$data['public_amount'] = 0;
					$data['normal_amount'] = 0;
					$data['total_overtime'] = 0;
					$data['count']=1;
					$data['overtime']   =  $this->db->select('*')
												  ->from('employees')
												  ->join('overtime','employees.employee_id=overtime.employee_id')
												  ->where('visible',1)
												  ->where('active',1)
												  ->where('month',$month)
												  ->get()->result_array();
				   $this->load->view('filter_overtime',$data);
				   }

					if(!empty($year) && !empty($month))//month and year
					{
			 
					$data['page_title'] = 'Overtime List | '.$month.' | '.$year;
					$data['public_amount'] = 0;
					$data['normal_amount'] = 0;
					$data['total_overtime'] = 0;
					$data['count']=1;
					$data['overtime']   =  $this->db->select('*')
												  ->from('employees')
												  ->join('overtime','employees.employee_id=overtime.employee_id')
												  ->where('visible',1)
												  ->where('active',1)
												  ->where('month',$month)
												  ->where('year',$year)
												  ->get()->result_array();
				   $this->load->view('filter_overtime',$data);
				   }
			}


       
			function filter_scheme_bills() 
			{
			
	            $scheme_id=$this->input->post('scheme_id');
	            $year1=$this->input->post('year');
	            $month1=$this->input->post('month');
	            $var_scheme="All Schemes";
	            $var_month="All Months";
	            $var_year="All Years";
	       
	            
	            if(!empty($year1) && empty($month1) && empty($scheme_id))//year
	            {
        		$bd  =   $this->db->query("SELECT * FROM scheme WHERE scheme_id='$scheme_id'");
			    $rr = $bd->row();
				if (isset($rr)):
					$scheme  =	$rr->scheme_name;
				endif;      
			    $data['page_title'] = 'Scheme Bills for: ' .$var_scheme. '| '. $var_month.'| '.$year1;
				$data['title'] = 'Scheme Bills >> '.$var_scheme.' |'. $var_month.' |'.$year1;
                $data['counter']=1;
                $data['amount'] = 0;
		        $data['bill']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('scheme_bill','employees.employee_id=scheme_bill.employee_id')
                              ->join('health_scheme','employees.employee_id=health_scheme.employee_id')
                              ->where('year',$year1)
                              ->where('employees.active',1)
                              ->get()->result_array();               
			    $this->load->view('admin/filter_scheme_bills',$data);
				}


              
	            if(empty($year1) && !empty($month1) && empty($scheme_id)) //month
	            {
        		$bd  =   $this->db->query("SELECT * FROM scheme WHERE scheme_id='$scheme_id'");
			    $rr = $bd->row();
				if (isset($rr)):
					$scheme  =	$rr->scheme_name;
				endif;      
			    $data['page_title'] = 'Scheme Bills for: ' .$var_scheme. '| '. $month1.'| '.$var_year;
				$data['title'] = 'Scheme Bills >> '.$var_scheme.' |'. $month1.' |'.$var_year;
                $data['counter']=1;
                $data['amount'] = 0;
		        $data['bill']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('scheme_bill','employees.employee_id=scheme_bill.employee_id')
                              ->join('health_scheme','employees.employee_id=health_scheme.employee_id')
                              ->where('month',$month1)
                              ->where('employees.active',1)
                              ->get()->result_array();               
			    $this->load->view('admin/filter_scheme_bills',$data);
				}

				if(empty($year1) && empty($month1) && !empty($scheme_id)) //scheme
	            {
        		$bd  =   $this->db->query("SELECT * FROM scheme WHERE scheme_id='$scheme_id'");
			    $rr = $bd->row();
				if (isset($rr)):
					$scheme  =	$rr->scheme_name;
				endif;      
			    $data['page_title'] = 'Scheme Bills for: ' .$scheme. '| '. $var_month.'| '.$var_year;
				$data['title'] = 'Scheme Bills >> '.$scheme.' |'. $var_month.' |'.$var_year;
                $data['counter']=1;
                $data['amount'] = 0;
		        $data['bill']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('scheme_bill','employees.employee_id=scheme_bill.employee_id')
                              ->join('health_scheme','employees.employee_id=health_scheme.employee_id')
                              ->where('health_scheme.scheme_id',$scheme_id)
                              ->where('employees.active',1)
                              ->get()->result_array();               
			    $this->load->view('admin/filter_scheme_bills',$data);
				}

				if(!empty($year1) && !empty($month1) && empty($scheme_id)) //month and year
	            {
        		$bd  =   $this->db->query("SELECT * FROM scheme WHERE scheme_id='$scheme_id'");
			    $rr = $bd->row();
				if (isset($rr)):
					$scheme  =	$rr->scheme_name;
				endif;      
			    $data['page_title'] = 'Scheme Bills for: ' .$var_scheme. '| '. $month1.'| '.$year1;
				$data['title'] = 'Scheme Bills >> '.$var_scheme.' |'. $month1.' |'.$year1;
                $data['counter']=1;
                $data['amount'] = 0;
		        $data['bill']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('scheme_bill','employees.employee_id=scheme_bill.employee_id')
                              ->join('health_scheme','employees.employee_id=health_scheme.employee_id')
                              ->where('month',$month1)
                              ->where('year',$year1)
                              ->where('employees.active',1)
                              ->get()->result_array();               
			    $this->load->view('admin/filter_scheme_bills',$data);
				}

				if(empty($year1) && !empty($month1) && !empty($scheme_id)) //scheme and month
	            {
        	    $bd  =   $this->db->query("SELECT * FROM scheme WHERE scheme_id='$scheme_id'");
			    $rr = $bd->row();
				if (isset($rr)):
					$scheme  =	$rr->scheme_name;
				endif;      
			    $data['page_title'] = 'Scheme Bills for: ' .$scheme. '| '. $month1.'| '.$var_year;
				$data['title'] = 'Scheme Bills >> '.$scheme.' |'. $month1.' |'.$var_year;
                $data['counter']=1;
                $data['amount'] = 0;
		        $data['bill']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('scheme_bill','employees.employee_id=scheme_bill.employee_id')
                              ->join('health_scheme','employees.employee_id=health_scheme.employee_id')
                              ->where('month',$month1)
                              ->where('health_scheme.scheme_id',$scheme_id)
                              ->where('employees.active',1)
                              ->get()->result_array();               
			    $this->load->view('admin/filter_scheme_bills',$data);
				}

				if(!empty($year1) && !empty($month1) && empty($scheme_id)) //scheme and year
	            {
        		$bd  =   $this->db->query("SELECT * FROM scheme WHERE scheme_id='$scheme_id'");
			    $rr = $bd->row();
				if (isset($rr)):
					$scheme  =	$rr->scheme_name;
				endif;      
			    $data['page_title'] = 'Scheme Bills for: ' .$scheme. '| '. $var_month.'| '.$year1;
				$data['title'] = 'Scheme Bills >> '.$scheme.' |'. $var_month.' |'.$year1;
                $data['counter']=1;
                $data['amount'] = 0;
		        $data['bill']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('scheme_bill','employees.employee_id=scheme_bill.employee_id')
                              ->join('health_scheme','employees.employee_id=health_scheme.employee_id')
                              ->where('health_sheme.scheme_id',$scheme_id)
                              ->where('year',$year1)
                              ->where('employees.active',1)
                              ->get()->result_array();               
			    $this->load->view('admin/filter_scheme_bills',$data);
				}

				if(!empty($year1) && !empty($month1) && !empty($scheme_id)) //scheme,year and month
	            {
        		$bd  =   $this->db->query("SELECT * FROM scheme WHERE scheme_id='$scheme_id'");
			    $rr = $bd->row();
				if (isset($rr)):
					$scheme  =	$rr->scheme_name;
				endif;      
			    $data['page_title'] = 'Scheme Bills for: ' .$scheme. '| '. $month1.'| '.$year1;
				$data['title'] = 'Scheme Bills >> '.$scheme.' |'. $month1.' |'.$year1;
                $data['counter']=1;
                $data['amount'] = 0;
		        $data['bill']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('scheme_bill','employees.employee_id=scheme_bill.employee_id')
                              ->join('health_scheme','employees.employee_id=health_scheme.employee_id')
                              ->where('month',$month1)
                              ->where('year',$year1)
                              ->where('health_scheme.scheme_id',$scheme_id)
                              ->where('employees.active',1)
                              ->get()->result_array();               
			    $this->load->view('admin/filter_scheme_bills',$data);
				}

	          

			}
			
			
			
		function filter_staff()
        {
        		$depot_id=$this->input->post('depot_id');
        		$department_id=$this->input->post('department_id');
				  
				if(!empty($depot_id) && empty($department_id))//year
	            {
				$depot=$this->db->get_where('depot',array('depot_id'=>$depot_id))->row()->depot;
				//$department=$this->db->get_where('department',array('department_id'=>$department_id))->row()->department;
             
			    $data['page_title'] = 'Staff list | '. $depot;
                $data['count']=1;
            	$data['staff'] =  $this->db->select('*')->from('employees')->where('depot_id',$depot_id)->where('active',1)->get()->result_array();
		        $this->load->view('filter_staff',$data);
                }

                if(empty($depot_id) && !empty($department_id))//year
	            {
				//$depot=$this->db->get_where('depot',array('depot_id'=>$depot_id))->row()->depot;
				$department=$this->db->get_where('department',array('department_id'=>$department_id))->row()->department;
             
         
			    $data['page_title'] = 'Staff list | '. $department;
                $data['count']=1;
            	$data['staff'] =  $this->db->select('*')->from('employees')->where('department_id',$department_id)->where('active',1)->get()->result_array();
		        $this->load->view('filter_staff',$data);
                }

              	if(!empty($depot_id) && !empty($department_id))//year
	            {
				$depot=$this->db->get_where('depot',array('depot_id'=>$depot_id))->row()->depot;
				$department=$this->db->get_where('department',array('department_id'=>$department_id))->row()->department;
             
			    $data['page_title'] = 'Staff list | '. $depot.' | '.$department;
                $data['count']=1;
            	$data['staff'] =  $this->db->select('*')->from('employees')->where('depot_id',$depot_id)->where('department_id',$department_id)->where('active',1)->get()->result_array();
		        $this->load->view('filter_staff',$data);
                }
        }
		
		function filter_bank()
        {
        		$bank_id=$this->input->post('bank_id');
				if(!empty($bank_id))//year
	            {
				$bank=$this->db->get_where('bank',array('bank_id'=>$bank_id))->row()->bank;
			    $data['page_title'] = 'Bank list | '. $bank;
                $data['count']=1;
				$data['bank'] = $this->db->select('*')->from('employees')->join('bank_details','employees.employee_id=bank_details.employee_id')
															  ->join('bank','bank.bank_id=bank_details.bank_id')
															  ->where('bank.bank_id',$bank_id)
															  ->where('employees.active',1)
															  ->get()->result_array();
		        $this->load->view('filter_bank',$data);
                }

        }


		function filter_band()
        {
        		$year=$this->input->post('year');
				$data['page_title'] = 'tax band | '. $year;
                $data['count']=1;
				$data['tax']  =   $this->db->select('*')->from('tax_config')->where('year',$year)->get()->result_array();	
		        $this->load->view('filter_band',$data);
      
        }







}
