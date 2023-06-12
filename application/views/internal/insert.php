<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"> Insert UAT Internal</div>
				<div class="card-body">	
					<form action="<?php echo base_url('internal/submit_insert') ?>" method="post">
						
						<div class="mb-3">
							<label for="no_ur" class="form-label"> Nomor UR </label>
							<input type="text" class="form-control" id="no_ur" name="no_ur">
						</div>

						<div class="mb-3">
							<label for="no_dok" class="form-label"> Nomor Dok UAT - Internal </label>
							<input type="text" class="form-control" id="no_dok" name="no_dok">
						</div>

						<div class="mb-3">
							<label for="tgl_mulai" class="form-label"> Tanggal Mulai UAT </label>
							<input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
						</div>

						<div class="mb-3">
							<label for="tgl_selesai" class="form-label"> Tanggal Selesai UAT </label>
							<input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
						</div>

						<div class="mb-3">
							<label for="hasil" class="form-label"> Hasil UAT Internal</label>
							<select class="form-control" name="hasil" aria-label="Default select example" required autocomplete="off">
							<option value="Hasil UAT Internal" disabled selected>Hasil UAT Internal</option>
										<option value="Disetujui">Disetujui</option>
										<option value="Tidak Disetujui">Tidak Disetujui</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="status" class="form-label"> Status Revisi</label>
							<select class="form-control" name="status" aria-label="Default select example" required autocomplete="off">
							<option value="Status Revisi" disabled selected>Status Revisi</option>
										<option value="Mayor">Mayor</option>
										<option value="Minor">Minor</option>
										<option value="Tidak Ada">Tidak Ada</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="pic_test" class="form-label"> PIC Testing</label>
							<input type="text" class="form-control" name="pic_test">
						</div>

						<div class="mb-3">
							<label class="form-label"></label>
							<button class="btn btn-primary" type="submit" name="submit">Insert</button>
						</div>

					</form>
				</div>
			</div>
		
	</div>
	
</div>
