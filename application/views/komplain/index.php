				<!-- Begin Page Content -->
				<div class="container-fluid">
					
					<div class="d-grid gap-2 d-md-flex justify-content-md-end card-header">
						<a href="<?= base_url('komplain/insert') ?>" class="btn btn-primary btn-sm float-right mr-2 "><i class="fas fa-plus"></i>Insert</a>
					</div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Handling Komplain</h6>
                        </div>
                        <div class="card-body">
							<?= $this->session->flashdata('flash'); ?>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Tanggal Laporan</th>
										<th>NPP</th>
                                        <th>Nama</th>
                                    	<th>Nama Aplikasi</th>
                                        <th>Permasalahan</th>
										<th>PIC Perbaikan</th>
                                        <th>Cara Perbaikan</th>
										<th>Status</th>
										<th>Keterangan</th>
                                        <th>Tanggal Update Status</th>
										<th>Opsi</th>
                                        </tr>
                                    </thead>
									<tbody>
									<?php 
										$no=1; 
										foreach ($komplain as $value) { ?>
										<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $value->tgl_laporan;?></td>
										<td><?php echo $value->npp;?></td>
										<td><?php echo $value->nama;?></td>
										<td><?php echo $value->nama_aplikasi;?></td>
										<td><?php echo $value->permasalahan;?></td>
										<td><?php echo $value->pic_perbaikan;?></td>
										<td><?php echo $value->cara_perbaikan;?></td>
										<td><?php echo $value->status;?></td>
										<td><?php echo $value->keterangan;?></td>
										<td><?php echo $value->tgl_update;?></td>
										<td>
										
											<!-- <a href="<?= base_url();?>komplain/view/<?= $value->id; ?>" class="btn btn-info"><i class="fas fa-eye"></i> View</a> -->
											<a href="<?= base_url();?>komplain/update/<?= $value->id; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="<?= base_url();?>komplain/delete/<?= $value->id; ?>" onclick=" return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Delete</a>
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
