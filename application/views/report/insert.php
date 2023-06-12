<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header">Insert Report </div>
				<div class="card-body">	
					<form action="<?php echo base_url('report/submit_insert'); ?>" method="post" enctype="multipart/form-data">
						
						<div class="form-group">

						<div class="mb-3">
							<label for="nama_report" class="form-label">Nama Report</label>
							<input type="text" name="nama_report" class="form-control" id="nama_report">
							<small class="form-text text-danger"><?=form_error('nama_report'); ?></small>
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
							<label for="unit" class="form-label">Unit</label>
							<input type="text" name="unit" class="form-control" id="unit">
						</div>

						<div class="mb-3">
							<label for="via" class="form-label">Permintaan Via</label>
							<select class="form-control" name="via" aria-label="Default select example">
										<option value="whatsapp">WhatsApp</option>
										<option value="email">Email</option>
										<option value="notin">Notin</option>
										<option value="memo">Memo</option>
										<option value="onthespot">On The Spot</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="nomor_email" class="form-label">Nomor/Alamat Email</label>
							<input type="text" name="nomor_email"class="form-control" id="nomor_email">
						</div>

						<div class="mb-3">
							<label for="tgl_permintaan" cl ass="form-label">Tanggal Permintaan</label>
							<input type="date" class="form-control" id="tgl_permintaan" name="tgl_permintaan">
						</div>

						<div class="mb-3">
							<label for="capture" class="form-label">Capture Evidence</label>
							<input type="file" name="capture" class="form-control" id="capture">
						</div>

						<div class="mb-3">
							<label for="pic" class="form-label">PIC MSI 2</label>
							<input type="text" class="form-control" id="pic" name="pic">
						</div>

						<div class="mb-3">
							<label for="query" class="form-label">Penggunaan Query</label>
							<input type="file" class="form-control" id="query" name="query">
				
	
						</div>

						<div class="mb-3">
							<label for="tgl_diberikan" class="form-label">Tanggal Diberikan</label>
							<input type="date" class="form-control" id="tgl_diberikan" name="tgl_diberikan">
						</div>

						<div class="mb-3">
							<label for="status" class="form-label">Status</label>
							<select class="form-control" name="status" aria-label="Default select example">
										<option value="on_progress">On Progress</option>
										<option value="done">Done</option>
										<option value="cancel">Cancel</option>
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
