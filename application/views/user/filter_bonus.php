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
								<div class="row" id="hed" style="">
								 		<?php $pic = $this->db->get('labo')->row()->logo; ?>   
     									<img alt="" width="auto" height="auto"  class="img-responsive" src="<?=base_url().'/assets/logos/'.$pic;?>">										
								</div>
								<div class="caption">
									<i class="icon-diamond"></i>
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
															
															  
																		<div class="btn-group">
																			<form class="form-inline" action="<?=base_url();?>admin/filter_bonus" method="post">
																		
																				<select class="form-control" name="month" id="s2">
																					<option selected value="">Filter by Month</option>
																					<?php $month=$this->db->get('month')->result_array();?>
																					<?php foreach($month as $sel):?>
																						<option value="<?=$sel['month'];?>"><?=$sel['month'];?></option>
																					<?php endforeach;?>
																				</select>
																				
																				<select class="form-control" name="year" id="s3">
																					<option selected value="">Filter by Year</option>
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
																		<button id="sample_editable_1_new" class="btn green" onclick="add_bonus();">
																			Add New <i class="fa fa-plus"></i>
																			</button>
																	</div>
																</div>
															</div>
														</div>
															
														<table class="table table-striped table-bordered table-hover" id="m0">
															<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Amount</th>
																<th>Month</th>
																<th>Year</th>
																<th>Description</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
														<?php  
													
                									    foreach($bonus as $row):?>
															<tr class="odd gradeX">
																<td><?=$count++;?></td>
																<td><?=$this->db->get_where('employees',array('employee_id'=>$row['employee_id']))->row()->name;?></td>
																<td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['amount'])),2);?></td>
																<td><?=$row['month'];?></td>
																<td><?=$row['year'];?></td>
															    <td><?=$row['description'];?></td>
																<td align="center">					
																<a href="javascript:;" class="btn btn-success btn-xs black" onclick="edit_bonus(<?=$row['bonus_id'];?>)" title="CLICK TO EDIT"><i class="fa fa-edit"></i> EDIT</a>				
															   	<!--a href="javascript:;" class="btn btn-success btn-xs black" onclick="view_loan(<?=$row['bonus_id'];?>)" title="CLICK FOR DETAILS"><i class="fa fa-eye"></i> VIEW</a-->				
																<a href="javascript:;" class="btn btn-danger btn-xs black" onclick="delete_bonus(<?=$row['bonus_id'];?>)" title="CLICK TO DELETE"><i class="fa fa-trash-o"></i> DELETE</a>				
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
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>

<script type="text/javascript">
   var save_method; //for save method string
    var table;
	function add_bonus()
    {
      save_method = 'add';
      $('#formbonus')[0].reset(); // reset form on modals
      $('#bonus').modal('show'); // show bootstrap modal
    }

		
    function edit_bonus(id)
    {
      save_method = 'update';
      $('#formbonuse')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('staff/bonus_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="bonus_id"]').val(data.bonus_id);
            $('[name="amount"]').val(data.amount);
			$('[name="employee_id"]').val(data.employee_id);
			$('[name="name"]').val(data.name);
            $('[name="description"]').val(data.description);
            $('[name="month"]').val(data.month);
            $('[name="year"]').val(data.year);
			
            $('#bonuse').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT BONUS'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
	 function view_loan(id)
    {
      save_method = 'update';
      $('#formloan')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('staff/loan_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="loan_id"]').val(data.loan_id);
            $('[name="amount"]').val(data.amount);
            $('[name="employee_id"]').val(data.employee_id);
            $('[name="description"]').val(data.description);
			
            $('#loan').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT LOAN'); // Set title to Bootstrap modal title
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
 
          url = "<?php echo site_url('staff/bonus_add')?>";
   
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formbonus').serialize(),
            dataType: "JSON",
            success: function(data)
            {
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
      var url;
     
        url = "<?php echo site_url('staff/bonus_update')?>";
   
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formbonuse').serialize(),
            dataType: "JSON",
            success: function(data)
            {
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
	
	function delete_bonus(id)
    {
      if(confirm('Are you sure you want to delete the selected BONUS DETAILS?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('staff/bonus_delete')?>/"+id,
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

 <div id="bonus" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD BONUS</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formbonus">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="bonus_id" value="">
						    <select name="employee_id" class="form-control" id="q3">
							    
								 <?php
								$data = [];
								$db = $this->db->select('employee_id')->from('bonus')->where('month',date('F'))->where('year',date('Y'))->get()->result_array();
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
					
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Amount</label>
						 	  <input type="text" class="form-control" name="amount" id="exampleInputEmail1" placeholder="Amount" required>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						    <select name="month" class="form-control" id="q1">
						       <?php $ra = $this->db->get('month')->result_array();?>
							   <?php foreach($ra as $yo):?>
									<option <?php if ($yo['month'] = date('F')): echo 'selected';endif;?> value="<?=$yo['month'];?>"><?=$yo['month'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Year</label>
						    <select name="year" class="form-control" id="q">
						       <?php $ra = $this->db->get('year')->result_array();?>
							   <?php foreach($ra as $yo):?>
									<option <?php if ($yo['year'] = date('Y')): echo 'selected';endif;?> value="<?=$yo['year'];?>"><?=$yo['year'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Description</label>
						 	  <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="Description">
						</div>
					</div>
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save()"> <i class="fa fa-plus"></i>Add</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	


	<div id="bonuse" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD BONUS</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formbonuse">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="bonus_id" value="">
						   <input type="hidden" name="employee_id" value="">
					 	  <input type="text" class="form-control" name="name" readonly>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Amount</label>
						 	  <input type="text" class="form-control" name="amount" id="exampleInputEmail1" placeholder="Amount" required>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						    <select name="month" class="form-control" id="q1">
						       <?php $ra = $this->db->get('month')->result_array();?>
							   <?php foreach($ra as $yo):?>
									<option <?php if ($yo['month'] = date('F')): echo 'selected';endif;?> value="<?=$yo['month'];?>"><?=$yo['month'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Year</label>
						    <select name="year" class="form-control" id="q">
						       <?php $ra = $this->db->get('year')->result_array();?>
							   <?php foreach($ra as $yo):?>
									<option <?php if ($yo['year'] = date('Y')): echo 'selected';endif;?> value="<?=$yo['year'];?>"><?=$yo['year'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Description</label>
						 	  <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="Description">
						</div>
					</div>
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="savee()"> <i class="fa fa-plus"></i>Add</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	
	<script>
	 $('#q').select2();
	 $('#q1').select2();
	 $('#q2').select2();
	 $('#q3').select2();
	$('#m0').dataTable();
	</script>

	