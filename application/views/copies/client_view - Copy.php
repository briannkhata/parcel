<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?=$system;?> | <?=$page_title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/jquery-nestable/jquery.nestable.css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link href="<?=base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>

<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<?php include'includes/header_top.php';?>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
			<div class="page-sidebar-wrapper">
			<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
				<?php include 'includes/nav.php';?>
			</div>
		</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-head">
				<!--div class="page-title">
					<h1><?=$company;?></h1>
				</div>
				<?php //include 'includes/topbar.php';?>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- /.modal -->
			<!-- BEGIN PAGE CONTENT-->
			<div class="note note-info note-shadow">
				<p>
				<span></span>
				</p>
			</div>
			<div class="portlet light">
			<?php foreach($details as $det0):?>
				<div class="portlet-body">
					<div class="row">
						
					</div>
					<div class="row">
						<div class="col-md-12">
							<h3><?=$det0['name'];?></h3>
								
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="portlet box blue">
								
								<div class="portlet-body ">
									<div class="dd" id="nestable_list_1">
								<form role="form" action="#" id="formclient">
											<div class="form-group">
												   <input type="hidden" name="client_id" value="<?=$det0['client_id'];?>">
												   <input type="hidden" class="form-control" name="name" id="exampleInputEmail1" value="<?=$det0['name'];?>" placeholder="Fullname" required>
										 	   </div>

												<!--div class="form-group">
												  <select class="form-control selectpicker" name="test_id[]" style="width:70%; margin-left:15%;" multiple>
												  <option selected disabled>Select test</option>
												  <?php $test=$this->db->get('tests')->result_array();?>
												  <?php foreach($test as $row):?>
													  <option value="<?=$row['test_id'];?>"><?=$row['test_name'];?></option>
													<?php endforeach;?>
												  </select>
												</div-->
								
												<div class="form-group">
												   <input type="text" class="form-control" name="request_date" id="d1" value="<?=$det0['request_date'];?>" style="width:70%; margin-left:15%;" placeholder="Request Date" required>
												</div>
																								
												<div class="form-group">
													<input type="tel" class="form-control" name="phone" value="<?=$det0['phone'];?>" id="exampleInputEmail1" style="width:70%; margin-left:15%;" placeholder="Phone No." required>
												</div>
																	
												<div class="form-group">
													  <input type="text" class="form-control" name="address" value="<?=$det0['address'];?>" id="exampleInputEmail1" style="width:70%; margin-left:15%;" placeholder="Contact Address" required>
												</div>
													
									
												<div class="form-group">
												    <input type="email" class="form-control" name="email" value="<?=$det0['email'];?>" id="exampleInputEmail1" style="width:70%; margin-left:15%;" placeholder="Email address" required>
												</div>
										
												<div class="form-group">
													  <input type="text" class="form-control" value="<?=$det0['age'];?>" name="age" id="age" style="width:70%; margin-left:15%;" placeholder="Age">
												</div>
											
												<div class="form-group">
												 
												  <select class="form-control" name="gender" style="width:70%; margin-left:15%;">
												  <option selected disabled>Select gender</option>
													<option <?php if ($det0['gender'] =='Male' ) echo 'selected' ; ?> value="Male">Male</option>
													<option <?php if ($det0['gender']=='Female') echo 'selected' ; ?> value="Female">Female</option>
												  </select>
												</div>
											   <div class="form-group">
											 
											  <select class="form-control" name="pay_mode" id="pay_mode" style="width:70%; margin-left:15%;">
											  <option selected disabled>Select payment mode</option>
											  <?php $mode=$this->db->get('payment_mode')->result_array();?>
											  <?php foreach($mode as $zoba):?>
													<option value="<?=$zoba['pay_mode'];?>"><?=$zoba['pay_mode'];?></option>
												<?php endforeach;?>
											  </select>
											</div>
									
											<div class="form-group">
											 
											  <select class="form-control" name="clinic_id" id="clinic_id" style="width:70%; margin-left:15%;">
											  <option selected disabled>Select hospital</option>
											  <?php $clinic=$this->db->get('clinics')->result_array();?>
											  <?php foreach($clinic as $row):?>
												  <option value="<?=$row['clinic_id'];?>"><?=$row['clinic_name'];?></option>
												<?php endforeach;?>
											  </select>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" value="<?=$det0['doctor_name'];?>" name="doctor_name" id="exampleInputEmail1" style="width:70%; margin-left:15%;" placeholder="Doctor's name">
											</div>
										
										<div class="form-group">
											 <button type="button" class="btn blue zanda" onclick="savee()" style="width:70%; margin-left:15%;">SAVE</button>
										
										</div>
								
									</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="portlet box green">
								<div class="portlet-title">
									<div class="caption">
										Tests Requested [<?=count($this->db->get_where('requested_tests',array('client_id'=>$det0['client_id']))->result_array());?>]
									</div>					
								</div>
								<div class="portlet-body">
								<?php $cl=$this->db->select('*')->from('tests')->join('requested_tests','tests.test_id=requested_tests.test_id')->where('client_id',$det0['client_id'])->get()->result_array();?>	
									<div class="dd" id="nestable_list_2" style="padding-left:5%; padding-right:5%; padding-top:3%;">
										<ol class="dd-list">
										<?php foreach($cl as $ok):?>
											<li class="dd-item" data-id="13">
												<div>
													<a href="<?=base_url();?>admin/add_params/<?=$ok['test_id'].'/'.$det0['client_id'];?>" class="btn btn-block btn-sm" title="CLICK TO ADD TEST RESULTS"><i class="fa fa-plus-square"></i><?=$ok['test_name'];?></a>
												</div>
											</li>
										<?php endforeach;?>
											
										</ol>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<?php endforeach;?>
				<!-- END PAGE CONTENT-->
		</div>
	</div>
	<?php include 'includes/footer.php';?>
</div>
</div>
<script src="<?=base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?=base_url();?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>assets/global/plugins/jquery-nestable/jquery.nestable.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/datatable.js"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>

<script src="<?=base_url();?>assets/admin/pages/scripts/ui-nestable.js"></script>
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker();
				$('#dob').datepicker();
				$('#d1').datepicker();
				$('.selectpicker').select2();
				$('#clinic_id').select2();
				$('#pay_mode').select2();
				$('#faki').select2();
				$('#maopo').dataTable();
				$('#mmaop').dataTable();
				
				
            });
 </script>
 <script>
	
	 function savee()
    {
      var url = "<?php echo site_url('admin/client_update')?>";
   
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formclient').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
                location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
               alert('Error adding or updating data!');
					
            }
        });
    }
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>