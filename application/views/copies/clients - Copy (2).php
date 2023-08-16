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
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/detipeka/css/datepicker.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/mat/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
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
				<div class="page-title">
					<h1><?=$company;?></h1>
				</div>
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
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?=$page_title;?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<button id="sample_editable_1_new" class="btn green" onclick="add_client();">
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
													<a href="javascript:;">
													Export to Excel </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="maop">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th>
								<th>Firstname</th>
						        <th>Lastname</th>
						        <th>Hospital</th>
								<th>Test</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
						<?php  foreach($client as $row):?>
							<tr class="odd gradeX">
							 <td><input type="checkbox" class="checkboxes" value="1"/></td>
							 <td><?=$row['fname'];?></td>
							 <td><?=$row['lname'];?></td>
							 <td><?=$row['clinic_name'];?></td>
							 <td><?=$row['test_name'];?></td>
							 <td align="center" >
							 	<a href="javascript:;" class="btn default btn-xs purple" onclick="edit_client(<?=$row['client_id'];?>)"><i class="fa fa-edit"></i> Edit </a>
								<a href="<?=base_url();?>admin/client_view/<?=$row['client_id'];?>" class="btn default btn-xs blue-stripe"> View </a>
								<a href="javascript:;" class="btn default btn-xs black" onclick="delete_client(<?=$row['client_id'];?>)"><i class="fa fa-trash-o"></i> Delete </a>				
							</td>
							</tr>
							<?php endforeach;?>
								
							</tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
</div>
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
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/table-managed.js"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/form-samples.js"></script>
<script src="<?=base_url();?>assets/detipeka/js/bootstrap-datepicker.js"></script>
<script src="<?=base_url();?>assets/mat/js/bootstrap-select.min.js"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   TableManaged.init();
});
</script>

<script type="text/javascript">
   var save_method; //for save method string
    var table;
	function add_client()
    {
      save_method = 'add';
      $('#formclient')[0].reset(); // reset form on modals
      $('#client').modal('show'); // show bootstrap modal
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
            $('[name="fname"]').val(data.fname);
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
			
            $('#client').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Client'); // Set title to Bootstrap modal title
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
            $('[name="fname"]').val(data.fname);
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
	  var url_0= "<?php echo site_url('admin/receipt_preview')?>";
      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/client_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/client_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formclient').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#client').modal('hide');
              //location.reload();// for reload a page
			  location.href=url_0;
			 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                //alert('Error adding or updating data!');
					  location.href=url_0;
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
<script>
   //Date picker
    $('d1').datepicker({
      autoclose: true
    });


</script>
<script>
jQuery(document).ready(function() {    

$('#d1').datepicker();
$('#d2').datepicker();
$('#d3').datepicker();
$('#maop').dataTable({
    buttons: [
        'print'
    ]
} );
$('.selectpicker').selectpicker({

  size: 4
});


   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   FormSamples.init();
});
</script>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker();
				$('#dob').datepicker();
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
			<div class="modal fade" id="client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog">
					<div class="modal-content" style="min-height:590px;width:120%;">
						<div class="modal-header alert-primary">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">ADD CLIENT</h4>
						</div>
						<div class="modal-body">
					<form role="form" action="#" id="formclient">
					  <div class="box-body">
					  

						    <?php $id=$this->db->select('*')->from('clients')->order_by('client_id','DESC')->limit(1)->get()->result_array();?>
						   <input type="hidden" name="client_id" value="">
						     <?php foreach($id as $row00):?>
							    <input type="hidden" class="form-control" name="client_code" value="<?=$row00['client_code'] + 2;?>" readonly>
							<?php endforeach;?>

					  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Firstname</label>
						   <input type="text" class="form-control" name="fname" id="exampleInputEmail1" placeholder="Firstname" required>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Lastname</label>
						  <input type="text" class="form-control" name="lname" id="exampleInputEmail1" placeholder="Lastname" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Doctor's Name</label>
						  <input type="text" class="form-control" name="doctor_name" id="exampleInputEmail1" placeholder="Doctor's name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Phone No.</label>
						  <input type="tel" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone No." required>
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
						  <label for="exampleInputEmail1">Address</label>
						  <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Contact Address" required>
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Date of Birth</label>
						  <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
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
							<option value="Cash">Cash</option>
							<option value="Cheque">Cheque</option>
							<option value="MASM">MASM</option>
							<option value="other">Other</option>
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

					
					<div class="col-md-12">
					<div class="form-group">
					<div class="modal-footer">
						 <button type="button" class="btn blue zanda" onclick="save()">Add Client</button>
						<button type="button" class="btn default" data-dismiss="modal">Close</button>
					</div>
					</div>
					</div>
				</form>
				</div>
				</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			
			