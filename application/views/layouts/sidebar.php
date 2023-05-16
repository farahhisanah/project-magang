<!DOCTYPE html>
<html lang="en">

<head>
<body>
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon">
		<img src="<?= base_url('assets/img/logo.png'); ?>" alt="" style="height: 30px;">
		</div>
		<div class="sidebar-brand-text mx-3">BNI Corporate </div>
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

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
			aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Pengembangan Sistem 2023</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
			data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Unit Owner Program</h6>
				<a class="collapse-item" href="utilities-color.html">MSI</a>
				<a class="collapse-item" href="utilities-border.html">SOG</a>
				<a class="collapse-item" href="utilities-animation.html">DEC</a>
				<a class="collapse-item" href="utilities-other.html">LSG</a>
				<a class="collapse-item" href="utilities-other.html">LCC</a>
				<a class="collapse-item" href="utilities-other.html">LDG</a>
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
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Handling Komplain & Report</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Permintaan</h6>
				<a class="collapse-item" href="buttons.html">Komplain</a>
				<a class="collapse-item" href="cards.html">Report</a>
			</div>
		</div>
	</li>

	</ul>
	<!-- End of Sidebar -->
</body>
</html>
