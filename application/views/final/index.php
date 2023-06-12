				<!-- Begin Page Content -->
				<div class="container-fluid">
					
					<div class="d-grid gap-2 d-md-flex justify-content-md-end card-header">
						<a href="<?= base_url('finals/insert') ?>" class="btn btn-primary btn-sm float-right mr-2 "><i class="fas fa-plus"></i> Insert</a>
					</div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Final Pengembangan</h6>
                        </div>
                        <div class="card-body">
							<?= $this->session->flashdata('flash'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>No UR</th>
										<th>Tanggal Promote Production / Live</th>
                                        <th>Status</th>
                                    	<th>Dokumen Juknis Ada / Tidak</th>
                                        <th>PIC Dokumen Juknis</th>
										<th>Opsi</th>
                                        </tr>
                                    </thead>
									<tbody>
									<?php 
										$no=1; 
										foreach ($final as $value) { ?>
										<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $value->no_ur;?></td>
										<td><?php echo $value->tgl_promote;?></td>
										<td><?php echo $value->status;?></td>
										<td><?php echo $value->dok_juknis;?></td>
										<td><?php echo $value->pic_juknis;?></td>
										<td>
											<a href="<?= base_url();?>pengembangan/view/<?= $value->pengembangan_id; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View </a>
											<a href="<?= base_url();?>finals/update/<?= $value->id; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit </a>
											<a href="<?= base_url();?>finals/delete/<?= $value->id; ?>" onclick=" return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Delete</a>
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
