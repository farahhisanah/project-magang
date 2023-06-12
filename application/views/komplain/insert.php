<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"> Insert Handling Komplain </div>
				<div class="card-body">	
					<form action="<?php base_url('komplain/insert'); ?>" method="post">
						
						<div class="form-group">

						<div class="mb-3">
							<label for="tgl_laporan" class="form-label">Tanggal Laporan</label>
							<input type="date" class="form-control" id="tgl_laporan" name="tgl_laporan">
						</div>

						<div class="mb-3">
							<label for="npp" class="form-label">NPP</label>
							<input type="text" name="npp" class="form-control" id="npp">
						</div>

						<div class="mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama">
						</div>

						<div class="mb-3">
							<label for="nama_aplikasi" class="form-label">Nama Aplikasi</label>
							<select class="form-control" name="nama_aplikasi" aria-label="Default select example">
										<option value="Smarter">Smarter Web</option>
										<option value="m-BNISmarter">m-BNISmarter</option>
										<option value="DigiHC">API DigiHC</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="permasalahan" class="form-label">Permasalahan</label>
							<textarea type="text" size="100" name="permasalahan" class="form-control" id="permasalahan"> </textarea>
							<small class="form-text text-danger"><?=form_error('permasalahan'); ?></small>
						</div>
							
						<div class="mb-3">
							<label for="pic_perbaikan" class="form-label">PIC Perbaikan</label>
							<input type="text" class="form-control" id="pic_perbaikan" name="pic_perbaikan">
						</div>

						<div class="mb-3">
							<label for="cara_perbaikan" class="form-label">Cara Perbaikan</label>
							<input type="text" name="cara_perbaikan" class="form-control" id="cara_perbaikan">
						</div>

						<div class="mb-3">
							<label for="status" class="form-label">Status</label>
							<select class="form-control" name="status" aria-label="Default select example">
										<option value="on_progress" disabled selected></option>
										<option value="on_progress">On Progress</option>
										<option value="done">Done</option>
										<option value="Pending">Pending</option>
										<option value="cancel">Cancel</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="keterangan" class="form-label">Keterangan</label>
							<input type="text" name="keterangan" class="form-control" id="keterangan">
						</div>

						<div class="mb-3">
							<label for="tgl_update" class="form-label">Tanggal Update Status</label>
							<input type="date" class="form-control" id="tgl_update" name="tgl_update">
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
