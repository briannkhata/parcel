<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			// if ($this->session->userdata('user_login') != 1)
			// redirect(base_url());
			$page_data['page_title']  = 'Dashboard';
			$this->load->view($this->session->userdata('role').'/index',$page_data);		
		}

		function get_users()
		{
			if ($this->session->userdata('user_login') != 1)
			redirect(base_url());
			$page_data['page_title']  = 'Users';
			$page_data['users']  = $this->M_user->get_users();
			$this->load->view($this->session->userdata('role').'/index',$page_data);		
		}


		
		function add_user() {
			$data = array(
				'name' => $this->input->post('name'), 
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'phone' => $this->input->post('phone'),
				'phone' => $this->input->post('phone'),
				'phone' => $this->input->post('phone'),
				'phone' => $this->input->post('phone'),
				'phone' => $this->input->post('phone'),
				'phone' => $this->input->post('phone'),

				// Add more fields as needed
			);
	
			$inserted_id = $this->User_model->add_user($data);
			
			if ($inserted_id) {
				// Successful insertion
				// You can redirect or show a success message here
			} else {
				// Failed insertion
				// You can redirect or show an error message here
			}
		}


		










			
		
// function index()
// {
//     $this->load->helper('tcpdf/pdf_helper');
// 	tcpdf();
// 	$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// 	$obj_pdf->SetCreator(PDF_CREATOR);
// 	$title = "PAYSLIP - ";
// 	$obj_pdf->SetTitle($title);
// 	$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
// 	$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// 	$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// 	$obj_pdf->SetDefaultMonospacedFont('helvetica');
// 	$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
// 	$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// 	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// 	$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
// 	$obj_pdf->SetFont('helvetica', '', 9);
// 	$obj_pdf->setFontSubsetting(false);
// 	$obj_pdf->AddPage();
// 	ob_start();
// 	$data['name'] = "BRIAN NKHATA";
// 	$this->load->view('lock',$data);

