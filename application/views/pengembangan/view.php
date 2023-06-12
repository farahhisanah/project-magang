				<!-- Begin Page Content -->
				<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengembangan Sistem 2023</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
									<tr>
                                        <th>Jenis Pengembangan</th>
										<th>Perihal</th>
                                        <th>Source Aplikasi</th>
                                    	<th>Unit Owner Program</th>
                                        <th>PIC Owner Program</th>
										<th>No Notin</th>
										<th>File Notin</th>
										<th>Tanggal Notin</th>
										<th>No UR</th>
										<th>File UR</th>
										<th>Tanggal UR</th>
										<th>Skala Prioritas</th>
										<th>Short Deskripsi</th>
										<th>PIC Programmer</th>
                                        </tr>
                                    </thead>
									<tbody>
										<th><?= $pengembangan['jenispeng']; ?></th>
										<th><?= $pengembangan['perihal']; ?></th>
										<th><?= $pengembangan['source']; ?></th>
										<th><?= $pengembangan['unit']; ?></th>
										<th><?= $pengembangan['pic']; ?></th>
										<th><?= $pengembangan['no_notin']; ?></th>
										<th align="center">
											
											<?php if(!empty($pengembangan['file_notin'])) { ?>
											<img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $pengembangan['file_notin']; ?>">
											<?php } else {
												echo '-';
											} ?>
											
										</th>
										<th><?= $pengembangan['tgl_notin']; ?></th>
										<th><?= $pengembangan['no_ur']; ?></th>
										<th align="center">
											<?php if(!empty($pengembangan['file_ur'])) { ?>
											<a href="<?php echo base_url('uploads/' . $pengembangan['file_ur']) ?>" target="_blank">
												<i style="font-size: 60px" class="fa fa-file-text-o"></i>
											</a>
											<?php } else {
												echo '-';
											} ?>
										</th>	
										<th><?= $pengembangan['tgl_ur']; ?></th>
										<th><?= $pengembangan['skala_prio']; ?></th>
										<th><?= $pengembangan['short_deskripsi']; ?></th>
										<th><?= $pengembangan['pic_programmer']; ?></th>
									</tbody>
                                </table>
								<a href="<?php echo base_url('pengembangan/index') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                            </div>
                        </div>
                    </div>

                </div>
				<!-- /.container-fluid -->
