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
										<span class="caption-subject font-green-sharp bold uppercase"><?=$page_title;?></span>
									</div>
								</div>
								<hr>
											<div class="portlet-body">								
														<div class="table-toolbar">
															<div class="row">
																	<div class="col-md-6">
																		
																			<button id="sample_editable_1_new" class="btn green" onclick="add_bank();">
																			Add New <i class="fa fa-plus"></i>
																			</button>
																			
																			<form class="form-inline" action="<?=base_url();?>staff/filter_bank" method="post" style="width:100%; margin-left:25%;margin-top:-7%;">
											
																				<select class="form-control see" name="bank_id" style="min-width:50%;">
																					<option  selected disabled value="">Bank</option>
																					<?php $dd=$this->db->get('bank')->result_array();?>
																					<?php foreach($dd as $sel):?>
																						<option value="<?=$sel['bank_id'];?>"><?=$sel['bank'];?></option>
																					<?php endforeach;?>
																				</select>
																				<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
																			</form>
																		
																	</div>
																<div class="col-md-6">
																	<div class="btn-group pull-right">
																		<button  id="sample_editable_1_new" class="btn blue" onclick="window.print();">
																			 <i class="fa fa-print"></i> print
																			</button>
																	</div>
																</div>
															</div>
														</div>
															
														<table class="table table-striped table-bordered table-hover" id="mmm">
															<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Bank</th>
																<th>Acccount #</th>
																<th>Branch</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
															<?php  $count=1;
															$bank   =   $this->db->select('*')->from('employees')->join('bank_details','employees.employee_id=bank_details.employee_id')
															  ->join('bank','bank.bank_id=bank_details.bank_id')
															  ->where('employees.active',1)
															  ->get()->result_array();
															  ?>
															<?php  foreach($bank as $row):?>
															<tr class="odd gradeX">
															 <td><?=$count++;?></td>
															 <td><?php echo $row['name'];?></td>
															 <td><?php echo $row['bank'];?></td>
															 <td><?php echo $row['account_number'];?></td>
															 <td><?php echo $row['branch'];?></td>
															 <td align="center">					
																<a href="javascript:;" class="btn btn-success btn-xs black" onclick="edit_bank(<?=$row['bank_details_id'];?>)" title="CLICK TO ACTIVATE STAFF"><i class="fa fa-edit"></i> edit</a>				
																<a href="javascript:;" class="btn btn-danger btn-xs black" onclick="delete_bank(<?=$row['bank_details_id'];?>)" title="CLICK TO DELETE"><i class="fa fa-trash-o"></i> delete</a>				
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
	function add_bank()
    {
      save_method = 'add';
      $('#formbank')[0].reset(); // reset form on modals
      $('#bank').modal('show'); // show bootstrap modal
    }
	
	function edit_bank(id)
    {
      save_method = 'update';
      $('#formbank')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/bank_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="bank_details_id"]').val(data.bank_details_id);
            $('[name="branch"]').val(data.branch);
			$('[name="account_type"]').val(data.account_type);
			$('[name="city"]').val(data.city);
			$('[name="account_number"]').val(data.account_number);
            $('[name="employee_id"]').val(data.employee_id);
			$('#banke').modal('show');
			$('.modal-title').text('EDIT BANK DETAILS'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }	
	
	function save1()
    {
      var url= "<?php echo site_url('admin/bank_add')?>";

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formbank').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#bank').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
	
	
	function save2()
    {
      var  url = "<?php echo site_url('admin/bank_update')?>";

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formbanke').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#banke').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
	function delete_bank(id)
    {
      if(confirm('Are you sure you want to delete the selected BANK DETAILS?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/bank_delete')?>/"+id,
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

 
   <div id="banke" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title">EDIT BANK DETAILS</h4>
				  </div>
			<div class="modal-body">
				<form role="form" action="#" id="formbanke">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="bank_details_id" value="">
						    <select name="employee_id" class="form-control" id="employee_idd">
						        <?php $ra = $this->db->get_where('employees',array('active'=>1))->result_array();?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Bank</label>
						 	  <select name="bank_id" id="bank_id" class="form-control">
								<?php $bank	=	$this->db->get('bank')->result_array();
									foreach($bank as $row):?>
									 <option value="<?=$row['bank_id'];?>"><?=$row['bank'];?></option>
								<?php endforeach;?>
							 </select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Branch</label>
						  <input type="text" class="form-control" name="branch" id="exampleInputEmail1" placeholder="Branch">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							  <label for="exampleInputEmail1">Account #</label>
						 	  <input type="text" class="form-control" name="account_number" id="exampleInputEmail1" placeholder="Account #">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Account type</label>
						  <input type="text" class="form-control" name="account_type" id="exampleInputEmail1" placeholder="Account Type">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default"><i class="fa fa-close"></i> Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save2()"> <i class="fa fa-plus"></i> Add</button>
					</div>
            </form>
	    </div>
	  </div>
		
		
		
		 <div id="bank" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD BANK DETAILS</h4>
				  </div>
			<div class="modal-body">
				<form role="form" action="#" id="formbank">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="bank_details_id" value="">
						    <select name="employee_id" class="form-control" id="employee_id">
						        <?php
								$data = [];
								$db = $this->db->select('employee_id')->from('bank_details')->get()->result_array();
								if(count($db) > 0)
								{
									foreach($db as $row)
									{ $data[] = $row['employee_id']; }
								}
								$this->db->select('*');
								if(!empty($data))
								{
								$this->db->where_not_in('employee_id',$data);
								$this->db->where('active',1);
								$ra = $this->db->get('employees')->result_array();
								}
								?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Bank</label>
						 	  <select name="bank_id" id="bank_id" class="form-control">
								<?php $bank	=	$this->db->get('bank')->result_array();
									foreach($bank as $row):?>
									 <option value="<?=$row['bank_id'];?>"><?=$row['bank'];?></option>
								<?php endforeach;?>
							 </select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Branch</label>
						  <input type="text" class="form-control" name="branch" id="exampleInputEmail1" placeholder="Branch">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							  <label for="exampleInputEmail1">Account #</label>
						 	  <input type="text" class="form-control" name="account_number" id="exampleInputEmail1" placeholder="Account #">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Account type</label>
						  <input type="text" class="form-control" name="account_type" id="exampleInputEmail1" placeholder="Account Type">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default"> <i class="fa fa-close"></i> Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save1()"> <i class="fa fa-plus"></i> Add</button>
					</div>
            </form>
	    </div>
	  </div>
<script>
 $('#bank_id').select2();
  $('.see').select2();
 $('#employee_id').select2();
 $('#mmm').dataTable();
</script>



	
	
