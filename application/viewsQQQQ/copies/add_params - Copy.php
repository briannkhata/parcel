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
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PLUGINS USED BY X-EDITABLE -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css"/>
<!-- END PLUGINS USED BY X-EDITABLE -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
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
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
    			<div class="page-title">			
				</div>
				<div class="page-toolbar">
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			
			<!-- BEGIN PAGE CONTENT-->
								<div class="portlet light">
									<div class="portlet-body">
										<div class="row">
											<div class="col-md-12">
												<h4 class="text-primary text-center"><?=$page_title;?></h4>
												<hr>
											</div>
										</div>
											<div class="row">
												<div class="col-md-12">
						
													<form action="<?=base_url();?>admin/test_result_add" id="saveparams" method="post">
														<?php foreach($fay as $bea):?>
															<div class="col-md-6">
																<div class="form-group">
																<label for="exampleInputEmail1"><?=strtoupper($bea['test_parameter']);?></label>
																	<input type='hidden' value="<?=$bea['test_parameter_id'];?>" name='test_parameter_id[]'>
																	<input type='text' class='form-control' name='test_result[]'>
																</div>
															</div>
															<?php $has_units=$this->db->get_where('tests',array('test_id'=>$bea['test_id']))->row()->has_units;?>
															<?php if($has_units == 1):?>
															<div class="col-md-2">
																<div class="form-group">
																<label for="exampleInputEmail1">Units</label>
																	<input type='text' class='form-control' name='units[]'>
																</div>
															</div>
															<div class="col-md-2">
																<div class="form-group">
																<label for="exampleInputEmail1">Ref Range</label>
																	<input type='text' class='form-control' name='ref_range[]'>
																</div>
															</div>
															<?php else:?>
															<?php endif;?>
															<?php endforeach;?>
														
															  <div class="col-md-12">
																<div class="form-group">
																	<a href="#" class="comment">Add Comment</a> |
																	<a href="#" class="approved_by">Approved by</a> |
																	<a href="#" class="reported_by">Reported by</a>
																	
																</div>
															</div>
															
															
															<div id="dynamicInput">
															</div>
															
															<input type="hidden" name="test_id" class="form-control" value="<?=$test_id;?>">
															<input type="hidden" name="client_id" class="form-control" value="<?=$client_id;?>">

															 <div class="col-md-2">
																<div class="form-group">
																	<button type="submit" class="btn green-haze"><i class="fa fa-save"></i> save</button>
																</div>
															 </div>
															 
															 
															  <div class="col-md-6">
																<div class="form-group">
																	<a href="<?=base_url();?>admin/testing" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
																</div>
															 </div>
													 
													 
													</form>
													
												</div>
											</div>		
									    </div>
								</div>
								<!-- END PAGE CONTENT-->
							</div>
						</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2017 &copy; Designed and Developed by Focus IT
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- BEGIN PLUGINS USED BY X-EDITABLE -->
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.zh-CN.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/moment.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/jquery.mockjax.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-editable/inputs-ext/wysihtml5/wysihtml5.js"></script>
<!-- END X-EDITABLE PLUGIN -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/form-editable.js"></script>
<script>
jQuery(document).ready(function() {
// initiate layout and plugins
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
FormEditable.init();
});
</script>

<script>
		function test_result_add()
		{
		  var url = "<?php echo site_url('admin/test_result_add')?>";
		  var url0 = "<?php echo site_url('admin/add_params')?>";
		
		   // ajax adding data to database
			  $.ajax({
				url : url,
				type: "POST",
				data: $('#saveparams').serialize(),
				dataType: "JSON",
				success: function(data)
				{
				   alert("DATA SAVED SUCCESSFULLY");
				   $('#saveparams')[0].reset();
				   location.href=url0;
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error adding or updating data!');

				}
				/*complete: function(xhr,status) 
				{
					alert("DATA SAVED SUCCESSFULLY");
				   $('#saveparams')[0].reset();
				}*/
			});
		}
	</script>
	
	 <script type="text/javascript">
			var comment;
			var approved_by;
			var reported_by;           
           $('.comment').click(function(){
                    comment = "<div class='col-md-12'><div class='form-group'><label>Comment </label><input type='text' class='form-control' name='comment' required></div></div>"; 
                    $('#dynamicInput').append(comment);
            });
			
		   $('.approved_by').click(function(){
                    approved_by = "<div class='col-md-6'><div class='form-group'><label>Approved by: </label><input type='text' class='form-control' name='approved_by' required></div></div>"; 
                   	$('#dynamicInput').append(approved_by);
            });
			
			 $('.reported_by').click(function(){
                    reported_by = "<div class='col-md-6'><div class='form-group'><label>Reported by: </label><input type='text' class='form-control' name='reported_by' required></div></div>"; 
                  	$('#dynamicInput').append(reported_by);
            });

    </script>
	

<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->
</html>