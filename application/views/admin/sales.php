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
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-money"></i><?=$page_title;?>
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
							<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
										<form class="form-inline" action="<?=base_url();?>admin/filter_sales" method="post">
											
											<select class="form-control" name="month">
												<option>Filter by Month</option>
												<?php $month=$this->db->get('month')->result_array();?>
												<?php foreach($month as $sel):?>
													<option value="<?=$sel['month'];?>"><?=$sel['month'];?></option>
												<?php endforeach;?>
											</select>
											
											<select class="form-control" name="year">
												<option>Filter by Year</option>
												<?php $year=$this->db->get('year')->result_array();?>
												<?php foreach($year as $cel):?>
													<option value="<?=$cel['year'];?>"><?=$cel['year'];?></option>
												<?php endforeach;?>
											</select>
											<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
										</form>
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
							<table class="table table-striped table-bordered table-hover" id="money">
							<thead>
							<tr>
								<th>#</th>
								<th>Amount</th>
						        <th>Amount Tendered</th>
						        <th>Change</th>
								<th>Discount</th>
								<th></th>
							</tr>
							</thead>
							<tbody>
						<?php  foreach($bills as $row):?>
						<?php $discount +=$row['discount'];?>
						<?php $change +=$row['change'];?>
						<?php $amount_tendered +=$row['amount_tendered'];?>
						<?php $total_amount +=$row['total_amount'];?>
							<tr class="odd gradeX">
								 <td><?=$count++;?></td>
								 <td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['total_amount'])),2);?></td>
								 <td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['amount_tendered'])),2);?></td>
								 <td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['change'])),2);?></td>
								 <td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['discount'])),2);?></td>
								 <td align="center" >
									<a href="javascript:;" class="btn default btn-xs purple" onclick="view_bill(<?=$row['bill_id'];?>)"><i class="fa fa-eye"></i> view </a>
									<a href="javascript:;" class="btn default btn-xs black" onclick="delete_bill(<?=$row['bill_id'];?>)"><i class="fa fa-trash-o"></i> Delete </a>				
								</td>
							</tr>
							<?php endforeach;?>
								<tr></tr>
								<tr>
								    <td></td>
									<td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$total_amount)),2);?></td>
									<td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$amount_tendered)),2);?></td>
									<td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$change)),2);?></td>
									<td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$discount)),2);?></td>
									<td></td>
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
<?php include 'includes/footer.php';?>
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
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ui-extended-modals.js"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   TableManaged.init();
   $('#money').dataTable();
});
</script>
<script type="text/javascript">
   var save_method; //for save method string
    var table;
	function add_clinic()
    {
      save_method = 'add';
      $('#formclinic')[0].reset(); // reset form on modals
      $('#clinic').modal('show'); // show bootstrap modal
    }
    function edit_clinic(id)
    {
      save_method = 'update';
      $('#formclinic')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/clinic_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="clinic_id"]').val(data.clinic_id);
            $('[name="clinic_name"]').val(data.clinic_name);
            $('[name="phone"]').val(data.phone);
			$('[name="address"]').val(data.address);
            $('[name="email"]').val(data.email);

            $('#clinic').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Clinic'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
 
    function vtest(id)
    {
       //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/clinic_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="test_id"]').val(data.test_id);
            $('[name="test_name"]').val(data.test_name);
            $('[name="amount"]').val(data.amount);
            $('[name="description"]').val(data.description);

            $('#vtest').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('TEST DETAILS'); // Set title to Bootstrap modal title
			
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
          url = "<?php echo site_url('admin/clinic_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/clinic_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formclinic').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#clinic').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
   function delete_bill(id)
    {
      if(confirm('Are you sure you want to delete the selected BILL?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/clinic_bill')?>/"+id,
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

	
	<div id="clinic" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:0px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD CLINIC</h4>
				  </div>
				  <div class="modal-body">
				 <form role="form" action="#" id="formclinic">
					  <div class="box-body">
					  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Name</label>
						   <input type="hidden" name="clinic_id" value="">
				 		  <input type="text" class="form-control" name="clinic_name" id="exampleInputEmail1" placeholder="Clinic Name" required>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Phone</label>
						  <input type="tel" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone No.">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Email</label>
						  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Address</label>
						  <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Address">
						</div>
					</div>
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save()">Add clinic</button>
					</div>

            </form>
		
	    </div>
	  </div>
	</div>	
	
	
	