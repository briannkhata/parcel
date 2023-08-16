
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
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
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<?php include'includes/header_top.php';?>
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
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
				
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					 <?php if ($this->session->flashdata('message')) 
					 { ?>
						<div class="alert alert-success fade in">
						<a href="#" class="close" data-dismiss="alert">&times;</a><center><?php echo $this->session->flashdata('message'); ?> </center></div>
					<?php } ?>
					<!-- END THEME PANEL -->
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
				<div class="row">
			
				<div class="tabbable">
							<ul class="nav nav-tabs">
										
										<li>
											<a href="#tab_meta" data-toggle="tab">
											System Settings </a>
										</li>
									
										
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
									
					<div class="tabbable tabbable-custom tabbable-noborder  tabbable-reversed">
						
						
								<div class="portlet light bordered">
								
									
									
									<?php  $setting=$this->db->get('labo')->result_array();?>
									<?php foreach($setting as $despa):?>
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>admin/add_settings" method="post" class="form-horizontal" enctype="multipart/form-data">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Company Name</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name="name" placeholder="Company Name" value="<?=$despa['name'];?>">					
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Company Address</label>
													<div class="col-md-6">
															<input type="text" class="form-control" name="address" placeholder="Address" value="<?=$despa['address'];?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Cellphone</label>
													<div class="col-md-6">
															<input type="text" name="phone" class="form-control" placeholder="Cellphone" value="<?=$despa['phone'];?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Telphone</label>
													<div class="col-md-6">
															<input type="text" name="telphone" class="form-control" placeholder="Telphone" value="<?=$despa['telphone'];?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Email</label>
													<div class="col-md-6">
														<input type="email" name="email" class="form-control" placeholder="Email" value="<?=$despa['email'];?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Location</label>
													<div class="col-md-6">
														<input type="text" name="location" class="form-control" placeholder="Location" value="<?=$despa['location'];?>">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Post Box</label>
													<div class="col-md-6">
														<input type="text" name="post_box" class="form-control" placeholder="Post Box" value="<?=$despa['post_box'];?>">
													</div>
												</div>
												
												<div class="form-group last">
													<label class="col-md-3 control-label">Street Address</label>
													<div class="col-md-6">
														<input type="text" name="street_address" class="form-control" placeholder="Street Address" value="<?=$despa['street_address'];?>">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Building Name</label>
													<div class="col-md-6">
														<input type="text" name="building_name" class="form-control" placeholder="Building Name" value="<?=$despa['building_name'];?>">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">City</label>
													<div class="col-md-6">
														<input type="text" name="city" class="form-control" placeholder="City" value="<?=$despa['city'];?>">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Country</label>
													<div class="col-md-6">
														<input type="text" name="country" class="form-control" placeholder="Country" value="<?=$despa['country'];?>">
													</div>
												</div>
												
												<div class="form-group last">
													<label class="col-md-3 control-label">Logo</label>
													<div class="col-md-4">
														<input type="file" name="logo" class="form-control" placeholder="Logo" value="<?=$despa['logo'];?>">
													</div>
												</div>												
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Save</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<?php endforeach;?>
										<!-- END FORM-->
								
								</div>
							</div>	</div>
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
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
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
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/form-samples.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   FormSamples.init();
});
</script>
<script>
window.setTimeout(function() {
  $(".alert").fadeTo(500, 0).slideUp(500, function(){
    $(this).remove(); 
  });
}, 3000);
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>