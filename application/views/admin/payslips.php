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
<link rel="stylesheet" href="<?php echo base_url();?>assets/print.css" type="text/css" media="print" /> 
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
			
				<br/> <br/>		 								
				<div class="row">
					<form class="form-inline" action="<?=base_url();?>salary/payslip_pdf" method="post" style="width:100%;">
							
							<div class="col-md-3">	
																			   <select class="form-control" name="depot_id"  style="width:100%;">
																					<option selected value="">--DEPOT--</option>
																					 <?php $bank  = $this->db->get('depot')->result_array();?>
																					 <?php foreach($bank as $row):?>
																						   <option value="<?=$row['depot_id'];?>"><?=$row['depot'];?></option>
																					   <?php endforeach;?>
																				</select>
												</div>
						<div class="col-md-3">	
																				<select class="form-control" name="month" style="width:100%;">
																					<option selected value="">--MONTH--</option>
																					<?php $month=$this->db->get('month')->result_array();?>
																					<?php foreach($month as $sel):?>
																						<option value="<?=$sel['month'];?>"><?=$sel['month'];?></option>
																					<?php endforeach;?>
																				</select>
																			</div>
						<div class="col-md-3">			
																				<select class="form-control" name="year" style="width:100%;">
																					<option selected value="">--YEAR--</option>
																					<?php $year=$this->db->get('year')->result_array();?>
																					<?php foreach($year as $cel):?>
																						<option value="<?=$cel['year'];?>"><?=$cel['year'];?></option>
																					<?php endforeach;?>
																				</select>
																			</div>
						
						<div class="col-md-3">
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i> View Slips</button>
						</div>
					</form>
				</div>
					<br/> <p style="font-size:15px;"><center> <b>  Select month and year then click "view slips" to view the payslips </b>	 </p>								
			</div>
					
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

  function do_this(){

        var checkboxes = document.getElementsByName('employee_id[]');
        var button = document.getElementById('toggle');
		$('.ik').show();
        if(button.value == 'select'){
            for (var i in checkboxes){
                checkboxes[i].checked = 'FALSE';
            }
            button.value = 'deselect'
        }else{
            for (var i in checkboxes){
                checkboxes[i].checked = '';
            }
            button.value = 'select';
        }
    }


</script>
<script>
   $('#s1').select2();
   $('#s2').select2();
   $('#s3').select2();
   $('#s4').select2();
   $('#s5').select2();
   $('#s6').select2();
   $('#s7').select2();
   $('#ss').select2();
  $('.dt').datepicker({
      autoclose: true
    });
$('#mahop').dataTable();
$('#mm').dataTable();
$('#mmm').dataTable();
$('#mmmm').dataTable();
$('#mmmmm').dataTable();
$('#mmmmmm').dataTable();
$('#mmmmmmm').dataTable();
$('#m0').dataTable();
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
        function printa() {    
          var div = document.getElementById('tk');
		  var oldPage = document.body.innerHTML;
		  var popupWin = window.open('', '', 'width=auto,height=auto');

		  $("body").css('font-family','book antiqua');
		  $("body").css('font-size','12px');
 
		  $(".btn").css('display','none');
		  $(".vv").css('display','none');
          $("table.b4").css('float','left');
		  $("table#t1").css('float','right');
		  $("table#t1").css('margin-right','40%');
		 // $("table").css('border','1px solid');
		  $("table#t1").css('margin-top','-15%');
		  //$("table#t1 td").css('width','5%');
		  
		  
		  
		  $("table#t3").css('float','right');
		  $("table#t3").css('margin-right','0%');
		  $("table#t3").css('border','1px solid');
		  $("table#t3").css('margin-top','1%');
		  $("table#t3").css('width','45%');
		  
		  $("table#t2").css('float','left');
		  $("table#t2").css('margin-left','5%');
		  $("table#t2").css('margin-top','1%');
		  $("table#t2").css('width','45%');
		  
		
		  $("table").css('border-radius','3px');
		  $("img#image").css('border-radius','3px');
		  $("img#image").css('height','190px');
		  $("img#image").css('width','230px');
		  $("img#image").css('margin-bottom','2%');
		  $("img#image").css('margin-left','10%');
		  $("img#image").css('margin-top','5%');
		  
		  
	
		    
		  //$("table#t3").css('float','right');
		  //$("table#t3").css('margin-right','0%');
		  $("table#t2").css('border','1px solid');
		  $("table#t0").css('margin-left','5%');
		  $("table#t0").css('width','35%');
		  //$("div#vv").css('border','1px solid');
		  $("div#cc").css('border-bottom','1px solid');
		  $("div#vovo").css('border','1px solid');
		   $("div#xup").css('padding-bottom','30%');
   	      $('hr').css('display','none');
		    
		 
		  $("table td").css('font-size','13px');
		  /*$("div.page-content-wrapper").css('border-bottom','1px solid blue');
		  $("div.page-content-wrapper").css('border-right','1px solid blue');
		  $("div.page-content-wrapper").css('border-left','1px solid blue');
		  $("div#tk").css('border','1px solid blue');
		  //$("div.page-content-wrapper").css('height','1000px');
		  $("div.page-content-wrapper").css('height','965px');
		  
		  //$("table.ya1").css('float','left');
		  $("table.ya1").css('margin-left','0%');
		  $("table.ya2").css('margin-left','80%');
		  $("table.ya2").css('margin-top','-2%');
		  
		  $("table.ya2").css('float','right');
		  $(".tu").css('margin-top','5%');
		  $("#ft").css('margin-top','0%');
		  $(".yam").css('font-size','36px');
		  $("table.b4").css('margin-top','-2%');
		  $(".yam").css('margin-top','0%');
		  $("div.light").css('height','auto');
		  $("table.afta").css('margin-top','-5%');
		  $("#ff").css('font-size','10px');
		  //$("#ff").css('border','1px solid');
		 // $("#ff").css('border-bottom','none');
		 $("table#aha").css('font-size','9px');*/
		  
		   popupWin.document.open();
           popupWin.document.write('<html>');
		   popupWin.document.write('<body>');
		   popupWin.document.write('<header>');
		   popupWin.document.write('</header>');
		   popupWin.document.write(tk.innerHTML);
		   popupWin.document.write('</body></html>');
 	       
		   //Print the document.
   		    popupWin.focus();
   	        popupWin.print();
		    //popupWin.close();
           //Restore orignal HTML
            document.body.innerHTML = oldPage;
		}
     </script>



</body>
</html>
