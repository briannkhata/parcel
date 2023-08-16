<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$system;?> | <?=$page_title;?></title>
<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet">
</head>
<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Sign In</div>
				<div class="panel-body">
					<form role="form" method="post" action="<?=base_url();?>login/signin">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
							</div>
							<button type="submit" name="submit" class="btn btn-primary btn-flat">Login</button>
							   <p>
							   <?php if ($this->session->flashdata('message')) { ?>
								<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a><center><?php echo $this->session->flashdata('message'); ?> </center>
								</div>
							<?php } ?>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="<?=base_url();?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/chart.min.js"></script>
	<script src="<?=base_url();?>assets/js/chart-data.js"></script>
	<script src="<?=base_url();?>assets/js/easypiechart.js"></script>
	<script src="<?=base_url();?>assets/js/easypiechart-data.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
