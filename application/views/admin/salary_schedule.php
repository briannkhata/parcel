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
															<div class="col-md-8">
																		
																			<a href="<?=base_url();?>admin/add_salare1" id="sample_editable_1_new" class="btn green">
																			ADD SALARY 
																			</a>
																			
																			<!--a href="<?=base_url();?>admin/add_salaryy" id="sample_editable_1_new" class="btn btn-default">
																			<b>Add Salary [ <?=date('F Y');?> ] </b>
																			</a-->
																			
																			<button type="button" onclick="bulk_salary_gen()" class="btn btn-primary"> 
																				Bulk Salary  ADD [ <?=date('F Y');?> ] 																		</button>
        
																	
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
															
														<table class="table table-striped table-bordered table-hover">
															<thead>
															<tr>
																<th><input type="checkbox" class="checkall"></th>
																<th>Name</th>
																<th>Bank</th>
																<th>Account #</th>
																<th>Branch</th>
															</tr>
															</thead>
															<tbody>
															<?php  foreach($ss as $row):
															?>
															<tr>
																<td><input type="checkbox" name="employee_id[]" value="<?=$row['employee_id'];?>" class="cc"></td>
																<td><?=$row['name'];?></td>
																<td><?=$row['bank'];?></td>
																<td><?=$row['account_number'];?></td>
																<td><?=$row['branch'];?></td>
																<!--td align="center">					
																	<a href="<?=base_url();?>admin/add_salary2/<?=$row['employee_id'];?>" class="btn btn-success btn-xs black"><i class="fa fa-plus"></i> ADD SALARY</a>				
																</td-->
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
});
</script>
<script type="text/javascript">
$('table').dataTable();

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



                       function bulk_salary_gen()
				      {
	                  var employee_id = [];
	                   jQuery('.cc:checked').each(function(i,e){
	                     employee_id.push(jQuery(this).val());
	                  });
                  if(employee_id ==''){
                    alert('PLEASE SELECT ATLEAST ONE EMPLOYEE TO ADD SALARY!');
                  }else{
				         if(confirm('Are you sure you want to generate salaries for all the selected employees ????'))
				        {
				         
				          jQuery.post("<?php echo base_url()?>salary/bulk_salary_gen",
				          {
				             employee_id : employee_id
				          },
				          function(data,status){
				             // location.href="admin/salary_list"
				             location.reload();

				          });
				            }
				        }
				      }


</script>

</body>
</html>
