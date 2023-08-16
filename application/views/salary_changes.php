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
															<div class="col-md-12">
																		<div class="btn-group">
																			
																			<!--button id="sample_editable_1_new" class="btn green" onclick="change_salary();">
																			new salary <i class="fa fa-plus-circle"></i>
																			</button-->

                                        <a href="<?php echo base_url();?>admin/new_salary_change1" class="btn green">
                                      new salary change <i class="fa fa-plus-circle"></i>
                                      </a>

																			<!--button  class="btn blue" onclick="maintain()">
																			Maintain Salaries <i class="fa fa-check-circle"></i>
																			</button-->

																			<button id="sample_editable_1_newm" class="btn grey" onclick="window.print()">
																			print <i class="fa fa-print"></i>
																			</button>
																		</div>
																	</div>
																
															</div>
														</div>
                            <hr>
															
														<table class="table table-striped table-bordered table-hover" id="m0">
															<thead>
															<tr>
                                <th><input type="checkbox" class="checkall"></th>
																<th>Name</th>
																<th>Basic Salary</th>
																<th>Month</th>
																<th>Year</th>
																<th>Date</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
														<?php  
														$count=1;
														$loans   =   $this->db->select('*')
																				  ->from('employees')
																				  ->join('salary_change','salary_change.employee_id=employees.employee_id')
																				  ->where('visible',1)
																				  ->where('active',1)
																				  ->get()->result_array();
                
														    foreach($loans as $row):
														
										
															?>
															<tr class="odd gradeX">
																<td><input type="checkbox" name="employee_id[]" value="<?=$row['employee_id'];?>" class="cc"></td>

																<td><?=$row['name'];?></td>
																<td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['salary'])),2);?></td>
																<td><?=$row['month'];?></td>
															    <td><?=$row['year'];?></td>
															     <td><?=date('d F Y ',strtotime($row['date_changed']));?></td>
																
															 <td align="center">					
																<a href="javascript:;" class="btn btn-success btn-xs black" onclick="editt(<?=$row['salary_change_id'];?>)" title="CLICK TO EDIT"><i class="fa fa-edit"></i> EDIT</a>				
															   				
																<a href="javascript:;" class="btn btn-danger btn-xs black" onclick="deletee(<?=$row['salary_change_id'];?>)" title="CLICK TO DELETE"><i class="fa fa-trash-o"></i> DELETE</a>				
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
});
</script>
<script type="text/javascript">
   var save_method; //for save method string
    var table;
	function maintain_salary()
    {
      save_method = 'add';
      $('#formchangee')[0].reset(); // reset form on modals
      $('#changee').modal('show'); // show bootstrap modal
    }


    function change_salary()
    {
      save_method = 'add';
      $('#formchange')[0].reset(); // reset form on modals
      $('#change').modal('show'); // show bootstrap modal
    }

		
    function editt(id)
    {
      save_method = 'update';
      $('#formchangeee')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('staff/salary_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="salary_change_id"]').val(data.salary_change_id);
            $('[name="salary"]').val(data.salary);
            $('[name="employee_id"]').val(data.employee_id);
            $('[name="staff"]').val(data.name);
            $('[name="month"]').val(data.month);
			      $('[name="year"]').val(data.year);

            $('#changeee').modal('show'); // show bootstrap modal when complete loaded
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save_changes()
    {
      var url = "<?php echo site_url('staff/new_salary_update')?>";
   
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formchangeee').serialize(),
            dataType: "JSON",
            success: function(data)
            {
              $('#changeee').modal('hide');
              location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
	

     function save()
    {
      var url = "<?php echo site_url('staff/new_salary_add')?>";
     
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formchange').serialize(),
            dataType: "JSON",
            success: function(data)
            {
              $('#change').modal('hide');
              location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }


        function maintain()
              {
                    var employee_id = [];
                     jQuery('.cc:checked').each(function(i,e){
                       employee_id.push(jQuery(this).val());
                    });
                  if(employee_id ==''){
                    alert('PLEASE SELECT ATLEAST ONE EMPLOYEE TO MAINTAIN SALARY!');
                  }else{
                 if(confirm('Are you sure ????'))
                {
                 
                  jQuery.post("<?php echo base_url()?>staff/maintain_salary",
                  {
                     employee_id : employee_id
                  },
                  function(data,status){
                      location.href="<?php echo base_url();?>admin/salary_changes"

                  });
                    }
                }
              }

    /*function maintain()
    {
      var url = "<?php echo site_url('staff/maintain_salary')?>";
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formchangee').serialize(),
            dataType: "JSON",
            success: function(data)
            {
              $('#changee').modal('hide');
              location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }*/

	
	function deletee(id)
    {
      if(confirm('Are you sure ???'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('staff/new_salary_delete')?>/"+id,
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
	
  </script>
	
</body>
</html>

 <div id="change" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> NEW SALARY</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formchange">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						   <input type="hidden" name="salary_change_id" value="">
						    <select name="employee_id" class="form-control ss">
						       <?php $ra = $this->db->get_where('employees',array('active'=>1))->result_array();?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						 	   <select name="month" class="form-control ss">
						       <?php $ra = $this->db->get_where('month')->result_array();?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['month'];?>"><?=$yo['month'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Year</label>
						   <select name="year" class="form-control ss">
						       <?php $ra = $this->db->get_where('year')->result_array();?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['year'];?>"><?=$yo['year'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">New Salary</label>
						 	  <input type="text" class="form-control" name="salary" id="exampleInputEmail1" placeholder="New Salary" required>
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


	<div id="changeee" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> EDIT NEW SALARY</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formchangeee">
				  

					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						 	  <input type="hidden" class="form-control" name="employee_id">
						 	  <input type="text" class="form-control" name="staff" placeholder="New Salary" readonly="">
						   	  <input type="hidden" name="salary_change_id" value="">

						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Month</label>
						 	  <input type="text" class="form-control" name="month" placeholder="New Salary" readonly="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Year</label>
						 	  <input type="text" class="form-control" name="year" placeholder="New Salary" readonly="">
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">New Salary</label>
						 	  <input type="text" class="form-control" name="salary" placeholder="New Salary" required>
						</div>
					</div>
					
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save_changes()"> <i class="fa fa-plus"></i>save changes</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	


	<div id="changee" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> MAINTAIN SALARY</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formchangee">
				  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff</label>
						    <select name="employee_id[]" class="form-control ss" multiple="">
						       <?php $ra = $this->db->get_where('employees',array('active'=>1))->result_array();?>
							   <?php foreach($ra as $yo):?>
									<option value="<?=$yo['employee_id'];?>"><?=$yo['name'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					
										
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default"> <i class="fa fa-close"></i> Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="maintain()"> <i class="fa fa-save"></i>Save</button>
					</div>
            </form>
	    </div>
	  </div>
	</div>	
	<script>
$('table').dataTable();
</script>
	