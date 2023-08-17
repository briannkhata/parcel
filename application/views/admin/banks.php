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
															<div class="col-md-12">
																		<div class="btn-group">
																			<button id="sample_editable_1_new" class="btn green" onclick="add_bank();">
																			Add New <i class="fa fa-plus"></i>
																			</button>
																		</div>
																	</div>
																
															</div>
														</div>
															
														<table class="table table-striped table-bordered table-hover">
															<thead>
															<tr>
																<th>#</th>
																<th>Bank</th>
																<th>Bank Code</th>
																<th>Abbreviation</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
														<?php  
														$banks =  $this->db->get_where('bank',array('deleted' =>0))->result_array();
                									    foreach($banks as $row):?>
															<tr class="odd gradeX">
																<td><?=$count++;?></td>
																<td><?=$row['bank'];?></td>
																<td><?=$row['bank_code'];?></td>
																<td><?=$row['abbrev'];?></td>
																<td>
																<a href="javascript:;" class="btn btn-success btn-xs" onclick="edit_bank(<?=$row['bank_id'];?>)">
																	<i class="fa fa-edit"></i> EDIT</a>				
															    <a href="javascript:;" class="btn btn-danger btn-xs" onclick="delete_bank(<?=$row['bank_id'];?>)">
															    	<i class="fa fa-trash-o"></i> DELETE</a>	
															    	</td>			
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

	$('table').dataTable();
   var save_method; //for save method string
    var table;
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
        url : "<?php echo site_url('staff/bank_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			$('[name="bank_id"]').val(data.bank_id);
            $('[name="bank"]').val(data.bank);
			$('[name="bank_code"]').val(data.bank_code);
            $('[name="abbrev"]').val(data.abbrev);
			
            $('#bank').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT BANK'); // Set title to Bootstrap modal title
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
          url = "<?php echo site_url('staff/bank_add')?>";
      }
      else
      {
        url = "<?php echo site_url('staff/bank_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formbank').serialize(),
            dataType: "JSON",
            success: function(data)
            {
              $('#bank').modal('hide');
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
      if(confirm('Are you sure???'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('staff/bank_delete')?>/"+id,
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

 <div id="bank" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false"  style="border-radius:2px;">
				  <div class="modal-header">
						<h4 class="modal-title"> ADD BANK</h4>
				  </div>
				  <div class="modal-body">
				<form role="form" action="#" id="formbank">
									
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Bank Name</label>
						      <input type="hidden" class="form-control" name="bank_id" value="">
						 	  <input type="text" class="form-control" name="bank" placeholder="Bank" required>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Bank Code</label>
						 	  <input type="text" class="form-control" name="bank_code" placeholder="Bank Code" required>
						</div>
					</div>
					
					
					
					<div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Abbreviation</label>
						 	  <input type="text" class="form-control" name="abbrev">
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


	