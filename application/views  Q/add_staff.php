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
									<div class="portlet-body">
										<form action="<?=base_url();?>admin/staff_add" method="post" class="form-horizontal" enctype="multipart/form-data">
											<div class="form-body">
												
												<div class="row">
													
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Full Name</label>
															<div class="col-md-9">
																<input type="text" name="name" class="form-control" placeholder="Full Name">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender</label>
															<div class="col-md-4">
																<select class="form-control" name="gender" id="s1">
																	<option value="Male">Male</option>
																	<option value="Female">Female</option>
																</select>
															
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Pension</label>
															<div class="col-md-4">
																<select class="form-control" name="on_pension" id="s2">
																	<option value="1">YES</option>
																	<option value="0">NO</option>
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
																	<option value="<?=$tt['job_id'];?>"><?=$tt['job'];?></option>
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
																<input type="text" name="birthdate" class="form-control dt" placeholder="Date of Birth">
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Start Date</label>
															<div class="col-md-6">
																<input type="text" name="startdate" class="form-control dt" placeholder="Start Date">
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
																<input type="tel" name="phone" class="form-control" placeholder="Phone">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Email</label>
															<div class="col-md-9">
																<input type="email" name="email" class="form-control" placeholder="Email Address">
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
																<input type="text" name="bsalary" class="form-control" placeholder="Monthly Salary">
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tea Allowance</label>
															<div class="col-md-4">
																<input type="text" name="tea_allowance" class="form-control" placeholder="Tea Allowance">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Home Address</label>
															<div class="col-md-9">
																<textarea name="homeaddress" class="form-control" placeholder="Home Address"></textarea>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Contact Address</label>
															<div class="col-md-9">
																<textarea name="contactaddress" class="form-control" placeholder="Contact Address"></textarea>
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
																<textarea name="nextofkin" class="form-control" placeholder="Next of Kin Details"></textarea>
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
																	<option value="<?=$rt['department_id'];?>"><?=$rt['department'];?></option>
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
																	<option value="<?=$rt['depot_id'];?>"><?=$rt['depot'];?></option>
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
																	<option value="<?=$rt0['qualification_id'];?>"><?=$rt0['qualification'];?></option>
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
																  <option value="Single">Single</option>
																  <option value="Married">Married</option>
																  <option value="Widowed">Widowed</option>
																  <option value="Divorced">Divored</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Photo / Image</label>
															<div class="col-md-9">
																<input type="file" name="photo" id="photo" class="form-control">
																<img alt="" id="image" class="img-responsive">
																
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
																<button type="submit" class="btn green"><i class="fa fa-plus"></i> add staff</button>
																<a href="<?=base_url();?>admin/staff_list" class="btn default blue"><i class="fa fa-cancel"></i> << back</a>
															</div>
														</div>
													</div>
													
												</div>
											</div>
										</form>
										<!-- END FORM-->
											
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
   var save_method; //for save method string
    var table;
	function add_leave()
    {
      save_method = 'add';
      $('#formleave')[0].reset(); // reset form on modals
      $('#leave').modal('show'); // show bootstrap modal
    }

	function add_scheme()
    {
      save_method = 'add';
      $('#formscheme')[0].reset(); // reset form on modals
      $('#scheme').modal('show'); // show bootstrap modal
    }
	
	function add_schemebill()
    {
      save_method = 'add';
      $('#formschemebill')[0].reset(); // reset form on modals
      $('#schemebill').modal('show'); // show bootstrap modal
    }

	function add_overtime()
    {
      save_method = 'add';
      $('#formovertime')[0].reset(); // reset form on modals
      $('#overtime').modal('show'); // show bootstrap modal
    }
	
	function add_bank()
    {
      save_method = 'add';
      $('#formbank')[0].reset(); // reset form on modals
      $('#bank').modal('show'); // show bootstrap modal
    }
	
    function edit_leave(id)
    {
      save_method = 'update';
      $('#formleave')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/leave_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="extra_id"]').val(data.extra_id);
            $('[name="leave_days"]').val(data.leave_days);
            $('[name="days_used"]').val(data.days_used);
            $('[name="leave_grant"]').val(data.leave_grant);
			$('[name="month"]').val(data.month);
			$('[name="year"]').val(data.year);
			$('[name="days_remaining"]').val(data.days_remaining);
            $('#leave').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Leave'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	function edit_scheme(id)
    {
      save_method = 'update';
      $('#formscheme')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/scheme_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="health_scheme_id"]').val(data.health_scheme_id);
            $('[name="membership_number"]').val(data.membership_number);
            $('[name="membership_id"]').val(data.membership_id);
            $('[name="employee_id"]').val(data.employee_id);
			$('[name="scheme_id"]').val(data.scheme_id);
			$('[name="description"]').val(data.description);
			$('#scheme').modal('show');
			$('.modal-title').text('Edit Scheme'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	function edit_schemebill(id)
    {
      save_method = 'update';
      $('#formschemebill')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/schemebill_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="scheme_bill_id"]').val(data.scheme_bill_id);
            $('[name="amount"]').val(data.amount);
            $('[name="employee_id"]').val(data.employee_id);
			$('#schemebill').modal('show');
			$('.modal-title').text('Edit Scheme bill'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
	function edit_overtime(id)
    {
      save_method = 'update';
      $('#formovertime')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/overtime_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="overtime_id"]').val(data.overtime_id);
            $('[name="public_hours"]').val(data.public_hours);
			$('[name="normal_hours"]').val(data.normal_hours);
            $('[name="employee_id"]').val(data.employee_id);
			$('#overtime').modal('show');
			$('.modal-title').text('Edit Overtime'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
	function edit_bank(id)
    {
      save_method = 'update';
      $('#formbank')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/bank_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="bank_details_id"]').val(data.bank_details_id);
            $('[name="branch"]').val(data.branch);
			$('[name="account_type"]').val(data.account_type);
			$('[name="city"]').val(data.city);
			$('[name="account_number"]').val(data.account_number);
            $('[name="employee_id"]').val(data.employee_id);
			$('#overtime').modal('show');
			$('.modal-title').text('Edit bank'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
 
     function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/leave_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/leave_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formleave').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#leave').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
	
	function save1()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/scheme_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/scheme_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formscheme').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#scheme').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
 
    function save2()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/schemebill_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/schemebill_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formschemebill').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#schemebill').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
	
	function save3()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/overtime_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/overtime_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formovertime').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#overtime').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
	
	function save4()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/bank_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/bank_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formbank').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#bank').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
    function delete_leave(id)
    {
      if(confirm('Are you sure you want to delete the selected LEAVE DETAILS?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/leave_delete')?>/"+id,
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
	
	function delete_scheme(id)
    {
      if(confirm('Are you sure you want to delete the selected SCHEME?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/scheme_delete')?>/"+id,
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
	
	function delete_schemebill(id)
    {
      if(confirm('Are you sure you want to delete the selected SCHEME BILL?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/schemebill_delete')?>/"+id,
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
 
   	function delete_overtime(id)
    {
      if(confirm('Are you sure you want to delete the selected OVERTIME?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/overtime_delete')?>/"+id,
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
	
	function delete_bank(id)
    {
      if(confirm('Are you sure you want to delete the selected BANK DETAILS?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/bank_delete')?>/"+id,
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
	
