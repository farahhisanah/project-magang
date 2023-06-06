				<!-- Begin Page Content -->
				<div class="container-fluid">
					
					<div class="d-grid gap-2 d-md-flex justify-content-md-end card-header">
						<a href="<?= base_url('report/insert') ?>" class="btn btn-primary btn-sm float-right mr-2 "><i class="fas fa-plus"></i> Insert</a>
					</div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Report 2023</h6>
                        </div>
                        <div class="card-body">
							<?= $this->session->flashdata('flash'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Report</th>
										<th>NPP</th>
                                        <th>Nama</th>
                                    	<th>Unit</th>
                                        <th>Permintaan Via</th>
										<th>Nomor/Alamat Email</th>
                                        <th>Tanggal Permintaan</th>
										<th>Capture Evidence</th>
										<th>PIC MSI 2</th>
                                        <th>Penggunaan Query</th>
                                    	<th>Tanggal Diberikan</th>
                                    	<th>Status</th>
										<th>Opsi</th>
                                        </tr>
                                    </thead>
									<tbody>
									<?php 
										$no=1; 
										foreach ($report as $value) { ?>
										<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $value->nama_report;?></td>
										<td><?php echo $value->npp;?></td>
										<td><?php echo $value->nama;?></td>
										<td><?php echo $value->unit;?></td>
										<td><?php echo $value->via;?></td>
										<td><?php echo $value->nomor_email;?></td>
										<td><?php echo $value->tgl_permintaan;?></td>
										<td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $value->capture; ?>"> </td>
										<td><?php echo $value->pic;?></td>
										<td align="center">
											<?php if(!empty($value->query)) { ?>
											<a href="<?php echo base_url('uploads/' . $value->query) ?>" target="_blank">
												<i style="font-size: 60px" class="fa fa-file-pdf-o"></i>
											</a>
											<?php } else {
												echo '-';
											} ?>
											<!-- <iframe src="<?php echo base_url('uploads/' . $value->query) ?>" frameborder="0"></iframe> -->
											
										</td>
										<td><?php echo $value->tgl_diberikan;?></td>
										<td><?php echo $value->status;?></td>
										<td>
											<a href="<?= base_url();?>report/update/<?= $value->id; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="<?= base_url();?>report/delete/<?= $value->id; ?>" onclick=" return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Delete</a>
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
