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
<link href="<?=base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link href="<?=base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
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
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="#">
			<h1 class="text-primary">LabSoft</h1>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>

		<div class="page-top">
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
				
				<?php
                    $username   = $this->db->get_where('users' , array('user_id'=>$this->session->userdata('user_id')))->row()->username;
                   	$usertype   = $this->db->get_where('users' , array('user_id'=>$this->session->userdata('user_id')))->row()->usertype;
					$staff_id   = $this->db->get_where('users' , array('user_id'=>$this->session->userdata('user_id')))->row()->staff_id;
					$fname      = $this->db->get_where('staff' , array('staff_id'=>$staff_id))->row()->fname;
                    $lname      = $this->db->get_where('staff' , array('staff_id'=>$staff_id))->row()->lname;                        
                ?>
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						<?=$fname.'   '.$lname;?></span>
						<img alt="" class="img-circle" src="<?=base_url();?>assets/admin/layout4/img/avatar9.jpg"/>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="#">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="<?=base_url();?>User/lock">
								<i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li>
								<a href="<?=base_url();?>User/logout">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
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
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1><?=$page_title;?></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					<div class="btn-group btn-theme-panel">
						<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
						<i class="icon-settings"></i>
						</a>
						<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h3>THEME</h3>
									<ul class="theme-colors">
										<li class="theme-color theme-color-default active" data-theme="default">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Dark Header</span>
										</li>
										<li class="theme-color theme-color-light" data-theme="light">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Light Header</span>
										</li>
									</ul>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12 seperator">
									<h3>LAYOUT</h3>
									<ul class="theme-settings">
										<li>
											 Theme Style
											<select class="layout-style-option form-control input-small input-sm">
												<option value="square" selected="selected">Square corners</option>
												<option value="rounded">Rounded corners</option>
											</select>
										</li>
										<li>
											 Layout
											<select class="layout-option form-control input-small input-sm">
												<option value="fluid" selected="selected">Fluid</option>
												<option value="boxed">Boxed</option>
											</select>
										</li>
										<li>
											 Header
											<select class="page-header-option form-control input-small input-sm">
												<option value="fixed" selected="selected">Fixed</option>
												<option value="default">Default</option>
											</select>
										</li>
										<li>
											 Top Dropdowns
											<select class="page-header-top-dropdown-style-option form-control input-small input-sm">
												<option value="light">Light</option>
												<option value="dark" selected="selected">Dark</option>
											</select>
										</li>
										<li>
											 Sidebar Mode
											<select class="sidebar-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
										<li>
											 Sidebar Menu
											<select class="sidebar-menu-option form-control input-small input-sm">
												<option value="accordion" selected="selected">Accordion</option>
												<option value="hover">Hover</option>
											</select>
										</li>
										<li>
											 Sidebar Position
											<select class="sidebar-pos-option form-control input-small input-sm">
												<option value="left" selected="selected">Left</option>
												<option value="right">Right</option>
											</select>
										</li>
										<li>
											 Footer
											<select class="page-footer-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- END THEME PANEL -->
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>

			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Details of the Client</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">Personal Info</a>
											</li>
											<li>
												<a href="#tab_1_3" data-toggle="tab">Tests Requested</a>
											</li>
											<li>
												<a href="#tab_1_4" data-toggle="tab">Preview final report</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">

										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											
												<?php foreach($coda as $row):?>
											<div class="tab-pane active" id="tab_1_1">
												
													<?php $test_id=$row['test_id'];?>
													<?php $test_name=$row['test_name'];?>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">First Name</label>
														<input type="text" placeholder="" class="form-control" value="<?=$row['fname'];?>"/>
													</div>
											    </div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Last Name</label>
														<input type="text" placeholder="" class="form-control" value="<?=$row['lname'];?>"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Mobile Number</label>
														<input type="text" placeholder="" class="form-control" value="<?=$row['phone'];?>"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Email</label>
														<input type="text" placeholder="" class="form-control" value="<?=$row['email'];?>"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Contact Address</label>
														<input type="text" placeholder="" class="form-control" value="<?=$row['address'];?>"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Gender</label>
														<input type="text" class="form-control" rows="3" placeholder="" value="<?=$row['gender'];?>"></input>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Hospital/Clinic</label>
														<input type="text" placeholder="" class="form-control" value="<?=$this->db->get_where('clinics',array('clinic_id'=>$row['clinic_id']))->row()->clinic_name;?>"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Requested by</label>
														<input type="text" placeholder="" class="form-control" value="<?=$row['doctor_name'];?>"/>
													</div>
												</div>
												
											</div>
											<?php endforeach;?>
											<!-- END PERSONAL INFO TAB -->

											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
													<form action="#" id="testresult0">
														<div class="col-md-6">
															<div class="form-group">
															  <label class="control-label">Test Name</label>
																	
																	<select class="form-control input-lg nyapapi1" name="test_id" id="test_id" required>
																		<option selected disabled>SELECT THE TEST</option>
																			<?php $pp=$this->db->get_where("requested_tests",array("client_id"=>$client_id))->result_array();?>
																					<?php foreach($pp as $shity):?>
																					<?php $test_id0=$this->db->get_where("tests",array("test_id"=>$shity['test_id']))->row()->test_id;?>
																					<?php $test_name=$this->db->get_where("tests",array("test_id"=>$shity['test_id']))->row()->test_name;?>
																					<option value="<?=$test_id0;?>"><?=$test_name;?></option>
																					<?php endforeach;?>
																					</select>
																				</div>
																			</div>
																		
																		<div class="col-md-12">
																			<div class="form-group">
																				<div class="margin-top-10">
																					<a href="javascript:;" type="button" class="btn green-haze" onclick="add_test_results()">
																					add </a>
																					<button type="submit">Try0</button>
																					<a href="javascript:;" class="btn default">
																					Cancel </a>
																				</div>
																			</div>
																		</div>
												</form>
											<!-- END CHANGE PASSWORD TAB -->
											</div>
											
											<!-- PRIVACY SETTINGS TAB -->
											<div class="tab-pane" id="tab_1_4">
										<?php 
																
												$piss=$this->db->select('*')
															->from('requested_tests')
															->where('client_id',$client_id)
															->get()->result_array();
																
												?>
												<?php foreach($piss as $yap):?>
											<div class="row">
												<table align="left" class="pull-left" style="margin-top:0%;">
													<tr><td><h1>LOGO</h1></td></tr>
													<tr><td><p>Certified by Medical Council of Malawi</p></td></tr>
													<tr></tr>
													<tr><td><b>Patient's Name	:</b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->fname.'  '.$this->db->get_where('clients',array('client_id'=>$client_id))->row()->lname;?></td></tr>
													<tr><td><b>Referred by 	    :</b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->doctor_name;?></td></tr>
													<tr><td><b>Patient's Phone  :</b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->phone;?></td></tr>
												</table>
												<div class="row">
													<table align="right" class="pull-right" style="margin-top:3%;">
														<tr><td></td><td align="right"><?=$this->db->get("labo")->row()->street_address;?></td></tr>
														<tr><td></td><td align="right"><?=$this->db->get("labo")->row()->building_name;?></td></tr>
														<tr><td></td><td align="right"><?=$this->db->get("labo")->row()->post_box;?></td></tr>
														<tr><td></td><td align="right"><?=$this->db->get("labo")->row()->location;?></td></tr>
														<tr><td></td><td align="right"><b>Sex / Date of Birth : </b> <?=$this->db->get_where("clients",array('client_id'=>$client_id))->row()->gender.' / '.$this->db->get_where("clients",array('client_id'=>$client_id))->row()->dob;?></td></tr>
														<tr><td></td><td align="right"><b>Tel : </b> <?=$this->db->get("labo")->row()->telphone.' / '.$this->db->get("labo")->row()->phone;?></td></tr>
														<tr><td></td><td align="right"><b>Date : </b> <?=date('d,F Y');?></td>
													</tr>
												</table>
												</div>
											
														<div class="col-md-12">
															<div class="form-group">
																<b><h3 style="margin-top:1%;" class="text-center"><?=$this->db->get_where('tests',array('test_id'=>$yap['test_id']))->row()->test_name;?> EXAMINATION RESULTS</h4></b>
															</div>
														</div>
														
												 <?php 	  
												  $results=$this->db->select('*')
																->from('test_parameters')
																->join('test_results','test_parameters.test_parameter_id=test_results.test_parameter_id')
																->where('client_id',$client_id)
																->where('test_results.test_id',$yap['test_id'])
																->get()->result_array();?>
												   
												    <?php foreach($results as $hule):?>
														<div class="col-md-12">
															<div class="form-group">
															  <strong><?=$hule['parameter_category'];?></strong>
															</div>
														</div>
														
														<div class="col-md-6">
															<div class="form-group">
																<?=$hule['test_parameter'];?>
															</div>
														</div>
														
														<div class="col-md-6">
															<div class="form-group">
																<?=$hule['test_result'];?>
															</div>
														</div>
														
														<div class="col-md-12">
															<div class="form-group">
																<?=$hule['comment'];?>
															</div>
														</div>
												   <?php endforeach;?>
							
														<div class="col-md-12">
															<div class="form-group">
																<?=$this->db->get('note')->row()->note;?>
															</div>
														</div>
												    <?php endforeach;?>
												</div>
													<div class="col-md-6">
														<div class="form-group">
															<button type="button" class="btn btn-default no-print" onclick="window.print()"><i class="fa fa-print"></i> Print</button>
														</div>
													</div>
											   </div>
											</div>
											<!-- END PRIVACY SETTINGS TAB -->
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
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
<script src="<?=base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/datatable.js"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features\
Profile.init(); // init page demo
});
</script>
<script>
/*var counter = 1;
var limit = 40;
 $('.nyapapi').change(function(){
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML ="<div class='col-md-6'><div class='form-group'><input type='text' class='form-control p_id' name='test_parameter_id[]'><div class='input-group margin-top-10'><span class='input-group-addon'>	Result</span><input type='text' class='form-control' name='test_result[]'></div></div></div>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
});*/
</script>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker();
				$('#dob').datepicker();
				$('#d1').datepicker();
				$('.selectpicker').select2();
				$('.nyapapi').select2();
				$('.nyapapi1').select2();
				$('#pay_mode').select2();
				$('#faki').select2();
				$('#maopo').dataTable();
				$('#mmaop').dataTable();
            });
	 </script>
	 <script type="text/javascript">
			var html;       
			var sel_id;
			var test_id;
			var sel_text;
          $('.nyapapi').change(function(){
				
					sel_id=$( ".nyapapi option:selected" ).val();
					test_id=$( ".nyapapi1 option:selected" ).text();
					sel_text=$( ".nyapapi option:selected" ).text();
                    html = "<div class='col-md-6'><div class='form-group'><label>Result for </label> <b><span class='txt0'></span></b> | <b><span class='txt00'></span></b><input type='text' class='form-control' name='test_result' required></div></div><div class='col-md-2'><div class='form-group'><label>Measure</label><input type='text' class='form-control' name='measure'></div></div><div class='col-md-2'><div class='form-group'><label>Units</label><input type='text' class='form-control' name='units'></div></div>"; 
                    //$('#dynamicInput').append(html);
					$('#dynamicInput').html('');
					$('#dynamicInput').html(html);
					//$('.p_id').val(sel_id);
				    //$('#last_id++').val(sel_id);
					$('span.txt0').html(sel_text);
					$('span.txt00').html(test_id);
					//alert(sel_id);
            });

    </script>
	<script>
	
	function add_parameters(test_id)
    {
   	  $.post('<?=base_url();?>admin/add_parameters',
		{test_id :test_id},
		function{data}
		{
			$('#dynamicInput').html(data);
		});
    }
	</script>
	<script>
		function add_test_results()
		{
		  var url = "<?php echo site_url('admin/test_result_add')?>";
		
		   // ajax adding data to database
			  $.ajax({
				url : url,
				type: "POST",
				data: $('#testresult0').serialize(),
				dataType: "JSON",
				success: function(data)
				{
				   alert("DATA SAVED SUCCESSFULLY");
				   $('#testresult0')[0].reset();
				   $('#dynamicInput').html('');
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error adding or updating data!');

				}
				/*complete: function(xhr,status) 
				{
					alert("DATA SAVED SUCCESSFULLY");
				   $('#formzanda')[0].reset();
				}*/
			});
		}
	</script>
	
	<script type="text/javascript">// <![CDATA[
	 $(document).ready(function(){
		 $('#test_id').change(function(){ //any select change on the dropdown with id country trigger this code
			 var test_id = $('#test_id').val(); // here we are taking country id of the selected one.
		 $.ajax({
		 type: "POST",
		 url: "<?=base_url();?>admin/add_parameters/"+ test_id,
		 
		 success:function(data)
		 {
			$('#cities').html(data);
		 }
		 
		 });
		 
		 });
	 });
 // ]]>
</script>
	
	
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>