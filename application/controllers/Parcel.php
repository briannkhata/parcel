<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

		function __construct()
		{
			parent::__construct();
		}

	    function dashboard()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			$data['page_title']  = 'Dashboard';
			$data['system']  = 'payrollSoft';
			$this->load->view('dashboard',$data);			
		}
		function scheme_type_add()
		{
		
			$data['scheme_name'] = $this->input->post('scheme_name');
			$this->db->insert('scheme',$data);
			echo json_encode(array("status" => TRUE));
		}
		
		function membership_add()
		{
		
			$data['membership'] = $this->input->post('membership');
			$data['charge'] = $this->input->post('charge');
			$this->db->insert('membership',$data);
			echo json_encode(array("status" => TRUE));
		}
		function scheme_type_update()
		{
			$scheme_id = $this->input->post('scheme_id');
			$data['scheme_name'] = $this->input->post('scheme_name');
			$this->db->where('scheme_id',$scheme_id);
			$this->db->update('scheme',$data);
			echo json_encode(array("status" => TRUE));
		}
		function scheme_type_delete($id)
		{
		$data['deleted']=1;
		$this->db->where('scheme_id',$id);
		$this->db->update('scheme',$data);
		echo json_encode(array("status" => TRUE));
		}
		
		function membership_delete($id)
		{
		$data['deleted']=1;
		$this->db->where('membership_id',$id);
		$this->db->update('membership',$data);
		echo json_encode(array("status" => TRUE));
		}
			
		function membership_update()
		{
			$membership_id = $this->input->post('membership_id');
			$data['membership'] = $this->input->post('membership');
			$data['charge'] = $this->input->post('charge');
			$this->db->where('membership_id',$membership_id);
			$this->db->update('membership',$data);
			echo json_encode(array("status" => TRUE));
		}
		function scheme_type_edit($id)
		{
			$data = $this->crud_model->get_scheme_type($id); 
			echo json_encode($data);
		}
		
		function membership_edit($id)
		{
			$data = $this->crud_model->get_membership($id); 
			echo json_encode($data);
		}
		function scheme_type()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Scheme types';
			$this->load->view('scheme_types',$data);		
				
		}
		
		function membership()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Membership';
			$this->load->view('membership',$data);		
				
		}
		
		function filter_bonus() 
		{
	            $month=$this->input->post('month');
	            $year=$this->input->post('year');	
				$data['amount']=0;   
				$data['count']=1;     	            
	            if(!empty($year) && empty($month))
	            {

					$data['page_title'] = 'Bonuses for: ' .$year. '| All Months';
					$data['bonus']  = $this->db->select('*')->from('bonus')->where('year',$year)->order_by('bonus_id','DESC')->get()->result_array();    
					$this->load->view('filter_bonus',$data);
				}

				if(empty($year) && !empty($month))
	            {
					$data['page_title'] = 'Bonuses for: ' .$month. '| All Years';
					$data['bonus']  = $this->db->select('*')->from('bonus')->where('month',$month)->order_by('bonus_id','DESC')->get()->result_array();    
					$this->load->view('filter_bonus',$data);
				}
				if(!empty($year) && !empty($month))
	            {
					$data['page_title'] = 'Bonuses for: ' .$month. '| '.$year;
					$data['bonus']  = $this->db->select('*')
					->from('bonus')
					->where('month',$month)
					->where('year',$year)
					->order_by('bonus_id','DESC')
					->get()->result_array();    
					$this->load->view('filter_bonus',$data);
				}
		}
		
		function staff_list()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Staff List';
			$data['count']=1;
            $data['staff'] =  $this->db->select('*')->from('employees')->where('active',1)->order_by('employee_id','ASC')->get()->result_array();
			$this->load->view('staff',$data);		
				
		}
		
		function filter_payslips()  /// by frank
			{
				if ($this->session->userdata('account_type') != 'admin')
				redirect(base_url(), 'refresh');
				$data['page_title']  = 'Payslips';
				$year_id 			 = $this->input->post('year_id');
				$month_id 			 = $this->input->post('month_id'); 
				$data['month']     	=  $this->db->get_where('month', array('month_id'=>$month_id))->row()->month;
				$data['year']       =  $this->db->get_where('year', array('year_id'=>$year_id))->row()->year;
				$data['company'] = $this->db->get("labo")->row()->name;
				$data['system']  = 'payrollSoft';
				$this->load->view('refresh_payslips',$data);			
			}
		
		function create_positions($param1 = '', $param2 = '', $param3 = '')
		{
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
		
			if($param1 == 'save')
				{
					$data['job'] 	 =  $this->input->post('job');
					$this->db->insert('jobs',$data);
					$this->session->set_flashdata('message','Position saved successfully');
					$data['system'] = 'payrollSoft';
					$data['page_title'] = 'Positions';
					$this->load->view('create_positions',$data);
				}
				
			if($param1 == 'update')
				{
					$data['job'] 	 =  $this->input->post('job');
					$this->db->where('job_id', $param2);
					$this->db->update('jobs', $data);
					$this->session->set_flashdata('message','Position updated successfully');
					$data['system'] = 'payrollSoft';
					$data['page_title'] = 'Positions';
					$this->load->view('create_positions',$data);
				}
			
			if($param1 == 'delete')
				{
					$data['status'] 	 =  '0';
					$this->db->where('job_id', $param2);
					$this->db->update('jobs', $data);
					$this->session->set_flashdata('message','Position deleted successfully');
					$data['system'] = 'payrollSoft';
					$data['page_title'] = 'Positions';
					$this->load->view('create_positions',$data);
				}
				
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Create Positions';
            $this->load->view('create_positions',$data);		
				
		}
		
		function settings()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			$data['page_title']  = 'Settings';
			$data['company'] = $this->db->get("labo")->row()->name;
			$data['system']  = 'payrollSoft';
			$this->load->view('settings',$data);			
		}
		function add_staff()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Add Staff';
            $this->load->view('add_staff',$data);		
				
		}
		function add_salary()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Add Salary for any month in the past';
            $this->load->view('add_salary',$data);		
				
		}
		
		function add_salaryy()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Add Salary';
            $this->load->view('add_salaryy',$data);		
				
		}
		
		function fura($param1='', $param2='')
			{
				if ($this->session->userdata('account_type') != 'admin')
				redirect(base_url());
			
				if($param1 == 'update_membership')
				{
					$data['membership_number']  = $this->input->post('membership_number');
					//echo $data['membership_number']; return;
					$this->db->where('employee_id', $param2);
					$this->db->update('health_scheme', $data);
				}
				
				$data['system'] = 'payrollSoft';
				$data['page_title'] = 'Health Scheme';
				$this->load->view('health_scheme',$data);	return;	
					
			}
		
		
		function add_salary2($param='')
		{
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url(),'refresh');
		    $page_data['system']  	    = 'payrollSoft';
			$page_data['page_title']    = 'Add Salary | '.date('F Y').' | '.$this->db->get_where('employees',array('employee_id'=>$param))->row()->name;
			$page_data["employee_id"]  = $param;
		    $this->load->view('add_salary2',$page_data);
	    }
		function edit_salary($param='',$param2='',$param3='',$param4='')
		{
			 
		    if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url(),'refresh');
			$name=$this->db->get_where('employees',array('employee_id'=>$param2))->row()->name;
		    $data["page_title"]  = "Edit Salaries";
			$data["system"]  = "payrollSoft";
			$data["salary_id"] = $param;
			$data["employee_id"] = $param2;
			$data["month"] = $param3;
			$data["year"] = $param4;
		   	$this->load->view('edit_salary',$data);
		}
		function payslip($param='',$param2='',$param3='',$param4='')
		{
			 
		    if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url(),'refresh');
			$name=$this->db->get_where('employees',array('employee_id'=>$param2))->row()->name;
		    $data["page_title"]  = "Payslip  | ".$name;
			$data["system"]  = "payrollSoft";
			$data["salary_id"] = $param;
			$data["employee_id"] = $param2;
			$data["month"] = $param3;
			$data["year"] = $param4;
		   	$this->load->view('payslip',$data);
		}
		
		function payslips()
		{
			 
		    if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url(),'refresh');
			$data["page_title"]  = "Payslips";
			$data["system"]  = "payrollSoft";
			$this->load->view('payslips',$data);
		}

		
		function edit_staff($param='')
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Edit Staff';
            $data['staff'] =  $this->db->select('*')->from('employees')->where('employee_id',$param)->get()->result_array();
			$this->load->view('edit_staff',$data);			
		}
		function view_staff($param='')
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Staff Details';
            $data['staff'] =  $this->db->select('*')->from('employees')->where('employee_id',$param)->get()->result_array();
			$this->load->view('view_staff',$data);			
				
		}
		
		
		function bank_list()
		{
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Bank List';
			$data['count']=1;
            $this->load->view('bank_list',$data);		
				
		}
		
		function bank_list_export()
		{
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Bank List';
			$data['count']=1;
            $this->load->view('bank_list_export',$data);	
        }
		
		function overtime_list()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Overtime List';
			$data['count']=1;
            $this->load->view('overtime_list',$data);		
				
		}
		
		function other_members_add()
		{
			
			$data['health_scheme_id'] = $this->input->post('health_scheme_id');
			$data['other_members'] = $this->input->post('other_members');
			$data['deduct'] = $this->input->post('deduct');
			$data['d_amount'] = $this->input->post('d_amount');	
			
			/*$toto = $this->$this->get_where('sdeduct',array('health_scheme_id'=>$data['health_scheme_id']))->total;
			$qq['total'] = $this->input->post('d_amount') + $toto;

			$this->db->where('health_scheme_id',$data['health_scheme_id']);
			$this->db->update('sdeduct',$qq);*/
		
			
			$this->db->insert('other_members',$data);
			
			$fuck['other_members'] = 1 ;
			$this->db->where('health_scheme_id',$data['health_scheme_id'] );
			$this->db->update('health_scheme',$fuck);
			echo json_encode(array("status" => TRUE));
		}
			function other_member_delete($id)
		{
		$data['deleted']=1;
		$this->db->where('other_members_id',$id);
		$this->db->update('other_members',$data);
		echo json_encode(array("status" => TRUE));
		}
		
			function view_scheme($param='')
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Health Scheme Details';
			$data['health_scheme_id'] = $param;

            //$data['staff'] =  $this->db->select('*')->from('health_scheme')->where('health_scheme_id',$param)->get()->result_array();
			$this->load->view('view_scheme',$data);			
				
		}
		
		
		function other_members_update()
		{
		
			$data['health_scheme_id'] = $this->input->post('health_scheme_id');
			$data['other_members'] = $this->input->post('other_members');
			$data['deduct'] = $this->input->post('deduct');
			$data['d_amount'] = $this->input->post('d_amount');

			$other_members_id = $this->input->post('other_members_id');
			$this->db->where('other_members_id',$other_members_id);
			$this->db->update('other_members',$data);
			echo json_encode(array("status" => TRUE));
		}
		
		function health_scheme()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Health Scheme | '.date('F Y');
			$data['count']=1;
            $this->load->view('health_scheme',$data);		
				
		}
		
		function scheme_bill()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Scheme Bills | '.date('F Y');
			$data['count']=1;
            $this->load->view('scheme_bill',$data);		
				
		}
		
		function arrears()
		{
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Arrears';
			$data['count']=1;
            $this->load->view('arrears',$data);		
		}
		
		function departments()
		{
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Departments';
			$data['count']=1;
            $this->load->view('department',$data);		
		}
		
		function depots()
		{
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Depots';
			$data['count']=1;
            $this->load->view('depot',$data);		
		}
		
		
		function bonus()
		{
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'bonuses';
			$data['count']=1;
            $this->load->view('bonus',$data);		
				
		}
		
		function leave()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Leave';
			$data['count']=1;
            $this->load->view('leave',$data);		
				
		}
		function loans()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Loans';
			$data['count']=1;
            $this->load->view('loans',$data);		
				
		}
		
		function salary_schedule()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$salary_date = date('F Y');
            $next_date1 = strtotime($salary_date." + 1 months");//next month
            $next_date = date('F Y',$next_date1 );
            $prev_date1 = strtotime($salary_date."- 1 months");//previous month
            $prev_date = date('F Y',$prev_date1);
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Salary Schedule for '. $salary_date;
			$data['count']=1;
			$data['ss']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
                              ->join('bank','bank_details.bank_id=bank.bank_id')
							  ->where('employees.active',1)
                              ->where('salary_date',$prev_date)
							  ->order_by('name','ASC')
                              ->get()->result_array();          
         	$this->load->view('salary_schedule',$data);		
				
		}
			
		function salary_list()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
			redirect(base_url());
			$salary_date = date('F Y');
            $next_date1 = strtotime($salary_date." + 1 months");//next month
            $next_date = date('F Y',$next_date1 );
            $prev_date1 = strtotime($salary_date."- 1 months");//previous month
            $prev_date = date('F Y',$prev_date1);
			$data['system'] = 'payrollSoft';
			$data['page_title'] = 'Salary list for all years';
			$data['count']=1;
			$data['net_salary']=0;
			$data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('salaries.salary_date',$salary_date)
										  ->order_by('name','ASC')
			                              ->get()->result_array();             
         	$this->load->view('salary_list',$data);		
				
		}
		
		
		
		

		
		

			
		function facilities()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['page_title']  = 'Facilities';
			$data['count']=1;
			$data['company'] = $this->db->get("lodge")->row()->name;   
		    $data['facility']  = $this->db->select('*')->from('facility')->join('category','facility.category_id=category.category_id')->get()->result_array();
			$data['system']  = 'payrollSoft';
			$this->load->view('facilities',$data);			
		}
		
		function booking()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['page_title']  = 'Booking';
			$data['count']=1;
			$data['company'] = $this->db->get("lodge")->row()->name;   
			$data['booking']  = $this->db->select('*')->from('booking')->order_by('booking_date','DESC')->get()->result_array();
			$data['system']  = 'payrollSoft';
			$this->load->view('booking',$data);			
		}
		
			
		function clients()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['page_title']  = 'Clients';
			$data['count']=1;
			$data['company'] = $this->db->get("lodge")->row()->name;   
			$data['client']  = $this->db->select('*')->from('clients')->order_by('visit_date','DESC')->get()->result_array();
			$data['system']  = 'payrollSoft';
			$this->load->view('clients',$data);			
		}
				
		function restuarant()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['page_title']  = 'Restuarant';
			$data['company'] = $this->db->get("lodge")->row()->name;   
			$data['equipment']  = $this->db->select('*')->from('equipments')->join('suppliers','equipments.supplier_id=suppliers.supplier_id')->get()->result_array();
		
			$data['system']  = 'payrollSoft';
			$this->load->view('restuarant',$data);			
		}
		
		
	
	####BOOIKNH FUNCTIONS####
		function leave_add()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['employee_id'] = $this->input->post('employee_id');
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');
			$data['leave_days']   = $this->input->post('leave_days');
			$data['leave_grant']  = $this->input->post('leave_grant');
			$data['days_remaining'] = $this->input->post('days_remaining');
			$data['days_used'] = $this->input->post('days_used');
     		$data['date_added'] = date('Y-m-d H:i:s');
			$insert = $this->crud_model->leave_add($data);
			echo json_encode(array("status" => TRUE));
	
		}
		
		function leave_update()
		{
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$data['employee_id'] = $this->input->post('employee_id');
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');
			$data['leave_days']   = $this->input->post('leave_days');
			$data['leave_grant']  = $this->input->post('leave_grant');
			$data['days_remaining'] = $this->input->post('days_remaining');
			$data['days_used'] = $this->input->post('days_used');
     		$data['date_added'] = date('Y-m-d H:i:s');
			$this->crud_model->leave_update(array('extra_id' => $this->input->post('extra_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
			
		function leave_delete($id)
		{
		$this->crud_model->delete_leave($id);
		echo json_encode(array("status" => TRUE));
		}
		
		function leave_edit($id)
		{
			$data = $this->crud_model->get_leave($id); 
			echo json_encode($data);
		}
		
		###END OF BOOKING FUNCTIONS#####
		
		function salary_delete($id)
		{
		$this->crud_model->delete_salary($id);
		echo json_encode(array("status" => TRUE));
		}
		
		
		
		
		
		
		function addbill()
		{
			$client_id=$this->input->post('client_id');
		    $total_amount = 0;
			$total_minus_discount = 0;
			$discount = $this->input->post('discount');
			$total_bill = $this->input->post('total_bill');
			$data['total_amount']=$total_bill-$discount;
			$amount_tendered = $this->input->post('amount_tendered');
			$data['user_id']=$this->session->userdata('user_id');
			$data['amount_tendered'] = $amount_tendered;
			$data['client_id'] = $client_id;
			$data['discount'] = $discount;
			$data['month'] = date('F');
			$data['year'] = date('Y');
			$data['change'] = $amount_tendered - $total_bill;
		    $this->db->insert('bills',$data);
			
			$data['client_id'] = $client_id;
			$data['company'] = $this->db->get("lodge")->row()->name;   
			$data['prev']  = $this->db->select('*')->from('clients')->where('client_id',$client_id)->get()->result_array();
			$data['count']=1;
			$data['system']  = 'LabSoft';
			$data['page_title']  = 'Receipt Preview';
			$this->load->view('receipt',$data);	
				
		}
		
	
		function add_parameters()
		{
			
			$test_id = $this->input->post('test_id');
			//$client_id = $this->input->post('client_id');
			$data['test_id']=$test_id;
			$data['page_title']  = 'Next Client';
			//$client_id=$this->uri->segment(3);
			$data['client_id']=$client_id;
			$data['company'] = $this->db->get("labo")->row()->name;   
			$data['coda']  = $this->db->select('*')->from('clients')->join('requested_tests','requested_tests.client_id=clients.client_id')->join('tests','requested_tests.test_id=tests.test_id')->where('clients.client_id',$client_id)->group_by('clients.client_id')->get()->result_array();
			$data['teste']  = $this->db->select('*')->from('clients')->join('requested_tests','requested_tests.client_id=clients.client_id')->join('tests','requested_tests.test_id=tests.test_id')->where('clients.client_id',$client_id)->get()->result_array();
			$data['fay']= $this->db->select('*')->from('test_parameters')->where('test_id',$test_id)->get()->result_array();
			$data['system']  = 'LabSoft';
			$data['page_title']  = 'Add Parameters';
			$this->load->view('add_parameters',$data);
		 
		}
		
		function add_params1()
		{
			
			//$test_id = $this->input->post('test_id');
			//$client_id0 = $this->input->post('client_id0');
			//$data['test_id']=$test_id;
			$client_id=$this->uri->segment(3);
			$data['client_id']=$client_id;
			$data['company'] = $this->db->get("labo")->row()->name;   
			$data['coda']  = $this->db->select('*')->from('clients')->join('requested_tests','requested_tests.client_id=clients.client_id')->join('tests','requested_tests.test_id=tests.test_id')->where('clients.client_id',$client_id)->where('requested_tests.done',0)->group_by('clients.client_id')->get()->result_array();	
			//$data['fay']= $this->db->select('*')->from('test_parameters')->where('test_id',$test_id)->get()->result_array();
			$data['system']  = 'LabSoft';
			//$data['client_id0']  = $client_id0;
			
			//$data['page_title']  = 'Test Parameters for : '.$this->db->get_where('tests',array('test_id'=>$test_id))->row()->test_name;
			$data['page_title']  = 'Test Parameter';
			$this->load->view('add_params1',$data);
		 
		}
		function add_params($param1='',$param2='')
		{
			$test_id=$param1;
			$client_id=$param2;
			$data['test_id']=$test_id;
			$data['company'] = $this->db->get("labo")->row()->name;   
			$data['fay']= $this->db->select('*')->from('test_parameters')->where('test_id',$test_id)->get()->result_array();
			$data['system']  = 'LabSoft';
			$data['client_id']  = $client_id;	
			$data['page_title']  = 'Add Test Results for : '.$this->db->get_where('tests',array('test_id'=>$test_id))->row()->test_name;
			$this->load->view('add_params',$data);
		 
		}
		
			function add_parameta($param1='',$param2='',$param3='')
			{
				$group_id=$param1;
				$test_id=$param2;
				$client_id=$param3;
			
				$data['test_id']=$test_id;
				$data['company'] = $this->db->get("labo")->row()->name;   
				$data['zina']= $this->db->select('*')->from('tests')->join('requested_tests','requested_tests.test_id=tests.test_id')->join('group','group.group_id=tests.group_id')->where('group.group_id',$group_id)->where('requested_tests.client_id',$client_id)->get()->result_array();
				//$data['zina']= $this->db->select('*')->from('tests')->where('group_id',$group_id)->get()->result_array();

				$data['system']  = 'LabSoft';
				$data['client_id']  = $client_id;	
				$data['test_id']  = $test_id;	
				//$data['client_id']  = $client_id;	
				$data['page_title']  = $this->db->get_where('group',array('group_id'=>$group_id))->row()->group_name;
				$this->load->view('add_parameta',$data);
			 
			}
		
		function params_redirect()
		{
			
			$test_id = $this->input->post('test_id');
			$client_id0 = $this->input->post('client_id0');
			$data['test_id']=$test_id;
			$client_id=$this->uri->segment(3);
			$this->session->set_userdata('client_id',$client_id);
			$data['client_id']=$client_id;
			$data['company'] = $this->db->get("labo")->row()->name;   
			$data['coda']  = $this->db->select('*')->from('clients')->join('requested_tests','requested_tests.client_id=clients.client_id')->join('tests','requested_tests.test_id=tests.test_id')->where('clients.client_id',$client_id0)->group_by('clients.client_id')->get()->result_array();	
			$data['fay']= $this->db->select('*')->from('test_parameters')->where('test_id',$test_id)->get()->result_array();
			$data['system']  = 'LabSoft';
			$data['client_id0']  = $client_id0;
			$data['done']=1;
			
			//$data['page_title']  = 'Test Parameters for : '.$this->db->get_where('tests',array('test_id'=>$test_id))->row()->test_name;
			$data['page_title']  = 'Test Parameter';
			$this->load->view('add_params',$data);
		 
		}
		
	
	
		
		function client_view()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['page_title']  = 'Patient Details';
			$client_id=$this->uri->segment(3);
			$data['count']=1;
			$data['client_id']=$client_id;
			$data['company'] = $this->db->get("labo")->row()->name;   
			$data['details']  = $this->db->select('*')->from('clients')->where('client_id',$client_id)->get()->result_array();
			$data['system']  = 'LabSoft';
			$this->load->view('client_view',$data);			
		}
		
		
		 function staff()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['count']=1;
			$data['company'] = $this->db->get("lodge")->row()->name;
            $data['staff']  = $this->db->select('*')->from('staff')->where('active',1)->get()->result_array();
			$data['page_title']  = 'Staff List';
			$data['system']  = 'LabSoft';
			$this->load->view('staff',$data);			
		}
		function rooms()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['count']=1;
			$data['company'] = $this->db->get("lodge")->row()->name;
            $data['room']  = $this->db->select('*')->from('room')->get()->result_array();
			$data['page_title']  = 'Room List';
			$data['system']  = 'payrollSoft';
			$this->load->view('rooms',$data);			
		}
		 
		function test_parameters()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['count']=1;
			$data['company'] = $this->db->get("labo")->row()->name;
            $data['test_p']  = $this->db->select('*')->from('test_parameters')->get()->result_array();
			$data['page_title']  = 'Tests Parameters';
			$data['system']  = 'LabSoft';
			$this->load->view('test_parameters',$data);			
		}
		
		function test_type()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['count']=1;
			$data['company'] = $this->db->get("labo")->row()->name;
            $data['testtype']  = $this->db->select('*')->from('test_type')->get()->result_array();
			$data['page_title']  = 'Test Types';
			$data['system']  = 'LabSoft';
			$this->load->view('test_type',$data);			
		}
		
		function suppliers()
		{
			if ($this->session->userdata('account_type') != 'staff')
            redirect(base_url(), 'refresh');
			$data['count']=1;
			$data['company'] = $this->db->get("labo")->row()->name;
            $data['supplier']  = $this->db->select('*')->from('suppliers')->get()->result_array();
			$data['page_title']  = 'Equipments Suppliers';
			$data['system']  = 'LabSoft';
			$this->load->view('suppliers',$data);			
		}
				
		function users()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Users";
			$data['count']=1;
			$data['company'] = $this->db->get("labo")->row()->name;
			$data['users']  = $this->db->select('*')->from('users')->join('usertype','users.usertype_id=usertype.usertype_id')->where('user_id !=',$this->session->userdata('user_id'))->get()->result_array();
		   	$data["system"]  = "LabSoft";
		   	$this->load->view('users',$data);

	    }
		
		function sales()
		{

		 if ($this->session->userdata('account_type') != 'staff')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Sales";
			$data['discount']=0;
			$data['total_amount']=0;
			$data['amount_tendered']=0;   
			$data['change']=0; 
			$data['count']=1;     	
			$data['company'] = $this->db->get("lodge")->row()->name;
			$data['bills']  = $this->db->select('*')->from('sales')->order_by('bill_id','DESC')->get()->result_array();
		   	$data["system"]  = "payrollSoft";
		   	$this->load->view('sales',$data);

	    }
		
		function filter_sales() 
		{
	            $month=$this->input->post('month');
	            $year=$this->input->post('year');	
				$data['discount']=0;
				$data['total_amount']=0;
				$data['amount_tendered']=0;   
				$data['change']=0; 
				$data['counter']=1;     	            
	            if(!empty($year) && empty($month))
	            {
					$data['page_title'] = 'Sales for: ' .$year. '| All Months';
					$data['bills']  = $this->db->select('*')->from('bills')->where('year',$year)->order_by('bill_id','DESC')->get()->result_array();    
					$this->load->view('filter_sales',$data);
				}

				if(empty($year) && !empty($month))
	            {
					$data['page_title'] = 'Sales for: ' .$month. '| All Years';
					$data['bills']  = $this->db->select('*')->from('bills')->where('month',$month)->order_by('bill_id','DESC')->get()->result_array();    
					$this->load->view('filter_sales',$data);
				}
				if(!empty($year) && !empty($month))
	            {
					$data['page_title'] = 'Sales for: ' .$month. '| '.$year;
					$data['bills']  = $this->db->select('*')
					->from('bills')
					->where('month',$month)
					->where('year',$year)
					->order_by('bill_id','DESC')
					->get()->result_array();    
					$this->load->view('filter_sales',$data);
				}
		}
		
		function tested_update()
		{
			$client_id = $this->input->post('client_id');
			$data['tested'] = 1;
			$this->db->where('client_id',$client_id);
			$this->db->update('clients',$data);
			echo json_encode(array("status" => TRUE));
		}

		###START OF CLINIC FUNCTIONS####


		
		function scheme_add()
		{
		
			$data['scheme_id'] = $this->input->post('scheme_id');
			$data['membership_id'] = $this->input->post('membership_id');
			$data['membership_number'] = $this->input->post('membership_number');
			$data['employee_id'] = $this->input->post('employee_id');
			$data['description'] = $this->input->post('description');
			$insert = $this->crud_model->scheme_add($data);
			echo json_encode(array("status" => TRUE));
		}
		function scheme_update()
		{
			$data['scheme_id'] = $this->input->post('scheme_id');
			$data['membership_id'] = $this->input->post('membership_id');
			$data['membership_number'] = $this->input->post('membership_number');
			$data['employee_id'] = $this->input->post('employee_id');
			$data['description'] = $this->input->post('description');
			$this->crud_model->scheme_update(array('health_scheme_id' => $this->input->post('health_scheme_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
			
		function scheme_delete($id)
		{
		$this->crud_model->delete_scheme($id);
		echo json_encode(array("status" => TRUE));
		}
		function scheme_edit($id)
		{
			$data = $this->crud_model->get_scheme($id); 
			echo json_encode($data);
		}
		
		function schemebill_edit_new($param1 = '',$param2 = '') // by frank
		{
			if ($param1 == 'update') 
				{
					$data['amount']    		= $this->input->post('amount');
					$this->db->where('scheme_bill_id',$param2);
					$this->db->update('scheme_bill',$data);
				}
				$data['system'] = 'payrollSoft';
				$data['page_title'] = 'Scheme Bill';
				$this->load->view('scheme_bill',$data);	return;	
		}
		
		function schemebill_add()
		{
		
			$data['employee_id'] = $this->input->post('employee_id');
			$data['amount'] = $this->input->post('amount');
			$insert = $this->crud_model->schemebill_add($data);
			echo json_encode(array("status" => TRUE));
		}
		function schemebill_update()
		{
			$data['employee_id'] = $this->input->post('employee_id');
			$data['amount'] = $this->input->post('amount');
			$this->crud_model->schemebill_update(array('scheme_bill_id' => $this->input->post('scheme_bill_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
			
		function schemebill_delete($id)
		{
		$this->crud_model->delete_schemebill($id);
		echo json_encode(array("status" => TRUE));
		}
		function schemebill_edit($id)
		{
			$data = $this->crud_model->get_schemebill($id); 
			echo json_encode($data);
		}
		
		###END CLINIC FUNCTIONS#####
		
		
		
		
		###SUPPLIER FUNCTIONS###
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
			
			$data['month']  = $month;
			$data['year'] = $year;
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
			echo json_encode(array("status" => TRUE));
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
		###END OF SUPPLIER FUNCTIONS###
		
		## TEST RESULTS ADD##
		function test_result_add()
		{
					
				$test_parameter_id = $this->input->post('test_parameter_id');
				foreach($test_parameter_id as $key => $a)
				{		
					$test_result = $this->input->post('test_result');
					$units = $this->input->post('units');
					$ref_range = $this->input->post('ref_range');
					$test_result = $this->input->post('test_result');
					$reported_by= $this->input->post('reported_by');
					$approved_by= $this->input->post('approved_by');
					$comment = $this->input->post('comment');
					$test_id  = $this->input->post('test_id');
					$client_id  = $this->input->post('client_id');
					$data = array(
								'test_parameter_id' => $a,
								'test_result' => $test_result[$key],
								'test_id' => $test_id[$key],
								'client_id' => $client_id,
								'units' => $units[$key],
								'ref_range' => $ref_range[$key],
								'comment' => $comment,
								'reported_by' => $reported_by,
								'approved_by' => $approved_by
								);
								$insert = $this->crud_model->test_result_add($data);
								$client_id=$this->db->insert_id();
								$data0['done']=1;
								$data90['tested']=1;
								$this->db->where('test_id',$test_id[$key]);
								$this->db->where('client_id',$client_id);
								$this->db->update('requested_tests',$data0);//update table requests
									
								$this->db->where('client_id',$client_id);
								$this->db->update('clients',$data90);//update client table to indicate that the client is alredy tested	
								$data['page_title']="Medical Report";
								//redirect(base_url().'admin/report','refresh');
								$this->load->view('report',$data);
				}
		
		}
		
	
	
		
		###TEST PARAMETERS FUNCTIONS#####
		function test_parameter_add()
		{
	
			$test_id   = $this->input->post('test_id');
			$parameter_category  = $this->input->post('parameter_category');
				 
			 if ($this->input->post('test_parameter')) { 
					$test_parameter =	$this->input->post('test_parameter',true);
							
					foreach ($test_parameter as $i => $a) { // need index to match other properties
					$data = array(
					'test_parameter' => $a,
					'test_id' => $test_id,
					'parameter_category' => $parameter_category
					);
					$insert = $this->crud_model->test_parameter_add($data);
					echo json_encode(array("status" => TRUE));
					}    
	
				}
		}
			
		function test_parameter_update()
		{
			$data['test_parameter']   = $this->input->post('test_parameter');
			$data['test_id']   = $this->input->post('test_id');
			$data['parameter_category']   = $this->input->post('parameter_category');
			$this->crud_model->test_parameter_update(array('test_parameter_id' => $this->input->post('test_parameter_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
		function test_parameter_delete($id)
		{
		$this->crud_model->delete_test_parameter($id);
		echo json_encode(array("status" => TRUE));
		}
		function test_parameter_edit($id)
		{
			$data = $this->crud_model->get_test_parameter($id); 
			echo json_encode($data);
		}
		####END OF TEST PARAMETERS####
		
		
		
		
		

		###TEST FUNCTIONS######
		function bank_add()
		{	
			$employee_id  = $this->input->post('employee_id');
			$data['employee_id']  = $employee_id;
			$data['bank_id']   = $this->input->post('bank_id');
			$data['account_number']   = $this->input->post('account_number');
			$data['account_type']   = $this->input->post('account_type');
			$data['branch']   = $this->input->post('branch');
			$data['city']   = $this->input->post('city');
			$insert = $this->crud_model->bank_add($data);
			echo json_encode(array("status" => TRUE));
		}
		
		function bank_edit($id)
		{
			$data = $this->crud_model->get_bank($id); 
			echo json_encode($data);
		}
		function bank_update()
		{
			$employee_id  = $this->input->post('employee_id');
			$data['employee_id']  = $employee_id;
			$data['bank_id']   = $this->input->post('bank_id');
			$data['account_number']   = $this->input->post('account_number');
			$data['account_type']   = $this->input->post('account_type');
			$data['branch']   = $this->input->post('branch');
			$data['city']   = $this->input->post('city');
			$this->crud_model->bank_update(array('bank_details_id' => $this->input->post('bank_details_id')),$data);
			echo json_encode(array("status" => TRUE));
		}

		function bank_delete($id)
		{
		$this->crud_model->delete_bank($id);
		echo json_encode(array("status" => TRUE));
		}
		
		
		function category_add()
		{	
			$data['category_name']   = $this->input->post('category_name');
			$data['category_details']   = $this->input->post('category_details');
			$insert = $this->crud_model->category_add($data);
			echo json_encode(array("status" => TRUE));
		}
		
		function category_edit($id)
		{
			$data = $this->crud_model->get_category($id); 
			echo json_encode($data);
		}
		function category_update()
		{
			$data['category_name']   = $this->input->post('category_name');
			$data['category_details']   = $this->input->post('category_details');
			$this->crud_model->category_update(array('category_id' => $this->input->post('category_id')),$data);
			echo json_encode(array("status" => TRUE));
		}

		function category_delete($id)
		{
		$this->crud_model->delete_category($id);
		echo json_encode(array("status" => TRUE));
		}
		
		
	
		
		###END OF TEST FUNCTIONS#####
		

		###USER FUNCTIONS####
		function user_add()
		{	
			
			$file_name = $this->crud_model->generateRandomString();
			$data['photo'] = $file_name .'.jpg';
			$data['username'] = $this->input->post('username');
			$data['fname'] = $this->input->post('fname');
			$data['lname'] = $this->input->post('lname');
			$data['password'] = MD5($this->input->post('password'));
			$data['usertype_id'] = $this->input->post('usertype_id');
			//$data['staff_id'] = $this->input->post('staff_id');
			move_uploaded_file($_FILES['photo']['tmp_name'],'assets/profile/'.$file_name .'.jpg');
			$insert = $this->crud_model->user_add($data);
			redirect(base_url().'admin/users', 'refresh');
			//echo json_encode(array("status" => TRUE));
		}
		function user_edit($id)
		{
			$data = $this->crud_model->get_user($id); 
			echo json_encode($data);
		}
		function user_update()
		{
			$file_name = $this->crud_model->generateRandomString();
			$data['photo'] = $file_name .'.jpg';
			$data['username'] = $this->input->post('username');
			$data['fname'] = $this->input->post('fname');
			$data['lname'] = $this->input->post('lname');
			$data['password'] = MD5($this->input->post('password'));
			$data['usertype_id'] = $this->input->post('usertype_id');
			//$data['staff_id'] = $this->input->post('staff_id');
			move_uploaded_file($_FILES['photo']['tmp_name'],'assets/profile/'.$file_name .'.jpg');
			$this->crud_model->user_update(array('user_id' => $this->input->post('user_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
		function user_delete($id)
		{
		$this->crud_model->delete_user($id);
		echo json_encode(array("status" => TRUE));
		}
		###END OF USER FUNCTIONS####
		
		
		####START OF EQUPMENTS FUNCTIONS####
		function equipment_add()
		{	
			
			$data['equipment_name']   = $this->input->post('equipment_name');
			$data['equipment_price']   = $this->input->post('equipment_price');
			$data['date_bought']  = $this->input->post('date_bought');
			$data['supplier_id'] = $this->input->post('supplier_id');
			$insert = $this->crud_model->equipment_add($data);
			echo json_encode(array("status" => TRUE));
		}
		
		function equipment_update()
		{
			$data['equipment_name']   = $this->input->post('equipment_name');
			$data['equipment_price']   = $this->input->post('equipment_price');
			$data['date_bought']  = $this->input->post('date_bought');
			$data['supplier_id'] = $this->input->post('supplier_id');
			$this->crud_model->equipment_update(array('equipment_id' => $this->input->post('equipment_id')),$data);
			echo json_encode(array("status" => TRUE));
		}
			
		function equipment_delete($id)
		{
		$this->crud_model->delete_equipment($id);
		echo json_encode(array("status" => TRUE));
		}
		function equipment_edit($id)
		{
			$data = $this->crud_model->get_equipment($id); 
			echo json_encode($data);
		}
	
		####END OF EQUIPMENT FUNCTIONS#####
		
		###FUNCTION ADD SETTINGS###
		function add_settings()
		{
			$file_name = $this->crud_model->generateRandomString();
			$data['logo'] = $file_name .'.jpg';
			$data['name'] = $this->input->post('name');
			//$data['note'] = $this->input->post('note');
			$data['post_box'] = $this->input->post('post_box');
			$data['telphone'] = $this->input->post('telphone');
			$data['address'] = $this->input->post('address');
			$data['phone'] = $this->input->post('phone');
			$data['location'] = $this->input->post('location');
			$data['email'] = $this->input->post('email');
			$data['street_address'] = $this->input->post('street_address');
			$data['building_name'] = $this->input->post('building_name');
			$data['city'] = $this->input->post('city');
			$data['country'] = $this->input->post('country');
			move_uploaded_file($_FILES['logo']['tmp_name'],'assets/logos/'.$file_name .'.jpg');
			$this->db->update('labo',$data);
			$data['system'] = "LabSoft";
			$data['page_title'] = "Settings";
			$this->session->set_flashdata('message','Settings saved successfully');
			$this->load->view('settings',$data);
		}
		###END SETTINHGS FUNCTIONS###

		
		###STAFF FUNCTIONS#####		
		function staff_add()
		{	
			
			$file_name = $this->crud_model->generateRandomString();
			$data['photo'] = $file_name .'.jpg';
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
			$data['job_id']          = $this->input->post('job_id');
			$data['contactaddress'] = $this->input->post('contactaddress');
			$data['tea_allowance']  = $this->input->post('tea_allowance');
			$data['on_pension']     = $this->input->post('on_pension');
			$data['date_added']     = date('Y-m-d H:i:s');
            $this->db->insert('employees',$data);
			move_uploaded_file($_FILES['photo']['tmp_name'],'assets/profile/'.$file_name .'.jpg');
			redirect(base_url().'admin/add_staff', 'refresh');
		}
		function staff_update()
		{
			$file_name = $this->crud_model->generateRandomString();
			$data['photo'] = $file_name .'.jpg';
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
			$data['job_id']          = $this->input->post('job_id');
			$data['contactaddress'] = $this->input->post('contactaddress');
			$data['tea_allowance']  = $this->input->post('tea_allowance');
			$data['on_pension']     = $this->input->post('on_pension');
			$data['date_updated']     = date('Y-m-d H:i:s');
			$employee_id = $this->input->post('employee_id');
			$this->db->where('employee_id',$employee_id);
            $this->db->update('employees',$data);
			move_uploaded_file($_FILES['photo']['tmp_name'],'assets/profile/'.$file_name .'.jpg');
			redirect(base_url().'admin/staff_list', 'refresh');
		}

		/*function staff_delete($id)
		{
		$this->crud_model->delete_staff($id);
		echo json_encode(array("status" => TRUE));
		}*/
		
		function staff_delete($param='')
		{
			$data['active']     = 0;
			$this->db->where('employee_id',$param);
            $this->db->update('employees',$data);
			redirect(base_url().'admin/staff_list', 'refresh');
		}
		
		function activate_staff($param='')
		{
			$data['active']     = 1;
			$this->db->where('employee_id',$param);
            $this->db->update('employees',$data);
			redirect(base_url().'admin/staff_list', 'refresh');
		}
		
		######END OF STAFF FUCNTIONS####
		
		
		
		#####CLIENT FUNCTIONS#####
	/*	function client_add()
		{
						
			$data['name']   = $this->input->post('name');
			$data['user_id'] = $this->session->userdata('user_id');
			$data['gender']  = $this->input->post('gender');
			$data['address'] = $this->input->post('address');
			$data['phone'] = $this->input->post('phone');
			$data['pay_mode'] = $this->input->post('pay_mode');
			$data['request_date'] = $this->input->post('request_date');
			$data['email'] = $this->input->post('email');
			$data['age'] = $this->input->post('age');
			$data['clinic_id'] = $this->input->post('clinic_id');
			$data['visit_date'] = date('Y-m-d H:i:s');
			$data['doctor_name'] = $this->input->post('doctor_name');
			$insert = $this->crud_model->client_add($data);
			$client_id=$this->db->insert_id();
	
	      if ($this->input->post('test_id')) { 
					$test_id =	$this->input->post('test_id',true);
					foreach ($test_id as $i => $a) { // need index to match other properties
					$amount=$this->db->get_where('tests',array('test_id'=>$a))->row()->amount;//get the price of the seleced tests
					$page_data = array(
					'test_id' => $a,
					'client_id' => $client_id,
					'amount' => $amount
					);
					$this->db->insert('requested_tests',$page_data);
					echo json_encode(array("status" => TRUE));
					}    
	
				}
				
		}*/
		
							
		function client_update()
		{
						
			$client_id = $this->input->post('client_id');		
			$data['name']   = $this->input->post('name');
			$data['user_id'] = $this->session->userdata('user_id');
			$data['gender']  = $this->input->post('gender');
			$data['address'] = $this->input->post('address');
			$data['phone'] = $this->input->post('phone');
			$data['pay_mode'] = $this->input->post('pay_mode');
			$data['request_date'] = $this->input->post('request_date');
			$data['email'] = $this->input->post('email');
			$data['age'] = $this->input->post('age');
			$data['clinic_id'] = $this->input->post('clinic_id');
			$data['updated_at'] = date('Y-m-d H:i:s');
			$data['tested'] = 1;
			$data['doctor_name'] = $this->input->post('doctor_name');
			$this->crud_model->client_update(array('client_id' => $this->input->post('client_id')),$data);
			
	      /*if ($this->input->post('test_id'))
				{ 
					$test_id =	$this->input->post('test_id',true);
						foreach ($test_id as $i => $a)
						{ // need index to match other properties
						$amount=$this->db->get_where('tests',array('test_id'=>$a))->row()->amount;//get the price of the seleced tests
						$page_data = array(
						'test_id' => $a,
						'amount' => $amount
						);			
						$this->db->where('client_id',$client_id);
						$this->db->update('requested_tests',$page_data);
						echo json_encode(array("status" => TRUE));
						}    
	
				}*/	
				
		}
		
		function client_delete($id)
		{
		$this->crud_model->delete_client($id);
		echo json_encode(array("status" => TRUE));
		}
		function client_edit($id)
		{
			$data = $this->crud_model->get_client($id); 
			echo json_encode($data);
		}
		####END OF CLIENT FUNCTIONS####
	
	
		function customer_edit($id)
		{
			$data = $this->crud_model->get_customer($id); 
			echo json_encode($data);
		}
		

		function customer_delete($id)
		{
		$this->crud_model->delete_customer($id);
		echo json_encode(array("status" => TRUE));
		}
		
		 function payroll()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Payroll";
			$data['system'] = 'payrollSoft';
			$salary_month = date('F Y');
			$next_month = strtotime($salary_month."+ 1 months");//next month
			$n_month = date('F Y',$next_month );
			$prev_month = strtotime($salary_month."- 1 months");//previous month
			$p_month = date('F Y',$prev_month );
			$data["payroll"]  = $this->db->select('*')->from('salaries')->join('employees','employees.employee_id=salaries.employee_id')->where('month',date('F'))->where('year',date('Y'))->get()->result_array();
		   	$this->load->view('payroll',$data);

	    }
	
}
