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

                <!-- Begin Page Content -->
                <div class="container-fluid">
					
					<div class="d-grid gap-2 d-md-flex justify-content-md-end card-header">
						<a href="<?= base_url('pengembangan/create') ?>" class="btn btn-primary btn-sm float-right mr-2 "><i class="fas fa-plus"></i> Insert</a>
                        <a href="print.php" target="_blank" class="btn btn-info btn-sm float-right mr-3"><i class="fas fa-print"></i> Print</a>
					</div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengembangan Sistem 2023</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Jenis Pengembangan</th>
										<th>Perihal</th>
                                        <th>Source Aplikasi</th>
                                    	<th>Unit Owner Program</th>
                                        <th>PIC Owner Program</th>
                                        </tr>

										<?php 
										$no=1; 
										foreach ($pengembangan as $row) { ?>
										<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $row->jenispeng;?></td>
										<td><?php echo $row->perihal;?></td>
										<td><?php echo $row->source;?></td>
										<td><?php echo $row->unit;?></td>
										<td><?php echo $row->pic;?></td>
										</tr>
										<?php } ?>
										
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Main Content -->


	<?php $this->load->view('layouts/footer') ?>

</body>
</html>
		



