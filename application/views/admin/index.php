	<?php include'/../header.php';?>
			<!-- BEGIN SIDEBAR -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row margin-top-10">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-green-sharp"><?=count($this->db->get_where('tblusers')->result_array());?></small></h3>
								<small>TOTAL STAFF</small>
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
								<h3 class="font-red-haze"><?=count($this->db->get('tblusers')->result_array());?></h3>
								<small>HEALTH SCHEME</small>
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
									STAFFS ON HEALTH SCHEME
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
								<h3 class="font-blue-sharp">50</h3>
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
									 today 's sales
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
								<h3 class="font-purple-soft">50</h3>
								<small>STAFF</small>
							</div>
							<div class="icon">
								<i class="icon-user"></i>
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
									 total staff
								</div>
								<div class="status-number">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<?php include'/../footer.php';?>
