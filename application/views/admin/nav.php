<div class="page-sidebar-wrapper">
	<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
		<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li class="start ">
				<a href="<?= base_url(); ?>User/">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url(); ?>User/users">
					<i class="fa fa-users"></i>
					<span class="title">Users</span>
					<!-- <span class="arrow "></span> -->
				</a>
				<!-- <ul class="sub-menu">
						<li>
							<a href="<?= base_url(); ?>User/read">
								<i class="fa fa-circle"></i>
								Add User</a>
						</li>
						<li>
							<a href="<?= base_url(); ?>User/users">
								<i class="fa fa-circle"></i>
								Users</a>
						</li>

					</ul> -->
			</li>
			<li>
				<a href="javascript:;">
					<i class="fa fa-list"></i>
					<span class="title">Parcel Management</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">


			
					<li>
						<a href="<?= base_url(); ?>Parcel">
							<i class="fa fa-circle"></i>
							Parcel List</a>
					</li>
					<li>
						<a href="<?= base_url(); ?>Parcel/tracker">
							<i class="fa fa-circle"></i>
							Track Parcel</a>
					</li>

				</ul>
			</li>
			
			<li>
				<a href="javascript:;">
					<i class="fa fa-cogs"></i>
					<span class="title">Configurations</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="<?= base_url(); ?>User/settings">
							<i class="fa fa-circle"></i>
							Settings</a>
					</li>

					<li>
						<a href="<?= base_url(); ?>Charge/">
							<i class="fa fa-circle"></i>
							Charges</a>
					</li>


					<li>
						<a href="<?= base_url(); ?>Status">
							<i class="fa fa-circle"></i>
							Status List</a>
					</li>



					<li>
						<a href="<?= base_url();?>Package_type">
							<i class="fa fa-circle"></i>
							Package Types</a>
					</li>

					<li>
						<a href="<?= base_url();?>Service">
							<i class="fa fa-circle"></i>
							Services</a>
					</li>

					<li>
						<a href="<?= base_url(); ?>Branch">
							<i class="fa fa-circle"></i>
							Branches</a>
					</li>

				</ul>
			</li>
			<li>
				<a href="javascript:;">
					<i class="fa fa-cog"></i>
					<span class="title">Reports</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="<?= base_url(); ?>Report/by_status">
							<i class="fa fa-circle"></i>
							Parcels by Status</a>
					</li>
				
				</ul>
			</li>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>
<!-- END SIDEBAR -->