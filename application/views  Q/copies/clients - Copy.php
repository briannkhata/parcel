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
							<button type="button" class="btn btn-default" onclick="add_client()" style="margin-left:0%;border-radius:4px;margin-top:8%;"> <i class="fa fa-plus"></i> New Client</button> 
							<button type="button" class="btn btn-default" onclick="window.print()" style="margin-left:2%;border-radius:4px;margin-top:8%;"> <i class="fa fa-print"></i> Print</button> 
						</div>	
					<div class="panel-body">
						<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th>#</th>
						        <th data-sortable="true">Firstname</th>
						        <th data-sortable="true">Lastname</th>
						        <th data-sortable="true">Hospital</th>
								<th data-sortable="true">Test</th>
								<th data-sortable="true">Action</th>
						    </tr>
						    </thead>
							<?php  foreach($client as $row):?>
							<tr>
							 <td><?=$count++;?></td>
							 <td><?=$row['fname'];?></td>
							 <td><?=$row['lname'];?></td>
							 <td><?=$row['clinic_name'];?></td>
							 <td><?=$row['test_name'];?></td>
							 <td>
								<a href="javascript:;"><span class="glyphicon glyphicon-edit" onclick="edit_client(<?=$row['client_id'];?>)" title="click to edit client details"></span></a>
								<a href="<?=base_url();?>admin/client_view/<?=$row['client_id'];?>"><span class="glyphicon glyphicon-info-sign" title="click to see details"></span></a>
								<a href="javascript:;"><span class="glyphicon glyphicon-remove-sign" onclick="delete_client(<?=$row['client_id'];?>)" title="click to remove client"></span></a>
							
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
	function add_client()
    {
      save_method = 'add';
      $('#formclient')[0].reset(); // reset form on modals
      $('#client').modal('show'); // show bootstrap modal
    }
    function edit_client(id)
    {
      save_method = 'update';
      $('#formclient')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/client_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="client_id"]').val(data.client_id);
            $('[name="fname"]').val(data.fname);
            $('[name="lname"]').val(data.lname);
            $('[name="email"]').val(data.email);
			$('[name="payed"]').val(data.payed);
			$('[name="pay_mode"]').val(data.pay_mode);
			$('[name="gender"]').val(data.gender);
			$('[name="address"]').val(data.address);
			$('[name="phone"]').val(data.phone);
			$('[name="request_date"]').val(data.request_date);
          	$('[name="doctor_name"]').val(data.doctor_name);
			$('[name="dob"]').val(data.dob);
			$('[name="clinic_id"]').val(data.clinic_id);
			$('[name="test_id"]').val(data.test_id);
			
            $('#client').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Client'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
 
    function vclient(id)
    {
       //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/client_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="client_id"]').val(data.client_id);
            $('[name="fname"]').val(data.fname);
            $('[name="lname"]').val(data.lname);
            $('[name="email"]').val(data.email);
			$('[name="payed"]').val(data.payed);
			$('[name="pay_mode"]').val(data.pay_mode);
			$('[name="gender"]').val(data.gender);
			$('[name="address"]').val(data.address);
			$('[name="phone"]').val(data.phone);
			$('[name="request_date"]').val(data.request_date);
          	$('[name="doctor_name"]').val(data.doctor_name);
			$('[name="dob"]').val(data.dob);
			$('[name="clinic_id"]').val(data.clinic_id);
			$('[name="test_id"]').val(data.test_id);
			
            $('#vclient').modal('show');
            $('.modal-title').text('CLIENT DETAILS');
			
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
          url = "<?php echo site_url('admin/client_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/client_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formclient').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#client').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
    function delete_client(id)
    {
      if(confirm('Are you sure you want to delete the selected CLIENT?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/client_delete')?>/"+id,
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
				$('#dob').datepicker();
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
			<div id="client" class="modal fade" role="dialog">
			  <div class="modal-dialog">
				<div class="modal-content" style="min-height:700px;">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"> Add Client</h4>
				  </div>
				  <div class="modal-body">
				  <div class="box box-primary">
					<form role="form" action="#" id="formclient">
					  <div class="box-body">
					  <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Firstname</label>
						   <input type="hidden" name="client_id" value="">
				 		  <input type="text" class="form-control" name="fname" id="exampleInputEmail1" placeholder="Firstname" required>
						</div>
					</div>
					 <div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Lastname</label>
						  <input type="text" class="form-control" name="lname" id="exampleInputEmail1" placeholder="Lastname" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Doctor's Name</label>
						  <input type="text" class="form-control" name="doctor_name" id="exampleInputEmail1" placeholder="Doctor's name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Phone No.</label>
						  <input type="tel" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone No." required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Email</label>
						  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email address" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Date of Birth</label>
						  <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label>Gender</label>
						  <select class="form-control" name="gender">
						  <option selected disabled>Select gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						  </select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label>Payed</label>
						  <select class="form-control" name="paid">
						  <option selected disabled>Select option</option>
							<option value="Paid">Paid</option>
							<option value="Paid Partly">Paid Partly</option>
							<option value="Not Paid">Not Paid</option>
						  </select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label>Pay Mode</label>
						  <select class="form-control" name="pay_mode">
						  <option selected disabled>Select option</option>
							<option value="Cash">Cash</option>
							<option value="Cheque">Cheque</option>
							<option value="other">Other</option>
						  </select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label>Hospital</label>
						  <select class="form-control" name="clinic_id">
						  <option selected disabled>Select hospital</option>
						  <?php $clinic=$this->db->get('clinics')->result_array();?>
						  <?php foreach($clinic as $row):?>
							  <option value="<?=$row['clinic_id'];?>"><?=$row['clinic_name'];?></option>
							<?php endforeach;?>
						  </select>
						</div>
					</div>			

					
					<div class="col-md-6">
						<div class="form-group">
						  <label>Test</label>
						  <select class="form-control" name="test_id[]" multiple>
						  <option selected disabled>Select test</option>
						  <?php $test=$this->db->get('tests')->result_array();?>
						  <?php foreach($test as $row):?>
							  <option value="<?=$row['test_id'];?>"><?=$row['test_name'];?></option>
							<?php endforeach;?>
						  </select>
						</div>
					</div>								
					<div class="col-md-6">
						<div class="form-group">
						  <label for="exampleInputEmail1">Request Date</label>
						  <input type="text" class="form-control" name="request_date" id="datetimepicker4" placeholder="Request Date" required>
						</div>
					</div>
					<div class="col-md-12">
					<div class="form-group">
						  <label for="exampleInputEmail1">Address</label>
						  <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Contact Address" required>
					</div>
					</div>
					<div class="col-md-12">
					  <div class="form-group">
						<button type="submit" class="btn btn-default zanda" onclick="save()">Add Client</button>
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
	
