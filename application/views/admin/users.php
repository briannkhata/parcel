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

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<?php include'includes/header_top.php';?>
</div>
<!-- END HEADER -->
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
								<div class="actions btn-set">
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											Users </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											Add User</a>
										</li>
										
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
													<div class="portlet-body">
															
															<table class="table table-striped table-bordered table-hover" id="mat">
															<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Group</th>
																<th>Username</th>
																<th>Status</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
														
														<?php  foreach($users as $row):?>
															<tr class="odd gradeX">
															 <td><?=$count++;?></td>
															 <td><?=$row['fname'].' '.$row['lname'];?></td>
															 <td><?=$row['usertype']?></td>
															 <td><?=$row['username'];?></td>
															 <td><?php if ($row['active']==1):?> <span style="color:green;">ACTIVE</span> <?php else:?> <span style="color:red">DEACIVATED</span><?php endif;?> </td>
															 <td align="center" >
																<a href="javascript:;" class="btn btn-success btn-xs purple" onclick="edit_user(<?=$row['user_id'];?>)"><i class="fa fa-edit"></i> Edit </a>
																<a href="javascript:;" class="btn btn-warning btn-xs black" onclick="delete_user(<?=$row['user_id'];?>)"><i class="fa fa-trash-o"></i> Delete </a>				
															</td>
															</tr>
															<?php endforeach;?>
																
															</tr>
															</tbody>
															</table>
														</div>
													</div>
												<div class="tab-pane" id="tab_meta">
												<div class="portlet-body">
														<form action="<?=base_url();?>admin/user_add" id="formuser" method="post" name="formuser" enctype="multipart/form-data">
															    <div class="col-md-4">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">First Name</label>
																	  <input type="text" class="form-control" name="fname" id="username" placeholder="First Name" required>
																	</div>
																</div>
																
																 <div class="col-md-4">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Last Name</label>
																	  <input type="text" class="form-control" name="lname" id="username" placeholder="Last Name" required>
																	</div>
																</div>
																  
																  <div class="col-md-4">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Username</label>
																	  <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
																	</div>
																</div>
																 <div class="col-md-4">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Password</label>
																	  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
																	</div>
																</div>
																 <div class="col-md-4">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Confirm Password</label>
																	  <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" onkeyup="checkPass(); return false;" required>
																	  <span id="confirmMessage" class="confirmMessage"></span>
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">User Level</label>
																	  <select name="usertype_id" class="form-control">
																		<option selected disabled>User type</option>
																		<?php $type=$this->db->get('usertype')->result_array();?>
																		<?php foreach($type as $y):?>
																		<option value="<?=$y['usertype_id'];?>"><?=$y['usertype'];?></option>
																		<?php endforeach;?>
																		  </select>
																	</div>
																</div>
																
																<div class="col-md-12">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Picture</label>
																		<input type="file" name="photo" id="photo"></input>
																		<img id="image"  />
																	</div>
																</div>
																
																<div class="col-md-12">
																	<div class="form-group">
																		<button type="submit"  class="btn blue zanda"><i class="fa fa-plus"></i>Add User</button>
																	</div>
																</div>
																</div>
														   </form>
														</div>
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
   //Date picker
    $('d1').datepicker({
      autoclose: true
    });
$('#mahop').dataTable({
    buttons: [
        'print'
    ]
} );
 $('#mat').dataTable();
   $('#oh0').select2();

