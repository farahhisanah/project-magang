<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layouts/header') ?>
</head>

<body id="page-top">
	
	<!-- Page Wrapper -->
	<div id="wrapper">

	<?php $this->load->view('layouts/sidebar') ?>

	<!-- Heading -->
		
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

			<?php $this->load->view('layouts/topbar') ?>

			<div class="modal-fade row justify-content-center">
    		<div class="col-lg-6">
    		<h1 class="mt-5">Insert</h1>
    		<form action="<?php base_url('pengembangan/create'); ?>" method="post">

        	<div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class=""  name="nama"  value="">
        	</div>

        	<div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class=""  name="nama"  value="">
        	</div>


        <div class="mb-3">
            <label class="form-label"></label>
            <button class="btn btn-primary" type="submit" name="submit">Create Obat</button>
        </div>

    </form>
</div>


            </div>
            <!-- End of Main Content -->
			
		
		<?php $this->load->view('layouts/footer') ?>

</body>
</html>
