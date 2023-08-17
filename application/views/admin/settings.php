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
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<?php include'includes/header_top.php';?>
</div>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
		<?php include 'includes/left_nav.php';?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-head">
			</div>
			<!-- END PAGE HEAD -->
			<div class="row">
				<div class="col-md-12">
							<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-diamond"></i>
									<span class="caption-subject font-green-sharp bold uppercase">
									<?=$page_title;?></span>
									
								</div>
								<div class="actions btn-set">
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											Settings </a>
										</li>
									
									</ul>
						<div class="tab-content no-space">
							<div class="tab-pane active" id="tab_general">
								<div class="portlet-body">
									<?php  $setting=$this->db->get('labo')->result_array();?>
									<?php foreach($setting as $despa):?>
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>admin/add_settings" method="post" class="form-horizontal" enctype="multipart/form-data">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Company Name</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="name" placeholder="Company Name" value="<?=$despa['name'];?>">					
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Company Address</label>
													<div class="col-md-4">
															<input type="text" class="form-control" name="address" placeholder="Address" value="<?=$despa['address'];?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Cellphone</label>
													<div class="col-md-4">
															<input type="text" name="phone" class="form-control" placeholder="Cellphone" value="<?=$despa['phone'];?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Telphone</label>
													<div class="col-md-4">
															<input type="text" name="telphone" class="form-control" placeholder="Telphone" value="<?=$despa['telphone'];?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Email</label>
													<div class="col-md-4">
														<input type="email" name="email" class="form-control" placeholder="Email" value="<?=$despa['email'];?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Location</label>
													<div class="col-md-4">
														<input type="text" name="location" class="form-control" placeholder="Location" value="<?=$despa['location'];?>">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Post Box</label>
													<div class="col-md-4">
														<input type="text" name="post_box" class="form-control" placeholder="Post Box" value="<?=$despa['post_box'];?>">
													</div>
												</div>
												
												<div class="form-group last">
													<label class="col-md-3 control-label">Street Address</label>
													<div class="col-md-4">
														<input type="text" name="street_address" class="form-control" placeholder="Street Address" value="<?=$despa['street_address'];?>">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Building Name</label>
													<div class="col-md-4">
														<input type="text" name="building_name" class="form-control" placeholder="Building Name" value="<?=$despa['building_name'];?>">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">City</label>
													<div class="col-md-4">
														<input type="text" name="city" class="form-control" placeholder="City" value="<?=$despa['city'];?>">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Country</label>
													<div class="col-md-4">
														<input type="text" name="country" class="form-control" placeholder="Country" value="<?=$despa['country'];?>">
													</div>
												</div>
												
												<div class="form-group last">
													<label class="col-md-3 control-label">Logo</label>
													<div class="col-md-4">
														<input type="file" name="logo" id="photo" class="form-control">
														<?php $picc = $this->db->get('labo')->row()->logo;?>
														<img id="image" class="img-responsive"  src="<?=base_url().'/assets/logos/'.$picc;?>">
													</div>
												</div>	
									
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green"><i class="fa fa-save"></i>Save</button>
													</div>
												</div>
											</div>
										</form>
										<?php endforeach;?>
										</div>
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
<?php include 'includes/footer.php';?>
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
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?=base_url();?>assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/datatable.js"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ui-extended-modals.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
	<script>
        jQuery(document).ready(function()
		{    
           Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
           EcommerceProductsEdit.init();
		    $('#sample').dataTable();
		    $('#parameter').dataTable();
        });
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

   var save_method; //for save method string
    var table;
	function add_mode()
    {
      save_method = 'add';
      $('#formmode')[0].reset(); // reset form on modals
      $('#mode').modal('show'); // show bootstrap modal
    }
	
    function edit_mode(id)
    {
      save_method = 'update';
      $('#formmode')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/mode_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="payment_mode_id"]').val(data.payment_mode_id);
			$('[name="pay_mode"]').val(data.pay_mode);
            $('[name="description"]').val(data.description);
		
            $('#mode').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Equipment'); // Set title to Bootstrap modal title
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
          url = "<?php echo site_url('admin/mode_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/mode_update')?>";
      }
		
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formmode').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#mode').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
    function delete_mode(id)
    {
      if(confirm('Are you sure you want to delete the selected PAYMENT MODE?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/mode_delete')?>/"+id,
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

				<div id="mode" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:0px;">
					  <div class="modal-header">
							<h4 class="modal-title"> ADD PAYMENT MODE</h4>
					  </div>
				  <div class="modal-body">
						<form role="form" action="#" id="formmode">
							  <div class="box-body">
							   <div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Name</label>
								   <input type="hidden" name="payment_mode_id" value="">
								  <input type="text" class="form-control" name="pay_mode" id="exampleInputEmail1" placeholder="Payment mode name" required>
								</div>
							</div>
							  						
							 <div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Description</label>
								  <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="Description">
								</div>
							</div>
						
												
							<div class="modal-footer">
								<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
								<button type="button" class="btn blue zanda" onclick="save()"><i class="fa fa-plus"></i> Add </button>
							</div>
						</div>
					</form>
	
				</div>
			</div>	
		
	