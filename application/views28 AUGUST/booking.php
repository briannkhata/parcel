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
											Booking List </a>
										</li>
																		
										<!--li>
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
																			<div class="btn-group">
																				<button id="sample_editable_1_new" class="btn green" onclick="add_booking();">
																				Add New <i class="fa fa-plus"></i>
																				</button>
																			</div>
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
																<th>Phone</th>
																<th>Confirmed</th>
																<th>From</th>
																<th>To</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
															<?php  foreach($booking as $row):?>
															<?php $con=$row['confirmed'];?>
															<?php if ($con == 1 ):
																$yap="Confirmed";
																else:
															    $yap="Not Confirmed";
																endif;
															?>
															<tr class="odd gradeX">
															 <td><?=$count++;?></td>
															 <td><?=$row['company_name'];?></td>
															 <td><?=$row['phone'];?></td>
															 <td align="center"><?php if ($con == 1 ):?> <span style="background-color:#afeaaf; width:10%; border-radius:2px; padding:2%;"><b>YES</b></span> <?php  else:?> <span style="background-color:red; width:10%; border-radius:2px; padding:2%;"><b>NOT YET</b></span> <?php endif;?></td>
															 <td><span style=""><?=$row['arrival_date'];?></span></td>
															 <td><span style=""><?=$row['departure_date'];?></span></td>
															 <td align="center" >
																<a href="javascript:;" class="btn default btn-xs purple" onclick="edit_booking(<?=$row['booking_id'];?>)" title="CLICK TO EDIT RESERVATION"><i class="fa fa-edit"></i></a>
																<a href="<?=base_url();?>admin/view_booking/<?=$row['booking_id'];?>" class="btn default btn-xs blue-stripe" title="CLICK TO VIEW RESERVATION DETAILS"><i class="fa fa-eye"></i></a>
																<a href="javascript:;" class="btn default btn-xs black" onclick="delete_booking(<?=$row['booking_id'];?>)" title="DELETE THE RESERVATION"><i class="fa fa-trash-o"></i></a>				
															</td>
															</tr>
															<?php endforeach;?>
																
															</tbody>
															</table>
														</div>
												</div>
													
																	
									<div class="tab-pane" id="tab_add_client">
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

   var save_method; //for save method string
    var table;
	function add_booking()
    {
      save_method = 'add';
      $('#formbooking')[0].reset(); // reset form on modals
      $('#booking').modal('show'); // show bootstrap modal
	  
    }
    function edit_booking(id)
    {
      save_method = 'update';
      $('#formbooking')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/booking_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="booking_id"]').val(data.booking_id);
            $('[name="company_name"]').val(data.company_name);
            $('[name="deposit"]').val(data.deposit);
			$('[name="discount"]').val(data.discount);
			$('[name="confirmed"]').val(data.confirmed);
			$('[name="room_type_id"]').val(data.room_type_id);
			$('[name="number_of_reservations"]').val(data.number_of_reservations);
			$('[name="phone"]').val(data.phone);
			$('[name="arrival_date"]').val(data.arrival_date);
          	$('[name="departure_date"]').val(data.departure_date);
			$('[name="number_of_people"]').val(data.number_of_people);
			
            $('#booking').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT RESERVATION'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
 
    function view_booking(id)
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

    function save()
    {
		var url;
		if(save_method == 'add')
		{
          url = "<?php echo site_url('admin/booking_add');?>";
		}
		else
		{
			url = "<?php echo site_url('admin/booking_update')?>";
		}
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formbooking').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               $('#booking').modal('show');
              location.reload();// for reload a page
			 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
    function delete_booking(id)
    {
      if(confirm('Are you sure you want to delete the selected BOOKING?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/booking_delete')?>/"+id,
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
				$('#d1').datepicker();
				$('#d2').datepicker();
				$('#d3').datepicker();
				$('#s1').select2();
				$('#s2').select2();
				$('#s3').select2();
				$('#pay_mode').select2();
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
			<div id="booking" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="border-radius:0px;">
					<div class="modal-header alert-primary">
							<h4 class="modal-title">NEW RESERVATION</h4>
					</div>
				<div class="modal-body">
					<form role="form" action="#" id="formbooking">
					   
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Name</label>
								      <input type="hidden" name="booking_id" value="">
				    				  <input type="text" class="form-control" name="company_name" id="exampleInputEmail1" placeholder="Booked by" required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								  <label>Phone No.</label>
								 <input type="text" class="form-control" name="phone" id="exampleInputEmail1" >
								</div>
							</div>	
	
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">From</label>
								  <input type="text" class="form-control" name="arrival_date" id="d1" placeholder="Arrival Date" required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">To</label>
								  <input type="text" class="form-control" name="departure_date" id="d2" placeholder="Arrival Date" required>
								</div>
							</div>
										

							<div class="col-md-6">
								<div class="form-group">
									  <label for="exampleInputEmail1">No. of Reservations</label>
									  <input type="number" class="form-control" name="number_of_reservations" id="exampleInputEmail1" placeholder="No. of reservations">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									  <label for="exampleInputEmail1">No. of people</label>
									  <input type="number" class="form-control" name="number_of_people" id="exampleInputEmail1" placeholder="No. of people">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									  <label for="exampleInputEmail1">Discount</label>
									  <input type="text" class="form-control" name="discount" id="exampleInputEmail1" placeholder="Discount">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									  <label for="exampleInputEmail1">Deposit</label>
									  <input type="text" class="form-control" name="deposit" id="exampleInputEmail1" placeholder="Deposit">
								</div>
							</div>
									
							<!--div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Payment Mode</label>
								     <select class="form-control" name="pay_mode" id="s1">
									   <option value="Cash">Cash</option>
									   <option value="Cheque">Cheque</option>
									   <option value="Credit Card">Credit Card</option>
									   <option value="Other">Other</option>
									 </select>
								</div>
							</div-->
					
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Room Category</label>
								     <select class="form-control" name="room_type_id" id="s2">
									 <?php $zz=$this->db->get('room_type')->result_array()?>
									 <?php foreach($zz as $r0):?>
										<option value="<?=$r0['room_type_id'];?>"><?=$r0['room_type'];?></option>
									  <?php endforeach;?>
									 </select>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Confirmed</label>
								    <select name="confirmed" class="form-control">
												 <option value="1">YES</option>
    											 <option value="0">NO</option>		
									</select>

								</div>
							</div>
		
					<div class="col-md-12">
						<div class="form-group">
							<div class="modal-footer">
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
								<button type="button" class="btn blue zanda" onclick="save()"><i class="fa fa-plus"> </i>add RESERVATION</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		