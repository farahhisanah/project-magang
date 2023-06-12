<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"> Update Final</div>
				<div class="card-body">	
					<form action="<?php echo base_url('finals/submit_update/' . $id); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $final['id']; ?>">
						
						<div class="mb-3">
							<label for="no_ur" class="form-label"> Nomor UR </label>
							<input type="text" class="form-control" id="no_ur" name="no_ur" value="<?= $final['no_ur']; ?>" readonly>
						</div>

						<div class="mb-3">
							<label for="tgl_promote" class="form-label"> Tanggal Promote Production / Live </label>
							<input type="date" class="form-control" id="tgl_promote" name="tgl_promote" value="<?= $final['tgl_promote']; ?>">
						</div>

						<div class="mb-3">
							<label for="status" class="form-label"> Status Final</label>
							<select class="form-control" name="status" aria-label="Default select example" value="<?= $final['status']; ?>">
										<option value="Live">Live</option>
										<option value="On Progress">On Progress</option>
										<option value="Pending">Pending</option>
										<option value="Cancel">Cancel</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="dok_juknis" class="form-label"> Dokumen Juknis Ada / Tidak</label>
							<select class="form-control" name="dok_juknis" aria-label="Default select example" value="<?= $final['dok_juknis']; ?>">
										<option value="Ada">Ada</option>
										<option value="Tidak">Tidak</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="pic_juknis" class="form-label"> PIC Dokumen Juknis</label>
							<select class="form-control" name="pic_juknis" value="<?= $final['pic_juknis']; ?>" aria-label="Default select example">
										<option value="Tidak Ada">Tidak Ada</option>
										<option value="Ade">Ade</option>
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
