<body id="page-top">
	
	<!-- Page Wrapper -->
	<div id="wrapper">

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

	<!-- QUERY MENU -->
	<?php
	$role_id = $this->session->userdata('role_id');
	$queryMenu = "SELECT `user_menu`.`id`, `menu`
					FROM `user_menu` JOIN `user_access`
					ON `user_menu`.`id` = `user_access`.`menu_id`
					WHERE `user_access`.`role_id` = $role_id
					ORDER BY `user_access`.`menu_id` ASC
					";
		$menu = $this->db->query($queryMenu)->result_array();
	?>

	<!-- Looping Menu -->
	<?php foreach ($menu as $m) : ?>

	<!-- Heading -->
	<div class="sidebar-heading">
	<?= $m['menu']; ?>
	</div>

	<!-- SIAPKAN SUB MENU -->
	<?php 
		$menuId = $m['id'];
		$querysubMenu = "SELECT *
						 FROM `user_submenu` JOIN `user_menu`
						 ON `user_submenu`.`menu_id` = `user_menu`.`id`
						 WHERE `user_submenu`.`menu_id` = $menuId
						";
		$subMenu = $this->db->query($querysubMenu)->result_array();
	?>
		<?php foreach ($subMenu AS $sm) : ?>

			<?php if ($title == $sm['title']) :?>
			<li class="nav-item active">
			<?php else : ?>
			<li class="nav-item">
			<?php endif; ?>

			<a class="nav-link" href="<?= base_url($sm['url']); ?>">
				<i class="<?= $sm['icon']; ?>"></i>
				<span><?= $sm['title']; ?></span></a>
			</li>
		
		<?php endforeach; ?>

	<!-- Divider -->
	<hr class="sidebar-divider ">

	<?php endforeach; ?>

	</ul>
	<!-- End of Sidebar -->

