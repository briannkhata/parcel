
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 3.3.0
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
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?=base_url();?>assets/admin/pages/css/lock.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?=base_url();?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
<div class="page-lock">
	<div class="page-logo">
		<h1 class="text-primary">LabSoft</h1>
	</div>
	<div class="page-body">
		<div class="lock-head">
			 <?=$page_title;?>
		</div>
		<div class="lock-body">
			<div class="pull-left lock-avatar-block">
				<img src="<?=base_url();?>assets/admin/pages/media/profile/brian.jpg" class="lock-avatar">
			</div>
			<?php
                    $staff_id   = $this->db->get_where('users' , array('user_id'=>$this->session->userdata('user_id')))->row()->staff_id;
					$fname      = $this->db->get_where('staff' , array('staff_id'=>$staff_id))->row()->fname;
                    $lname      = $this->db->get_where('staff' , array('staff_id'=>$staff_id))->row()->lname;
					$password   = $this->db->get_where('users' , array('user_id'=>$this->session->userdata('user_id')))->row()->password;                       
                                   
                ?>
			<form class="lock-form pull-left" action="#">
				<h4><?=$fname.'  '.$lname;?></h4>
				<div class="form-group">
				    <input  type="hidden" id="password" value="<?=$password;?>"/>
					<input class="form-control placeholder-no-fix" type="password" id="cpassword" autocomplete="off" placeholder="Password" name="password"/>
				</div>
				<div class="form-actions">
					<button type="button" class="btn btn-success uppercase" onclick="yap()">Login</button>
				</div>
				
			
								
				
				
			</form>
		</div>
		<div class="lock-bottom">
			<a href="<?=base_url();?>User/logout">Not <?=$fname.'  '.$lname;?>?</a>
		</div>
				<div class="alert alert-danger" role="alert" id="alert0" style="display:none;" >
					<button type="button" class="close">×</button>
					<h5><center>Wrong password..please re-enter your password</center></h5>
				</div>
				
	</div>
	<div class="page-footer-custom">
		 2017 &copy; Designed and Developed by Focus IT.
	</div>
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?=base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?=base_url();?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {    
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init();
});
</script>
<script>
function yap(){
	var password = document.getElementById('password');
    var cpassword = document.getElementById('cpassword');

	if(password.value == cpassword.value)
	{
	   location.href="<?=base_url();?>admin/dashboard";
	}

	else
	{
	$('#alert0').show();
	}
}

</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>