<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"><?= $title; ?></div>
				<div class="card-body">	
					<form action="<?php base_url('pengembangan/update'); ?>" method="post">
						<input type="hidden" name="id" value="<?= $pengembangan['id']; ?>">
						
						<div class="form-group">
							<label for="jenispeng" class="form-label"> Jenis Pengembangan </label>
							<select class="form-control" name="jenispeng" value="<?= $pengembangan['jenispeng']; ?>" aria-label="Default select example">
									<?php foreach( $jenispeng as $j) : ?>
										<?php if( $j == $pengembangan['jenispeng']) :?>
											<option value="<?= $j; ?>" selected><?= $j;?> </option>
										<?php else : ?>
										<option value="<?= $j ?>"> <?= $j; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
							</select>
						</div>

						<div class="mb-3">
							<label for="perihal" class="form-label"> Perihal </label>
							<input type="text" name="perihal" value="<?= $pengembangan['perihal']; ?>"class="form-control" id="perihal">
						</div>
							
						<div class="mb-3">
							<label for="source" class="form-label"> Source Aplikasi</label>
							<select class="form-control" name="source" value="<?= $pengembangan['source']; ?>"aria-label="Default select example">
										<option value="Smarter">Smarter</option>
										<option value="m-BNISmarter">m-BNISmarter</option>
										<option value="DigiHC">DigiHC</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="unit" class="form-label"> Unit Owner Program </label>
							<input type="text" name="unit" class="form-control" value="<?= $pengembangan['unit']; ?>" id="unit">
						</div>

						<div class="mb-3">
							<label for="pic" class="form-label"> PIC Owner Program </label>
							<input type="text" class="form-control" id="pic" value="<?= $pengembangan['pic']; ?>"name="pic">
						</div>

						<div class="mb-3">
							<label for="no_notin" class="form-label"> Nomor Notin</label>
							<input type="text" class="form-control" id="no_notin" value="<?= $pengembangan['no_notin']; ?>" name="no_notin">
						</div>

						<div class="mb-3">
							<label for="file_notin" class="form-label"> File Notin</label>
							<input type="file" class="form-control" id="file_notin" value="<?= $pengembangan['file_notin']; ?>" name="file_notin">
						</div>

						<div class="mb-3">
							<label for="tgl_notin" class="form-label"> Tanggal Notin </label>
							<input type="date" class="form-control" id="tgl_notin" value="<?= $pengembangan['tgl_notin']; ?>"name="tgl_notin">
						</div>

						<div class="mb-3">
							<label for="no_ur" class="form-label"> Nomor UR </label>
							<input type="text" class="form-control" id="no_ur" value="<?= $pengembangan['no_ur']; ?>" name="no_ur">
						</div>

						<div class="mb-3">
							<label for="file_ur" class="form-label"> File UR</label>
							<input type="file" class="form-control" id="file_ur" name="file_ur" value="<?= $pengembangan['file_ur']; ?>">
						</div>

						<div class="mb-3">
							<label for="tgl_terima" class="form-label"> Tanggal UR</label>
							<input type="date" class="form-control" id="tgl_ur" value="<?= $pengembangan['tgl_ur']; ?>" name="tgl_ur">
						</div>

						<div class="mb-3">
							<label for="tgl_terima" class="form-label"> Tanggal Terima Disposisi</label>
							<input type="date" class="form-control" id="tgl_terima" value="<?= $pengembangan['tgl_terima']; ?>" name="tgl_terima">
						</div>

						<div class="mb-3">
							<label for="skala_prio" class="form-label"> Skala Prioritas</label>
							<select class="form-control" name="skala_prio" value="<?= $pengembangan['skala_prio']; ?>" aria-label="Default select example">
									<?php foreach( $skala_prio as $s) : ?>
										<?php if( $s == $pengembangan['skala_prio']) :?>
											<option value="<?= $s; ?>" selected><?= $s;?> </option>
										<?php else : ?>
											<option value="<?= $s ?>"> <?= $s; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
							</select>
						</div>

						<div class="mb-3">
							<label for="short_deskripsi" class="form-label"> Short Deskripsi Program</label>
							<input type="text" class="form-control" id="short_deskripsi" value="<?= $pengembangan['short_deskripsi']; ?>" name="short_deskripsi">
						</div>

						<div class="mb-3">
							<label for="pic_programmer" class="form-label"> PIC Programmer</label>
							<input type="text" class="form-control" id="pic_programmer" value="<?= $pengembangan['pic_programmer']; ?>" name="pic_programmer">
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
