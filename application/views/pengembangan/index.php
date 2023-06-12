				<!-- Begin Page Content -->
				<div class="container-fluid">
					
					<div class="d-grid gap-2 d-md-flex justify-content-md-end card-header">
						<a href="<?= base_url('pengembangan/insert') ?>" class="btn btn-primary btn-sm float-right mr-2 "><i class="fas fa-plus"></i> Insert</a>
					</div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengembangan Sistem 2023</h6>
                        </div>
                        <div class="card-body">
							<?= $this->session->flashdata('flash'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Jenis Pengembangan</th>
										<th>Perihal</th>
                                        <th>Source Aplikasi</th>
                                    	<th>Unit Owner Program</th>
                                        <th>PIC Owner Program</th>
										<th>No Notin</th>
										<th>File Notin</th>
										<th>No UR</th>
										<th>File UR</th>
										<th>Opsi</th>
                                        </tr>
                                    </thead>
									<tbody>
									<?php 
										$no=1; 
										foreach ($pengembangan as $value) { ?>
										<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $value->jenispeng;?></td>
										<td><?php echo $value->perihal;?></td>
										<td><?php echo $value->source;?></td>
										<td><?php echo $value->unit;?></td>
										<td><?php echo $value->pic;?></td>
										<td><?php echo $value->no_notin;?></td>
										<td align="center">
											<?php if(!empty($value->file_notin)) { ?>
											<img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $value->file_notin; ?>"> 
											<?php } else {
												echo '-';
											} ?>
										</td>
										<td><?php echo $value->no_ur;?></td>
										<td align="center">
										<?php if(!empty($value->file_ur)) { ?>
											<a href="<?php echo base_url('uploads/' . $value->file_ur) ?>" target="_blank">
												<i style="font-size: 60px" class="fa fa-file-text-o"></i>
											</a>
											<?php } else {
												echo '-';
											} ?>
										</td>	
										<td>
											<a href="<?= base_url();?>pengembangan/view/<?= $value->id; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
											<a href="<?= base_url();?>pengembangan/update/<?= $value->id; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="<?= base_url();?>pengembangan/delete/<?= $value->id; ?>" onclick=" return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Delete</a>
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
