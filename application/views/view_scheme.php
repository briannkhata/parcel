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
																	</div>
																				<div class="btn-group pull-right">
																		<button class="btn btn-sucess blue" onclick="window.print();">print <i class="fa fa-print"></i>
																		</button>
																		
																	</div>
															
								<div class="actions btn-set"></div>
							</div>
						<hr>
						
							<div class="portlet-body">
								<table width="40%" align="center" class="table table-stripped table-bordered">
									<tbody>
								   <?php 
										$sc   =   $this->db->select('*')->from('health_scheme')
											  ->join('employees','employees.employee_id=health_scheme.employee_id')
											  ->join('scheme','scheme.scheme_id=health_scheme.scheme_id')
											  ->join('membership','membership.membership_id=health_scheme.membership_id')
											  ->where('health_scheme_id',$health_scheme_id)
											  ->get()->result_array();
									foreach($sc as $row):?>
                
									   <tr>
										<td>Principal Member</td><td><b><?php echo $row['name'];?></b></td>
									   </tr>
									   <tr>
										<td>Membership #</td>
										<td><?php echo $row['membership_number'];?></td>
									   </tr>
										<tr>
										<td>Scheme Name</td>
										<td><?php echo $row['scheme_name'];?></td>
									   </tr>
									   
										<tr>
										<td>Membership type</td>
										<td><?php echo $row['membership'];?></td>
									   </tr>
									   
										<tr>
										<td>Description</td>
										<td><?php echo $row['description'];?></td>
									   </tr>
									   
									   <?php if($row['other_members'] == 1):?>
										   <tr>
											<td>Other Members</td>
											<td> 
											<table class="table table-stripped table-bordered">
											  <tr>
													<td colspan="5"><a href="#" onclick="edit_scheme(<?php echo $health_scheme_id;?>)"><b>ADD OTHER MEMBERS</b></a></td>
											  </tr>
											   <tr>
												   <th>Member</th>
												   <th>Deduct</th>
												   <th>Amount</th>
												   <th>Salary Date</th>
												   <td>Action</td>
											   </tr>
											   <?php  $xtra = $this->db->get_where('other_members',array('health_scheme_id'=>$health_scheme_id,'deleted'=>0))->result_array();
											 foreach($xtra as $w): ?>
										
											   <tr>
											     <td>
													<span class="label label-default">
													 <?php echo $w['other_members'];?> 
													</span> 
												</td>
												 <td>
													 <span class="label label-info">
													  <?php if($w['deduct'] == 1):?> YES DEDUCT <?php else:?> DO NOT DEDUCT <?php endif;?>
													</span>
												 
												 </td>
												 <td>
												 <span class="label label-success">
												   <?php echo $w['d_amount'];?> 
												</span> 
												
												 </td>
												 
												  <td>
												   <?php echo $w['month'];?> 
												|
												   <?php echo $w['year'];?> 
												
												 </td>
												 <td>
												 	<a href="#" onclick="edit_members(<?php echo $w['other_members_id'];?>)"> <i class="fa fa-check-circle"></i></a>
												    <a href="#" onclick="delete_member(<?php echo $w['other_members_id'];?>)"> <i class="fa fa-times-circle" style="color:red;"></i></a>												 
												 </td>
											   </tr>
												<?php endforeach;?>
							
											</table>
											
											</td>
										   </tr>
									   <?php else:?>
									    <tr>
										  <td colspan="2"><a href="#" onclick="edit_scheme(<?php echo $health_scheme_id;?>)"><b>ADD OTHER MEMBERS</b></a></td>
									   </tr>
									   <?php endif;?>

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

   var save_method; //for save method string
	function edit_scheme(id)
    {
	   save_method = 'add';
       //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/scheme_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			$('[name="health_scheme_id"]').val(data.health_scheme_id);
			//$('[name="other_members_id"]').val(data.other_members_id);
			$('[name="deduct"]').val(data.deduct);
			$('[name="d_amount"]').val(data.d_amount);
			$('#scheme').modal('show');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
	function edit_members(id)
    {
	   save_method = 'update';

       //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/other_members_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			$('[name="health_scheme_id"]').val(data.health_scheme_id);
			$('[name="other_members_id"]').val(data.other_members_id);
			$('[name="other_members"]').val(data.other_members);
			$('[name="deduct"]').val(data.deduct);
			$('[name="d_amount"]').val(data.d_amount);


			$('#scheme').modal('show');
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
      if(save_method == 'add')
      {
        url = "<?php echo site_url('admin/other_members_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/other_members_update')?>";
      }
	  
  
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formscheme').serialize(),
            dataType: "JSON",
            success: function(data)
            {
              $('#scheme').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
	
	function delete_member(id)
    {
      if(confirm('Are you sure ???'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/other_member_delete')?>/"+id,
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

	<div id="scheme" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD OTHER MEMBERS</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formscheme">
					
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Member</label>
						      <input type="hidden" name="health_scheme_id" value="">
							  <input type="hidden" name="other_members_id" value="">
						 	  <input type="text" class="form-control" name="other_members">
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Deduct Options</label>
						       <select name="deduct" class="form-control">
							     <option value="1">YES</option>
							     <option value="0">NO</option>
							   </select>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Deduct Amount</label>
						 	  <input type="text" class="form-control" name="d_amount">
						</div>
					</div>
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save()">Add Member</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	
	

