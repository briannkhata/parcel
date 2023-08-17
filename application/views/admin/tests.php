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

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<?php include'includes/header_top.php';?>
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
				
				<?php //include 'includes/topbar.php';?>
				<!-- END PAGE TOOLBAR -->
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
											Tests </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											Test Parameters </a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											Test Groups</a>
										</li>
										
										<li>
											<a href="#tab_results" data-toggle="tab">
											Test Results</a>
										</li>
										
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
													<div class="portlet-body">
															<div class="table-toolbar">
																<div class="row">
																	<div class="col-md-6">
																		<div class="btn-group">
																			<button id="sample_editable_1_new" class="btn green" onclick="add_test();">
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
															<table class="table table-striped table-hover" id="sample">
															<thead>
															<tr>
																<th>#</th>
																<th>Test Code</th>
																<th>Test</th>
																<th>Amount</th>
																<th></th>
																
															</tr>
															</thead>
															<tbody>
														
														<?php  foreach($test as $row2):?>
															<tr>
															 <td><?=$count++;?></td>
															 <td><?=$row2['test_code'];?></td>
															  <td><?=$row2['test_name'];?></td>
															 <td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row2['amount'])),2);?></td>
															 <td align="center" width="20%" >
																<a href="javascript:;" class="btn default btn-xs purple" title="EDIT TEST INFORMATION" onclick="edit_test(<?=$row2['test_id'];?>)"><i class="fa fa-edit"></i> </a>
																<a href="<?=base_url();?>admin/view_test/<?=$row2['test_id'];?>" class="btn btn-success btn-xs" title="VIEW TEST INFORMATION"><i class="fa fa-info"></i> </a>
																<a href="javascript:;" class="btn btn-danger btn-xs black"  title="DELETE TEST INFORMATION" onclick="delete_test(<?=$row2['test_id'];?>)"><i class="fa fa-trash-o"></i>  </a>				
															</td>
															</tr>
														<?php endforeach;?>
																
															</tr>
															</tbody>
															</table>
														</div>
													</div>
												<div class="tab-pane" id="tab_meta">
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
																				<a href="javascript:;">
																				Export to Excel </a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<table class="table table-striped table-bordered table-hover" id="parameter">
														<thead>
														<tr>
															<th class="table-checkbox">
																<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
															</th>
															<th>Test Parameter</th>
															<th>Test Name</th>
															<th>Parameter Category</th>
															<th></th>
														</tr>
														</thead>
														<tbody>
													<?php $test_p= $this->db->select('*')->from('test_parameters')->join('tests','tests.test_id=test_parameters.test_id')->get()->result_array();?>
													<?php  foreach($test_p as $row):?>
														<tr class="odd gradeX">
														 <td><input type="checkbox" class="checkboxes" value="1"/></td>
														 <td><?=$row['test_parameter'];?></td>
														 <td><?=$row['test_name'];?></td>
														 <td><?=$row['parameter_category'];?></td>
														 <td align="center" >
															<a href="javascript:;" class="btn default btn-xs black" onclick="delete_test_paramter(<?=$row['test_parameter_id'];?>)"><i class="fa fa-trash-o"></i> Delete </a>				
														</td>
														</tr>
														<?php endforeach;?>
															
														</tr>
														</tbody>
														</table>
													</div>
										        </div>
										<div class="tab-pane" id="tab_images">									
										 <div class="portlet-body">
													<div class="table-toolbar">
															<div class="row">
															<div class="col-md-6">
																		<div class="btn-group">
																			<button id="sample_editable_1_new" class="btn green" onclick="add_group();">
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
														<table class="table table-striped table-bordered table-hover" id="results">
														<thead>
														<tr>
															<th>#</th>
															<th>Group Name</th>
															<th>Description</th>
															<th></th>
														</tr>
														</thead>
														<tbody>
													<?php $count=1;?>
													<?php $r0= $this->db->select('*')->from('group')->get()->result_array();?>
													<?php  foreach($r0 as $row):?>
														<tr class="odd gradeX">
														 <td><?=$count++;?></td>
														 <td><?=$row['group_name'];?></td>
														 <td><?=$row['description'];?></td>
														 <td align="center" >
															<a href="javascript:;" class="btn default btn-xs black" onclick="edit_group(<?=$row['group_id'];?>)"><i class="fa fa-edit"></i> Edit </a>				
															<a href="javascript:;" class="btn default btn-xs black" onclick="delete_group(<?=$row['group_id'];?>)"><i class="fa fa-trash-o"></i> Delete </a>				
														</td>
														</tr>
														<?php endforeach;?>
															
														</tr>
														</tbody>
														</table>
												</div>
											</div>
											
								
											<div class="tab-pane" id="tab_results">									
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
																				<a href="javascript:;">
																				Export to Excel </a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<table class="table table-striped table-bordered table-hover" id="tableresults">
														<thead>
														<tr>
															<th>#</th>
															<th>Client</th>
															<th>Test Name</th>
															<th>Examined by</th>
															<th></th>
														</tr>
														</thead>
														<tbody>
													<?php $count=1;?>
													<?php $result= $this->db->select('*')->from('test_results')->join('clients','test_results.client_id=clients.client_id')->join('tests','test_results.test_id=tests.test_id')->group_by('clients.client_id')->order_by('test_result_id','ASC')->get()->result_array();?>
													<?php  foreach($result as $row):?>
														<tr class="odd gradeX">
														 <td><?=$count++;?></td>
														 <td><?=$row['name'];?></td>
														 <td><?=$row['test_name'];?></td>
														 <td><?=$row['reported_by'];?></td>
														 <td align="center" >
															<a href="<?=base_url();?>admin/view_report/<?=$row['test_result_id'];?>" class="btn default btn-xs black"><i class="fa fa-eye"></i> VIEW </a>				
															<!--a href="javascript:;" class="btn default btn-xs black" onclick="delete_test_paramter(<?=$row['test_result_id'];?>)"><i class="fa fa-trash-o"></i> Delete </a-->				
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
<script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ui-extended-modals.js"></script>
 <script type="text/javascript">
            $(function () {
                $('#dada').select2();
            });
        </script>
	<script type="text/javascript">
		$(document).ready(function(){
			var maxField = 40; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var fieldHTML = '<div class="form-group"><label class="col-md-3 control-label"></label><div class="col-md-4"><input type="text" name="test_parameter[]"  class="form-control" placeholder="Test Parameter"><a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="fa fa-remove"></i></a></div></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function(){ //Once add button is clicked
				if(x < maxField){ //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); // Add field html
				}
			});
			$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
	});
	
	function add_test_parameter()
    {
      var yolo = "<?=base_url();?>admin/test_parameter_add?>";
    
       // ajax adding data to database
          $.ajax({
            url : yolo,
            type: "POST",
            data: $('#formparameter').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               alert("DATA SAVED SUCCESSFULLY");
               $('#formparameter')[0].reset();
            },
			
           /* error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
				//alert("DATA SAVED SUCCESSFULLY");
               
            },*/
			complete: function(xhr,status) 
			{
				alert("DATA SAVED SUCCESSFULLY");
               $('#formparameter')[0].reset();
            }
			
        });
    }
    </script>
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
				$('#results').dataTable();
				$('#tableresults').dataTable();
			});
	</script>
