<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"> Insert Final</div>
				<div class="card-body">	
					<form action="<?php echo base_url('finals/submit_insert') ?>" method="post">
						
						<div class="mb-3">
							<label for="no_ur" class="form-label"> Nomor UR </label>
							<input type="text" class="form-control" id="no_ur" name="no_ur">
						</div>

						<div class="mb-3">
							<label for="tgl_promote" class="form-label"> Tanggal Promote Production / Live </label>
							<input type="date" class="form-control" id="tgl_promote" name="tgl_promote">
						</div>

						<div class="mb-3">
							<label for="status" class="form-label"> Status Final</label>
							<select class="form-control" name="status" aria-label="Default select example">
										<option value="Status" disabled selected>Status Final</option>
										<option value="Live">Live</option>
										<option value="On Progress">On Progress</option>
										<option value="Pending">Pending</option>
										<option value="Cancel">Cancel</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="hasil" class="form-label"> Dokumen Juknis Ada / Tidak</label>
							<select class="form-control" name="dok_juknis" aria-label="Default select example">
										<option value="" disabled selected></option>
										<option value="Ada">Ada</option>
										<option value="Tidak">Tidak</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="pic_juknis" class="form-label"> PIC Dokumen Juknis</label>
							<select class="form-control" name="pic_juknis" aria-label="Default select example">
										<option value="" disabled selected></option>
										<option value="Tidak Ada">Tidak Ada</option>
										<option value="Ade">Ade</option>
							</select>

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
