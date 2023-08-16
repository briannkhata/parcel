<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?=$page_title;?></title>
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
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<?php include'includes/header_top.php';?>
</div>
<div class="clearfix">
</div>
<div class="page-container">
<?php include 'includes/left_nav.php';?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-head">
				<?php //include 'includes/topbar.php';?>
				<!-- END PAGE TOOLBAR -->
			</div>
			<div class="row">
				<div class="col-md-12">
							<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-list"></i>
									<span class="caption-subject font-green-sharp bold uppercase">
									<?=$page_title;?></span>
									
								</div>
								<div class="actions btn-set"></div>
							</div>

							<hr>
							<div class="portlet-body">
							<div class="tab-pane" id="tab_lon">	
										
												<div class="portlet-body">
													<div class="table-toolbar">
															<div class="row">
															<div class="col-md-6">
																				<a id="sample_editable_1_new" class="btn green" href="<?php echo base_url();?>Salary/add_pension_para">
																			Add New <i class="fa fa-plus"></i>
																			</a>
																				
																	
																	</div>
																
															</div>
														</div>
															
														<table class="table table-striped table-bordered table-hover" id="m0">
															<thead>
															<tr>
																<th><center>S/N</center></th>
																<th>Year</th>
																<th>Month</th>
																<th>Staff Percentage</th>
																<th>Company Percentage</th>
																<th>GLA</th>
																<th>Broker</th>
																<th>Status</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
															<?php foreach($pp as $row):?>
             
															<tr class="odd gradeX">
																<td align="center"><?=$count++;?></td>
																<td><?php echo $row['year'];?></td>
																<td><?=$row['month'];?></td>
																<td><?=$row['staff'];?> %</td>
																<td><?=$row['company'];?> %</td>
																<td><?=$row['gla'];?> %</td>
																<td><?=$row['broker'];?> %</td>
																<td>
																	<?php if ($row['current'] == 1){?>
																		<b style="color: blue;">CURRENT</b>
																	<?php } else{?>
																		<b style="color: red;">NOT CURRENT</b>
																		<?php }?>
																</td>
																<td align="center">					
																	<a href="<?php echo base_url();?>Salary/edit_pension_para/<?php echo $row['id'];?>" class="btn btn-info btn-xs black"><i class="fa fa-edit"></i> edit</a>				
																	<a href="javascript:;" class="btn btn-warning btn-xs black" onclick="delete_pp(<?=$row['id'];?>)"><i class="fa fa-trash-o"></i> delete</a>				
															   </td>
														
															</tr>
															<?php endforeach;?>
															</tbody>
													         
															</table>
													</div>
												
										</div>
									</div>
							<!-- END PAGE CONTENT-->
						</div>
					</div>
	<!-- END CONTENT -->
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
   var save_method; //for save method string
    var table;
	function add()
    {
      save_method = 'add';
      $('#formpp')[0].reset(); // reset form on modals
      $('#pp').modal('show'); // show bootstrap modal
    }
	
	function edit_pp(id)
    {
      save_method = 'update';
      $('#formppu')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('salary/pp_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="id"]').val(data.id);
            $('[name="staff"]').val(data.staff);
			$('[name="company"]').val(data.company);
			$('[name="month"]').val(data.month);
			$('[name="year"]').val(data.year);
			$('[name="current"]').val(data.current);
            $('[name="gla"]').val(data.gla);
			$('[name="broker"]').val(data.broker);
			$('#ppu').modal('show');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
	
	function save()
    {
      var url = "<?php echo site_url('salary/pp_add')?>";

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formpp').serialize(),
            dataType: "JSON",
            success: function(data)
            {

              $('#pp').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }


    function savee()
    {
      var url = "<?php echo site_url('salary/pp_update')?>";
       
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formppu').serialize(),
            dataType: "JSON",
            success: function(data)
            {
              $('#ppu').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }

	function delete_pp(id)
    {
      if(confirm('Are you sure ???'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('salary/pp_delete')?>/"+id,
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
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>
	
</body>
</html>



			<div id="pp" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD PENSION PARAMETERS</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formpp">
				  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff(%)</label>
						    <input type="text" name="staff" class="form-control">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Company(%)</label>
							<input type="text" name="company" class="form-control">
						</div>
					</div>

						<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Broker(%)</label>
						    <input type="text" name="broker" value="" class="form-control">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">GlA(%)</label>
							<input type="text" name="gla" value="" class="form-control">
						</div>
					</div>
					
					 
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						    <select name="month" class="form-control see" id="month">
							<option selected disabled value=""></option>
							   <?php $rza = $this->db->get('month')->result_array();?>
							   <?php foreach($rza as $yo):?>
									<option value="<?=$yo['month'];?>"><?=$yo['month'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Year</label>
						    <select name="year" class="form-control see" id="year">
								<option selected disabled value=""></option>
							   <?php $raa = $this->db->get('year')->result_array();?>
							   <?php foreach($raa as $yo):?>
									<option value="<?=$yo['year'];?>"><?=$yo['year'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Current Parameters</label>
							<div class="radio-list">
								<label class="radio-inline">
								<input type="radio" id="optionsRadios22" value="1" name="current"> YES CURRENT </label>
								<label class="radio-inline">
								<input type="radio" id="optionsRadios23" value="0" name="current"> NOT CURRENT </label>
							</div>
						</div>
					</div>

					
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save()"><i class="fa fa-plus"></i>Add</button>
					</div>
            </form>
	    </div>

	    	<div id="ppu" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> EDIT PENSION PARAMETERS</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formppu">
				   <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff (%)</label>
						    <input type="hidden" name="id" value="">
						    <input type="text" name="staff" value="" class="form-control">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Company  (%)</label>
							<input type="text" name="company" value="" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Broker(%) </label>
						    <input type="text" name="broker" value="" class="form-control">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">GlA (%)</label>
							<input type="text" name="gla" value="" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
							<input type="text" name="month" value="" class="form-control" readonly="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Year</label>
							<input type="text" name="year" value="" class="form-control" readonly="">
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Current Parameters</label>
							<div class="radio-list">
								<label class="radio-inline">
								<input type="radio" id="optionsRadios22" value="1" name="current"> YES CURRENT </label>
								<label class="radio-inline">
								<input type="radio" id="optionsRadios23" value="0" name="current"> NOT CURRENT </label>
							</div>
						</div>
					</div>
					
					 
					
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="savee()"><i class="fa fa-plus"></i>Save Changes</button>
					</div>
            </form>
	    </div>
	<script>
   $('#s1').select2();
   $('#s2').select2();
   $('#s3').select2();
   $('#s4').select2();
   $('#s5').select2();
   $('#s6').select2();
   $('#s7').select2();
   $('#ss').select2();
   $('.see').select2();
   $('.dt').datepicker({
      autoclose: true
    });
	$('#mahop').dataTable();
	$('#mm').dataTable();
	$('#mmm').dataTable();
	$('#mmmm').dataTable();
	$('#mmmmm').dataTable();
	$('#mmmmmm').dataTable();
	$('#mmmmmmm').dataTable();
	$('#m0').dataTable();
</script>
	
	