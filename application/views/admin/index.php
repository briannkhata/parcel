<?php $this->load->view('header.php');?>
			<!-- BEGIN SIDEBAR -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row margin-top-10">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-green-sharp"><?=count($this->db->get_where('tblusers',array('deleted'=>0))->result_array());?></small></h3>
								<small>TOTAL STAFF</small>
							</div>
							<div class="icon">
								<i class="icon-user"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
							
							</div>
							<div class="status">
								<div class="status-title">
								 TOTAL NUMBER OF STAFFS
								</div>
								<div class="status-number">
									 
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-green-sharp"><?=count($this->db->get_where('tblbranches',array('deleted'=>0))->result_array());?></small></h3>
								<small>TOTAL BRANCHES</small>
							</div>
							<div class="icon">
								<i class="icon-pie-chart"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
							
							</div>
							<div class="status">
								<div class="status-title">
								 TOTAL NUMBER OF BRANCHES
								</div>
								<div class="status-number">
									 
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-red-haze"><?=count($this->db->get_where('tblparcels',array('deleted'=>0))->result_array());?></h3>
								<small>TOTAL PARCELS</small>
							</div>
							<div class="icon">
								<i class="icon-like"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
								<span class="sr-only"></span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									TOTAL NUMBER OF PARCELS
								</div>
								<div class="status-number">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-blue-sharp"><?=number_format($this->M_parcel->get_parcel_daily_sales(),2);?></h3>
								<small>TOTAL SALES</small>
							</div>
							<div class="icon">
								<i class="icon-basket"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
								<span class="sr-only"></span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 TOTAL SALES
								</div>
								<div class="status-number">
									
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php foreach($statuses as $row){?>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-purple-soft"><?=count($this->M_parcel->get_parcel_by_status($row['status_id']));?></h3>
								<small><?=$row['status_name'];?></small>
							</div>
							<div class="icon">
								<i class="fa fa-filter"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
								<span class="sr-only"></span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
								<?=$row['status_name'];?>
								</div>
								<div class="status-number">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
			
			
			
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<?php $this->load->view('footer.php');?>
