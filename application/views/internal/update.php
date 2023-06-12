<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"> Update UAT Internal</div>
				<div class="card-body">	
					<form action="<?php echo base_url('internal/submit_update/' . $id); ?>" method="post">
					<input type="hidden" name="id" value="<?= $internal['id']; ?>">
						
						<div class="mb-3">
							<label for="no_ur" class="form-label"> Nomor UR </label>
							<input type="text" class="form-control" id="no_ur" name="no_ur" value="<?= $internal['no_ur']; ?>" readonly>
						</div>

						<div class="mb-3">
							<label for="no_dok" class="form-label"> Nomor Dok UAT - Internal </label>
							<input type="text" class="form-control" id="no_dok" name="no_dok" value="<?= $internal['no_dok']; ?>">
						</div>

						<div class="mb-3">
							<label for="tgl_mulai" class="form-label"> Tanggal Mulai UAT </label>
							<input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= $internal['tgl_mulai']; ?>">
						</div>

						<div class="mb-3">
							<label for="tgl_selesai" class="form-label"> Tanggal Selesai UAT </label>
							<input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= $internal['tgl_selesai']; ?>">
						</div>

						<div class="mb-3">
							<label for="hasil" class="form-label"> Hasil UAT Internal</label>
							<select class="form-control" name="hasil" aria-label="Default select example" required autocomplete="off" value="<?= $internal['hasil']; ?>">
										<option value="Disetujui">Disetujui</option>
										<option value="Tidak Disetujui">Tidak Disetujui</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="status" class="form-label"> Status Revisi</label>
							<select class="form-control" name="status" aria-label="Default select example" required autocomplete="off" value="<?= $internal['status']; ?>">
										<option value="Mayor">Mayor</option>
										<option value="Minor">Minor</option>
										<option value="Tidak Ada">Tidak Ada</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="pic_test" class="form-label"> PIC Testing</label>
							<input type="text" class="form-control" name="pic_test" value="<?= $internal['pic_test']; ?>">
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
