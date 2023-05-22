
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
		<div class="sidebar-brand-icon">
		<img src="<?= base_url('assets/img/logo.png'); ?>" alt="" style="height: 50px;">
		</div>
		<div class="sidebar-brand-text mx-1">BNI Corporate</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider ">

	<!-- Heading -->
	<div class="sidebar-heading">
		Admin
	</div>

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="index.html">
		<i class="fas fa-thin fa-newspaper"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Pengembangan Sistem 2023
	</div>

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('pengembangan/index'); ?>">
		<i class="fas fa-code-branch"></i>
			<span>Pengembangan Sistem 2023</span></a>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseUtilities"
			aria-expanded="true" aria-controls="collapseUtilities">
			<i class=" fas fa-solid fa-list"></i>
			<span>Jenis Pengembangan</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
			data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="">Assign by Pimkel</a>
				<a class="collapse-item" href="">Enhancement</a>
				<a class="collapse-item" href="">Fix Issue & Performance</a>
				<a class="collapse-item" href="">New Initiation</a>
			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Komplain & Report
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="<?= base_url('komplain/index'); ?>" data-toggle="collapse" data-target="#collapseTwo"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Handling Komplain & Report</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Permintaan</h6>
				<a class="collapse-item" href="<?= base_url('komplain/index'); ?>">Komplain</a>
				<a class="collapse-item" href="<?= base_url('report/index'); ?>">Report</a>
			</div>
		</div>
	</li>

	</ul>
	<!-- End of Sidebar -->