</script>
 <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   TableManaged.init();
  
});
</script>

	<script type="text/javascript">
   var save_method; //for save method string
    var table;
	function add_user()
    {
      save_method = 'add';
      $('#formuser')[0].reset(); // reset form on modals
      $('#user').modal('show'); // show bootstrap modal
    }
    function edit_user(id)
    {
      save_method = 'update';
      $('#formuser')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/user_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="user_id"]').val(data.user_id);
            $('[name="username"]').val(data.username);
			$('[name="password"]').val(data.password);
			$('[name="cpassword"]').val(data.password);
            $('[name="usertype_id"]').val(data.usertype_id);
			$('[name="fname"]').val(data.fname);
			$('[name="lname"]').val(data.lname);
  
  
            $('#user').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title
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
          url = "<?php echo site_url('admin/user_add')?>";
      }
      else
      {
        url = "<?php echo site_url('admin/user_update')?>";
      }
		
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formuser').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#user').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
            }
        });
    }
 
    function delete_user(id)
    {
      if(confirm('Are you sure you want to delete the selected USER?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/user_delete')?>/"+id,
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
  $(document).ready(function() {
  $('#username').blur(function() 
	{ 
		var username = $('#username').val();
         $.post('<?=base_url();?>admin/username_taken',
		  { 'username':username },
	 
		  // when the Web server responds to the request
		  function(result) {
			// clear any message that may have already been written
			$('#bad_username').replaceWith('');
			 
			// if the result is TRUE write a message to the page
			if (result) {
			  $('#username').after('<div id="bad_username" style="color:red;">' +
				'<p>(That Username is already taken. Please choose another.)</p></div>');
			}
      }
    );
  });  
 
});

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('cpassword');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
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
	<script>
		function validate_form()
			{
				var staff_id = document.formuser.staff_id;
				var username = document.formuser.username;
				var password = document.formuser.password;
				var cpassword = document.formuser.cpassword;
				var usertype = document.formuser.usertype;
			  
				if (username.value == "")
				{
					window.alert("Please enter enter username.");
					username.focus();
					return false;
				}
				
				if (staff_id.selectedIndex < 1)
				{
					alert("Please select staff.");
					staff_id.focus();
					return false;
				}
				
				if (usertype.selectedIndex < 1)
				{
					alert("Please select usertype.");
					usertype.focus();
					return false;
				}

				if (password.value == "")
				{
					window.alert("Please enter password.");
					password.focus();
					return false;
				}
				if (cpassword.value == "")
				{
					window.alert("Please confirm password.");
					cpassword.focus();
					return false;
				}
				
				if(password != cpassword
				{
					 window.alert("Passwords do not match.");
					cpassword.focus();
					return false;
				}

				return true;
			}
				
	</script>
	<script>
	
	 document.getElementById("photo").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
	
	
	</script>
</body>
</html>
			<div id="user" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" style="border-radius:0px;">
			 
				  <div class="modal-header">
					<h4 class="modal-title"> Add User</h4>
				  </div>
				  
				  <div class="modal-body">
			
					<form action="#" id="formuser" name="formuser" enctype="multipart/form-data">
				
				
					    <div class="col-md-6">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">First Name</label>
																	  <input type="text" class="form-control" name="fname" id="username" placeholder="First Name" required>
																	</div>
																</div>
																
																 <div class="col-md-6">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Last Name</label>
																	  <input type="text" class="form-control" name="lname" id="username" placeholder="Last Name" required>
																	</div>
																</div>
																  
																  <div class="col-md-6">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Username</label>
																	  <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
																	</div>
																</div>
																 <div class="col-md-6">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Password</label>
																	  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
																	</div>
																</div>
																 <div class="col-md-6">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Confirm Password</label>
																	  <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" onkeyup="checkPass(); return false;" required>
																	  <span id="confirmMessage" class="confirmMessage"></span>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">User Level</label>
																	  <select name="usertype" class="form-control">
																		<option selected disabled>Select User type</option>
																		<?php $type=$this->db->get('usertype')->result_array();?>
																		<?php foreach($type as $y):?>
																		<option value="<?=$y['usertype_id'];?>"><?=$y['usertype'];?></option>
																		<?php endforeach;?>
																		  </select>
																	</div>
																</div>
																
																<div class="col-md-12">
																	<div class="form-group">
																	  <label for="exampleInputEmail1">Picture</label>
																		<input type="file" name="photo" id="photo"></input>
																		<img id="image"  />
																	</div>
																</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
						<button type="button"  class="btn blue zanda" onclick="save()">Add User</button>
					</div>

               </form>
		    </div>
		 </div>
	
	
		
		
		
							<!--div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
								<div class="modal-body">
									<p>
										 Would you like to continue with some arbitrary task?
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
									<button type="button" data-dismiss="modal" class="btn blue">Continue Task</button>
								</div>
							</div>
							<div id="static2" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
								<div class="modal-body">
									<p>
										 Would you like to continue with some arbitrary task?
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
									<button type="button" data-dismiss="modal" class="btn blue">Continue Task</button>
								</div>
							</div>

	