<script type="text/javascript">
   var save_method; //for save method string
    var table;
	 function edit_group(id)
    {
		  save_method = 'update';
		  $('#formgroup')[0].reset(); // reset form on modals
	 
		  //Ajax Load data from ajax
		  $.ajax({
			url : "<?php echo site_url('admin/group_edit/')?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{
				$('[name="group_id"]').val(data.group_id);
				$('[name="has_units"]').val(data.has_units);
				$('[name="group_name"]').val(data.group_name);
				$('[name="description"]').val(data.description);
			 
				$('#test_group').modal('show'); // show bootstrap modal when complete loaded
				$('.modal-title').text('Edit group'); // Set title to Bootstrap modal title
				$('.zanda').text('Save changes');
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});
    }
	function add_test()
    {
      save_method = 'add';
      $('#formtest')[0].reset(); // reset form on modals
      $('#test').modal('show'); // show bootstrap modal
    }
	function add_group()
    {
      save_method = 'add';
      $('#formgroup')[0].reset(); // reset form on modals
      $('#test_group').modal('show'); // show bootstrap modal
    }
    function edit_test(id)
    {
      save_method = 'update';
      $('#formtest')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/test_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			$('[name="test_id"]').val(data.test_id);
			$('[name="test_code"]').val(data.test_code);
		
            $('[name="test_name"]').val(data.test_name);
			$('[name="group_id"]').val(data.group_id);
            $('[name="amount"]').val(data.amount);

            $('#test').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Test'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
	
  
    function sava()
    {

      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/group_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/group_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formgroup').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
              $('#test_group').modal('hide');
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
 
      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/test_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/test_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formtest').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
              // $('#test').modal('hide');
              //location.reload();// for reload a page
			   $('#formtest')[0].reset();
			  //$('#test').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
    function delete_test(id)
    {
      if(confirm('Are you sure you want to delete the selected Test?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/test_delete')?>/"+id,
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
	
	 function delete_test_parameter(id)
    {
      if(confirm('Are you sure you want to delete the selected TEST PARAMETER?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/test_parameter_delete')?>/"+id,
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
	
	 function delete_group(id)
		{
		  if(confirm('Are you sure you want to delete the selected TEST GROUP?'))
		  {
			// ajax delete data from database
			  $.ajax({
				url : "<?php echo site_url('admin/group_delete')?>/"+id,
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
			<div id="test" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:0px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD TEST</h4>
				  </div>
				  <div class="modal-body">
					<form role="form" action="#" id="formtest">
				  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Test Code</label>
						   <input type="hidden" name="test_id" value="">
				 		  <input type="text" class="form-control" name="test_code" id="exampleInputEmail1" placeholder="Test Code" required>
						</div>
					</div>
					  
					  
					  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Test Name</label>
						   <input type="hidden" name="test_id" value="">
				 		  <input type="text" class="form-control" name="test_name" id="exampleInputEmail1" placeholder="Test Name" required>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Cost / Amount</label>
						  <input type="text" class="form-control" name="amount" id="exampleInputEmail1" placeholder="Cost of the test" required>
						</div>
					</div>
					
					
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Test Group</label>
						   <select name="group_id" class="form-control" required>
								<option selected disabled>Select geoup</option>
								<?php $gu=$this->db->get('group')->result_array();?>
								<?php foreach($gu as $yo):?>
									<option value="<?=$yo['group_id'];?>"><?=$yo['group_name'];?></option>
								<?php endforeach;?>
    					  </select>
						</div>
					</div>
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save()">Add test</button>
					</div>

            </form>
		
	    </div>
	  </div>
	</div>	
	
	
	<div id="test_group" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:0px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD TEST GROUP</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formgroup">
				  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Group Name</label>
						   <input type="hidden" name="group_id" value="">
				 		  <input type="text" class="form-control" name="group_name" id="exampleInputEmail1" placeholder="Group Name" required>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Has Units</label>
						  <select name="has_units" class="form-control" required>
								<option selected disabled>Select</option>
								<option value="1">Has Units</option>
								<option value="0"> Has no Units</option>
    					  </select>
						</div>
					</div>
					  
					  
					  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Description</label>
						  <textarea class="form-control" name="description" id="exampleInputEmail1" placeholder="Description" required></textarea>
						</div>
					</div>
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="sava()">Add group</button>
					</div>

            </form>
		
	    </div>
	  </div>
	</div>	
	
	
	
							<!--div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
								<div class="modal-body">
									<p>
										 Would you like to continue with some arbitrary task?
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
									<button type="button" data-dismiss="modal" class="btn blue">Continue Task</button>
								</div>
							</div>
							<div id="static2" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
								<div class="modal-body">
									<p>
										 Would you like to continue with some arbitrary task?
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
									<button type="button" data-dismiss="modal" class="btn blue">Continue Task</button>
								</div>
							</div>

	
	
		
	