//     // we can have any view part here like HTML, PHP etc
//     $content = ob_get_contents();
// 	ob_end_clean();
// 	$obj_pdf->writeHTML($content, true, false, true, false, '');
// 	$obj_pdf->Output('output.pdf', 'I');
// }
		
	
	function excel(){

		$bank   =   $this->db->select('*')->from('employees')->join('bank_details','employees.employee_id=bank_details.employee_id')
						 ->join('bank','bank.bank_id=bank_details.bank_id')
							->join('salary_change','salary_change.employee_id=employees.employee_id')
							->where('employees.active',1)
							//->where('salary_change.month','February')
							//->where('salary_change.year','2018')
							->order_by('bank.bank_id','ASC')
							->get()->result_array();

		require_once (APPPATH . '/third_party/PHPExcel_1.8.0/Classes/PHPExcel.php');
		$objPHPExcel = new PHPExcel();

		$objPHPExcel->getProperties()->SetCreator('');
		$objPHPExcel->getProperties()->SetLastModifiedBy('');
		$objPHPExcel->getProperties()->SetTitle('');
		$objPHPExcel->getProperties()->SetSubject('');
		$objPHPExcel->getProperties()->SetDescription('');

		$objPHPExcel->SetActiveSheetIndex(0);

		$objPHPExcel->getActiveSheet()->setCellValue('A1','Amount');
		$objPHPExcel->getActiveSheet()->setCellValue('B1','Name');
		$objPHPExcel->getActiveSheet()->setCellValue('C1','Account');
		$objPHPExcel->getActiveSheet()->setCellValue('D1','Bank');
		/*$objPHPExcel->getActiveSheet()->setCellValue('E1','Amount');
		$objPHPExcel->getActiveSheet()->setCellValue('F1','Amount');
		$objPHPExcel->getActiveSheet()->setCellValue('G1');
		$objPHPExcel->getActiveSheet()->setCellValue('H1');*/

		$row = 2;
		foreach ($bank as $value){
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$row,$value['salary']);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$row,$value['name']);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$row,$value['account_number']);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$row,$value['bank']);
			$row++;
		}

		$filename = 'Payroll_'.date('Y-m-d-H-i-s').'.xls';
		$filename1 = 'Salary_bank_transfer_'.date('M Y');
		$objPHPExcel->getActiveSheet()->SetTitle($filename1);
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		header('Cache-Control: max-age=1');
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		exit;

	}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		function staff_list()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
				   redirect(base_url());
					$page_data['system']  	    = 'Foc-EMS';
					$page_data['page_title']    = 'Staff List';
					$this->load->view('admin/staff_list',$page_data);		
				
		}

		function add_staff()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
				   redirect(base_url());
					$page_data['system']  	    = 'Foc-EMS';
					$page_data['page_title']    = 'Add Staff';
					$this->load->view('admin/add_staff',$page_data);		
				
		}

		function edit_staff()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
				   redirect(base_url());
					$page_data['system']  	    = 'Foc-EMS';
					$page_data['page_title']    = 'Edit Staff';
					$page_data["employee_id"]  = $this->uri->segment(3);
					$this->load->view('admin/edit_staff',$page_data);		
				
		}
        function trashed_staff()
		{
			
			if ($this->session->userdata('account_type') != 'admin')
				   redirect(base_url());
					$page_data['system']  	    = 'Foc-EMS';
					$page_data['page_title']    = 'Deactivated Staff';
					$this->load->view('admin/trashed_staff',$page_data);		
				
		}

		function trash_reason()
	   {

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] 	 = "Deactivate Reason";
			$data["system"]  = "Foc-EMS";
			$data["employee_id"]  = $this->uri->segment(3);
	       	$this->load->view('admin/trash_reason',$data);

        }

        function staff_info()
	   {

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] 	 = "Staff Information";
			$data["system"]  = "Foc-EMS";
			$employee_id= $this->uri->segment(3);
			$data['employee_id']= $employee_id;
			$data['staff']  =   $this->db->select('*')
                              ->from('employees')
                              ->join('department','employees.department_id=department.department_id')
                              ->join('depot','employees.depot_id=depot.depot_id')
                              ->join('qualification','employees.qualification_id=qualification.qualification_id')
                              ->where('employees.employee_id',$employee_id)
                              ->get()->result_array();
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

       function loans()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Loans";
			$data["system"]  = "Foc-EMS";
	       	$this->load->view('admin/loans',$data);

	    }
	    function create_loan()
		{

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
				$data['date_taken'] = date('Y-m-d H:i:s');
				$this->db->insert('loans', $data);
				
				echo "<script>
					 alert('LOAN ADDED SUCCESSFULLY')
					 </script>";
				redirect(base_url().'staff/loans/','refresh');
		}

	    function add_loan()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Add Loan";
			$data["system"] = "Foc-EMS";
	        $data["heading"] = "Add Loan";
	       	$this->load->view('admin/add_loan',$data);

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
		

	    function create_overtime()
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
				
				$this->db->insert('overtime', $data);
				$employee_id = $this->db->insert_id();
				
				echo "<script>
					 alert('OVERTIME ADDED SUCCESSFULLY')
					 </script>";
			 	redirect(base_url().'staff/overtime/','refresh');
		}
		
		
		function update_overtime()
		{

				$employee_id = $this->input->post('employee_id');
				$overtime_id = $this->input->post('overtime_id');
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
				//$data['date']      = date('Y-m-d H:i:s');
				
				$this->db->where('overtime_id', $overtime_id);
				$this->db->update('overtime', $data);
				//$employee_id = $this->db->insert_id();
				
				echo "<script>
					 alert('OVERTIME UPDATED SUCCESSFULLY')
					 </script>";
			 	redirect(base_url().'staff/overtime/','refresh');
		}
	
		function pension()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] 	 = "Pension List";
			$data["system"]  = "Foc-EMS";
			$this->load->view('admin/pension',$data);

	    }

	    function view_pension()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Pension Details";
			$data["system"]  = "Foc-EMS";
			$data["salary_id"]  = $this->uri->segment(3);
	       	$this->load->view('admin/view_pension',$data);

	    }

	     function all_pension()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "All Pension Details";
			$data["system"]  = "Foc-EMS";
			$salary_id  = $this->uri->segment(3);
			$data["salary_id"]  = $salary_id;
			$employee_id=$this->db->get_where('salaries',array('salary_id' =>$salary_id))->row()->employee_id;
			$data["employee_id"]  = $employee_id;
	       	$this->load->view('admin/all_pension',$data);

	    }

	    function payee()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Payee List";
			$data["system"]  = "Foc-EMS";
			$data["title"]  = "Tax List >> All";
	       	$this->load->view('admin/payee',$data);

	    }

	    function all_payee()
		{

		 if ($this->session->userdata('account_type') != 'admin')
			  redirect(base_url(),'refresh');
	        $data["page_title"] = "Payee Details";
			$data["system"]  = "Foc-EMS";
			$salary_id  = $this->uri->segment(3);
			$data["salary_id"]  = $salary_id;
			$employee_id=$this->db->get_where('salaries',array('salary_id' =>$salary_id))->row()->employee_id;
			$data["employee_id"]  = $employee_id;
		   	$this->load->view('admin/all_payee',$data);

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

         function filter_tax()
        {

	       	  	$month=$this->input->post('month');
	       	  	$year=$this->input->post('year');
	       	  	$var_month="All Months";
	            $var_year="All Years";

                if(!empty($year) && empty($month))//year
	            {
         
			    $data['page_title'] = 'Tax List for: '. $var_month.'| '.$year;
				$data['title'] = 'Tax List >> '. $var_month.' |'.$year;
			    $data['counter']=1;
                $data['payeee'] = 0;
                $data['gloss_salary'] = 0;
                $data['net_salary'] = 0;
                $data['payee']   =   $this->db->select('*')
				                              ->from('employees')
				                              ->join('salaries','employees.employee_id=salaries.employee_id')
				                              ->where('year',$year)
				                              ->get()->result_array();
               $this->load->view('admin/filter_tax',$data);
           		}


                 if(empty($year) && !empty($month))//month
	            {
         
			    $data['page_title'] = 'Tax List for: '. $month.'| '.$var_year;
				$data['title'] = 'Tax List >> '. $month.' |'.$var_year;
			    $data['counter']=1;
                $data['payeee'] = 0;
                $data['gloss_salary'] = 0;
                $data['net_salary'] = 0;
                $data['payee']   =   $this->db->select('*')
				                              ->from('employees')
				                              ->join('salaries','employees.employee_id=salaries.employee_id')
				                              ->where('month',$month)
				                              ->get()->result_array();
               $this->load->view('admin/filter_tax',$data);
           		}


                 if(!empty($year) && !empty($month))//month and year
	            {
         
			    $data['page_title'] = 'Tax List for: '. $month.'| '.$year;
				$data['title'] = 'Tax List >> '. $month.' |'.$year;
			    $data['counter']=1;
                $data['payeee'] = 0;
                $data['gloss_salary'] = 0;
                $data['net_salary'] = 0;
                $data['payee']   =   $this->db->select('*')
				                              ->from('employees')
				                              ->join('salaries','employees.employee_id=salaries.employee_id')
				                              ->where('month',$month)
				                              ->where('year',$year)
				                              ->get()->result_array();
               $this->load->view('admin/filter_tax',$data);
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
         
			    $data['page_title'] = 'Pension List for: '. $var_month.'| '.$year;
				$data['title'] = 'Pension List >> '. $var_month.' |'.$year;
                $data['counter']=1;
                $data['pension_total']=0;
                $data['gla'] =0;
                $data['broker']=0;
                $data['pensions']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('year',$year)
                              ->get()->result_array();
               $this->load->view('admin/filter_pension',$data);
           		}

           		if(empty($year) && !empty($month))//month
	            {
         
			    $data['page_title'] = 'Pension List for: '. $month.'| '.$var_year;
				$data['title'] = 'Pension List >> '. $month.' |'.$var_year;
                $data['counter']=1;
                $data['pension_total']=0;
                $data['gla'] =0;
                $data['broker']=0;
                $data['pensions']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('month',$month)
                              ->get()->result_array();
               $this->load->view('admin/filter_pension',$data);
           		}

           		 if(!empty($year) && !empty($month))//year and month
	            {
         
			    $data['page_title'] = 'Pension List for: '. $month.'| '.$year;
				$data['title'] = 'Pension List >> '. $month.' |'.$year;
                $data['counter']=1;
                $data['pension_total']=0;
                $data['gla'] =0;
                $data['broker']=0;
                $data['pensions']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('salaries','employees.employee_id=salaries.employee_id')
                              ->where('year',$year)
                              ->where('month',$month)
                              ->get()->result_array();
               $this->load->view('admin/filter_pension',$data);
           		}
        }

       

        function filter_overtime()
        {
        		$year=$this->input->post('year');
        		$month=$this->input->post('month');
	       	   	$var_month="All Months";
	            $var_year="All Years";

                if(!empty($year) && empty($month))//year
	            {
         
			    $data['page_title'] = 'Overtime List for: '. $var_month.'| '.$year;
				$data['title'] = 'Overtime List >> '. $var_month.' |'.$year;

				$data['public_amount'] = 0;
                $data['normal_amount'] = 0;
                $data['total_overtime'] = 0;
                $data['counter']=1;
        		$data['overtime']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('overtime','employees.employee_id=overtime.employee_id')
                              ->where('visible',1)
                              ->where('year',$year)
                              ->get()->result_array();
               $this->load->view('admin/filter_overtime',$data);
               }

                if(empty($year) && !empty($month))//month
	            {
         
			    $data['page_title'] = 'Overtime List for: '. $month.'| '.$var_year;
				$data['title'] = 'Overtime List >> '. $month.' |'.$var_year;

				$data['public_amount'] = 0;
                $data['normal_amount'] = 0;
                $data['total_overtime'] = 0;
                $data['counter']=1;
        		$data['overtime']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('overtime','employees.employee_id=overtime.employee_id')
                              ->where('visible',1)
                              ->where('month',$month)
                              ->get()->result_array();
               $this->load->view('admin/filter_overtime',$data);
               }

                if(!empty($year) && !empty($month))//month and year
	            {
         
			    $data['page_title'] = 'Overtime List for: '. $month.'| '.$year;
				$data['title'] = 'Overtime List >> '. $month.' |'.$year;

				$data['public_amount'] = 0;
                $data['normal_amount'] = 0;
                $data['total_overtime'] = 0;
                $data['counter']=1;
        		$data['overtime']   =   $this->db->select('*')
                              ->from('employees')
                              ->join('overtime','employees.employee_id=overtime.employee_id')
                              ->where('visible',1)
                              ->where('month',$month)
                              ->where('year',$year)
                              ->get()->result_array();
               $this->load->view('admin/filter_overtime',$data);
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





}