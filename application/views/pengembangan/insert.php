<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"> Insert Pengembangan Sistem </div>
				<div class="card-body">	
					<form action="<?php echo base_url('pengembangan/submit_insert') ?>" method="post" enctype="multipart/form-data">
						
						<div class="form-group">
							<label for="jenispeng" class="form-label"> Jenis Pengembangan </label>
							<select class="form-control" id="jenispeng" name="jenispeng" aria-label="Default select example">
										<option value="Assign By Pimkel">Assign By Pimkel</option>
										<option value="Enchancement">Enchancement</option>
										<option value="Fix Issue">Fix Issue & Performance</option>
										<option value="New Initiation">New Initiation</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="perihal" class="form-label"> Perihal </label>
							<input type="text" name="perihal"class="form-control" id="perihal">
							<small class="form-text text-danger"><?=form_error('perihal'); ?></small>
						</div>
							
						<div class="mb-3">
							<label for="source" class="form-label"> Source Aplikasi</label>
							<select class="form-control" name="source" aria-label="Default select example">
										<option value="Smarter">Smarter</option>
										<option value="m-BNISmarter">m-BNISmarter</option>
										<option value="DigiHC">DigiHC</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="unit" class="form-label"> Unit Owner Program </label>
							<input type="text" name="unit" class="form-control" id="unit">
						</div>

						<div class="mb-3">
							<label for="pic" class="form-label"> PIC Owner Program </label>
							<input type="text" class="form-control" id="pic" name="pic">
						</div>

						<div class="mb-3">
							<label for="no_notin" class="form-label"> Nomor Notin</label>
							<input type="text" class="form-control" id="no_notin" name="no_notin">
						</div>

						<div class="mb-3">
							<label for="file_notin" class="form-label"> File Notin</label>
							<input type="file" class="form-control" id="file_notin" name="file_notin">
						</div>

						<div class="mb-3">
							<label for="tgl_notin" class="form-label"> Tanggal Notin </label>
							<input type="date" class="form-control" id="tgl_notin" name="tgl_notin">
						</div>

						<div class="mb-3">
							<label for="no_ur" class="form-label"> Nomor UR </label>
							<input type="text" class="form-control" id="no_ur" name="no_ur">
						</div>

						<div class="mb-3">
							<label for="file_ur" class="form-label"> File UR</label>
							<input type="file" class="form-control" id="file_ur" name="file_ur">
						</div>

						<div class="mb-3">
							<label for="tgl_terima" class="form-label"> Tanggal UR</label>
							<input type="date" class="form-control" id="tgl_ur" name="tgl_ur">
						</div>

						<div class="mb-3">
							<label for="tgl_terima" class="form-label"> Tanggal Terima Disposisi</label>
							<input type="date" class="form-control" id="tgl_terima" name="tgl_terima">
						</div>

						<div class="mb-3">
							<label for="skala_prio" class="form-label"> Skala Prioritas</label>
							<select class="form-control" name="skala_prio" aria-label="Default select example">
										<option value="Low">Low</option>
										<option value="Medium">Medium</option>
										<option value="High">High</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="short_deskripsi" class="form-label"> Short Deskripsi Program</label>
							<input type="text" class="form-control" id="short_deskripsi" name="short_deskripsi">
						</div>

						<div class="mb-3">
							<label for="pic_programmer" class="form-label"> PIC Programmer</label>
							<input type="text" class="form-control" id="pic_programmer" name="pic_programmer">
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
