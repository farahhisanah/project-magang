<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"><?= $title; ?>Report</div>
				<div class="card-body">	
					<form action="<?php base_url('report/submit_update/' . $id); ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $report['id']; ?>">
						
						<div class="form-group">
							<label for="nama_report" class="form-label">Nama Report</label>
							<input type="text" name="nama_report" value="<?= $report['nama_report']; ?>"class="form-control" id="nama_report">
						</div>

						<div class="mb-3">
							<label for="npp" class="form-label">NPP</label>
							<input type="text" name="npp" value="<?= $report['npp']; ?>"class="form-control" id="npp">
						</div>
							

						<div class="mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input type="text" name="nama" value="<?= $report['nama']; ?>"class="form-control" id="nama">
						</div>

						<div class="mb-3">
							<label for="unit" class="form-label">Unit</label>
							<input type="text" name="unit" class="form-control" value="<?= $report['unit']; ?>" id="unit">
						</div>

						<div class="mb-3">
							<label for="via" class="form-label">Permintaan Via</label>
							<select class="form-control" name="via" value="<?= $report['via']; ?>" aria-label="Default select example">
									<?php foreach( $via as $s) : ?>
										<?php if( $s == $via['via']) :?>
											<option value="<?= $s; ?>" selected><?= $s;?> </option>
										<?php else : ?>
											<option value="<?= $s ?>"> <?= $s; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
							</select>						</div>

						<div class="mb-3">
							<label for="nomor_email" class="form-label">Nomor/Alamat Email</label>
							<input type="text" name="nomor_email" value="<?= $report['nomor_email']; ?>"class="form-control" id="nomor_email">
						</div>

						<div class="mb-3">
							<label for="tgl_permintaan" class="form-label">Tanggal Permintaan</label>
							<input type="date" class="form-control" id="tgl_permintaan" value="<?= $report['tgl_permintaan']; ?>"name="tgl_permintaan">
						</div>
						<img src="<?php echo base_url() . '/uploads' . $report['capture']; ?>" width="100">
						</div>
						 
						<div class="mb-3">
							<label for="capture" class="form-label">Capture Evidence</label>
							<input type="file" class="form-control" id="capture" value="<?= $report['capture']; ?>" name="capture">
						</div>

						<div class="mb-3">
							<label for="pic" class="form-label"> PIC Owner Program </label>
							<input type="text" class="form-control" id="pic" value="<?= $report['pic']; ?>"name="pic">
						</div>

						<div class="mb-3">
							<label for="query" class="form-label">Penggunaan Query</label>
							<input type="file" class="form-control" id="query" value="<?= $report['query']; ?>" name="query">						</div>

						<div class="mb-3">
							<label for="tgl_diberikan" class="form-label">Tanggal Diberikan</label>
							<input type="date" class="form-control" id="tgl_diberikan" value="<?= $report['tgl_diberikan']; ?>"name="tgl_diberikan">
						</div>

						<div class="mb-3">
							<label for="status" class="form-label"> Status</label>
							<select class="form-control" name="status" value="<?= $report['status']; ?>" aria-label="Default select example">
									<?php foreach( $status as $s) : ?>
										<?php if( $s == $status['status']) :?>
											<option value="<?= $s; ?>" selected><?= $s;?> </option>
										<?php else : ?>
											<option value="<?= $s ?>"> <?= $s; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
							</select>
						</div>

						<div class="mb-3">
							<label class="form-label"></label>
							<button class="btn btn-primary" type="submit" name="submit">Update</button>
						</div>

					</form>
				</div>
			</div>
		
	</div>
	
</div>
