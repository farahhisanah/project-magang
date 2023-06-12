				<!-- Begin Page Content -->
				<div class="container-fluid">
					
					<div class="d-grid gap-2 d-md-flex justify-content-md-end card-header">
						<a href="<?= base_url('develop/insert') ?>" class="btn btn-primary btn-sm float-right mr-2 "><i class="fas fa-plus"></i> Insert</a>
					</div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Development</h6>
                        </div>
                        <div class="card-body">
							<?= $this->session->flashdata('flash'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>No UR</th>
										<th>Tanggal Mulai Development</th>
                                        <th>Tanggal Selesai Development</th>
                                    	<th>Time Line (Hari Kerja)</th>
                                        <th>Waktu Realisasi Development</th>
										<th>Selisih Waktu</th>
										<th>Tanggal Promote Beta</th>
										<th>Opsi</th>
                                        </tr>
                                    </thead>
									<tbody>
									<?php 
										$no=1; 
										foreach ($develop as $value) { ?>
										<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $value->no_ur;?></td>
										<td><?php echo $value->tgl_mulai;?></td>
										<td><?php echo $value->tgl_selesai;?></td>
										<td><?php echo $value->timeline;?></td>
										<td><?php echo $value->waktu;?></td>
										<td><?php echo $value->selisih;?></td>
										<td><?php echo $value->tgl_promote; ?></td>
										<td>
											<a href="<?= base_url();?>pengembangan/view/<?= $value->pengembangan_id; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View </a>
											<a href="<?= base_url();?>develop/update/<?= $value->id; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit </a>
										</td>
										</tr>
										<?php } ?>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
				<!-- /.container-fluid -->
