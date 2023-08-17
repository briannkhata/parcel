<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?=$system;?> | <?=$page_title;?></title>
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
							<hr>
								<?php  foreach($staff as $row):?>												
									<div class="portlet-body">
										<form action="<?=base_url();?>admin/staff_update" method="post" class="form-horizontal" enctype="multipart/form-data">
											<div class="form-body">
												
												<div class="row">
													
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Full Name</label>
															<div class="col-md-9">
															    <input type="hidden" name="employee_id" class="form-control" value="<?=$row['employee_id'];?>">
																<input type="text" name="name" class="form-control" placeholder="Full Name" value="<?=$row['name'];?>">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender</label>
															<div class="col-md-4">
																<select class="form-control" name="gender" id="s1">
																	<option <?php if ($row['gender'] =='Male' ) echo 'selected';?> value="Male">Male</option>
																	<option <?php if ($row['gender'] =='Female' ) echo 'selected';?> value="Female">Female</option>
																</select>
															
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Pension</label>
															<div class="col-md-4">
																<select class="form-control" name="on_pension" id="s2">
																	<option <?php if ($row['on_pension'] =='1' ) echo 'selected';?> value="1">YES</option>
																	<option <?php if ($row['on_pension'] =='0' ) echo 'selected';?> value="0">NO</option>
																</select>
															
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Job Title</label>
															<div class="col-md-9">
																<select class="form-control" name="job_id" id="s7">
																<?php $e=$this->db->get('jobs')->result_array();?>
																<?php foreach($e as $tt):?>
																	<option <?php if ($row['job_id'] == $tt['job_id']) echo 'selected';?> value="<?=$tt['job_id'];?>"><?=$tt['job'];?></option>
																	<?php endforeach;?>
																</select>
															</div>
														</div>
													</div>
													
													
												</div>
												<!--/row-->
												
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Date of Birth</label>
															<div class="col-md-6">
																<input type="text" name="birthdate" class="form-control dt" placeholder="Date of Birth" value="<?=$row['birthdate'];?>">
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Start Date</label>
															<div class="col-md-6">
																<input type="text" name="startdate" class="form-control dt" placeholder="Start Date" value="<?=$row['startdate'];?>">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Phone</label>
															<div class="col-md-9">
																<input type="tel" name="phone" class="form-control" placeholder="Phone" value="<?=$row['phone'];?>">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Email</label>
															<div class="col-md-9">
																<input type="email" name="email" class="form-control" placeholder="Email Address" value="<?=$row['email'];?>">
															</div>
														</div>
													</div>
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Salary</label>
															<div class="col-md-6">
																<input type="text" name="bsalary" class="form-control" placeholder="Monthly Salary" value="<?=$row['bsalary'];?>">
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tea Allowance</label>
															<div class="col-md-4">
																<input type="text" name="tea_allowance" class="form-control" placeholder="Tea Allowance" value="<?=$row['tea_allowance'];?>">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Home Address</label>
															<div class="col-md-9">
																<textarea name="homeaddress" class="form-control" placeholder="Home Address"><?=$row['homeaddress'];?></textarea>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Contact Address</label>
															<div class="col-md-9">
																<textarea name="contactaddress" class="form-control" placeholder="Contact Address"><?=$row['contactaddress'];?></textarea>
															</div>
														</div>
													</div>
													<!--/span-->
												
												</div>
												<div class="row">
												
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Next of Kin</label>
															<div class="col-md-9">
																<textarea name="nextofkin" class="form-control" placeholder="Next of Kin Details"><?=$row['nextofkin'];?></textarea>
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Department</label>
															<div class="col-md-9">
																<select class="form-control" name="department_id" id="s3">
																<?php $ee=$this->db->get('department')->result_array();?>
																<?php foreach($ee as $rt):?>
																	<option <?php if ($row['department_id'] == $rt['department_id'] ) echo 'selected';?> value="<?=$rt['department_id'];?>"><?=$rt['department'];?></option>
																	<?php endforeach;?>
																</select>
															</div>
														</div>
													</div>
													
												</div>
												
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Depot/Branch</label>
															<div class="col-md-9">
																<select class="form-control" name="depot_id" id="s4">
																<?php $ee=$this->db->get('depot')->result_array();?>
																<?php foreach($ee as $rt):?>
																	<option <?php if ($row['depot_id'] ==$rt['depot_id'] ) echo 'selected';?> value="<?=$rt['depot_id'];?>"><?=$rt['depot'];?></option>
																	<?php endforeach;?>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Qualification</label>
															<div class="col-md-9">
																<select class="form-control" name="qualification_id" id="s5">
																<?php $ee0=$this->db->get('qualification')->result_array();?>
																<?php foreach($ee0 as $rt0):?>
																	<option <?php if ($row['qualification_id'] == $rt0['qualification_id'] ) echo 'selected';?> value="<?=$rt0['qualification_id'];?>"><?=$rt0['qualification'];?></option>
																	<?php endforeach;?>
																</select>
															</div>
														</div>
													</div>
												</div>
													
												<div class="row">
												  <div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Status</label>
															<div class="col-md-6">
																<select class="form-control" name="status" id="s6">
																  <option <?php if ($row['status'] =='Single' ) echo 'selected';?> value="Single">Single</option>
																  <option <?php if ($row['status'] =='Married' ) echo 'selected';?> value="Married">Married</option>
																  <option <?php if ($row['status'] =='Widowed' ) echo 'selected';?> value="Widowed">Widowed</option>
																  <option <?php if ($row['status'] =='Divorced' ) echo 'selected';?> value="Divorced">Divored</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Photo / Image</label>
															<div class="col-md-9">
																<input type="file" name="photo" id="photo" class="form-control" value="<?=$row['photo'];?>">
																<img alt="" id="image" class="img-responsive" src="<?=base_url().'/assets/profile/'.$row['photo'];?>">
															</div>
														</div>
													</div>
												</div>
												
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green"><i class="fa fa-plus"></i> save changes</button>
															</div>
														</div>
													</div>
													
												</div>
											</div>
										</form>
									</div>
								<?php endforeach;?>
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
</body>
</html>

