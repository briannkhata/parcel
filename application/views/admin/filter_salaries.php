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
										<span class="caption-subject font-green-sharp bold uppercase" >
										<?=$page_title;?></span>
									</div>
								</div>
							<hr>
							<div class="portlet-body">
							<div class="tab-pane" id="tab_lon">	
										
												<div class="portlet-body">
													<div class="table-toolbar">

																<div class="table-toolbar">
															<div class="row">
															<div class="col-md-8">
																		
																			<a href="<?=base_url();?>admin/salary_list" id="sample_editable_1_new" class="btn green">
																			BACK TO FILTER 
																			</a>
																			
																			<button type="button" onclick="bulk_delete()" class="btn btn-danger"> 
																				DELETE
																				</button>
																			
																			
																			<button type="button" onclick="bulk_salary_update()" class="btn btn-primary"> 
																				EDIT
																				</button>
        
																	
																	</div>
																<div class="col-md-4">
																	<div class="btn-group pull-right">
																	<button type="button" id="sample_editable_1_neww" class="btn green" onclick="window.print();">
																	print <i class="glyphicon glyphicon-print"></i></button>
        
																	</div>
																</div>
															</div>
														</div>
														<hr>




															
															
														<table class="table table-bordered">
															<thead>
															<tr>
																<th><input type="checkbox" class="checkall"></th>
																<th>Name</th>
																<th>Net salary</th>
																<th>Bank</th>
																<th>Account #</th>
																<th>Salary Date</th>
																<th class="nop"></th>
															</tr>
															</thead>
															<tbody>
															<?php  foreach($sl as $row):?>
															<?php $net_salary += $row['net_salary'];?>
															<tr class="odd gradeX">
																<td><input type="checkbox" name="salary_id[]" value="<?=$row['salary_id'];?>" class="cc"></td>
																<td><?=$row['name'];?></td>
																<td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['net_salary'])),2);?></td>
																<td><?=$row['bank'];?></td>
																<td><?=$row['account_number'];?></td>
																<td><?=$row['salary_date'];?></td>
																<td align="center" class="nop">
																  <a href="<?=base_url();?>admin/payslip_pdf/<?=$row['salary_id'];?>/<?=$row['employee_id'];?>/<?=$row['month'];?>/<?=$row['year'];?>" class="btn btn-success btn-xs black"><i class="fa fa-eye" title="click to view payslip"></i> payslip</a> 

																	<!--a href="<?=base_url();?>admin/edit_salary/<?=$row['salary_id'];?>/<?=$row['employee_id'];?>/<?=$row['month'];?>/<?=$row['year'];?>" class="btn btn-success btn-xs black"><i class="fa fa-edit" title="click to view payslip"></i> EDIT</a> 
						
																	<a href="#" class="btn btn-warning btn-xs black" onclick="delete_salary(<?=$row['salary_id'];?>)" ><i class="fa fa-close"></i> delete</a-->				
																</td>
															</tr>
															<?php endforeach;?>
															</tbody>
															
															<tr>
															   <td>TOTALS</td>
															   <td></td>
															   <td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$net_salary)),2);?></td>
															   <td></td>
															   <td></td>
															   <td></td>
															   <td class="nop"></td>
															</tr>
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
$(document).ready(function(){
  $('.ik').hide();
	});
</script>
<script>

   						if($('.checkall').length > 0) {
                          $('.checkall').click(function(){
                            var parentTable = $(this).parents('table');                       
                            var ch = parentTable.find('tbody input[type=checkbox]');                     
                            if($(this).is(':checked')) {
                            
                              //check all rows in table
                              ch.each(function(){ 
                                $(this).attr('checked',true);
                                $(this).parent().addClass('checked');  //used for the custom checkbox style
                                $(this).parents('tr').addClass('selected'); // to highlight row as selected
                              });
                                    
                            
                            } else {
                              
                              //uncheck all rows in table
                              ch.each(function(){ 
                                $(this).attr('checked',false); 
                                $(this).parent().removeClass('checked'); //used for the custom checkbox style
                                $(this).parents('tr').removeClass('selected');
                              }); 
                              
                            }
                          });
                        }



                       function bulk_salary_update()
				      {
	                  var salary_id = [];
	                   jQuery('.cc:checked').each(function(i,e){
	                     salary_id.push(jQuery(this).val());
	                  });
                  if(salary_id ==''){
                    alert('PLEASE SELECT ATLEAST ONE SALARY TO UPDATE!');
                  }else{
				         if(confirm('Are you sure you ????'))
				        {
				         
				          jQuery.post("<?php echo base_url()?>salary/bulk_salary_update",
				          {
				             salary_id : salary_id
				          },
				          function(data,status){
				             // location.href="admin/salary_list"
				             location.reload();

				          });
				            }
				        }
				      }


				         function bulk_delete(){
	                  var salary_id = [];
	                   jQuery('.cc:checked').each(function(i,e){
	                     salary_id.push(jQuery(this).val());
	                  });
                  if(salary_id ==''){
                    alert('PLEASE SELECT ATLEAST ONE SALARY TO DELETE');
                  }else{
				         if(confirm('Are you sure you ????'))
				        {
				         
				          jQuery.post("<?php echo base_url()?>salary/bulk_delete",
				          {
				             salary_id : salary_id
				          },
				          function(data,status){
				             location.reload();

				          });
				            }
				        }
				      }


					/*function delete_salary(id)
				    {
				      if(confirm('Are you sure you want to delete the selected SALARY?'))
				      {
				        // ajax delete data from database
				          $.ajax({
				            url : "<?php echo site_url('admin/salary_delete')?>/"+id,
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
				    }*/

</script>
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 

});
</script>
</body>
</html>
