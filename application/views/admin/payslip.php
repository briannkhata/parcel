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
			
			<div class="row"  id="tk">
				      <div class="col-md-12" >
							<div class="portlet light">
							   <div class="portlet-title">
								<div class="caption" id="cc">
										<?php $pic = $this->db->get('labo')->row()->logo; ?>   
     									<img alt="" width="auto" height="auto"  class="img-responsive" src="<?=base_url().'/assets/logos/'.$pic;?>">					
								</div>
							</div>
							<div class="btn-group pull-right" style="margin-top:-4%; margin-left:3%;">
										<a href="<?=base_url();?>admin/salary_list" class="btn btn-default"><i class="fa fa-rewind"></i> << back</a>				
														
										<a href="<?=base_url();?>admin/edit_salary/<?=$salary_id;?>/<?=$employee_id;?>/<?=$month;?>/<?=$year;?>" class="btn btn-success black"><i class="fa fa-edit"></i> edit SALARY</a>				
																
										<button id="sample_editable_1_new" class="btn green" onclick="javascript:window.print();">
																			<i class="fa fa-print"></i> print 
										</button>
							</div>
								
							<?php  
								$slip   =   $this->db->select('*')
										  ->from('employees')
										  ->join('salaries','employees.employee_id=salaries.employee_id')
										  ->join('bank_details','employees.employee_id=bank_details.employee_id')
										  ->join('bank','bank.bank_id=bank_details.bank_id')
										  ->where('salary_id',$salary_id)
										  ->get()->result_array();
											foreach($slip as $row):?>	
											  <?php 
									  $salary_date = $row['salary_date'];
									  $employee_id = $row['employee_id'];
									  $month = $row['month'];
									  $year = $row['year'];
									  ?>
													<div class="portlet-body well" id="vv">
															<div class="table-toolbar">
													  		
																							
															<div class="col-md-6  no-print" style="padding-left:2%;">
																<img alt="" id="image" width="250" height="300"  class="img-responsive thumbnail" src="<?=base_url().'/assets/profile/'.$row['photo'];?>">
															</div>
																									
													   
														   <div class="form-group">
																<div class="col-md-6" style="">
																  <table class="table table-bordered pull-right well" style="margin-right:40%;border-radius:3px;" id="t1">
																   <tr>
																	  <tr>
																		<td><span class="label label-primary"> #<?=$row['salary_id'];?></span></td>
																	 </tr>
																    <tr>
																	  <tr>
																		<td>
																			<span class="label label-primary"><?=$row['name'];?></span> OF 
																			<span class="label label-primary">
																				<?=$this->db->get_where('depot',array('depot_id'=>$row['depot_id']))->row()->depot;?>
																					Depot
																				</span>
																			</td>
																	 </tr>
																	  <tr>
																	
																	 <tr>
																	
																		<td> <span class="label label-primary">
																			Salary MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['bsalary'])),2);?>
																		</span></td>
																	</tr>
																	
																	<tr>
																		<td>
																		 <span class="label label-success"><?=$row['bank'];?></span>
																		 <span class="label label-success">Account # : <?=$row['account_number'];?></span></td>
																	</tr>
																		
																	<tr>
																		<td><span class="label label-primary">Date : <?=$row['salary_date'];?></span></td>
																	
																	</tr>
																  </table>
															    </div>
														    </div>
													
												    </div>
						                        </div>
												<div id="vovo" class="well">
														<table class="table table-striped table-bordered well" id="t0">
															<tbody>
															<tr>
																<td>Gloss salary</td><td> MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['gloss_salary'])),2);?></td>
															</tr>
																													<tr>
																<td>Net salary</td><td> MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['net_salary'])),2);?></td>
															</tr>
															
														
															</tbody>
														</table>
														
			
														<div class="row">
														    <div class="form-group">
																<div class="col-md-6" style="">
																  <table class="table table-bordered well" id="t2">
																	<tr>
																	   <td colspan="2"><h4 class="text-primary text-center">EARNINGS</h4></td>
																	</tr>
																   <?php
																	  $bsalary = $this->db->get_where('employees',array('employee_id'=>$employee_id))->row()->bsalary;
																	   $hr=($bsalary/22)/8;//hourly rate
														 
																	  //overtime
																	  $ovt  =   $this->db->query("SELECT * FROM overtime WHERE employee_id='$employee_id' AND salary_date='$salary_date'");
																		$row1 = $ovt->row();
																		 if (isset($row1)):
																		$total_overtime   = $row1->total_overtime;
																		  $nh   = $row1->normal_hours;
																		  $ph   = $row1->public_hours;
																		  $pha  = $row1->public_amount;
																		  $nha  = $row1->normal_amount;
																		else:
																		  $total_overtime   = 0;
																		  $nh   = 0;
																		  $ph   = 0;
																		  $pha  = 0;
																		  $nha  = 0;
																	  endif;
																	   
																	   //loans
																		$lona  =   $this->db->query("SELECT * FROM loans WHERE employee_id='$employee_id'");
																		$row0 = $lona->row();
																		 if (isset($row0)):
																		$loan     = $row0->payrate;
																		$payrate  = $row0->payrate;
																		  $amount     = $row0->amount;
																		$balance  = $row0->balance;
																		else:
																		  $loan     = 0;
																		$payrate  = 0;
																		  $amount     = 0;
																		$balance  = 0;
																	  endif;

																	  //tea allowance
																	  $tea =   $this->db->query("SELECT * FROM employees WHERE employee_id='$employee_id' ");
																		$row2 = $tea->row();
																		 if (isset($row2)):
																		$tea_allowance   =  $row2->tea_allowance;
																		else:
																		  $tea_allowance    = 0;
																	  endif;

																	  //health bill
																	  $hb =   $this->db->query("SELECT * FROM scheme_bill WHERE employee_id='$employee_id'");
																		$row3 = $hb->row();
																		 if (isset($row3)):
																		$health_bill = $row3->amount;
																		else:
																		  $health_bill  = 0;
																	  endif;
																	?>
																	  <tr>
																		<td>Hourly Rate</td>
																		<td> MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/","",$hr)),2);?></td>
																		</tr>
																	   
																	   <tr>
																			<td>Normal Hours | Amount </td>
																			<td><?=$nh;?> Hours | MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$nha)),2);?></td>
																		</tr>
																		<tr>
																			<td>Public Hours | Amount</td>
																			<td><?=$ph;?> Hours | MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$pha)),2);?></td>
																			
																	   </tr>
																	   
																		<tr>
																			<td>Total Overtime</b></td>
																			<td> MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$total_overtime)),2);?></td>
																	   </tr>
																		<tr>
																			<td>Tea Allowance</td>
																			<td> MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$tea_allowance)),2);?></td>
																		</tr>
																			<td>Bonus</td>
																			<td> MWK : <?php if(!empty($this->db->get_where('bonus',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year))->row()->amount)) { echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$this->db->get_where('bonus',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year))->row()->amount)),2);} else {echo 00.00;}?></td>
															            </tr>
																	   </tr>
																			<td>Arrears</td>
																			<td> MWK : <?php if(!empty($this->db->get_where('arrears',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year))->row()->amount)) { echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$this->db->get_where('arrears',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year))->row()->amount)),2);} else {echo 00.00;}?></td>
																   </tr>

																  </table>
															</div>
														</div>
														
														<div class="form-group">
																<div class="col-md-6" style="">
																  <table class="table table-bordered well" id="t3">
																	
																	<tr>
																	   <td colspan="2"><h4 class="text-primary text-center">DEDUCTIONS</h4></td>
																	</tr>
																  <tr>
																	 <td>PAYEE</td>
																	 <td> MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['payee'])),2);?></td>
																  </tr>
																  <tr>
																	 <td>Pension</td>
																	<td> MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['pension_personal'])),2);?></td>
																  </tr>
																  <tr>
																	<td>Loan Taken</td>
																	<td> MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$amount)),2);?></td>
																  </tr>
																  <tr>
																	<td>Loan Deducted</td>
																	<td> MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$payrate)),2);?></td>
																   </tr>
																   <tr>
																	<td>Loan Balance</td>
																	<td> MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$balance)),2);?></td>
																 </tr>
																 
																 <?php
																	$d_amount = 0;
																	$nn =   $this->db->query("SELECT * FROM health_scheme WHERE employee_id ='$employee_id' AND other_members = 1");
																	$row2 = $nn->row();
																	   if (isset($row2)):
																			$health_scheme_id   =	$row2->health_scheme_id;
																			$hh =   $this->db->get_where('other_members',array('health_scheme_id' =>$health_scheme_id,'deduct' =>1,'deleted'=>0))->result_array();
																			foreach($hh as $row):
																			  $d_amount = $d_amount + $row['d_amount'];
																			endforeach;
																	  else:
																		$d_amount = 0;
																	endif;
																	
																	
																	?>
																	 <tr>
																	<td>Medical Bill (Extra Dependant)</td>
																	<td> MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$d_amount)),2);?></td>
																	</tr>
																	 <tr>
																	<td>Masm (Extra Dependants)</td>
																	<td>
																	<?php
																	$d_amount = 0;
																	$nn =   $this->db->query("SELECT * FROM health_scheme WHERE employee_id ='$employee_id' AND other_members = 1");
																	$row2 = $nn->row();
																	   if (isset($row2)):
																			$health_scheme_id   =	$row2->health_scheme_id;
																			$hh =   $this->db->get_where('other_members',array('health_scheme_id' =>$health_scheme_id,'deduct' =>1,'deleted'=>0))->result_array();
																			foreach($hh as $row):
																			  $d_amount = $d_amount + $row['d_amount'];
																			endforeach;
																	
																	
																	foreach($hh as $row):?>
																	   <span class="label label-default"> <?php echo $row['other_members'];?></span>
																	<?php endforeach;
																	 ?></td>
																	 <?php  else:
																	endif;?>
																	</tr>



																 </table>
															</div>
														</div>
															
													</div>
												</div>
													
										</div>
									</div>
							<!-- END PAGE CONTENT-->
							<?php endforeach;?>
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

		  //$("body").css('font-family','book antiqua');
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
		  //$("div#cc").css('border-bottom','1px solid');
		  $("div#vovo").css('border','1px solid');
   	      $('hr').css('display','none');
		    
		 
		  $("table td").css('font-size','13px');
		  /*$("div.page-content-wrapper").css('border-bottom','1px solid blue');
		  $("div.page-content-wrapper").css('border-right','1px solid blue');
		  $("div.page-content-wrapper").css('border-left','1px solid blue');
		  $("div#tk").css('border','1px solid blue');
		  //$("div.page-content-wrapper").css('height','1000px');
		  //$("div.page-content-wrapper").css('height','965px');
		   $("div.page-content-wrapper").css('height','auto');
		
		  
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
		  $("#ff").css('font-size','12px');
		  //$("#ff").css('border','1px solid');
		 // $("#ff").css('border-bottom','none');
		 $("table#aha").css('font-size','11px');*/
		  
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
		    popupWin.close();
           //Restore orignal HTML
            document.body.innerHTML = oldPage;
		}
     </script>



</body>
</html>
