<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$system;?> | <?=$page_title;?></title>
<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/bootstrap-table.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet">
<script src="<?=base_url();?>assets/js/lumino.glyphs.js"></script>
</head>

<body>
	<?php include 'includes/topnav.php';?>
	<?php include 'includes/navleft.php';?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-primary text-center"><?=$company;?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><?=$page_title;?></div>
						<div class="col-lg-4">
							<button type="button" class="btn btn-default" onclick="add_test()" style="margin-left:0%;border-radius:4px;margin-top:8%;"> <i class="fa fa-plus"></i> New Test</button> 
							<button type="button" class="btn btn-default" onclick="add_sub_test()" style="margin-left:0%;border-radius:4px;margin-top:8%;"> <i class="fa fa-plus"></i> New Sub Test</button> 
							
							<button type="button" class="btn btn-default" onclick="window.print()" style="margin-left:2%;border-radius:4px;margin-top:8%;"> <i class="fa fa-print"></i> Print</button> 
						</div>	
					<div class="panel-body">
						<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th>#</th>
						        <th data-sortable="true">Test</th>
						        <th data-sortable="true">Amount</th>
						        <th data-sortable="true">Details</th>
								<th data-sortable="true">Action</th>
						    </tr>
						    </thead>
							<?php  foreach($test as $row):?>
							<tr>
							 <td><?=$count++;?></td>
							 <td><?=$row['test_name'];?></td>
							 <td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['amount'])),2);?></td>
							 <td><?=$row['description'];?></td>
							 <td>
								<a href="javascript:;"><span class="glyphicon glyphicon-edit" onclick="edit_test(<?=$row['test_id'];?>)" title="click to edit staff details"></span></a>
								<a href="javascript:;"><span class="glyphicon glyphicon-info-sign" onclick="vtest(<?=$row['test_id'];?>)" title="click to see details"></span></a>
								<a href="javascript:;"><span class="glyphicon glyphicon-remove-sign" onclick="delete_test(<?=$row['test_id'];?>)" title="click to remove staff"></span></a>
							
							</td>
							</tr>
							<?php endforeach;?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
					<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->
	<script src="<?=base_url();?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/chart.min.js"></script>
	<script src="<?=base_url();?>assets/js/chart-data.js"></script>
	<script src="<?=base_url();?>assets/js/easypiechart.js"></script>
	<script src="<?=base_url();?>assets/js/easypiechart-data.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap-table.js"></script>
	
	<script type="text/javascript">
   var save_method; //for save method string
    var table;
	function add_test()
    {
      save_method = 'add';
      $('#formtest')[0].reset(); // reset form on modals
      $('#test').modal('show'); // show bootstrap modal
    }
	function add_sub_test()
    {
      save_method = 'add';
      $('#formsubtest')[0].reset(); // reset form on modals
      $('#subtest').modal('show'); // show bootstrap modal
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
            $('[name="test_name"]').val(data.test_name);
            $('[name="amount"]').val(data.amount);
            $('[name="description"]').val(data.description);

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
 
    function vtest(id)
    {
       //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/test_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="test_id"]').val(data.test_id);
            $('[name="test_name"]').val(data.test_name);
            $('[name="amount"]').val(data.amount);
            $('[name="description"]').val(data.description);

            $('#vtest').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('TEST DETAILS'); // Set title to Bootstrap modal title
			
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
               $('#test').modal('hide');
              location.reload();// for reload a page
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
 
  </script>
<script>
   //Date picker
    $('d1').datepicker({
      autoclose: true
    });


</script>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker();
            });
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
			<div id="test" class="modal fade" role="dialog">
			  <div class="modal-dialog">
				<div class="modal-content" style="min-height:450px;">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"> Add Test</h4>
				  </div>
				  <div class="modal-body">
				  <div class="box box-primary">
					<form role="form" action="#" id="formtest">
					  <div class="box-body">
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
					<div class="col-md-12">
					<div class="form-group">
						  <label for="exampleInputEmail1">More Info /Details</label>
						  <textarea class="form-control" name="description" rows="8" cols="2" placeholder="Description of the test"></textarea>
					</div>
					</div>
					<div class="col-md-12">
					  <div class="form-group">
						<button type="submit" class="btn btn-default zanda" onclick="save()">Add test</button>
					  </div>
					 </div>
				  </div>
				  </div>
            </form>
		  </div>
		 </div>
	    </div>
	  </div>
	</div>	
	
		<div id="subtest" class="modal fade" role="dialog">
			  <div class="modal-dialog">
				<div class="modal-content" style="min-height:auto;">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"> Add Sub Test</h4>
				  </div>
				  <div class="modal-body">
				  <div class="box box-primary">
					<form role="form" action="#" id="formsubtest">
					  <div class="box-body">
					  <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Test Name</label>
						   <input type="hidden" name="test_id" value="">
				 		  <select name="test_id" class="form-control">
						  <?php $test=$this->db->get('tests')->result_array();?>
						  <?php foreach($test as $row):?>
							<option value="<?=$row['test_id'];?>"><?=$row['test_name'];?></option>
						  <?php endforeach;?>
						  </select>
						</div>
					</div>
					 <div class="col-md-12">
						<div class="form-group">
						  <label for="exampleInputEmail1">Sub test</label>
						  <input type="text" class="form-control" name="sub_test" id="exampleInputEmail1" placeholder="Cost of the test" required>
						</div>
					</div>
            </form>
		  </div>
		 </div>
	    </div>
	  </div>
	</div>	
	
	
	
	
	
	
	
	
	
		<div id="vtest" class="modal fade" role="dialog">
			  <div class="modal-dialog">
				<div class="modal-content" style="min-height:400px;">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				  </div>
				  <div class="modal-body">
				  <div class="box box-primary">
					<form role="form" action="#" id="formtestt">
					  <div class="box-body">
					  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Test Name</label>
						   <input type="hidden" name="test_id" value="">
				 		  <input type="text" class="form-control" name="test_name" id="exampleInputEmail1" placeholder="Test Name" readonly>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Cost / Amount</label>
						  <input type="text" class="form-control" name="amount" id="exampleInputEmail1" placeholder="Cost of the test" readonly>
						</div>
					</div>
					<div class="col-md-12">
					<div class="form-group">
						  <label for="exampleInputEmail1">More Info /Details</label>
						  <textarea class="form-control" name="description" rows="8" cols="2" readonly></textarea>
					</div>
					</div>
					
				  </div>
				  </div>
            </form>
		  </div>
		 </div>
	    </div>
	  </div>
	</div>	
	
