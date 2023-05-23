

			<!-- Begin Page Content -->
			<div class="container-fluid">

			<!-- Page Heading -->
			<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

			<div class="card mb-3" style="width: 230px;">
			<img src="<?=base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
				<div class="col-md-60">
					<div class="card-body">
						<h5 class="card-title"><?= $user['username']; ?> </h5>
						<p class="card-text"> <?= $user['email']; ?></p>
						<p class="card-text">
							<small class="text-muted">User Since <?= date('d F Y', $user['date_created']);?>
							</small>
						</p>
					</div>
				</div>
			</div>




