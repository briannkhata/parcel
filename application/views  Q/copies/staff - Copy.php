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
			<div class="page-head">
				

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
											<button id="sample_editable_1_new" class="btn green" onclick="add_staff();">
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
							<table class="table table-striped table-bordered table-hover" id="mahop">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th>
								<th>Firstname</th>
						        <th>Lastname</th>
						        <th>Job Title</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
						<?php  foreach($staff as $row):?>
							<tr class="odd gradeX">
							 <td><input type="checkbox" class="checkboxes" value="1"/></td>
							  <td><?=$row['fname'];?></td>
							 <td><?=$row['lname'];?></td>
							 <td><?=$row['job_title'];?></td>
							 <td>
								<a href="javascript:;"><span class="glyphicon glyphicon-edit" onclick="edit_staff(<?=$row['staff_id'];?>)" title="click to edit staff details"></span></a>
								<a href="javascript:;"><span class="glyphicon glyphicon-info-sign" onclick="vstaff(<?=$row['staff_id'];?>)" title="click to see details"></span></a>
								<a href="javascript:;"><span class="glyphicon glyphicon-remove-sign" onclick="delete_staff(<?=$row['staff_id'];?>)" title="click to remove staff"></span></a>
							
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
	function add_staff()
    {
      save_method = 'add';
      $('#formstaff')[0].reset(); // reset form on modals
      $('#staff').modal('show'); // show bootstrap modal
    }
    function edit_staff(id)
    {
      save_method = 'update';
      $('#formstaff')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/staff_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="staff_id"]').val(data.staff_id);
            $('[name="fname"]').val(data.fname);
            $('[name="lname"]').val(data.lname);
            $('[name="email"]').val(data.email);
			$('[name="salary"]').val(data.salary);
			$('[name="gender"]').val(data.gender);
			$('[name="address"]').val(data.address);
			$('[name="phone"]').val(data.phone);
			$('[name="startdate"]').val(data.startdate);
          	$('[name="previous_company"]').val(data.previous_company);
			$('[name="status"]').val(data.status);
			$('[name="job_title"]').val(data.job_title);
            $('#staff').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Staff'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
 
    function vstaff(id)
    {
       //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/staff_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="staff_id"]').val(data.staff_id);
			$('[name="department_id"]').val(data.department_id);
            $('[name="fname"]').val(data.fname);
            $('[name="lname"]').val(data.lname);
            $('[name="email"]').val(data.email);
			$('[name="salary"]').val(data.salary);
			$('[name="gender"]').val(data.gender);
			$('[name="address"]').val(data.address);
			$('[name="phone"]').val(data.phone);
			$('[name="startdate"]').val(data.startdate);
          
            $('#vstaff').modal('show');
            $('.modal-title').text('STAFF DETAILS');
			
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
          url = "<?php echo site_url('admin/staff_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/staff_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formstaff').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#staff').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
    function delete_staff(id)
    {
      if(confirm('Are you sure you want to delete the selected Staff?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/staff_delete')?>/"+id,
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
$('#mahop').dataTable({
    buttons: [
        'print'
    ]
} );

</script>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker();
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
</html>
			<div id="staff" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
			  <div class="modal-dialog">
				<div class="modal-content" style="min-height:600px;">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"> Add Staff</h4>
				  </div>
				  <div class="modal-body">
				  <div class="box box-primary">
					<form role="form" action="#" id="formstaff">
					  <div class="box-body">
					  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Firstname</label>
						   <input type="hidden" name="staff_id" value="">
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
						  <label for="exampleInputEmail1">Previous Company</label>
						  <input type="text" class="form-control" name="previous_company" id="exampleInputEmail1" placeholder="Previous Company" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Job title</label>
						  <input type="text" class="form-control" name="job_title" id="exampleInputEmail1" placeholder="Job title" required>
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
						  <label for="exampleInputEmail1">Salary</label>
						  <input type="text" class="form-control" name="salary" id="exampleInputEmail1" placeholder="Basic salary" required>
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
						  <label>Status</label>
						  <select class="form-control" name="status">
						  <option selected disabled>Select status</option>
							<option value="Married">Married</option>
							<option value="Single">Single</option>
							<option value="Widowed">Widowed</option>
							<option value="Divorced">Divorced</option>
						  </select>
						</div>
					</div>								
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Start Date</label>
						  <input type="text" class="form-control" name="startdate" id="datetimepicker4" placeholder="Start Date" required>
						</div>
					</div>
					<div class="col-md-12">
					<div class="form-group">
						  <label for="exampleInputEmail1">Address</label>
						  <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Contact Address" required>
					</div>
					</div>
					<div class="col-md-12">
					  <div class="form-group">
						<button type="submit" class="btn btn-default zanda" onclick="save()">Add Staff</button>
					  </div>
					 </div>
				  </div>
				  </div>
            </form>
		  </div>
		 </div>
	    </div>
	  </div>
	</div>	
	
