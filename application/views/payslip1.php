<style type="text/css">
 div.product{page-break-after:always;}
</style>
			<?php if(!empty($slip)):
			foreach ($slip as $row) {
		  $salary_date = $row['salary_date'];
									  $employee_id = $row['employee_id'];
									  $month = $row['month'];
									  $year = $row['year'];
									  $image1 = "assets/profile/".preg_replace('/\s+/','',$row['name']).'.jpg';
									  $image2 = base_url()."assets/profile/holder.jpg";?>
								      <div class="col-md-12 product" >
						  				<table class="table table-bordered">
						  					<tr>
												<?php if(file_exists($image1))
												{?>
						  						<td><img style="width: 100px;height: 100px;" src="<?php echo $image1;?>"></td>
						  						<?php }else{?>
						  						<td><img style="width: 100px;height: 100px;" src="<?php echo $image2;?>"></td>
						  						<?php }?>
						  						<td></td>
						  					</tr>
											<tr>
												<td><?=trim($row['name']);?></td>
												<td></td>
											</tr>
											<tr>
												<td>Depot</td>
												<td><?=$this->db->get_where('depot',array('depot_id'=>$row['depot_id']))->row()->depot;?></td>
											</tr>
											<tr>
												<td>Basic Salary</td><td>MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['salary'])),2);?></td>
											</tr>
											<tr>
												<td><?=$row['bank'];?></td><td><?=$row['account_number'];?></td>
											</tr>
											<tr>
												<td>Salary Date</td>
												<td><?=$row['salary_date'];?></td>
											</tr>
										</table>
<hr>


													<table class="table">
															<tbody>
															<tr>
																<td>Gloss salary</td><td> MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['gloss_salary'])),2);?></td>
															</tr>
																													<tr>
																<td>Net salary</td><td> MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['net_salary'])),2);?></td>
															</tr>
															
														
															</tbody>
														</table>


														<hr>

														<h3>EARNINGS</h3>


																  <table class="table table-bordered">
																	
																   <?php
																	  $bsalary = $row['salary'];
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
																		<td>MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/","",$hr)),2);?></td>
																		</tr>
																	   
																	   <tr>
																			<td>Normal Hours</td>
																			<td><?=$nh;?> Hours</td>
																		</tr>
																			<tr>
																			<td>Public Hours</td>
																			<td><?=$ph;?> Hours</td>
																			
																	   </tr>

																		  <tr>
																			<td>Normal Amount </td>
																			<td>MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$nha)),2);?></td>
																		</tr>
																		<tr>
																			<td>Public Amount</td>
																			<td>MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$pha)),2);?></td>
																			
																	   </tr>
																	   
																		<tr>
																			<td>Total Overtime</td>
																			<td>MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$total_overtime)),2);?></td>
																	   </tr>
																		<tr>
																			<td>Tea Allowance</td>
																			<td>MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$tea_allowance)),2);?></td>
																		</tr>
																		<tr>
																			<td>Bonus</td>
																			<td>MWK : <?php if(!empty($this->db->get_where('bonus',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year))->row()->amount)) { echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$this->db->get_where('bonus',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year))->row()->amount)),2);} else {echo 00.00;}?></td>
															            </tr>
																	   <tr>
																			<td>Arrears</td>
																			<td>MWK : <?php if(!empty($this->db->get_where('arrears',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year))->row()->amount)) { echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$this->db->get_where('arrears',array('employee_id'=>$employee_id,'month'=>$month,'year'=>$year))->row()->amount)),2);} else {echo 00.00;}?></td>
																   </tr>

																  </table>

																  <hr>

<h3>DEDUCTIONS</h3>
																  <table class="table table-bordered">
																	
																  <tr>
																	 <td>PAYEE</td>
																	 <td>MWK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['payee'])),2);?></td>
																  </tr>
																  <tr>
																	 <td>Pension</td>
																	<td>MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row['pension_personal'])),2);?></td>
																  </tr>
																  <tr>
																	<td>Loan Taken</td>
																	<td>MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$amount)),2);?></td>
																  </tr>
																  <tr>
																	<td>Loan Deducted</td>
																	<td>MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$payrate)),2);?></td>
																   </tr>
																   <tr>
																	<td>Loan Balance</td>
																	<td>MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$balance)),2);?></td>
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
																	    <td>MWK : <?php echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$d_amount)),2);?></td>
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
																			foreach($hh as $row){
																			  $d_amount = $d_amount + $row['d_amount'];
																			}
																	foreach($hh as $row){?>
																	   <?php echo trim($row['other_members']);?>,
																	<?php }?>
																	
																	 <?php  else:
																	endif;?>
																	</td>
																	</tr>
																 </table>
																</div>
											
			<?php }

			endif;?>