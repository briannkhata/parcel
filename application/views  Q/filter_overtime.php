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

<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/fonts.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>assets/print.css" type="text/css" media="print" /> 
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
								<div class="row" id="hed">
								 		<?php $pic = $this->db->get('labo')->row()->logo; ?>   
     									<img alt="" width="auto" height="auto"  class="img-responsive" src="<?=base_url().'/assets/logos/'.$pic;?>">										
								</div>
								<div class="portlet-title" id="hedd">
									<div class="caption">
										<i class="icon-diamond"></i>
										<span class="caption-subject font-green-sharp bold uppercase" >
										<?=$page_title;?></span>
									</div>
								</div>
							<hr>
							<div class="portlet-body">
											<div class="table-toolbar">
															<div class="row">
															<div class="col-md-6">
																		
																			<button id="sample_editable_1_new" class="btn green" onclick="add_overtime();">
																			Add New <i class="fa fa-plus"></i>
																			</button>
																			
																			<form class="form-inline" action="<?=base_url();?>staff/filter_overtime" method="post" style="width:100%; margin-left:25%;margin-top:-7%;">
											
																				<select class="form-control see" name="month" style="min-width:34%;">
																					<option  selected disabled value="">Month</option>
																					<?php $dd=$this->db->get('month')->result_array();?>
																					<?php foreach($dd as $sel):?>
																						<option value="<?=$sel['month'];?>"><?=$sel['month'];?></option>
																					<?php endforeach;?>
																				</select>
																				
																				<select class="form-control see" name="year" style="min-width:30%;">
																					<option  selected disabled value="">Year</option>
																					<?php $dep=$this->db->get('year')->result_array();?>
																					<?php foreach($dep as $cel):?>
																						<option value="<?=$cel['year'];?>"><?=$cel['year'];?></option>
																					<?php endforeach;?>
																				</select>
																				<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
																			</form>
																		
																	</div>
																<div class="col-md-6">
																	<div class="btn-group pull-right">
																		<button id="sample_editable_1_new" class="btn green" onclick="window.print();">
																			<i class="fa fa-print"></i> print 
																			</button>
																	</div>
																</div>
															</div>
														</div>
															
														<table class="table table-striped table-bordered table-hover" id="mmmm">
															<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Normal Amount</th>
																<th>Public Amount</th>
																<th>Total</th>
																<th class="nop"></th>
															</tr>
															</thead>
															<tbody>
															<?php  foreach($overtime as $row):
															$public_amount += $row['public_amount'];
															$normal_amount += $row['normal_amount'];
															$total_overtime += $row['total_overtime'];?>
															<tr class="odd gradeX">
															 <td><?=$count++;?></td>
															<td><?php echo $row['name'];?></td>
															<td><?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['normal_amount'])),2);?></td>
															<td><?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['public_amount'])),2);?></td>
															<td><?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['total_overtime'])),2);?></td>
															 <td align="center" class="nop">					
																<a href="javascript:;" class="btn btn-info btn-xs black" onclick="edit_overtime(<?=$row['overtime_id'];?>)"><i class="fa fa-edit"></i> edit</a>				
																<a href="javascript:;" class="btn btn-success btn-xs black" onclick="view_overtime(<?=$row['overtime_id'];?>)"><i class="fa fa-eye"></i> view</a>				
																<a href="javascript:;" class="btn btn-warning btn-xs black" onclick="delete_overtime(<?=$row['overtime_id'];?>)"><i class="fa fa-trash-o"></i> delete</a>				
															</td>
															</tr>
															<?php endforeach;?>
															</tbody>
															<tr>
															  <td></td>
															  <td>Totals</td>
															  <td><?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$public_amount)),2);?></td>
															  <td><?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$normal_amount)),2);?></td>
															  <td><?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$total_overtime)),2);?></td>
															  <td class="nop"></td>
															</tr>
															</table>
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
	
	function add_overtime()
    {
      save_method = 'add';
      $('#formovertime')[0].reset(); // reset form on modals
      $('#overtime').modal('show'); // show bootstrap modal
    }
	
	function edit_overtime(id)
    {
      save_method = 'update';
      $('#formovertimee')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/overtime_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="overtime_id"]').val(data.overtime_id);
            $('[name="public_hours"]').val(data.public_hours);
			$('[name="normal_hours"]').val(data.normal_hours);
            $('[name="employee_id"]').val(data.employee_id);
			$('#overtimee').modal('show');
			$('.modal-title').text('Edit Overtime'); // Set title to Bootstrap modal title
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
      var url = "<?php echo site_url('admin/overtime_add')?>";

 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formovertime').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#overtime').modal('hide');
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
      var url = "<?php echo site_url('admin/overtime_update')?>";
    
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formovertimee').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#overtimee').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
	
	
	
	
	
   	function delete_overtime(id)
    {
      if(confirm('Are you sure you want to delete the selected OVERTIME?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/overtime_delete')?>/"+id,
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

		  
	  	<!--overtime-->
	<div id="overtime" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD OVERTIME</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formovertime">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
							    <select name="employee_id" class="form-control" id="employee_id">
						        <?php
								$data = [];
								$db = $this->db->select('employee_id')->from('overtime')->where('salary_date',date('F Y'))->get()->result_array();
								if(count($db) > 0)
								{
									foreach($db as $row)
									{ $data[] = $row['employee_id']; }
								}
								$this->db->select('*');
								if(!empty($data))
								$this->db->where_not_in('employee_id',$data);
								$this->db->where('active',1);
								$ra = $this->db->get('employees')->result_array();
								?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Normal Hours</label>
						 	  <input type="number" class="form-control" name="normal_hours" id="exampleInputEmail1" placeholder="Normal Hours">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Public Hours</label>
						 	  <input type="number" class="form-control" name="public_hours" id="exampleInputEmail1" placeholder="Public Hours">
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						    <select name="month" class="form-control see">
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
						    <select name="year" class="form-control see">
							   <?php $raa = $this->db->get('year')->result_array();?>
							   <?php foreach($raa as $yo):?>
									<option value="<?=$yo['year'];?>"><?=$yo['year'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
		
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save()"> <i class="fa fa-plus"></i>Add</button>
					</div>
            </form>
	    </div>
	  </div>
	  
	  
	    	<!--overtime-->
	<div id="overtimee" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD OVERTIME</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formovertimee">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
								<input type="text" name="overtime_id" value="">
							    <select name="employee_id" class="form-control" id="employee_id">
						        <?php
								$this->db->where('active',1);
								$ra = $this->db->get('employees')->result_array();
								?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Normal Hours</label>
						 	  <input type="number" class="form-control" name="normal_hours" id="exampleInputEmail1" placeholder="Normal Hours">
						</div>
					</div>
						<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Public Hours</label>
						 	  <input type="number" class="form-control" name="public_hours" id="exampleInputEmail1" placeholder="Public Hours">
						</div>
					</div>
			
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						    <select name="month" class="form-control see">
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
						    <select name="year" class="form-control see">
							   <?php $raa = $this->db->get('year')->result_array();?>
							   <?php foreach($raa as $yo):?>
									<option value="<?=$yo['year'];?>"><?=$yo['year'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
		
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="savee()"> <i class="fa fa-plus"></i>Add</button>
					</div>
            </form>
	    </div>
	  </div>
	  
	 
	  
	  
   <script>
   $('#employee_id').select2();
   $('#s2').select2();
   $('#s3').select2();
   $('#s4').select2();
   $('#s5').select2();
   $('#s6').select2();
   $('#s7').select2();
    $('#s7').select2();
   $('.see').select2();
  $('.dt').datepicker({
      autoclose: true
    });
$('#mmmm').dataTable();
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
