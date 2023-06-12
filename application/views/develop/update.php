<div class="container">
	
	<div class="modal-fade row justify-content-center">
    	<div class="col-lg-10">
			<div class="card">
				<div class="card-header"> Update Development</div>
				<div class="card-body">	
					<form action="<?php echo base_url('develop/submit_update/' . $id); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $develop['id']; ?>">
						
						<div class="mb-3">
							<label for="no_ur" class="form-label"> Nomor UR </label>
							<input type="text" class="form-control" id="no_ur" name="no_ur" value="<?= $develop['no_ur']; ?>" readonly>
						</div>

						<div class="mb-3">
							<label for="tgl_mulai" class="form-label"> Tanggal Mulai Development </label>
							<input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= $develop['tgl_mulai']; ?>">
						</div>

						<div class="mb-3">
							<label for="tgl_selesai" class="form-label"> Tanggal Selesai Development </label>
							<input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= $develop['tgl_selesai']; ?>">
						</div>
							
						<div class="mb-3">
							<label for="timeline" class="form-label"> Time Line (Hari Kerja)</label>
							<input type="number" class="form-control" id="timeline" onkeyup="hitungSelisih()" name="timeline" value="<?= $develop['timeline']; ?>" >
						</div>

						<div class="mb-3">
							<label for="waktu" class="form-label"> Waktu Realisasi Development</label>
							<input type="number" class="form-control" onkeyup="hitungSelisih()" id="waktu" name="waktu" value="<?= $develop['waktu']; ?>">
						</div>

						<div class="mb-3">
							<label for="selisih" class="form-label"> Selisih Waktu</label>
							<input type="text" class="form-control" id="selisih" name="selisih" value="<?= $develop['selisih']; ?>" readonly>
						</div>

						<div class="mb-3">
							<label for="tgl_promote" class="form-label"> Tanggal Promote Beta </label>
							<input type="date" class="form-control" id="tgl_promote" name="tgl_promote" value="<?= $develop['tgl_promote']; ?>">
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


<script>
	// $(document).on('keyup', '#timeline', function() {

	// })

	function hitungSelisih() {
		// console.log('test')
		var timeline = $('#timeline').val()
		var waktu = $('#waktu').val()

		var hasil = 0
		
		if(timeline && waktu) {
			hasil = parseInt(timeline) - parseInt(waktu)
		}

		$('#selisih').val(hasil)

	}

</script>
