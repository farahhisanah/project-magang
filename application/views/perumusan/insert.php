<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"> Insert Perumusan </div>
				<div class="card-body">	
					<form action="<?php echo base_url('perumusan/submit_insert') ?>" method="post">
						
						<div class="mb-3">
							<label for="no_ur" class="form-label"> Nomor UR </label>
							<input type="text" class="form-control" id="no_ur" name="no_ur">
						</div>

						<div class="mb-3">
							<label for="tgl_dis" class="form-label"> Tanggal Mulai Diskusi Internal </label>
							<input type="date" class="form-control" id="tgl_dis" name="tgl_dis">
						</div>

						<div class="mb-3">
							<label for="diskusi" class="form-label"> Diskusi dengan Owner Program </label>
							<input type="date" class="form-control" id="diskusi" name="diskusi">
						</div>
							
						<div class="mb-3">
							<label for="bulan" class="form-label"> Bulan</label>
							<select class="form-control" name="bulan" aria-label="Default select example">
							<option value="Bulan" disabled selected>Bulan</option>
										<option value="Januari">Januari</option>
										<option value="Februari">Februari</option>
										<option value="Maret">Maret</option>
										<option value="April">April</option>
										<option value="Mei">Mei</option>
										<option value="Juni">Juni</option>
										<option value="Juli">Juli</option>
										<option value="Agustus">Agustus</option>
										<option value="September">September</option>
										<option value="Oktober">Oktober</option>
										<option value="November">November</option>
										<option value="Desember">Desember</option>
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
