<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Crud_model extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
		
		function clear_cache()
		{
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
			$this->output->set_header('Pragma: no-cache');
		}
		
		function getIndex ($tbl)
		{
		$nextVal = $this->db->get_where('tbl_generator',array('tbl_name'=>$tbl))->row()->next_val;
		$new_id = $nextVal + 1;
		$this->db->where('tbl_name', $tbl);
        $this->db->update('tbl_generator', array('next_val' => $new_id));		
		return $nextVal;
		}
		function get_new_salary($id)
		{
			$this->db->select('*');
			$this->db->from('employees');
			$this->db->join('salary_change','salary_change.employee_id=employees.employee_id');
			$this->db->where('salary_change_id',$id);
			$query = $this->db->get();
			return $query->row();

		}
		
		function generateRandomString($length = 5)
		{
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}
	function get_pp($id)
		{
			$this->db->select('*');
			$this->db->from('pension_para');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query->row();
		}
	
	#####depot#######
		function depot_add($data)
		{
			$this->db->insert('depot',$data);
			return $this->db->insert_id();
		}
		function get_depot($id)
		{
			$this->db->select('*');
			$this->db->from('depot');
			$this->db->where('depot_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function depot_update($where, $data)
		{
			$this->db->update('depot',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_depot($id)
		{
			$this->db->where('depot_id',$id);
			$this->db->delete('depot');
		}
		
		function delete_salary($id)
		{
			$this->db->where('salary_id',$id);
			$this->db->delete('salaries');
		}
		
		
		#####department#######
		function department_add($data)
		{
			$this->db->insert('department',$data);
			return $this->db->insert_id();
		}
		function get_department($id)
		{
			$this->db->select('*');
			$this->db->from('department');
			$this->db->where('department_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		
		function department_update($where, $data)
		{
			$this->db->update('department',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_department($id)
		{
			$this->db->where('department_id',$id);
			$this->db->delete('department');
		}

		function get_banka($id)
		{
			$this->db->select('*');
			$this->db->from('bank');
			$this->db->where('bank_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		
		
		#####department#######
		function taxband_add($data)
		{
			$this->db->insert('tax_config',$data);
			return $this->db->insert_id();
		}
		function get_taxband($id)
		{
			$this->db->select('*');
			$this->db->from('tax_config');
			$this->db->where('tax_config_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function taxband_update($where, $data)
		{
			$this->db->update('tax_config',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_taxband($id)
		{
			$this->db->where('tax_config_id',$id);
			$this->db->delete('tax_config');
		}
		

	
	#####ARREARS#######
		function arrear_add($data)
		{
			$this->db->insert('arrears',$data);
			return $this->db->insert_id();
		}
		function get_arrear($id)
		{
			$this->db->select('*');
			$this->db->from('arrears');
			$this->db->where('arrear_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function arrear_update($where, $data)
		{
			$this->db->update('arrears',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_arrear($id)
		{
			$this->db->where('arrear_id',$id);
			$this->db->delete('arrears');
		}
		
		
		#####ARREARS#######
		function bonus_add($data)
		{
			$this->db->insert('bonus',$data);
			return $this->db->insert_id();
		}
		function get_bonus($id)
		{
			$this->db->select('*');
			$this->db->from('bonus');
			$this->db->join('employees','employees.employee_id=bonus.employee_id');
			$this->db->where('bonus_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function bonus_update($where, $data)
		{
			$this->db->update('bonus',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_bonus($id)
		{
			$this->db->where('bonus_id',$id);
			$this->db->delete('bonus');
		}
	
	
	
	
	
	function get_scheme_type($id)
		{
			$this->db->select('*');
			$this->db->from('scheme');
			$this->db->where('scheme_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		
		function get_membership($id)
		{
			$this->db->select('*');
			$this->db->from('membership');
			$this->db->where('membership_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
	
	
	
	
	
	
	
	
	
	
	
	
	

		##### BOOKING FUNCTIONS#######
		function leave_add($data)
		{
			$this->db->insert('extra',$data);
			return $this->db->insert_id();
		}
		function get_leave($id)
		{
			$this->db->select('*');
			$this->db->from('extra');
			$this->db->where('extra_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function leave_update($where, $data)
		{
			$this->db->update('extra',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_leave($id)
		{
			$this->db->where('extra_id',$id);
			$this->db->delete('extra');
		}
		
		function loan_add($data)
		{
			$this->db->insert('loans',$data);
			return $this->db->insert_id();
		}
		function get_loan($id)
		{
			$this->db->select('*');
			$this->db->from('loans');
			$this->db->where('loan_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function loan_update($where, $data)
		{
			$this->db->update('loans',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_loan($id)
		{
			$this->db->where('loan_id',$id);
			$this->db->delete('loans');
		}
		
		
		###END OF TEST BOOKING FUNCTIONS####
		
		
		
		function scheme_add($data)
		{
			$this->db->insert('health_scheme',$data);
			return $this->db->insert_id();
		}
			function get_scheme($id)
		{
			$this->db->select('*');
			$this->db->from('health_scheme');
			$this->db->join('employees','employees.employee_id=health_scheme.employee_id');
			$this->db->where('health_scheme_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function scheme_update($where, $data)
		{
			$this->db->update('health_scheme',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_scheme($id)
		{
			$this->db->where('health_scheme_id',$id);
			$this->db->delete('health_scheme');
		}
		
		
		
		function schemebill_add($data)
		{
			$this->db->insert('scheme_bill',$data);
			return $this->db->insert_id();
		}
		function get_schemebill($id)
		{
			$this->db->select('*');
			$this->db->from('scheme_bill');
			$this->db->where('scheme_bill_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function schemebill_update($where, $data)
		{
			$this->db->update('scheme_bill',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_schemebill($id)
		{
			$this->db->where('scheme_bill_id',$id);
			$this->db->delete('scheme_bill');
		}
		
		
		###TEST FUNCTIONS#####
		function overtime_add($data)
		{
			$this->db->insert('overtime', $data);
			return $this->db->insert_id();
		}
		function get_overtime($id)
		{
			$this->db->select('*');
			$this->db->from('overtime');
			$this->db->where('overtime_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		
		function overtime_update($where, $data)
		{
			$this->db->update('overtime',$data, $where);
			return $this->db->affected_rows();
		}
	
		function delete_overtime($id)
		{
			$this->db->where('overtime_id',$id);
			$this->db->delete('overtime');
		}
		
		
		
		
		function bank_add($data)
		{
			$this->db->insert('bank_details', $data);
			return $this->db->insert_id();
		}
		function get_bank($id)
		{
			$this->db->select('*');
			$this->db->from('bank_details');
			$this->db->where('bank_details_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		
		function bank_update($where, $data)
		{
			$this->db->update('bank_details',$data, $where);
			return $this->db->affected_rows();
		}
	
		function delete_bank($id)
		{
			$this->db->where('bank_details_id',$id);
			$this->db->delete('bank_details');
		}
		
		
		
		
		####END OF TEST FUNCTIONS#####
		
		
		####USER FUNCTIONS####
		function user_add($data)
		{
			$this->db->insert('users', $data);
			return $this->db->insert_id();
		}
		function get_user($id)
		{
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('user_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function user_update($where, $data)
		{
			$this->db->update('users',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_user($id)
		{
			$this->db->where('user_id',$id);
			$this->db->delete('users');
		}
		####END OF USER FUNCTIONS###
		
		
		###SUPPLIER FUNCTIONS####
		function supplier_add($data)
		{
			$this->db->insert('suppliers', $data);
			return $this->db->insert_id();
		}
		
		
		function get_supplier($id)
		{
			$this->db->select('*');
			$this->db->from('suppliers');
			$this->db->where('supplier_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function supplier_update($where, $data)
		{
			$this->db->update('suppliers',$data, $where);
			return $this->db->affected_rows();
		}
			
		function delete_supplier($id)
		{
			$this->db->where('supplier_id',$id);
			$this->db->delete('suppliers');
		}
		###END OF SUPPLIER FUNCTIONS###
		
		
		
		###EQUIPMENT FUNCTIONS####
		function equipment_add($data)
		{
			$this->db->insert('equipments', $data);
			return $this->db->insert_id();
		}
		function get_equipment($id)
		{
			$this->db->select('*');
			$this->db->from('equipments');
			$this->db->where('equipment_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function equipment_update($where, $data)
		{
			$this->db->update('equipments',$data, $where);
			return $this->db->affected_rows();
		}
			
		function delete_equipment($id)
		{
			$this->db->where('equipment_id',$id);
			$this->db->delete('equipments');
		}
		###END OF EQUIPMENT FUNCTIONS###
		
		
		####STAFF FUNCTIONS####
		function staff_add($data)
		{
			$this->db->insert('employees', $data);
			return $this->db->insert_id();
		}
		
		function get_staff($id)
		{
			$this->db->select('*');
			$this->db->from('staff');
			$this->db->where('staff_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
	
		function staff_update($where, $data)
		{
			$this->db->update('staff',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_staff($id)
		{
			$data['active']=0;
			$this->db->where('employee_id',$id);
			$this->db->update('employees',$data);
		}

		###END OF STAFF FUCNTIONS###
		
		
		###CLIENT STAFF FUNCTIONS###
	
		function client_add($data)
		{
			$this->db->insert('clients', $data);
			return $this->db->insert_id();
		}
		function get_client($id)
		{
			$this->db->select('*');
			$this->db->from('clients');
			$this->db->where('client_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function delete_client($id)
		{
			$this->db->where('client_id',$id);
			$this->db->delete('clients');
		}
		function client_update($where, $data)
		{
			$this->db->update('clients',$data, $where);
			return $this->db->affected_rows();
		}
		#####END OF CLIENT FUNCTIONS###
		
		
		####CLINIC FUNCTIONS####
		function clinic_add($data)
		{
			$this->db->insert('clinics', $data);
			return $this->db->insert_id();
		}
			
		function get_clinic($id)
		{
			$this->db->select('*');
			$this->db->from('clinics');
			$this->db->where('clinic_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function clinic_update($where, $data)
		{
			$this->db->update('clinics',$data, $where);
			return $this->db->affected_rows();
		}
        function delete_clinic($id)
		{
			$this->db->where('clinic_id',$id);
			$this->db->delete('clinics');
		}

		####END CLINIC FUNCTIONS###
		
 
 
 
 
 
		function save_results($data){
        //get bill entries 
			$count = count($data['count']);
			$entries['client_id']   = $this->input->post('client_id');
			$entries['test_id']   = $this->input->post('test_id');
			$test_description = $this->input->post('test_description');
			$test_result = $this->input->post('test_result');
         
        for($i = 0; $i<$count; $i++){
            $entries[] = array(
                'test_description'=>$data['test_description'][$i],
                'test_result'=>$data['test_result'][$i]
                );
        }
		
        $this->db->insert_batch('results',$entries); 
        if($this->db->affected_rows() > 0)
            return 1;
        else
            return 0;
        }

 
}

