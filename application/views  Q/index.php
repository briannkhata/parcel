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
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-md login">
<!--
<div class="logo">
	<h1 class="text-primary">PMS LOGIN</h1>
</div> --> <br/> <br/>
<div class="menu-toggler sidebar-toggler">
</div>
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?=base_url();?>login/signin" method="post">
		<h3 class="form-title text-center">Payroll Login</h3> 
		<?php if($status != ''){
			echo '<b style="font-size:20px;"> <center>'.$status.'</b> </center>';
		}
		?>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon"> <b style="color:white;">Username</b>
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon"> <b style="color:white;">Password</b>
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<button type="submit" class="btn blue pull-right" name="login">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>	
        <p>   
			<?php if ($this->session->flashdata('message')) { ?>
				<div class="alert alert-danger fade in">
					<a href="#" class="close" data-dismiss="alert">&times;</a><center><?php echo $this->session->flashdata('message'); ?> </center>
				</div>
			<?php } ?>	
	</form>
	<!-- END LOGIN FORM -->
</div>
<br/>
				<script>
					$('form#formYanga').submit(function(e){
					$(this).children('input[type=submit]').attr('disabled', 'disabled');
					// this is just for demonstration
					e.preventDefault(); 
					
				</script>
			<!----
			<div class="content">
				<form class="login-formQQQQQ" id="formYanga" action="<?php echo base_url();?>login/upload_db/save" method="post" enctype="multipart/form-data"> 
				 <?php //echo form_open('login/upload_db/save' , array('id' => 'formYanga', 'enctype' => 'multipart/form-data'));?>
					<p style="color:white; font-size:13px;">Uploading a new Database takes much time so please be patient ! Thank you . </p> 	
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Upload</label>
						<div class="input-icon">
							<i class="fa fa-upload"></i>
							<input class="form-control placeholder-no-fix" type="file" name="userfile" required="required">
						</div>
					</div>
					<div class="form-actions">
						<label class="checkbox">
						<button type="submit" class="btn blue pull-right" onClick="this.form.submit(); this.disabled=true; this.value='Sending…';">
						Upload / Update new Database<i class="m-icon-swapright m-icon-white"></i>
						</button>
						 &nbsp; 
					</div> 
				</form>
				
				<form class="login-formQQQQQ" id="formYanga" action="<?php echo base_url();?>login/backup_db" method="post" enctype="multipart/form-data"> 
					<p style="color:white; font-size:13px;">Click on the button below to copy database . </p> 
					<div class="form-actions">
						<label class="checkbox">
						<button type="submit" class="btn blue pull-right">
						BACKUP / COPY DATABASE<i class="m-icon-swapright m-icon-white"></i>
						</button>
					</div>
				</form>
			</div>   -->

				<div class="page-contentQQQQ" style="background-color:blackq; margin-left:150px; margin-right:150px; padding-left:0px; padding-left:0px;">
					<div class="row">
						<div class="col-md-6 col-sm-12" style="padding-top:10px; padding-bottom:10px;">
							<div class="content">
								<form class="login-formQQQQQ" id="formYanga" action="<?php echo base_url();?>login/upload_db/save" method="post" enctype="multipart/form-data"> 
								   <p style="color:white; font-size:13px;">
								   To update the database click on <b>"Choose File"</b> then select the updated database from flash then click the <b>"Upload / Update Database"</b> button below.
								   Uploading a new Database might take much time so please be patient ! Thank you . </p> 	
									<div class="form-group">
										<label class="control-label visible-ie8 visible-ie9">Upload</label>
										<div class="input-icon">
											<i class="fa fa-upload"></i>
											<input class="form-control placeholder-no-fix" type="file" name="userfile" required="required">
										</div>
									</div>
									<div class="form-actions">
										<label class="checkbox">
										<button type="submit" class="btn blue pull-right" onClick="this.form.submit(); this.disabled=true; this.value='Sending…';">
										Upload / Update Database<i class="m-icon-swapright m-icon-white"></i>
										</button>
										 &nbsp; 
									</div> 
								</form>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-12" style="padding-top:10px; padding-bottom:10px;">
							<div class="content">
									<form class="login-formQQQQQ" id="formYanga" action="<?php echo base_url();?>login/backup_db" method="post" enctype="multipart/form-data"> 
										<p style="color:white; font-size:13px;">Click on the button below to copy or backup the database, copy it to a flash then upload it to the other system</p> 
										<div class="form-actions">
											<label class="checkbox">
											<button type="submit" class="btn blue pull-right">
												BACKUP / COPY DATABASE<i class="m-icon-swapright m-icon-white"></i>
											</button>
									</div>
								</form>
							</div>
						</div>
					</div>		
				</div>

<div class="copyright">
	 2017 &copy; Designed and Developed by <strong style="colorQQ:blue;">Bix ProgrammerZ</strong>
</div>
<script src="<?=base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
  Demo.init();
       // init background slide images
       $.backstretch([
        "<?=base_url();?>assets/admin/pages/media/bg/1.jpg",
        "<?=base_url();?>assets/admin/pages/media/bg/2.jpg",
        "<?=base_url();?>assets/admin/pages/media/bg/3.jpg",
        "<?=base_url();?>assets/admin/pages/media/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
</body>
</html>