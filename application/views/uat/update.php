<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"> Update UAT User</div>
				<div class="card-body">	
				<form action="<?php echo base_url('uat/submit_update/' . $id); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $uat['id']; ?>">
						
						<div class="mb-3">
							<label for="no_ur" class="form-label"> Nomor UR </label>
							<input type="text" class="form-control" id="no_ur" name="no_ur" value="<?= $uat['no_ur']; ?>" readonly>
						</div>

						<div class="mb-3">
							<label for="tgl_mulai" class="form-label"> Tanggal Mulai UAT </label>
							<input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= $uat['tgl_mulai']; ?>">
						</div>

						<div class="mb-3">
							<label for="tgl_selesai" class="form-label"> Tanggal Selesai UAT </label>
							<input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= $uat['tgl_selesai']; ?>">
						</div>
							
						<div class="mb-3">
							<label for="status" class="form-label"> Status Revisi</label>
							<select class="form-control" name="status" aria-label="Default select example" value="<?= $uat['status']; ?>">
										<option value="Mayor">Mayor</option>
										<option value="Minor">Minor</option>
										<option value="Tidak Ada">Tidak Ada</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="hasil" class="form-label"> Hasil UAT Dengan User</label>
							<select class="form-control" name="hasil" aria-label="Default select example" value="<?= $uat['hasil']; ?>">	
										<option value="Disetujui">Disetujui</option>
										<option value="Tidak Disetujui">Tidak Disetujui</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="ba_uat" class="form-label"> BA UAT</label>
							<select class="form-control" name="ba_uat" aria-label="Default select example" value="<?= $uat['ba_uat']; ?>">
										<option value="On Progress">On Progress</option>
										<option value="Done">Done</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="pic_uat" class="form-label"> PIC UAT</label>
							<select class="form-control" name="pic_uat" aria-label="Default select example" value="<?= $uat['pic_uat']; ?>">
										<option value="Ade">Ade</option>
										<option value="Safri">Safri</option>
										<option value="Cece">Cece</option>
										<option value="Febri">Febri</option>
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
