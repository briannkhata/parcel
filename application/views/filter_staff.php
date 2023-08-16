<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?=$page_title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<script src="<?=base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link href="<?=base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?=base_url();?>assets/print.css" type="text/css" media="print" /> 
<link rel="stylesheet" href="<?=base_url();?>assets/print.css" type="text/css" media="print" /> 
<link href="<?=base_url();?>assets/fonts.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<?php include'includes/header_top.php';?>
</div>
<div class="clearfix">
</div>
<div class="page-container">
<?php include 'includes/left_nav.php';?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-head">
				<?php //include 'includes/topbar.php';?>
				<!-- END PAGE TOOLBAR -->
			</div>
			<div class="row">
				<div class="col-md-12">
							<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-diamond"></i>
									<span class="caption-subject font-green-sharp bold uppercase">
									<?=$page_title;?></span>
									
								</div>
								<div class="actions btn-set"></div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											Staff List </a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											Trash List</a>
										</li>
										
										
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
													<div class="portlet-body">
													<div class="table-toolbar">
															<div class="row">
															<div class="col-md-6">
																	<a href="<?=base_url();?>admin/add_staff" id="sample_editable_1_new" class="btn green">
																			Add New <i class="fa fa-plus"></i>
																			</a>
																		<form class="form-inline" action="<?=base_url();?>staff/filter_staff" method="post" style="width:100%; margin-left:25%;margin-top:-7%;">
											
																				<select class="form-control see" name="depot_id" style="min-width:34%;" required>
																					<option  value="">Choose Depot</option>
																					<?php $dd=$this->db->get('depot')->result_array();?>
																					<?php foreach($dd as $sel):?>
																						<option value="<?=$sel['depot_id'];?>"><?=$sel['depot'];?></option>
																					<?php endforeach;?>
																				</select>
																				
																				<select class="form-control see" name="department_id" style="min-width:30%;" required>
																					<option  value="">Department</option>
																					<?php $dep=$this->db->get('department')->result_array();?>
																					<?php foreach($dep as $cel):?>
																						<option value="<?=$cel['department_id'];?>"><?=$cel['department'];?></option>
																					<?php endforeach;?>
																				</select>
																				<button type="submit" class="btn btn-search"><i class="fa fa-search"></i>View Staff</button>
																			</form>
																		
																	</div>
																<div class="col-md-6">
																	<div class="btn-group pull-right">
																		<button  id="sample_editable_1_new" class="btn blue" onclick="window.print();">
																			 <i class="fa fa-print"></i> print
																			</button>
																	</div>
																</div>
															</div>
														</div>
															
														<table class="table table-striped table-bordered table-hover" id="mahop">
															<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Branch</th>
																<th>Department</th>
																<th>Start Date</th>
																<th>Salary</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
														<?php  foreach($staff as $row):?>
															<tr class="odd gradeX">
															 <td><?=$count++;?></td>
															 <td><?=$row['name'];?></td>
															 <td><?=$this->db->get_where('depot',array('depot_id'=>$row['depot_id']))->row()->depot;?></td>
															 <td><?=$this->db->get_where('department',array('department_id'=>$row['department_id']))->row()->department;?></td>
															 <td><?php echo $row['startdate'];?></td>
															 <td><?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['bsalary'])),2);?></td>
															 <td align="center">					
																<a href="<?=base_url();?>admin/edit_staff/<?=$row['employee_id'];?>" class="btn btn-success btn-xs black" title="CLICK TO EDIT STAFF"><i class="fa fa-edit"></i> edit</a>				
																<a href="<?=base_url();?>admin/view_staff/<?=$row['employee_id'];?>" class="btn btn-success btn-xs black" onclick="vstaff(<?=$row['employee_id'];?>)" title="CLICK TO VIEW DETAILS"><i class="fa fa-eye"></i> view</a>				
																<a href="javascript:;" class="btn btn-danger btn-xs black" onclick="delete_staff(<?=$row['employee_id'];?>)" title="CLICK TO DELETE"><i class="fa fa-trash-o"></i> delete</a>				
															</td>
															</tr>
															<?php endforeach;?>
																
															</tr>
															</tbody>
															</table>
														</div>
													</div>
														
										<div class="tab-pane" id="tab_images">	
													<div class="portlet-body">
													<div class="table-toolbar">
															<div class="row">
															<div class="col-md-6">
																		<div class="btn-group">
																			
																		</div>
																	</div>
																<div class="col-md-6">
																	<div class="btn-group pull-right">
																		<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
																		</button>
																		<ul class="dropdown-menu pull-right">
																			<li>
																				<a href="javascript:;">
																				Print </a>
																			</li>
																			<li>
																				<a href="javascript:;">
																				Save as PDF </a>
																			</li>
																			<li>
																				<a href="javascript:;">
																				Export to Excel </a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
															
														<table class="table table-striped table-bordered table-hover" id="mm">
															<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Date</th>
																<th>How</th>
																<th>Reason</th>
																<th class="nop"></th>
															</tr>
															</thead>
															<tbody>
														<?php  $count=1;
														$tr =$this->db->select('*')->from('employees')->join('trashed_employees','trashed_employees.employee_id=employees.employee_id')->get()->result_array();?>
														<?php  foreach($tr as $row):?>
															<tr class="odd gradeX">
															 <td><?=$count++;?></td>
															 <td><?php echo $row['name'];?></td>
															 <td><?php echo $row['date_trashed'];?></td>
															 <td><?php echo $row['action'];?></td>
															 <td><?php echo $row['reason'];?></td>
															 <td align="center" class="nop">					
																<a href="javascript:;" class="btn btn-success btn-xs black" onclick="edit_staff(<?=$row['trashed_id'];?>)" title="CLICK TO ACTIVATE STAFF"><i class="fa fa-key"></i> activate</a>				
															</td>
															</tr>
															<?php endforeach;?>
														
															</tbody>
															</table>
														</div>
												</div>
											</div>
										</div>
									</div>
							<!-- END PAGE CONTENT-->
						</div>
					</div>
	<!-- END CONTENT -->
		</div>		
	</div>
