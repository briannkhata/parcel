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
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<?php include'includes/header_top.php';?>
</div>
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
	<div class="page-content-wrapper">
		<div class="page-content">
		
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-basket"></i>
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
											Client List </a>
										</li>
																		
										<li>
											<a href="#tab_add_client" data-toggle="tab">
											New Client </a>
										</li>
										
										<!--li>
											<a href="#tab_list" data-toggle="tab">
											Waiting List </a>
										</li-->

									</ul>
									<div class="tab-content no-space">
												<div class="tab-pane active" id="tab_general">
													<div class="portlet-body">
															<div class="table-toolbar">
																	<div class="row">
																		<div class="col-md-6">
																			
																		</div>

																	<div class="col-md-6">
																		<div class="btn-group pull-right">
																			<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
																			</button>
																			<ul class="dropdown-menu pull-right">
																				<li>
																					<a href="javascript:;">
																					Print </a>
																				</li>
																				<li>
																					<a href="javascript:;">
																					Save as PDF </a>
																				</li>
																				<li>
																					<a href="#">
																					Export to Excel </a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
															<table class="table table-striped table-bordered table-hover" id="mmaop">
															<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Nationality</th>
																<th>Visit type</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
															<?php  foreach($client as $ro4w):?>
															<tr class="odd gradeX">
															 <td><?=$count++;?></td>
															 <td><?=$ro4w['name'];?></td>
															 <td><?=$ro4w['country'];?></td>
															 <td><?=$ro4w['visit_type'];?></td>
															 <td align="center" >
																<a href="javascript:;" class="btn default btn-xs purple" onclick="edit_client(<?=$ro4w['client_id'];?>)"><i class="fa fa-edit"></i> Edit </a>
																<a href="<?=base_url();?>admin/client_view/<?=$ro4w['client_id'];?>" class="btn default btn-xs blue-stripe"><i class="fa fa-eye"></i> View </a>
																<a href="javascript:;" class="btn default btn-xs black" onclick="delete_client(<?=$ro4w['client_id'];?>)"><i class="fa fa-trash-o"></i> Delete </a>				
															</td>
															</tr>
															<?php endforeach;?>
																
															</tr>
															</tbody>
															</table>
														</div>
												</div>
													
																	
												<div class="tab-pane" id="tab_add_client">
									<div class="portlet-body form">
										<form action="<?=base_url();?>admin/client_add" method="post" class="form-horizontal" enctype="multipart/form-data">
											<div class="form-body">
												
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Reservation</label>
															<div class="col-md-9">
															<select name="booking_id" id="buking" class="form-control">
															  <option>Select Booking</option>
															  <?php $buk=$this->db->get_where('booking',array('active'=>1))->result_array();
															  		foreach($buk as $tk):?>
																	<option value="<?=$tk['booking_id'];?>"><?=$tk['company_name'];?></option>
															  <?php endforeach;?>
															</select>
														</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">FullName</label>
															<div class="col-md-9">
																<input type="text" name="name" class="form-control" placeholder="FullName">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender</label>
															<div class="col-md-4">
																<select class="form-control" name="gender">
																	<option value="Male">Male</option>
																	<option value="Female">Female</option>
																</select>
															
															</div>
														</div>
													</div>
													<!--/span-->
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Age</label>
															<div class="col-md-4">
																<input type="number" name="age" class="form-control" placeholder="Age in Years">
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
																<input type="text" name="phone" class="form-control">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Email</label>
															<div class="col-md-9">
																<input type="email" name="email" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nationality</label>
															<div class="col-md-9">
																<input type="text" name="country" class="form-control" placeholder="Nationalty">
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">City</label>
															<div class="col-md-9">
																<input type="text" name="city" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Passport #</label>
															<div class="col-md-9">
																<input type="text" name="passport" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Visit type</label>
															<div class="col-md-6">
																<select class="form-control" name="visit_type">
																	<option value="Personal">Personal</option>
																	<option value="Business">Business</option>
																	<option value="Work">Work</option>
																	<option value="Tourism">Tourism</option>
																	<option value="Other">Other</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Status</label>
															<div class="col-md-4">
																<select class="form-control" name="status">
																	<option value="Married">Married</option>
																	<option value="Single">Single</option>
																	<option value="Widowed">Widowed</option>
																	<option value="Divorced">Divorced</option>
																</select>
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Next Destination</label>
															<div class="col-md-9">
																<input type="text" name="next_destination" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address</label>
															<div class="col-md-9">
																<input type="text" name="contact_address" class="form-control">
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Room # </label>
															<div class="col-md-9">
															<select name="room_id" class="form-control" id="banka">
															   <option>Select room</option>
															   <?php $room_type_id=$this->db->get('booking')->row()->room_type_id;?>
															   <?php $mayb=$this->db->get_where('room',array('room_type_id'=>$room_type_id))->result_array();?>
															   <?php foreach($mayb as $tk):?>
																	<option value="<?=$tk['room_id'];?>"><?=$tk['room_number'];?></option>
															   <?php endforeach;?>
															</select>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
												    <div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Sickness</label>
															<div class="col-md-9">
																<input type="text" name="sickness" class="form-control" placeholder="Any frequent sickness">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Photo / Image</label>
															<div class="col-md-6">
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
																<button type="submit" class="btn green"><i class="fa fa-plus"></i> add client</button>
																<button type="button" class="btn default"><i class="fa fa-cancel"></i> Cancel</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
										</div>
									</div>
								</div>
							</div>

						</div>	
													
												<div class="tab-pane" id="tab_list">	
												</div>
													
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
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ui-extended-modals.js"></script>
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
        /*    $(function () {
                //$('#fomu').hide();
				$('#lucia').click(function(e){
				    $('#fomu').show();
					$('#formbilling')[0].reset();
					$('#formbilling').hide();
				});				
            });*/
 </script>
