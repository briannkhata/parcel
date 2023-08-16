<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Salary extends CI_Controller {

		function __construct()
		{
			parent::__construct();
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
			   		$pension_personal   = $bsalary*(5/100);
					$pension_company   = $bsalary*(10/100);
					$pension_total   = $pension_personal + $pension_company;
					$gla=($bsalary*6.59)/100;
					         else:
					$pension_personal  = 0;
					$pension_company   = 0;
					$pension_total   = 0;
					$gla=0;
					        endif;
				$broker=($bsalary*1.62)/100;
				
				$gloss_salary = $bsalary + $total_overtime + $tea_allowance + $bonus + $arrear;//total earnings
				$salary = $gloss_salary;//taxable salary

				//tax parameters
                $taxona  =   $this->db->query("SELECT * FROM tax_config WHERE year='$year'");
			    $roww = $taxona->row();
				if (isset($roww)):
					$band1_top    =	$roww->band1_top;
					$band1_rate	=	$roww->band1_rate;
					$band2_top    =	$roww->band2_top;
					$band2_rate	=	$roww->band2_rate;
					$band3_top    =	$roww->band3_top;
					$band3_rate	=	$roww->band3_rate;
					$band4_top    =	$roww->band4_top;
					$band4_rate	=	$roww->band4_rate;
				else:
				$data9['err'] = "Tax Information for ".$year." is not available please add";
				$this->session->set_flashdata('message',$data9); 
				$data['system'] = 'payrollSoft';
			    $data['page_title'] = 'Add Salary for any month in the past';
                $this->load->view('add_salary',$data);	
				endif;

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
				$net_salary = $gloss_salary - ($pension_personal + $payee + $loan);//net salary
				
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
				$dataq['system'] = 'payrollSoft';
			    $dataq['page_title'] = 'Add Salary for any month in the past';
                $this->load->view('add_salary',$dataq);
			}
			
			function create_salaryy() //generate salary for any date
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
			   		$pension_personal   = $bsalary*(5/100);
					$pension_company   = $bsalary*(10/100);
					$pension_total   = $pension_personal + $pension_company;
					$gla=($bsalary*6.59)/100;
					         else:
					$pension_personal  = 0;
					$pension_company   = 0;
					$pension_total   = 0;
					$gla=0;
					        endif;
				$broker=($bsalary*1.62)/100;
				
				$gloss_salary = $bsalary + $total_overtime + $tea_allowance + $bonus + $arrear;//total earnings
				$salary = $gloss_salary;//taxable salary

				//tax parameters
                $taxona  =   $this->db->query("SELECT * FROM tax_config WHERE year='$year'");
			    $roww = $taxona->row();
				if (isset($roww)):
					$band1_top    =	$roww->band1_top;
					$band1_rate	=	$roww->band1_rate;
					$band2_top    =	$roww->band2_top;
					$band2_rate	=	$roww->band2_rate;
					$band3_top    =	$roww->band3_top;
					$band3_rate	=	$roww->band3_rate;
					$band4_top    =	$roww->band4_top;
					$band4_rate	=	$roww->band4_rate;
				else:
				$data9['err'] = "Tax Information for ".$year." is not available please add";
				$this->session->set_flashdata('message',$data9); 
				$data['system'] = 'payrollSoft';
			    $data['page_title'] = 'Add Salary for any month in the past';
                $this->load->view('add_salary',$data);	
				endif;

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
				$net_salary = $gloss_salary - ($pension_personal + $payee + $loan);//net salary
				
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
				//$dataq['system'] = 'payrollSoft';
			    //$dataq['page_title'] = 'Add Salary for any month in the past';
				redirect(base_url() .'admin/add_salaryy', 'refresh');
                //$this->load->view('add_salary',$dataq);
			}
			
			
			
			
			function create_salary2() //calculate salary for the current month
			{

				$employee_id  = $this->input->post('employee_id');
				$bonus  = $this->input->post('bonus');
				$month = date('F');
				$year = date('Y');
				$salary_date= date('F Y');
				
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

				//tax parameters
                $taxona  =   $this->db->query("SELECT * FROM tax_config WHERE year='$year'");
			    $roww = $taxona->row();
				if (isset($roww)):
					$band1_top    =	$roww->band1_top;
					$band1_rate	=	$roww->band1_rate;
					$band2_top    =	$roww->band2_top;
					$band2_rate	=	$roww->band2_rate;
					$band3_top    =	$roww->band3_top;
					$band3_rate	=	$roww->band3_rate;
					$band4_top    =	$roww->band4_top;
					$band4_rate	=	$roww->band4_rate;
		 
				endif;

				//overtime
 				$ovt  =   $this->db->query("SELECT * FROM overtime WHERE employee_id='$employee_id' AND salary_date='$salary_date'");
			    $row1 = $ovt->row();
				if (isset($row1)):
					$total_overtime   =	$row1->total_overtime;
				  else:
				  	$total_overtime	  = 0;
				endif;

				//tea allowance
				$tea =   $this->db->query("SELECT * FROM employees WHERE employee_id='$employee_id' AND salary_date='$salary_date'");
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

				$check = $this->db->select('*')
								  ->from('salaries')
								  ->where('employee_id',$employee_id)
								  ->where('salary_date',$salary_date)
								  ->get()->result_array();
			    if(count($check) > 0)
				{
				    //add flash data 
         		$this->session->set_flashdata('message','SALARY FOR THE CHOSEN DATE IS ALREADY AVAILABLE'); 

				}
				
				if($on_pension == 1):
			   		$pension_personal   = $bsalary*(5/100);
					$pension_company   = $bsalary*(10/100);
					$pension_total   = $pension_personal + $pension_company;
					$gla=($bsalary*6.59)/100;
					         else:
					$pension_personal  = 0;
					$pension_company   = 0;
					$pension_total   = 0;
					$gla=0;
			    endif;
				$broker=($bsalary*1.62)/100;
				
				$gloss_salary = $bsalary + $total_overtime	 + $tea_allowance + $bonus;//total earnings
				$salary = $gloss_salary;//taxable salary

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
				$net_salary = $gloss_salary - ($pension_personal + $payee + $loan);//net salary
				
				$admin_id = $this->session->userdata('admin_id');
			  	$fname	=	$this->db->get_where('admin',array('admin_id'=>$admin_id))->row()->fname;
				$lname	=	$this->db->get_where('admin',array('admin_id'=>$admin_id))->row()->lname;
				$data['generated_by'] = $fname.' '.$lname;
				
			  				
				$data['payee']    = $payee;
				$data['pension_personal']    = $pension_personal;
				$data['pension_company']    = $pension_company;
				$data['pension_total']    = $pension_total;
				$data['gloss_salary']    = $gloss_salary;
				$data['net_salary']    = $net_salary;
				$data['gla']     = $gla;
				$data['broker']     = $broker;
				$data['month']     = $month;
				$data['year']     = $year;
				$data['bonus']     = $bonus;
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
				
			
				echo "<script>
					 alert('SALARY GENERATED SUCCESSFULLY')
					 </script>";
				redirect(base_url().'salary/add_salary/','refresh');
			}
			
			function bulk_delete()
			{
				$salary_id = $this->input->post('salary_id');
				foreach($salary_id as $a)
				{
					$this->db->where('salary_id',$a);
					$this->db->delete('salaries');
				}
				
				echo "<script>
					 alert('SALARIES DELETED SUCCESSFULLY')
					 </script>";
				redirect(base_url().'salary/salary_lista/','refresh');
				redirect('salary/salary_list');
			}
			
			
			function bulk_salary() 
			{
		

			  if($this->input->post('employee_id')) 
			   { 
			   
			  //print_r($this->input->post('employee_id')); exit();
						//$employee_id  = $this->input->post('employee_id',true);
						$month = date('F');
						$year = date('Y');
						$salary_date= date('F Y');
						foreach ($employee_id as $i => $a) 
						{ 
					
							$bsalary	=	$this->db->get_where('employees',array('employee_id'=>$a))->row()->bsalary;
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

							//tax parameters
							$taxona  =   $this->db->query("SELECT * FROM tax_config WHERE year='$year' || month='$month'");
							$roww = $taxona->row();
							if (isset($roww)):
								$band1_top    =	$roww->band1_top;
								$band1_rate	=	$roww->band1_rate;
								$band2_top    =	$roww->band2_top;
								$band2_rate	=	$roww->band2_rate;
								$band3_top    =	$roww->band3_top;
								$band3_rate	=	$roww->band3_rate;
								$band4_top    =	$roww->band4_top;
								$band4_rate	=	$roww->band4_rate;
					 
							endif;

							//overtime
							$ovt  =   $this->db->query("SELECT * FROM overtime WHERE employee_id='$a' AND month='$month' AND year='$year'");
							$row1 = $ovt->row();
							if (isset($row1)):
								$total_overtime   =	$row1->total_overtime;
							  else:
								$total_overtime	  = 0;
							endif;

							//tea allowance
							$tea =   $this->db->query("SELECT * FROM employees WHERE employee_id='$a'");
							$row2 = $tea->row();
							if (isset($row2)):
								$tea_allowance = $row2->tea_allowance;
							  else:
								$tea_allowance = 0;
							endif;

							//health bill
							$hb =   $this->db->query("SELECT * FROM scheme_bill WHERE employee_id='$a'");
							$row3 = $hb->row();
							if (isset($row3)):
								$health_bill = $row3->amount;
							  else:
								$health_bill = 0;
							endif;
						
							if($on_pension == 1):
								$pension_personal = $bsalary*(5/100);
								$pension_company = $bsalary*(10/100);
								$pension_total = $pension_personal + $pension_company;
								$gla=($bsalary*6.59)/100;
										 else:
								$pension_personal  = 0;
								$pension_company   = 0;
								$pension_total   = 0;
								$gla=0;
							endif;
							$broker=($bsalary*1.62)/100;
							
							$gloss_salary = $bsalary + $total_overtime + $tea_allowance + $bonus + $arrear;//total earnings
							$salary = $gloss_salary;//taxable salary

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
							$net_salary = $gloss_salary - ($pension_personal + $payee + $loan);//net salary
							
							$user_id = $this->session->userdata('user_id');
							$fname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->fname;
							$lname	=	$this->db->get_where('users',array('user_id'=>$user_id))->row()->lname;
							$page_data = array
									(
									'employee_id' => $a,
									'payee' => $payee,
									'pension_personal' => $pension_personal,
									'pension_company' => $pension_company,
									'pension_total' => $pension_total,
									'gloss_salary' => $gloss_salary,
									'net_salary' => $net_salary,
									'gla' => $gla,
									'broker' => $broker,
									'month' => $month,
									'year' => $year,
									'salary_date' => $salary_date,
									'date_generated' => date('Y-m-d H:i:s'),
									'generated_by' => $fname.' '.$lname
							);
							$this->db->insert('salaries',$page_data);
							$salary_id = $this->db->insert_id();
			
							$data = array( 'salary_date' => date('F Y'));
							$this->db->where('employee_id',$a);
							$this->db->update('employees',$data);
				
							$data0 = array(
									'balance' => $balance - $payrate,
									'date_paid' => date('Y-m-d H:i:s'),
									'amount_returned' => $amount - $balance
									);
							$this->db->where('employee_id',$a);
							$this->db->update('loans',$data0);
						}    
						redirect(base_url().'admin/salary_list/','refresh');
					}
				}

			function filter_salaries() 
			{
			
	            $bank_id=$this->input->post('bank_id');
	            $year1=$this->input->post('year');
	            $month1=$this->input->post('month');
	        
	            
	            if(!empty($year1) && empty($month1) && empty($bank_id))//year
	            {
			    $data['page_title'] = 'Salary List | ' .$year1;
			    $data['count']=1;
                $data['net_salary'] = 0;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('year',$year1)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
			    $this->load->view('filter_salaries',$data);
				}


              
	            if(empty($year1) && !empty($month1) && empty($bank_id)) //month
	            {
				$bank="all banks";
			    $data['page_title'] = 'Salary List | ' . $month1;
			    $data['count']=1;
                $data['net_salary'] = 0;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('month',$month1)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
			    $this->load->view('filter_salaries',$data);
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
                $data['count']=1;
                $data['net_salary'] = 0;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('bank.bank_id',$bank_id)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
			    $this->load->view('filter_salaries',$data);
				}

				if(!empty($year1) && !empty($month1) && empty($bank_id)) //month and year
	            {

			    $data['page_title'] = 'Salary List | ' . $month1.' | '.$year1;
                $data['count']=1;
                $data['net_salary'] = 0;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('month',$month1)
			                              ->where('year',$year1)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
			    $this->load->view('filter_salaries',$data);
				}

				if(empty($year1) && !empty($month1) && !empty($bank_id)) //bank and month
	            {
        		$bank = $this->db->get_where('bank',array('bank_id'=>$bank_id))->row()->bank;
			    $data['page_title'] = 'Salary List | ' .$bank. ' | '. $month1;
                $data['count']=1;
                $data['net_salary'] = 0;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('month',$month1)
			                              ->where('bank.bank_id',$bank_id)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
			    $this->load->view('filter_salaries',$data);
				}

				if(!empty($year1) && empty($month1) && !empty($bank_id)) //bank and year
	            {
        		$bank = $this->db->get_where('bank',array('bank_id'=>$bank_id))->row()->bank;
			    $data['page_title'] = 'Salary List | ' .$bank. ' | '. $month1.' | '.$year1;
                $data['count']=1;
                $data['net_salary'] = 0;
			    $data['sl']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','salaries.employee_id=employees.employee_id')
			                              ->join('bank_details','bank_details.employee_id=employees.employee_id')
			                              ->join('bank','bank_details.bank_id=bank.bank_id')
			                              ->where('year',$year1)
			                              ->where('bank.bank_id',$bank_id)
										  ->order_by('name','ASC')
			                              ->get()->result_array();        
			    $this->load->view('filter_salaries',$data);
				}

				if(!empty($year1) && !empty($month1) && !empty($bank_id)) //bank,year and bank
	            {
        		$bank = $this->db->get_where('bank',array('bank_id'=>$bank_id))->row()->bank;
			
			    $data['page_title'] = 'Salary List for: ' .$bank. ' | '. $month1.' | '.$year1;
                $data['count']=1;
                $data['net_salary'] = 0;
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
			    $this->load->view('filter_salaries',$data);
				}

	          

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
			   		$pension_personal   = $bsalary*(5/100);
					$pension_company   = $bsalary*(10/100);
					$pension_total   = $pension_personal + $pension_company;
					$gla=($bsalary*6.59)/100;
					         else:
					$pension_personal  = 0;
					$pension_company   = 0;
					$pension_total   = 0;
					$gla=0;
					        endif;
				$broker=($bsalary*1.62)/100;
				$gloss_salary = $bsalary + $total_overtime + $tea_allowance + $bonus + $arrear;//total earnings
				$salary = $gloss_salary;//taxable salary

				//tax parameters
                $taxona  =   $this->db->query("SELECT * FROM tax_config WHERE year='$year'");
			    $roww = $taxona->row();
				if (isset($roww)):
					$band1_top    =	$roww->band1_top;
					$band1_rate	=	$roww->band1_rate;
					$band2_top    =	$roww->band2_top;
					$band2_rate	=	$roww->band2_rate;
					$band3_top    =	$roww->band3_top;
					$band3_rate	=	$roww->band3_rate;
					$band4_top    =	$roww->band4_top;
					$band4_rate	=	$roww->band4_rate;
				else:
				$data9['err'] = "Tax Information for ".$year." is not available please add";
				$this->session->set_flashdata('message',$data9); 
				$data['system'] = 'payrollSoft';
			    $data['page_title'] = 'Add Salary for any month in the past';
                $this->load->view('add_salary',$data);	
				endif;

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
				$net_salary = $gloss_salary - ($pension_personal + $payee + $loan);//net salary
				
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



		    function filter_month()
		    {

			  $month=$this->input->post('month');
			  $data['month']=$month;
	          $data['slip']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','employees.employee_id=salaries.employee_id')
			                              ->where('month',$month)
			                              ->get()->result_array();
			  $this->load->view('admin/month_payslips',$data);
		    }

		    function filter_year()
		    {

			  $year=$this->input->post('year');
			  $data['year']=$year;
	          $data['slip']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','employees.employee_id=salaries.employee_id')
			                              ->where('year',$year)
			                              ->get()->result_array();
			  $this->load->view('admin/year_payslips',$data);


		    }

		     function filter_payslips_bank()
		    {

			  $year=$this->input->post('year');
			  $month=$this->input->post('month');
			  $bank=$this->input->post('bank_id');

	          $data['slips']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','employees.employee_id=salaries.employee_id')
			                              ->where('bank_id',$bank)
			                              ->get()->result_array();
			  $this->load->view('admin/payslip_bank',$data);

		    }

		    function filter_payslips_year()
		    {

			  $year=$this->input->post('year');
			  $month=$this->input->post('month');
			  $salary_date=$month.''.$year;

	          $data['slips']   =   $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','employees.employee_id=salaries.employee_id')
			                              ->where('year',$year)
			                              ->where('month',$month)
			                              ->get()->result_array();
			  $this->load->view('admin/payslip_year',$data);

		    }
		    function filter_payslips_month()
		    {

			  $year=$this->input->post('year');
			  $month=$this->input->post('month');
	          $data['slips'] =  $this->db->select('*')
			                              ->from('employees')
			                              ->join('salaries','employees.employee_id=salaries.employee_id')
			                              ->where('month',$month)
			                              ->or_where('year',$year)
			                              ->get()->result_array();
			  $this->load->view('admin/payslip_month',$data);
		    }

		    function tax_band()
			{

			 if ($this->session->userdata('account_type') != 'admin')
				  redirect(base_url(),'refresh');
		        $page_data['system']  	    = 'payrollSoft';
				$page_data['count']= 1;
				$page_data['page_title']    = 'Tax Bands';
				$page_data['tax']  =   $this->db->select('*')->from('tax_config')->get()->result_array();									
		       	$this->load->view('tax_band',$page_data);

		    }
				
	





}
