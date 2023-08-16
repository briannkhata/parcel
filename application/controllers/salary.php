<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Salary extends CI_Controller {

		function __construct()
		{
			parent::__construct();
		}

		 function add_taxband(){

			 if ($this->session->userdata('account_type') != 'admin')
				  redirect(base_url(),'refresh');
		        $page_data['system']  	    = 'payrollSoft';
				$page_data['page_title']    = 'New Tax Band';
		       	$this->load->view('add_taxband',$page_data);
		    }

		      function edit_taxband($param=''){

			 if ($this->session->userdata('account_type') != 'admin')
				  redirect(base_url(),'refresh');
		        $page_data['system']  	    = 'payrollSoft';
		        $page_data['tax_config_id'] = $param;
				$page_data['page_title']    = 'New Tax Band';
		       	$this->load->view('edit_taxband',$page_data);

		    }

		      function pension_para(){

			 if ($this->session->userdata('account_type') != 'admin')
				  redirect(base_url(),'refresh');
		        $page_data['system']  	    = 'payrollSoft';
				$page_data['count']= 1;
				$page_data['page_title']    = 'Pension Parameters';
				$page_data['pp']  =   $this->db->select('*')->from('pension_para')->where('deleted',0)->get()->result_array();		
		       	$this->load->view('pension_para',$page_data);

		    }

		     function add_pension_para(){

			 if ($this->session->userdata('account_type') != 'admin')
				  redirect(base_url(),'refresh');
		        $page_data['system']  	    = 'payrollSoft';
				$page_data['page_title']    = 'New Pension Parameters';
		       	$this->load->view('add_pension_para',$page_data);
		    }

		 
		      function edit_pension_para($param=''){
			 if ($this->session->userdata('account_type') != 'admin')
				  redirect(base_url(),'refresh');
		        $page_data['system']  	    = 'payrollSoft';
				$page_data['page_title']    = 'Edit Pension Parameters';	
				$page_data['id'] = $param;
		       	$this->load->view('edit_pension_para',$page_data);
		    }



		    function pp_add(){
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
			}else{
			    $company = $this->input->post('company');
		    	$staff = $this->input->post('staff');
		    	$gla = $this->input->post('gla');
		    	$broker = $this->input->post('broker');
			}

			//$month_id  = $this->input->post('month_id',TRUE);
		    $year  = $this->input->post('year',TRUE);
		    $month  = $this->input->post('month',TRUE);

			foreach ($month as $key => $a) {
			   $data = array(
			   		'month' => $a,
					'gla' => $gla,
					'broker' => $broker,
					'year' => $year,
					'staff' => $staff,
					'current' => $current,
					'company' => $company
								);
			    $this->db->insert('pension_para',$data);

			}
			$page_data['system']  	    = 'payrollSoft';
			$page_data['page_title']    = 'add Pension Parameters';	
			$this->load->view('add_pension_para',$page_data);
		}
		
		function pp_update(){
			if ($this->session->userdata('account_type') != 'admin')
            redirect(base_url(), 'refresh');
			
			$id = $this->input->post('id');
			$data['gla'] = $this->input->post('gla');
		    $data['broker'] = $this->input->post('broker');
			$data['company'] = $this->input->post('company');
		    $data['staff'] = $this->input->post('staff');
		    $data['current']  = $this->input->post('current');
			//$data['month']  = $this->input->post('month');
			//$data['year']  = $this->input->post('year');
			$this->db->where('id',$id);
			$this->db->update('pension_para',$data);
			//echo json_encode(array("status" => TRUE));
			redirect('Salary/pension_para');

		}
			
		function pp_delete($id)
		{
			$data['deleted'] = 1;
			$this->db->where('id',$id);
			$this->db->update('pension_para',$data);
			echo json_encode(array("status" => TRUE));
		}
	
		function pp_edit($id)
		{
			$data = $this->crud_model->get_pp($id); 
			echo json_encode($data);
		}

			function filter_payroll() 
			{
			
	            $bank_id=$this->input->post('bank_id');
	            $depot_id=$this->input->post('depot_id');
	            $year=$this->input->post('year');
	            $month=$this->input->post('month');
	        
	            
	            if(!empty($year) && empty($month) && empty($depot_id))//year
	            {
			    $data['page_title'] = 'PAYROLL - | ' .$year;
			    $data["payroll"]  = $this->db->select('*')
				->from('salaries')
				->join('employees','employees.employee_id=salaries.employee_id')
				->join('salary_change','employees.employee_id=salary_change.employee_id')
			    ->where('salary_change.year',$year)
				->where('employees.active',1)
				->group_by('employees.employee_id')
				->get()->result_array();        
			    //$this->load->view('filter_payroll',$data);
				}

				 if(empty($year) && !empty($month) && empty($depot_id))//year
	            {
			    $data['page_title'] = 'PAYROLL - | ' .$month;
			    $data['month']=$month;

			    $data["payroll"]  = $this->db->select('*')
				->from('salaries')
				->join('employees','employees.employee_id=salaries.employee_id')
				->join('salary_change','employees.employee_id=salary_change.employee_id')
			    ->where('salary_change.month',$month)
			    //->where('overtime.month',$month)
				->where('employees.active',1)
				->group_by('employees.employee_id')
				->get()->result_array();        
			    //$this->load->view('filter_payroll1',$data);
				}

				 if(empty($year) && empty($month) && empty($bank_id) && !empty($depot_id))//year
	            {
 				$data['page_title'] = 'PAYROLL - | ' .$this->db->get_where('depot',array('depot_id' =>$depot_id , ))->row()->depot;
				$data["payroll"]  = $this->db->select('*')
				->from('salaries')
				->join('employees','employees.employee_id=salaries.employee_id')
				->join('salary_change','employees.employee_id=salary_change.employee_id')
			    ->where('depot_id',$depot_id)
				->where('employees.active',1)
				->group_by('employees.employee_id')
				->get()->result_array();        
			    //$this->load->view('filter_payroll',$data);
				}

		

				if(!empty($year) && !empty($month) && empty($depot_id))//year
	            {
 				$data['page_title'] = 'PAYROLL - | ' .$year.' | '.$month;
 				$data['month']=$month;

				 $data["payroll"]  = $this->db->select('*')
				->from('salaries')
				->join('employees','employees.employee_id=salaries.employee_id')
				->join('salary_change','employees.employee_id=salary_change.employee_id')
			    ->where('salary_change.month',$month)
			    ->where('salaries.year',$year)
    			->where('employees.active',1)
    			->group_by('employees.employee_id')
				->get()->result_array();        
			    //$this->load->view('filter_payroll',$data);
				}

				if(!empty($year) && empty($month) && !empty($depot_id))//year
	            {
 				$data['page_title'] = 'PAYROLL - | ' .$year.' | '.$this->db->get_where('depot',array('depot_id' =>$depot_id , ))->row()->depot;
				$data["payroll"]  = $this->db->select('*')
				->from('salaries')
				->join('employees','employees.employee_id=salaries.employee_id')
				->join('salary_change','employees.employee_id=salary_change.employee_id')
			    ->where('depot_id',$depot_id)
			    ->where('salary_change.year',$year)
			    ->where('salaries.year',$year)
    			->where('employees.active',1)
    			->group_by('employees.employee_id')
				->get()->result_array();        
			    //$this->load->view('filter_payroll',$data);
				}
   

				if(empty($year) && !empty($month) && !empty($depot_id))//year
	            {
			    $data['page_title'] = 'PAYROLL - | ' .$month.' | '.$this->db->get_where('depot',array('depot_id' =>$depot_id , ))->row()->depot;
			
			    $data["payroll"]  = $this->db->select('*')
				->from('salaries')
				->join('employees','employees.employee_id=salaries.employee_id')
				->join('salary_change','employees.employee_id=salary_change.employee_id')
			    ->where('salary_change.month',$month)
			    ->where('salaries.month',$month)
   			    //->where('overtime.month',$month)
			    ->where('depot_id',$depot_id)
    			->where('employees.active',1)
    		    ->group_by('employees.employee_id')
				->get()->result_array();        
			    //$this->load->view('filter_payroll',$data);
				}

				



				if(!empty($year) && !empty($month) && !empty($depot_id))//year
	            {
			    $data['page_title'] = 'PAYROLL - | ' .$year.' | '.$month.' | '.$this->db->get_where('depot',array('depot_id' =>$depot_id , ))->row()->depot;
			    $data["payroll"]  = $this->db->select('*')
				->from('salaries')
				->join('employees','employees.employee_id=salaries.employee_id')
				->join('salary_change','employees.employee_id=salary_change.employee_id')
			    ->where('salary_change.month',$month)
			    ->where('salary_change.year',$year)
			    ->where('salaries.month',$month)
			    ->where('salaries.year',$year)
			    //->where('overtime.month',$month)
			    //->where('overtime.year',$year)
			    //->where('bank_id',$bank_id)
			    ->where('depot_id',$depot_id)
    			->where('employees.active',1)
    			->group_by('employees.employee_id')
				->get()->result_array();        
			    //$this->load->view('filter_payroll',$data);
				}
			    $this->load->view('filter_payroll',$data);


			}




			function create_salary() //generate salary for any date
			{

                $employee_id  = $this->input->post('employee_id');
				$month  = $this->input->post('month');
				$year  = $this->input->post('year');
				$salary_date= $month.' '.$year;
				
				$check = $this->db->select('*')->from('salaries')->where('employee_id',$employee_id)->where('salary_date',$salary_date)->get()->result_array();
			    if(count($check) > 0)
				{
				$err= "Salary for ".$month .' | '.$year." is already available";
				$this->session->set_flashdata('message',$err); 
				$dataw['system'] = 'payrollSoft';
			    $dataw['page_title'] = 'Add Salary for any month in the past';
                $this->load->view('add_salary',$dataw);	
				}

				$bsalary	=	$this->db->get_where('employees',array('employee_id'=>$employee_id))->row()->bsalary;
			    $on_pension	=	$this->db->get_where('employees',array('employee_id'=>$employee_id))->row()->on_pension;
				
				//loans
                $lona  =   $this->db->query("SELECT * FROM loans WHERE employee_id='$employee_id'");
			    $row = $lona->row();
				   if (isset($row)):
					$loan	    =	$row->payrate;
					$payrate	=	$row->payrate;
		    		$amount	    =	$row->amount;
					$balance	=	$row->balance;
				  else:
				  	$loan	    = 0;
					$payrate	= 0;
		    		$amount	    = 0;
					$balance	= 0;
				endif;
				
				//overtime
 				$ovt  =   $this->db->query("SELECT * FROM overtime WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row1 = $ovt->row();
				   if (isset($row1)):
					$total_overtime   =	$row1->total_overtime;
				  else:
				  	$total_overtime	  = 0;
				endif;
				
				//Bonus
				$bonus =   $this->db->query("SELECT * FROM bonus WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row0 = $bonus->row();
				   if (isset($row0)):
					$bonus   =	$row0->amount;
				  else:
				  	$bonus = 0;
				endif;
				
				//Arreas
				$arr =   $this->db->query("SELECT * FROM arrears WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row00 = $arr->row();
				   if (isset($row00)):
					$arrear   =	$row00->amount;
				  else:
				  	$arrear = 0;
				endif;

				//tea allowance
				$tea =   $this->db->query("SELECT * FROM employees WHERE employee_id='$employee_id'");
			    $row2 = $tea->row();
				   if (isset($row2)):
					$tea_allowance   =	$row2->tea_allowance;
				  else:
				  	$tea_allowance	  = 0;
				endif;

				//health bill
				$hb =   $this->db->query("SELECT * FROM scheme_bill WHERE employee_id='$employee_id'");
			    $row3 = $hb->row();
				   if (isset($row3)):
					$health_bill   =	$row3->amount;
				  else:
				  	$health_bill	  = 0;
				endif;				
				
				if($on_pension == 1):
					$pep =   $this->db->query("SELECT * FROM pension_para WHERE current = 1 ");
				    $row0 = $pep->row();
					   if (isset($row0)):
			   			$pension_personal   = $bsalary*(($row0->staff)/100);
			   			$pension_company   = $bsalary*(($row0->company)/100);
						$pension_total   = $pension_personal + $pension_company;
						$gla = ($bsalary * (($row0->gla)/100));
						$broker = ($bsalary * (($row0->broker)/100));
					         else:
						$pension_personal  = 0;
						$pension_company   = 0;
						$pension_total   = 0;
						$gla=0;
					endif;
			    endif;
				
				$gloss_salary = $bsalary + $total_overtime + $tea_allowance + $bonus + $arrear;//total earnings
				$salary = $gloss_salary;//taxable salary

				//tax parameters
                $taxona  =   $this->db->query("SELECT * FROM tax_config WHERE current = 1 ");
			    $roww = $taxona->row();
				if (isset($roww)){
					$band1_top    =	$roww->band1_top;
					$band1_rate	=	($roww->band1_rate)/100;
					$band2_top    =	$roww->band2_top;
					$band2_rate	=	($roww->band2_rate)/100;
					$band3_top    =	$roww->band3_top;
					$band3_rate	=	($roww->band3_rate)/100;
					$band4_top    =	$roww->band4_top;
					$band4_rate	=	($roww->band4_rate)/100;
				}else{
					$band1_top    = 0;
					$band1_rate	  = 0;
					$band2_top    = 0;
					$band2_rate	  = 0;
					$band3_top    = 0;
					$band3_rate	  = 0;
					$band4_top    = 0;
					$band4_rate	  = 0;
				}

			

				$band1 = $band2 = $band3 = $band4 = 0;
				if($salary > $band3_top) 
				{
					$band4 = ($salary - $band3_top) * $band4_rate;
					$salary = $band3_top;
				}

				if($salary > $band2_top) 
				{
					$band3 = ($salary - $band2_top) * $band3_rate;
					$salary = $band2_top;
				}

				if($salary > $band1_top)
				{
					$band2 = ($salary - $band1_top) * $band2_rate;
					$salary = $band1_top;
				}

				$band1 = $salary * $band1_rate;
				$payee = $band1 + $band2 + $band3 + $band4;//total PAYEE
				$net_salary = $gloss_salary - ($pension_personal + $payee + $loan + $d_amount);//net salary
				
				$user_id = $this->session->userdata('user_id');
			  	$fname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->fname;
				$lname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->lname;
				$data['generated_by'] = $fname.' '.$lname;
				
			  				
				$data['payee'] = $payee;
				$data['pension_personal']    = $pension_personal;
				$data['pension_company']    = $pension_company;
				$data['pension_total']    = $pension_total;
				$data['gloss_salary']    = $gloss_salary;
				$data['net_salary']    = $net_salary;
				$data['gla']     = $gla;
				$data['broker']     = $broker;
				$data['month']     = $month;
				$data['year']     = $year;
				$data['employee_id']     = $employee_id;
				$data['salary_date'] = $salary_date;
				$data['date_generated'] = date('Y-m-d H:i:s');
				$this->db->insert('salaries',$data);
				$salary_id = $this->db->insert_id();
				
				//update employee
				$data000['salary_date']  = $salary_date;
				$this->db->where('employee_id',$employee_id);
				$this->db->update('employees',$data000);
				
				//update loan
				$data00['balance']  = $balance - $payrate;
				$data00['date_paid']  = date('Y-m-d H:i:s');
				$data00['amount_returned']  = $amount - $balance;
				$this->db->where('employee_id',$employee_id);
				$this->db->update('loans',$data00);
				
				$this->session->set_flashdata('message','SALARY ADDED SUCCESSFULLY'); 
				$page_data['system'] = 'payrollSoft';
			    $page_data['page_title'] = 'Add Salary for any month in the past';
                $this->load->view('add_salary',$page_data);
				//$this->load->view('salary_list',$data);
				return;
			}

			function create_salare() //generate salary for any date
			{

                $employee_id  = $this->input->post('employee_id');
				$month  = $this->input->post('month');
				$year  = $this->input->post('year');
				$salary_date= $month.' '.$year;
			
				$bsalary	=	$this->db->get_where('salary_change',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year,'visible'=>1))->row()->salary;
			    $on_pension	=	$this->db->get_where('employees',array('employee_id'=>$employee_id))->row()->on_pension;
				
				//loans
                $lona  =   $this->db->query("SELECT * FROM loans WHERE employee_id='$employee_id'");
			    $row = $lona->row();
				   if (isset($row)):
					$loan	    =	$row->payrate;
					$payrate	=	$row->payrate;
		    		$amount	    =	$row->amount;
					$balance	=	$row->balance;
				  else:
				  	$loan	    = 0;
					$payrate	= 0;
		    		$amount	    = 0;
					$balance	= 0;
				endif;
				
				//overtime
 				$ovt  =   $this->db->query("SELECT * FROM overtime WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row1 = $ovt->row();
				   if (isset($row1)):
					$total_overtime   =	$row1->total_overtime;
				  else:
				  	$total_overtime	  = 0;
				endif;
				
				//Bonus
				$bonus =   $this->db->query("SELECT * FROM bonus WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row0 = $bonus->row();
				   if (isset($row0)):
					$bonus   =	$row0->amount;
				  else:
				  	$bonus = 0;
				endif;
				
				//Arreas
				$arr =   $this->db->query("SELECT * FROM arrears WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row00 = $arr->row();
				   if (isset($row00)):
					$arrear   =	$row00->amount;
				  else:
				  	$arrear = 0;
				endif;
				
				
				$d_amount = 0;
				$nn =   $this->db->query("SELECT * FROM health_scheme WHERE employee_id ='$employee_id' AND other_members = 1");
			    $row2 = $nn->row();
				   if (isset($row2)){
						$health_scheme_id   =	$row2->health_scheme_id;
						$hh =   $this->db->get_where('other_members',array('health_scheme_id' =>$health_scheme_id,'deduct' =>1,'deleted'=>0))->result_array();
						foreach($hh as $row){
						  $d_amount = $d_amount + $row['d_amount'];
				  }
				}else{
				  	$d_amount = 0;
				  }
				
		
		
				//tea allowance
				$tea =   $this->db->query("SELECT * FROM employees WHERE employee_id='$employee_id'");
			    $row2 = $tea->row();
				   if (isset($row2)):
					$tea_allowance   =	$row2->tea_allowance;
				  else:
				  	$tea_allowance	 = 0;
				endif;

				//health bill
				$hb =   $this->db->query("SELECT * FROM scheme_bill WHERE employee_id='$employee_id'");
			    $row3 = $hb->row();
				   if (isset($row3)):
					$health_bill   =	$row3->amount;
				  else:
				  	$health_bill	  = 0;
				endif;				
				
				if($on_pension == 1):
					$pep =   $this->db->query("SELECT * FROM pension_para WHERE month='$month' AND year='$year'");
				    $row0 = $pep->row();
					   if (isset($row0)):
			   			$pension_personal   = $bsalary*(($row0->staff)/100);
			   			$pension_company   = $bsalary*(($row0->company)/100);
						$pension_total   = $pension_personal + $pension_company;
						$gla = ($bsalary * (($row0->gla)/100));
						$broker = ($bsalary * (($row0->broker)/100));
					         else:
						$pension_personal  = 0;
						$pension_company   = 0;
						$pension_total   = 0;
						$gla=0;
					endif;
			    endif;
				
				$gloss_salary = $bsalary + $total_overtime + $tea_allowance + $bonus + $arrear;//total earnings
				$salary = $gloss_salary;//taxable salary

				//tax parameters
                $taxona  =   $this->db->query("SELECT * FROM tax_config WHERE  month='$month' AND year='$year'");
			    $roww = $taxona->row();
				if (isset($roww)){
					$band1_top    =	$roww->band1_top;
					$band1_rate	=	($roww->band1_rate)/100;
					$band2_top    =	$roww->band2_top;
					$band2_rate	=	($roww->band2_rate)/100;
					$band3_top    =	$roww->band3_top;
					$band3_rate	=	($roww->band3_rate)/100;
					$band4_top    =	$roww->band4_top;
					$band4_rate	=	($roww->band4_rate)/100;
				}else{
					$band1_top    = 0;
					$band1_rate	  = 0;
					$band2_top    = 0;
					$band2_rate	  = 0;
					$band3_top    = 0;
					$band3_rate	  = 0;
					$band4_top    = 0;
					$band4_rate	  = 0;
				}

			

				$band1 = $band2 = $band3 = $band4 = 0;
				if($salary > $band3_top) 
				{
					$band4 = ($salary - $band3_top) * $band4_rate;
					$salary = $band3_top;
				}

				if($salary > $band2_top) 
				{
					$band3 = ($salary - $band2_top) * $band3_rate;
					$salary = $band2_top;
				}

				if($salary > $band1_top)
				{
					$band2 = ($salary - $band1_top) * $band2_rate;
					$salary = $band1_top;
				}

				$band1 = $salary * $band1_rate;
				$payee = $band1 + $band2 + $band3 + $band4;//total PAYEE
				$net_salary = $gloss_salary - ($pension_personal + $payee + $loan + $d_amount);//net salary
				
				$user_id = $this->session->userdata('user_id');
			  	$fname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->fname;
				$lname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->lname;
				$data['generated_by'] = $fname.' '.$lname;
				
			  				
				$data['payee'] = $payee;
				$data['pension_personal']    = $pension_personal;
				$data['pension_company']    = $pension_company;
				$data['pension_total']    = $pension_total;
				$data['gloss_salary']    = $gloss_salary;
				$data['net_salary']    = $net_salary;
				$data['gla']     = $gla;
				$data['broker']     = $broker;
				$data['month']     = $month;
				$data['year']     = $year;
				$data['employee_id']     = $employee_id;
				$data['salary_date'] = $salary_date;
				$data['date_generated'] = date('Y-m-d H:i:s');
				$this->db->insert('salaries',$data);
				$salary_id = $this->db->insert_id();
				
				//update employee
				$data000['salary_date']  = $salary_date;
				$this->db->where('employee_id',$employee_id);
				$this->db->update('employees',$data000);
				
				//update loan
				$data00['balance']  = $balance - $payrate;
				$data00['date_paid']  = date('Y-m-d H:i:s');
				$data00['amount_returned']  = $amount - $balance;
				$this->db->where('employee_id',$employee_id);
				$this->db->update('loans',$data00);
			
				
				$this->session->set_flashdata('message','SALARY ADDED SUCCESSFULLY'); 
				$page_data['month'] = $month;
				$page_data['year'] = $year;
				$page_data['system'] = 'payrollSoft';
			    $page_data['page_title'] = 'Add Salary';
                $this->load->view('add_salare2',$page_data);
				
			}
			
			
			
			
			
			function delete()
			{
				$salary_id = $this->input->post('salary_id',TRUE);
				foreach($salary_id as $a){
					$this->db->where('salary_id',$a);
					$this->db->delete('salaries');
				}
				
			return;
			}

				function bulk_salary_gen(){
		

				$employee_id  = $this->input->post('employee_id',true);
				$month = date('F');
				$year = date('Y');
				$salary_date= date('F Y');
				foreach ($employee_id as $i => $a) 
				{ 
			
				$bsalary	=	$this->db->get_where('salary_change',array('employee_id'=>$a,'month'=>$month,'year'=>$year,'visible'=>1))->row()->salary;
			    $on_pension	=	$this->db->get_where('employees',array('employee_id'=>$a))->row()->on_pension;
				
				//loans
                $lona  =   $this->db->query("SELECT * FROM loans WHERE employee_id='$a'");
			    $row = $lona->row();
				   if (isset($row)):
					$loan	    =	$row->payrate;
					$payrate	=	$row->payrate;
		    		$amount	    =	$row->amount;
					$balance	=	$row->balance;
				  else:
				  	$loan	    = 0;
					$payrate	= 0;
		    		$amount	    = 0;
					$balance	= 0;
				endif;
				
				//overtime
 				$ovt  =   $this->db->query("SELECT * FROM overtime WHERE employee_id='$a' AND month='$month' AND year='$year'");
			    $row1 = $ovt->row();
				   if (isset($row1)):
					$total_overtime   =	$row1->total_overtime;
				  else:
				  	$total_overtime	  = 0;
				endif;
				
				//Bonus
				$bonus =   $this->db->query("SELECT * FROM bonus WHERE employee_id='$a' AND month='$month' AND year='$year'");
			    $row0 = $bonus->row();
				   if (isset($row0)):
					$bonus   =	$row0->amount;
				  else:
				  	$bonus = 0;
				endif;
				
				//Arreas
				$arr =   $this->db->query("SELECT * FROM arrears WHERE employee_id='$a' AND month='$month' AND year='$year'");
			    $row00 = $arr->row();
				   if (isset($row00)):
					$arrear   =	$row00->amount;
				  else:
				  	$arrear = 0;
				endif;
				
				
				$d_amount = 0;
				$nn =   $this->db->query("SELECT * FROM health_scheme WHERE employee_id ='$a' AND other_members = 1");
			    $row2 = $nn->row();
				   if (isset($row2)){
						$health_scheme_id   =	$row2->health_scheme_id;
						$hh =   $this->db->get_where('other_members',array('health_scheme_id' =>$health_scheme_id,'deduct' =>1,'deleted'=>0))->result_array();
						foreach($hh as $row){
						  $d_amount = $d_amount + $row['d_amount'];
				  }
				}else{
				  	$d_amount = 0;
				  }
				
		
		
				//tea allowance
				$tea =   $this->db->query("SELECT * FROM employees WHERE employee_id='$a'");
			    $row2 = $tea->row();
				   if (isset($row2)):
					$tea_allowance   =	$row2->tea_allowance;
				  else:
				  	$tea_allowance	 = 0;
				endif;

				//health bill
				$hb =   $this->db->query("SELECT * FROM scheme_bill WHERE employee_id='$a'");
			    $row3 = $hb->row();
				   if (isset($row3)):
					$health_bill   =	$row3->amount;
				  else:
				  	$health_bill	  = 0;
				endif;				
				
				if($on_pension == 1):
					$pep =   $this->db->query("SELECT * FROM pension_para WHERE current = 1 ");
				    $row0 = $pep->row();
					   if (isset($row0)):
			   			$pension_personal   = $bsalary*(($row0->staff)/100);
			   			$pension_company   = $bsalary*(($row0->company)/100);
						$pension_total   = $pension_personal + $pension_company;
						$gla = ($bsalary * (($row0->gla)/100));
						$broker = ($bsalary * (($row0->broker)/100));
					         else:
						$pension_personal  = 0;
						$pension_company   = 0;
						$pension_total   = 0;
						$gla=0;
					endif;
			    endif;
				
				$gloss_salary = $bsalary + $total_overtime + $tea_allowance + $bonus + $arrear;//total earnings
				$salary = $gloss_salary;//taxable salary

				//tax parameters
                $taxona  =   $this->db->query("SELECT * FROM tax_config WHERE current = 1 ");
			    $roww = $taxona->row();
				if (isset($roww)){
					$band1_top    =	$roww->band1_top;
					$band1_rate	=	($roww->band1_rate)/100;
					$band2_top    =	$roww->band2_top;
					$band2_rate	=	($roww->band2_rate)/100;
					$band3_top    =	$roww->band3_top;
					$band3_rate	=	($roww->band3_rate)/100;
					$band4_top    =	$roww->band4_top;
					$band4_rate	=	($roww->band4_rate)/100;
				}else{
					$band1_top    = 0;
					$band1_rate	  = 0;
					$band2_top    = 0;
					$band2_rate	  = 0;
					$band3_top    = 0;
					$band3_rate	  = 0;
					$band4_top    = 0;
					$band4_rate	  = 0;
				}

			

				$band1 = $band2 = $band3 = $band4 = 0;
				if($salary > $band3_top) 
				{
					$band4 = ($salary - $band3_top) * $band4_rate;
					$salary = $band3_top;
				}

				if($salary > $band2_top) 
				{
					$band3 = ($salary - $band2_top) * $band3_rate;
					$salary = $band2_top;
				}

				if($salary > $band1_top)
				{
					$band2 = ($salary - $band1_top) * $band2_rate;
					$salary = $band1_top;
				}

				$band1 = $salary * $band1_rate;
				$payee = $band1 + $band2 + $band3 + $band4;//total PAYEE
				$net_salary = $gloss_salary - ($pension_personal + $payee + $loan + $d_amount);//net salary
				
				$user_id = $this->session->userdata('user_id');
			  	$fname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->fname;
				$lname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->lname;
				$data['generated_by'] = $fname.' '.$lname;
				
			  				
				$data['payee'] = $payee;
				$data['pension_personal']    = $pension_personal;
				$data['pension_company']    = $pension_company;
				$data['pension_total']    = $pension_total;
				$data['gloss_salary']    = $gloss_salary;
				$data['net_salary']    = $net_salary;
				$data['gla']     = $gla;
				$data['broker']     = $broker;
				$data['month']     = $month;
				$data['year']     = $year;
				$data['employee_id']     = $a;
				$data['salary_date'] = $salary_date;
				$data['date_generated'] = date('Y-m-d H:i:s');
				$this->db->insert('salaries',$data);
				$salary_id = $this->db->insert_id();
				
				//update employee
				$data000['salary_date']  = $salary_date;
				$this->db->where('employee_id',$a);
				$this->db->update('employees',$data000);
				
				//update loan
				$data00['balance']  = $balance - $payrate;
				$data00['date_paid']  = date('Y-m-d H:i:s');
				$data00['amount_returned']  = $amount - $balance;
				$this->db->where('employee_id',$a);
				$this->db->update('loans',$data00);
			}
			//$don['month']     = $month;
			//$don['year']     = $year;
			//redirect('salary/salary_list/',$don);
			return;
			}

			function bulk_salary_update(){
		

				$salary_id  = $this->input->post('salary_id',true);
				foreach ($salary_id as $i => $a) 
				{ 
				$month  = $this->db->get_where('salaries',array('salary_id' =>$a))->row()->month;
				$year = $this->db->get_where('salaries',array('salary_id' =>$a))->row()->year;
				$salary_date= $month.' '.$year;
				$employee_id  = $this->db->get_where('salaries',array('salary_id' =>$a))->row()->employee_id;
				$bsalary	=	$this->db->get_where('salary_change',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year,'visible'=>1))->row()->salary;
			    $on_pension	=	$this->db->get_where('employees',array('employee_id'=>$employee_id))->row()->on_pension;
				
				//loans
                $lona  =   $this->db->query("SELECT * FROM loans WHERE employee_id='$employee_id'");
			    $row = $lona->row();
				   if (isset($row)):
					$loan	    =	$row->payrate;
					$payrate	=	$row->payrate;
		    		$amount	    =	$row->amount;
					$balance	=	$row->balance;
				  else:
				  	$loan	    = 0;
					$payrate	= 0;
		    		$amount	    = 0;
					$balance	= 0;
				endif;
				
				//overtime
 				$ovt  =   $this->db->query("SELECT * FROM overtime WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row1 = $ovt->row();
				   if (isset($row1)):
					$total_overtime   =	$row1->total_overtime;
				  else:
				  	$total_overtime	  = 0;
				endif;
				
				//Bonus
				$bonus =   $this->db->query("SELECT * FROM bonus WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row0 = $bonus->row();
				   if (isset($row0)):
					$bonus   =	$row0->amount;
				  else:
				  	$bonus = 0;
				endif;
				
				//Arreas
				$arr =   $this->db->query("SELECT * FROM arrears WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row00 = $arr->row();
				   if (isset($row00)):
					$arrear   =	$row00->amount;
				  else:
				  	$arrear = 0;
				endif;
				
				
				$d_amount = 0;
				$nn =   $this->db->query("SELECT * FROM health_scheme WHERE employee_id ='$employee_id' AND other_members = 1");
			    $row2 = $nn->row();
				   if (isset($row2)){
						$health_scheme_id   =	$row2->health_scheme_id;
						$hh =   $this->db->get_where('other_members',array('health_scheme_id' =>$health_scheme_id,'deduct' =>1,'deleted'=>0))->result_array();
						foreach($hh as $row){
						  $d_amount = $d_amount + $row['d_amount'];
				  }
				}else{
				  	$d_amount = 0;
				  }
				
		
		
				//tea allowance
				$tea =   $this->db->query("SELECT * FROM employees WHERE employee_id='$employee_id'");
			    $row2 = $tea->row();
				   if (isset($row2)):
					$tea_allowance   =	$row2->tea_allowance;
				  else:
				  	$tea_allowance	 = 0;
				endif;

				//health bill
				$hb =   $this->db->query("SELECT * FROM scheme_bill WHERE employee_id='$employee_id'");
			    $row3 = $hb->row();
				   if (isset($row3)):
					$health_bill   =	$row3->amount;
				  else:
				  	$health_bill	  = 0;
				endif;				
				
				if($on_pension == 1):
					$pep =   $this->db->query("SELECT * FROM pension_para WHERE month='$month' AND year='$year'");
				    $row0 = $pep->row();
					   if (isset($row0)):
			   			$pension_personal   = $bsalary*(($row0->staff)/100);
			   			$pension_company   = $bsalary*(($row0->company)/100);
						$pension_total   = $pension_personal + $pension_company;
						$gla = ($bsalary * (($row0->gla)/100));
						$broker = ($bsalary * (($row0->broker)/100));
					         else:
						$pension_personal  = 0;
						$pension_company   = 0;
						$pension_total   = 0;
						$gla=0;
					endif;
			    endif;
				
				$gloss_salary = $bsalary + $total_overtime + $tea_allowance + $bonus + $arrear;//total earnings
				$salary = $gloss_salary;//taxable salary

				//tax parameters
                $taxona  =   $this->db->query("SELECT * FROM tax_config WHERE month='$month' AND year='$year'");
			    $roww = $taxona->row();
				if (isset($roww)){
					$band1_top    =	$roww->band1_top;
					$band1_rate	=	($roww->band1_rate)/100;
					$band2_top    =	$roww->band2_top;
					$band2_rate	=	($roww->band2_rate)/100;
					$band3_top    =	$roww->band3_top;
					$band3_rate	=	($roww->band3_rate)/100;
					$band4_top    =	$roww->band4_top;
					$band4_rate	=	($roww->band4_rate)/100;
				}else{
					$band1_top    = 0;
					$band1_rate	  = 0;
					$band2_top    = 0;
					$band2_rate	  = 0;
					$band3_top    = 0;
					$band3_rate	  = 0;
					$band4_top    = 0;
					$band4_rate	  = 0;
				}

			

				$band1 = $band2 = $band3 = $band4 = 0;
				if($salary > $band3_top) 
				{
					$band4 = ($salary - $band3_top) * $band4_rate;
					$salary = $band3_top;
				}

				if($salary > $band2_top) 
				{
					$band3 = ($salary - $band2_top) * $band3_rate;
					$salary = $band2_top;
				}

				if($salary > $band1_top)
				{
					$band2 = ($salary - $band1_top) * $band2_rate;
					$salary = $band1_top;
				}

				$band1 = $salary * $band1_rate;
				$payee = $band1 + $band2 + $band3 + $band4;//total PAYEE
				$net_salary = $gloss_salary - ($pension_personal + $payee + $loan + $d_amount);//net salary
				
				$user_id = $this->session->userdata('user_id');
			  	$fname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->fname;
				$lname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->lname;
				$data['generated_by'] = $fname.' '.$lname;
				
			  				
				$data['payee'] = $payee;
				$data['pension_personal']    = $pension_personal;
				$data['pension_company']    = $pension_company;
				$data['pension_total']    = $pension_total;
				$data['gloss_salary']    = $gloss_salary;
				$data['net_salary']    = $net_salary;
				$data['gla']     = $gla;
				$data['broker']     = $broker;
				$data['month']     = $month;
				$data['year']     = $year;
				$data['employee_id']     = $employee_id;
				$data['salary_date'] = $salary_date;
				$data['date_generated'] = date('Y-m-d H:i:s');
				$this->db->where('salary_id',$a);
				$this->db->update('salaries',$data);
					
				//update loan
				$data00['balance']  = $balance - $payrate;
				$data00['date_paid']  = date('Y-m-d H:i:s');
				$data00['amount_returned']  = $amount - $balance;
				$this->db->where('employee_id',$a);
				$this->db->update('loans',$data00);
			}
			return;
			}


			
			
			
			function filter_salaries() 
			{
			
	            $bank_id=$this->input->post('bank_id');
	            $year1=$this->input->post('year');
	            $month1=$this->input->post('month');
	        
	            
	            if(!empty($year1) && empty($month1) && empty($bank_id))//year
	            {
			    $data['page_title'] = 'Salary List | ' .$year1;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('year',$year1)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
				}


              
	            if(empty($year1) && !empty($month1) && empty($bank_id)) //month
	            {
				$bank="all banks";
			    $data['page_title'] = 'Salary List | ' . $month1;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('month',$month1)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
			                              				}

				if(empty($year1) && empty($month1) && !empty($bank_id)) //bank
	            {
        		$bd  =   $this->db->query("SELECT * FROM bank WHERE bank_id='$bank_id'");
			    $rr = $bd->row();
				if (isset($rr)):
					$bank  =	$rr->bank;
				  else:
				  	$bank	  = $bank_id;
				endif;      
			    $data['page_title'] = 'Salary List  | ' .$bank;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('bank.bank_id',$bank_id)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
				}

				if(!empty($year1) && !empty($month1) && empty($bank_id)) //month and year
	            {

			    $data['page_title'] = 'Salary List | ' . $month1.' | '.$year1;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('month',$month1)
			                              ->where('year',$year1)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
				}

				if(empty($year1) && !empty($month1) && !empty($bank_id)) //bank and month
	            {
        		$bank = $this->db->get_where('bank',array('bank_id'=>$bank_id))->row()->bank;
			    $data['page_title'] = 'Salary List | ' .$bank. ' | '. $month1;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('month',$month1)
			                              ->where('bank.bank_id',$bank_id)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
				}

				if(!empty($year1) && empty($month1) && !empty($bank_id)) //bank and year
	            {
        		$bank = $this->db->get_where('bank',array('bank_id'=>$bank_id))->row()->bank;
			    $data['page_title'] = 'Salary List | ' .$bank. ' | '. $month1.' | '.$year1;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('year',$year1)
			                              ->where('bank.bank_id',$bank_id)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
				}

				if(!empty($year1) && !empty($month1) && !empty($bank_id)) //bank,year and bank
	            {
        		$bank = $this->db->get_where('bank',array('bank_id'=>$bank_id))->row()->bank;
			
			    $data['page_title'] = 'Salary List for: ' .$bank. ' | '. $month1.' | '.$year1;
                $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('year',$year1)
			                              ->where('month',$month1)
			                              ->where('bank.bank_id',$bank_id)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
				}
				$data['count']=1;
                $data['net_salary'] = 0;
				$this->load->view('filter_salaries',$data);


	          

			}


				function payslip_pdf(){
			
			    	$this->load->helper('tcpdf/pdf_helper');

			    	$data['year'] =$this->input->post('year');
	            	$data['month'] =$this->input->post('month');
					$data['depot_id'] =$this->input->post('depot_id');
					$depot = $this->db->get_where('depot',array('depot_id' =>$data['depot_id']))->row()->depot;
					
					tcpdf();
					$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
					$obj_pdf->SetCreator(PDF_CREATOR);

					$title = "Payslip  | ";
					$obj_pdf->SetTitle($title);
					$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH);
					$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
					$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
					$obj_pdf->SetDefaultMonospacedFont('courier');
					$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
					$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
					$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
					$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
					$obj_pdf->SetFont('courier', '', 11);
					$obj_pdf->setFontSubsetting(false);
					$obj_pdf->AddPage();
					ob_start();	 
			
					$this->load->view('payslip2',$data);
		    		$content = ob_get_contents();
					ob_end_clean();
					$obj_pdf->writeHTML($content, true, false, true, false, '');
					$obj_pdf->Output('payslips_'.$data['month'].'_'.$data['year'].'_'.$depot.'.pdf', 'D');       


			}


			function filter_payslips() 
			{
			

	            $year1=$this->input->post('year');
	            $month1=$this->input->post('month');
	            $var_month="All Months";
	            $var_year="All Years";
	       
	            
	            if(!empty($year1) && empty($month1))//year
	            {    
			    $data['page_title'] = 'Payslips for: '. $var_month.' | '.$year1;
				$data['title'] = 'Payslips for >> '. $var_month.' | '.$year1;
                $data['slip']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('year',$year1)   
                              ->where('active',1)  
                              ->get()->result_array();      
			    $this->load->view('admin/filter_payslips',$data);
				}

              
	            if(empty($year1) && !empty($month1)) //month
	            {
        	    $data['page_title'] = 'Payslips for: '. $month1.'| '.$var_year;
				$data['title'] = 'Payslips for >> '. $month1.' |'.$var_year;
                $data['slip']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('month',$month1)
                              ->where('active',1) 
                              ->get()->result_array();      
			    $this->load->view('admin/filter_payslips',$data);
				}

				if(!empty($year1) && !empty($month1)) //month and year
	            {
        		$data['page_title'] = 'Payslips for: '. $month1.'| '.$year1;
				$data['title'] = 'Payslips for >> '. $month1.' |'.$year1;
                $data['slip']  =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('month',$month1)  
                              ->where('year',$year1)
                              ->where('active',1)    
                              ->get()->result_array();      
			    $this->load->view('admin/filter_payslips',$data);
				}

			}
			   
	   		
			function update_salary() //change salary if the genaerated one is wrong
			{

				$employee_id  = $this->input->post('employee_id');
				$salary_id  = $this->input->post('salary_id');
				$month  = $this->input->post('month');
				$year  = $this->input->post('year');
				$salary_date= $month.' '.$year;
				
			    $bsalary	=	$this->db->get_where('salary_change',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year,'visible'=>1))->row()->salary;
			    $on_pension	=	$this->db->get_where('employees',array('employee_id'=>$employee_id))->row()->on_pension;
			
							
				//loans
                $lona  =   $this->db->query("SELECT * FROM loans WHERE employee_id='$employee_id'");
			    $row = $lona->row();
				   if (isset($row)):
					$loan	    =	$row->payrate;
					$payrate	=	$row->payrate;
		    		$amount	    =	$row->amount;
					$balance	=	$row->balance;
				  else:
				  	$loan	    = 0;
					$payrate	= 0;
		    		$amount	    = 0;
					$balance	= 0;
				endif;
				
				//overtime
 				$ovt  =  $this->db->query("SELECT * FROM overtime WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row1 = $ovt->row();
				   if (isset($row1)):
					$total_overtime = $row1->total_overtime;
				  else:
				  	$total_overtime	  = 0;
				endif;
				
				//Bonus
				$bonuss =   $this->db->query("SELECT * FROM bonus WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row0 = $bonuss->row();
				   if (isset($row0)):
					$bonus   =	$row0->amount;
				  else:
				  	$bonus = 0;
				endif;
				
				//Arreas
				$arr =   $this->db->query("SELECT * FROM arrears WHERE employee_id='$employee_id' AND month='$month' AND year='$year'");
			    $row00 = $arr->row();
				   if (isset($row00)):
					$arrear   =	$row00->amount;
				  else:
				  	$arrear = 0;
				endif;

				$d_amount = 0;
				$nn =   $this->db->query("SELECT * FROM health_scheme WHERE employee_id ='$employee_id' AND other_members = 1");
			    $row2 = $nn->row();
				   if (isset($row2)){
						$health_scheme_id   =	$row2->health_scheme_id;
						$hh =   $this->db->get_where('other_members',array('health_scheme_id' =>$health_scheme_id,'deduct' =>1,'deleted'=>0))->result_array();
						foreach($hh as $row){
						  $d_amount = $d_amount + $row['d_amount'];
				  }
				}else{
				  	$d_amount = 0;
				  }
				

				//tea allowance
				$tea =   $this->db->query("SELECT * FROM employees WHERE employee_id='$employee_id'");
			    $row2 = $tea->row();
				   if (isset($row2)):
					$tea_allowance   =	$row2->tea_allowance;
				  else:
				  	$tea_allowance = 0;
				endif;

				//health bill
				$hb =   $this->db->query("SELECT * FROM scheme_bill WHERE employee_id='$employee_id'");
			    $row3 = $hb->row();
				   if (isset($row3)):
					$health_bill = $row3->amount;
				  else:
				  	$health_bill = 0;
				endif;				
				
				if($on_pension == 1):
					$pep =   $this->db->query("SELECT * FROM pension_para WHERE current = 1 ");
				    $row0 = $pep->row();
					   if (isset($row0)):
			   			$pension_personal   = $bsalary*(($row0->staff)/100);
			   			$pension_company   = $bsalary*(($row0->company)/100);
						$pension_total   = $pension_personal + $pension_company;
						$gla = ($bsalary * (($row0->gla)/100));
						$broker = ($bsalary * (($row0->broker)/100));
					         else:
						$pension_personal  = 0;
						$pension_company   = 0;
						$pension_total   = 0;
						$gla=0;
					endif;
			    endif;
				
				$gloss_salary = $bsalary + $total_overtime + $tea_allowance + $bonus + $arrear;//total earnings
				$salary = $gloss_salary;//taxable salary

				//tax parameters
                $taxona  =   $this->db->query("SELECT * FROM tax_config WHERE current = 1 ");
			    $roww = $taxona->row();
				if (isset($roww)){
					$band1_top    =	$roww->band1_top;
					$band1_rate	=	($roww->band1_rate)/100;
					$band2_top    =	$roww->band2_top;
					$band2_rate	=	($roww->band2_rate)/100;
					$band3_top    =	$roww->band3_top;
					$band3_rate	=	($roww->band3_rate)/100;
					$band4_top    =	$roww->band4_top;
					$band4_rate	=	($roww->band4_rate)/100;
				}else{
					$band1_top    = 0;
					$band1_rate	  = 0;
					$band2_top    = 0;
					$band2_rate	  = 0;
					$band3_top    = 0;
					$band3_rate	  = 0;
					$band4_top    = 0;
					$band4_rate	  = 0;
				}

			

				$band1 = $band2 = $band3 = $band4 = 0;
				if($salary > $band3_top) 
				{
					$band4 = ($salary - $band3_top) * $band4_rate;
					$salary = $band3_top;
				}

				if($salary > $band2_top) 
				{
					$band3 = ($salary - $band2_top) * $band3_rate;
					$salary = $band2_top;
				}

				if($salary > $band1_top)
				{
					$band2 = ($salary - $band1_top) * $band2_rate;
					$salary = $band1_top;
				}

				$band1 = $salary * $band1_rate;
				$payee = $band1 + $band2 + $band3 + $band4;//total PAYEE
				$net_salary = $gloss_salary - ($pension_personal + $payee + $loan + $d_amount);//net salary
				
				
				$user_id = $this->session->userdata('user_id');
			  	$fname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->fname;
				$lname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->lname;
				$data['generated_by'] = $fname.' '.$lname;
				
			  				
				$data['payee']    = $payee;
				$data['pension_personal']    = $pension_personal;
				$data['pension_company']    = $pension_company;
				$data['pension_total']    = $pension_total;
				$data['gloss_salary']    = $gloss_salary;
				$data['net_salary']    = $net_salary;
				$data['gla'] = $gla;
				$data['broker']  = $broker;
				$data['month']  = $month;
				$data['year'] = $year;
				$data['employee_id']  = $employee_id;
				$data['salary_date'] = $salary_date;
				$data['date_updated'] = date('Y-m-d H:i:s');
				
				//update employee
				$data000['salary_date']  = $salary_date;
				$this->db->where('employee_id',$employee_id);
				$this->db->update('employees',$data000);
				
				//update loan
				$data00['balance']  = $balance - $payrate;
				$data00['date_paid']  = date('Y-m-d H:i:s');
				$data00['amount_returned']  = $amount - $balance;
				$this->db->where('employee_id',$employee_id);
				$this->db->update('loans',$data00);
				
				//$this->db->where('salary_id',$salary_id);
				$this->db->where('employee_id',$employee_id);
				$this->db->where('month',$month);
				$this->db->where('year',$year);
				$this->db->update('salaries',$data);
						

				$this->session->set_flashdata('message','SALARY UPDATED SUCCESSFULLY'); 
				$dataq['system'] = 'payrollSoft';
			    $name=$this->db->get_where('employees',array('employee_id'=>$employee_id))->row()->name;
				$data["page_title"]  = "Edit Salary | ".$name;
				$data["system"]  = "payrollSoft";
				$data["salary_id"] = $salary_id;
				$this->load->view('edit_salary',$data);				
			}
	   
		    function tax_band(){

			 if ($this->session->userdata('account_type') != 'admin')
				  redirect(base_url(),'refresh');
		        $page_data['system']  	    = 'payrollSoft';
				$page_data['count']= 1;
				$page_data['page_title']    = 'Tax Bands';
				$page_data['tax']  =   $this->db->select('*')->from('tax_config')->get()->result_array();									
		       	$this->load->view('tax_band',$page_data);

		    }
				
	





}