<script type="text/javascript">

   var save_method; //for save method string
    var table;
	function add_client()
    {
      //save_method = 'add';
      $('#formclient')[0].reset(); // reset form on modals
      $('#client').modal('show'); // show bootstrap modal
	  location.href="<?=base_url();?>admin/add_client";
	  
    }
    function edit_client(id)
    {
      save_method = 'update';
      $('#formclient')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/client_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="client_id"]').val(data.client_id);
            $('[name="name"]').val(data.name);
            $('[name="email"]').val(data.email);
			$('[name="pay_mode"]').val(data.pay_mode);
			$('[name="gender"]').val(data.gender);
			$('[name="address"]').val(data.address);
			$('[name="phone"]').val(data.phone);
			$('[name="request_date"]').val(data.request_date);
          	$('[name="doctor_name"]').val(data.doctor_name);
			$('[name="dob"]').val(data.dob);
			$('[name="clinic_id"]').val(data.clinic_id);
			$('[name="test_id"]').val(data.test_id);
			
            $('#patient').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Patient'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
 
    function vclient(id)
    {
       //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/client_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="client_id"]').val(data.client_id);
            $('[name="name"]').val(data.name);
            $('[name="lname"]').val(data.lname);
            $('[name="email"]').val(data.email);
			$('[name="pay_mode"]').val(data.pay_mode);
			$('[name="gender"]').val(data.gender);
			$('[name="address"]').val(data.address);
			$('[name="phone"]').val(data.phone);
			$('[name="request_date"]').val(data.request_date);
          	$('[name="doctor_name"]').val(data.doctor_name);
			$('[name="dob"]').val(data.dob);
			$('[name="clinic_id"]').val(data.clinic_id);
			$('[name="test_id"]').val(data.test_id);
			
            $('#vclient').modal('show');
            $('.modal-title').text('CLIENT DETAILS');
			
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
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
 
 
 
 
    function save()
    {
		var url;
		if(save_method == 'add')
		{
          url = "<?php echo site_url('admin/client_add');?>";
		}
		else
		{
			url = "<?php echo site_url('admin/client_update')?>";
		}
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formbilling').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               //$('#billing').modal('show');
              //location.reload();// for reload a page
			  //location.href=url_0;
			 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                //alert('Error adding or updating data!');
					  //location.href=url_0;
            }
        });
    }
 
    function delete_client(id)
    {
      if(confirm('Are you sure you want to delete the selected CLIENT?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/client_delete')?>/"+id,
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
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker();
				$('#dob').datepicker();
				$('#d1').datepicker();
				$('.selectpicker').select2();
				$('#clinic_id').select2();
				$('#pay_mode').select2();
				$('#buking').select2();
				$('#banka').select2();
				$('#faki').select2();
				$('#maopo').dataTable();
				$('#mmaop').dataTable();
				
				
            });
 </script>
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
<!-- END BODY -->
</html>


			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="client" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="border-radius:0px; min-width:100%; margin-left:5%;">
					<div class="modal-header alert-primary">
							<h4 class="modal-title"></h4>
					</div>
				<div class="modal-body">
					<form role="form" action="#" id="formclient">
					   
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Fullname</label>
								      <input type="hidden" name="client_id" value="">
				    				   <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Fullname" required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								  <label>Test</label>
								  <select class="form-control selectpicker" name="test_id[]" multiple>
								  <option selected disabled>Select test</option>
								  <?php $test=$this->db->get('tests')->result_array();?>
								  <?php foreach($test as $row):?>
									  <option value="<?=$row['test_id'];?>"><?=$row['test_name'];?></option>
									<?php endforeach;?>
								  </select>
								</div>
							</div>		
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Request Date</label>
								  <input type="text" class="form-control" name="request_date" id="d1" placeholder="Request Date" required>
								</div>
							</div>
										
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Phone No.</label>
								  <input type="tel" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone No." required>
								</div>
							</div>
					
										
							<div class="col-md-12">
								<div class="form-group">
									  <label for="exampleInputEmail1">Contact Address</label>
									  <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Contact Address" required>
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
								  <label for="exampleInputEmail1">Age</label>
								  <input type="text" class="form-control" name="age" id="age" placeholder="Age">
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
							  <label>Pay Mode</label>
							  <select class="form-control" name="pay_mode">
							  <option selected disabled>Select option</option>
							  <?php $mode=$this->db->get('payment_mode')->result_array();?>
							  <?php foreach($mode as $zoba):?>
									<option value="<?=$zoba['pay_mode'];?>"><?=$zoba['pay_mode'];?></option>
								<?php endforeach;?>
							  </select>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
							  <label>Hospital</label>
							  <select class="form-control" name="clinic_id">
							  <option selected disabled>Select hospital</option>
							  <?php $clinic=$this->db->get('clinics')->result_array();?>
							  <?php foreach($clinic as $row):?>
								  <option value="<?=$row['clinic_id'];?>"><?=$row['clinic_name'];?></option>
								<?php endforeach;?>
							  </select>
							</div>
						</div>		
						
						<div class="col-md-6">
							<div class="form-group">
								 <label for="exampleInputEmail1">Doctor's Name</label>
								 <input type="text" class="form-control" name="doctor_name" id="exampleInputEmail1" placeholder="Doctor's name">
							</div>
						</div>

		
					<div class="col-md-12">
						<div class="form-group">
							<div class="modal-footer">
								 <button type="button" class="btn blue zanda" onclick="savee()">SAVE</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
			<!-- /.modal -->
			
			
							<div id="billing" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="border-radius:0px;">
								<div class="modal-body">
									
									<form action="<?=base_url();?>admin/addbill" method="post" id="formbill" class="form-horizontal">
											<?php 
											
											$client_id=$this->session->userdata('client_id');
											$total_amount = 0;
											$total_minus_discount = 0;
											$charges = $this->db->select('*')->from('requested_tests')->where('client_id',$client_id)->get()->result_array();
											foreach($charges as $c0):
												$amount1 = $c0['amount'];
												$total_amount += $amount1;
											endforeach;
											
											
											?>
											<div class="col-md-12">
												<div class="form-group">
													<div class="input-group margin-top-10">
														<span class="input-group-addon">Total Bill</span>
														   <input type="text" name="total_bill" id="total_bill" class="form-control input-lg" value="<?=$total_amount;?>" readonly>
														<span class="input-group-addon">MK</span>
													</div>	
												</div>	
											</div>
							
											<div class="col-md-6">
												<div class="form-group">
													<label>Amount Tendered</label>
													 <input type="text" name="amount_tendered" id="amount_tendered" class="form-control input-lg" placeholder="Amount Tendered">
												</div>		
											</div>	
													
											<div class="col-md-6">
												<div class="form-group">
													<label>Discount</label>
														<input type="text" name="discount" id="discount" class="form-control input-lg" placeholder="Discount">
												</div>	
											</div>
													
													
											<div class="col-md-12">
												<div class="form-group">
													<div class="input-group margin-top-10">
														<span class="input-group-addon">Balance</span>
														<input type="text" name="change" id="change" class="form-control input-lg" value="0.00" readonly>
														<span class="input-group-addon">MK</span>
													</div>	
												</div>	
											</div>
							
										
								
										<div class="col-md-6">
											<div class="form-group">
												
													<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
													<button type="submit"  class="btn blue">add bill</button>
												
											</div>
										</div>
								</form>
							</div>