</div>
<?php include 'includes/footer.php';?>
<script src="<?=base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?=base_url();?>assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/datatable.js"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ui-extended-modals.js"></script>
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>
<script>
   $('#s1').select2();
   $('#s2').select2();
   $('#s3').select2();
   $('#s4').select2();
   $('#s5').select2();
   $('#s6').select2();
   $('#s7').select2();
   $('#ss').select2();
   $('.see').select2();
  $('.dt').datepicker({
      autoclose: true
    });
$('#mahop').dataTable();
$('#mm').dataTable();
$('#mmm').dataTable();
$('#mmmm').dataTable();
$('#mmmmm').dataTable();
$('#mmmmmm').dataTable();
$('#mmmmmmm').dataTable();
$('#m0').dataTable();
</script>
<script>
	
	 document.getElementById("photo").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
	
	
	</script>
<script type="text/javascript">
  	function delete_staff(id)
    {
      if(confirm('Are you sure you want to delete the selected STAFF DETAILS?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/staff_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }
 
  </script>
	
</body>
</html>

 <!---LEAVE DAYS-->
 
 <div id="leave" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD LEAVE</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formleave">
				  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="extra_id" value="">
						    <select name="employee_id" class="form-control" id="ss">
						        <?php
								$data = [];
								$db = $this->db->select('employee_id')->from('extra')->get()->result_array();
								if(count($db) > 0)
								{
									foreach($db as $row)
									{ $data[] = $row['employee_id']; }
								}
								$this->db->select('*');
								if(!empty($data))
								$this->db->where_not_in('employee_id',$data);
								$this->db->where('active',1);
								$ra = $this->db->get('employees')->result_array();
								?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Total Days</label>
						 	  <input type="number" class="form-control" name="leave_days" id="exampleInputEmail1" placeholder="Leave Days" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Days Used</label>
						 	  <input type="number" class="form-control" name="days_used" id="exampleInputEmail1" placeholder="Days used" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Days Remaining</label>
						 	  <input type="number" class="form-control" name="days_remaining" id="exampleInputEmail1" placeholder="Days Remaining">
						</div>
					</div>
					
					 <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Leave Grant</label>
						  <input type="text" class="form-control" name="leave_grant" id="exampleInputEmail1" placeholder="Leave Grant" required>
						</div>
					 </div>
					 
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						    <select name="month" class="form-control see">
							   <?php $rza = $this->db->get('month')->result_array();?>
							   <?php foreach($rza as $yo):?>
									<option value="<?=$yo['month'];?>"><?=$yo['month'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Year</label>
						    <select name="year" class="form-control see">
							   <?php $raa = $this->db->get('year')->result_array();?>
							   <?php foreach($raa as $yo):?>
									<option value="<?=$yo['year'];?>"><?=$yo['year'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save()">Add leave</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	
	
	<!--scheme-->
	<div id="scheme" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD SCHEME</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formscheme">
				  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="health_scheme_id" value="">
						    <select name="employee_id" class="form-control see">
						        <?php
								$data = [];
								$db = $this->db->select('employee_id')->from('health_scheme')->get()->result_array();
								if(count($db) > 0)
								{
									foreach($db as $row)
									{ $data[] = $row['employee_id']; }
								}
								$this->db->select('*');
								if(!empty($data))
								$this->db->where_not_in('employee_id',$data);
								$this->db->where('active',1);
								$ra = $this->db->get('employees')->result_array();
								?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Scheme Name</label>
						 	  <select name="scheme_id" class="form-control see">
									<?php $se = $this->db->get('scheme')->result_array();?>
									<?php foreach($se as $r0):?>
									      <option value="<?=$r0['scheme_id'];?>"><?=$r0['scheme_name'];?></option>
									<?php endforeach;?>
								</select>
						</div>
					</div>
					 
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Membership type</label>
								<select name="membership_id" class="form-control see">
									<?php $m = $this->db->get('membership')->result_array();?>
									<?php foreach($m as $row):?>
										<option value="<?=$row['membership_id']?>"><?=$row['membership'];?></option>
									<?php endforeach;?>
								</select>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Membership #</label>
						 	  <input type="text" class="form-control" name="membership_number" id="exampleInputEmail1" placeholder="Membership #" required>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Description</label>
						 	  <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="Short Decsription">
						</div>
					</div>
					
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save1()">Add scheme</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	
	
	<!--scheme bill-->
	<div id="schemebill" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD SCHEME BILL</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formschemebill">
				  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="scheme_bill_id" value="">
						    <select name="employee_id" class="form-control see">
						        <?php
								$data = [];
								$db = $this->db->select('employee_id')->from('scheme_bill')->get()->result_array();
								if(count($db) > 0)
								{
									foreach($db as $row)
									{ $data[] = $row['employee_id']; }
								}
								$this->db->select('*');
								if(!empty($data))
								$this->db->where_not_in('employee_id',$data);
								$this->db->where('active',1);
								$ra = $this->db->get('employees')->result_array();
								?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Amount</label>
						 	  <input type="text" class="form-control" name="amount" id="exampleInputEmail1" placeholder="Amount" required>
						</div>
					</div>
					 <!--div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						    <select name="month" class="form-control see">
							   <?php $rza = $this->db->get('month')->result_array();?>
							   <?php foreach($rza as $yo):?>
									<option value="<?=$yo['month'];?>"><?=$yo['month'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Year</label>
						    <select name="year" class="form-control see">
							   <?php $raa = $this->db->get('year')->result_array();?>
							   <?php foreach($raa as $yo):?>
									<option value="<?=$yo['year'];?>"><?=$yo['year'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div-->
					
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save2()">Add bill</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	
	
	
	<!--overtime-->
	<div id="overtime" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD OVERTIME</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formovertime">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="overtime_id" value="">
						    <select name="employee_id" class="form-control see">
						        <?php
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
								$ra = $this->db->get('employees')->result_array();
								?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Public Hours</label>
						 	  <input type="number" class="form-control" name="public_hours" id="exampleInputEmail1" placeholder="Public Hours">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Normal Hours</label>
						 	  <input type="number" class="form-control" name="normal_hours" id="exampleInputEmail1" placeholder="Normal Hours">
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						    <select name="month" class="form-control see">
							   <?php $rza = $this->db->get('month')->result_array();?>
							   <?php foreach($rza as $yo):?>
									<option value="<?=$yo['month'];?>"><?=$yo['month'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Year</label>
						    <select name="year" class="form-control see">
							   <?php $raa = $this->db->get('year')->result_array();?>
							   <?php foreach($raa as $yo):?>
									<option value="<?=$yo['year'];?>"><?=$yo['year'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save3()">Add overtime</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	
	
   <div id="bank" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD BANK DETAILS</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formbank">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="bank_details_id" value="">
						    <select name="employee_id" class="form-control see">
						        <?php
								$data = [];
								$db = $this->db->select('employee_id')->from('bank_details')->get()->result_array();
								if(count($db) > 0)
								{
									foreach($db as $row)
									{ $data[] = $row['employee_id']; }
								}
								$this->db->select('*');
								if(!empty($data))
								$this->db->where_not_in('employee_id',$data);
								$this->db->where('active',1);
								$ra = $this->db->get('employees')->result_array();
								?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Bank</label>
						 	  <select name="bank_id" id="bank_id" class="form-control see">
								<?php $bank	=	$this->db->get('bank')->result_array();
									foreach($bank as $row):?>
									 <option value="<?=$row['bank_id'];?>"><?=$row['bank'];?></option>
								<?php endforeach;?>
							 </select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Branch</label>
						 	  <input type="text" class="form-control" name="branch" id="exampleInputEmail1" placeholder="Branch">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Account #</label>
						 	  <input type="text" class="form-control" name="account_number" id="exampleInputEmail1" placeholder="Account #">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Account type</label>
						 	  <input type="text" class="form-control" name="account_type" id="exampleInputEmail1" placeholder="Account Type">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save4()">Add</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	
		




	
	<div id="staff" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:0px;">
				<div class="modal-header">
					<h4 class="modal-title"> ADD STAFF</h4>
				  </div>
				  <div class="modal-body">
				  <div class="box box-primary">
					<form role="form" action="#" id="formstaff">
					  <div class="box-body">
					  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Firstname</label>
						   <input type="hidden" name="staff_id" value="">
				 		  <input type="text" class="form-control" name="fname" id="exampleInputEmail1" placeholder="Firstname" required>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Lastname</label>
						  <input type="text" class="form-control" name="lname" id="exampleInputEmail1" placeholder="Lastname" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Previous Company</label>
						  <input type="text" class="form-control" name="previous_company" id="exampleInputEmail1" placeholder="Previous Company" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Job title</label>
						  <input type="text" class="form-control" name="job_title" id="exampleInputEmail1" placeholder="Job title" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Phone No.</label>
						  <input type="tel" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone No." required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Email</label>
						  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email address" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Salary</label>
						  <input type="text" class="form-control" name="salary" id="exampleInputEmail1" placeholder="Basic salary" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label>Gender</label>
						  <select class="form-control" name="gender">
						  <option selected disabled>Select gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						  </select>
						</div>
					</div>		
					<div class="col-md-6">
						<div class="form-group">
						  <label>Status</label>
						  <select class="form-control" name="status">
						  <option selected disabled>Select status</option>
							<option value="Married">Married</option>
							<option value="Single">Single</option>
							<option value="Widowed">Widowed</option>
							<option value="Divorced">Divorced</option>
						  </select>
						</div>
					</div>								
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Start Date</label>
						  <input type="text" class="form-control" name="startdate" id="startDate" placeholder="Start Date" required>
						</div>
					</div>
					<div class="col-md-12">
					<div class="form-group">
						  <label for="exampleInputEmail1">Address</label>
						  <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Contact Address" required>
					</div>
					</div>
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save()">Add staff</button>
					</div>

            </form>
	    </div>
	  </div>
	</div>	
	
