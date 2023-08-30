<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>
				Rekapitulasi
			</h2>
		</div>
		<!-- Basic Examples -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Di bawah ini adalah Rekapitulasi Alumni
						</h2>

					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover js-exportable dataTable">

								<thead>
									<tr>
										<th>No</th>
										<th>Nisn</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Tempat & Tanggal Lahir</th>
										<th>Alamat</th>
										<th>No Telp</th>
										<th>Nama Ayah</th>
										<th>Pekerjaan Ayah</th>
										<th>Nama Ibu</th>
										<th>Pekerjaan Ibu</th>
										<th>Tahun Masuk</th>
										<th>Tahun Lulus</th>
										<th>No Ijazah</th>
										<th>No SKHU</th>
										<th>Organisasi</th>
										<th>Status</th>
										<th>Deskripsi</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									foreach ($get_all as $row) : ?>
										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo htmlspecialchars($row->nisn, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->first_name, ENT_QUOTES, 'UTF-8'); ?> <?php echo htmlspecialchars($row->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->jenis_kelamin, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->tempat_lahir, ENT_QUOTES, 'UTF-8'); ?>, <?php echo indonesian_date($row->tanggal_lahir, ENT_QUOTES, 'UTF-8');  ?></td>
											<td><?php echo htmlspecialchars($row->alamat, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->no_telp, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->nama_ayah, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->pekerjaan_ayah, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->nama_ibu, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->pekerjaan_ibu, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->tahun_masuk, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->tahun_lulus, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->no_ijazah, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->no_skhun, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->ekskul, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->status, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($row->deskripsi, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo anchor('rekapitulasi/detail/' . encrypt_url($row->id_user), '<button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
													<i class="material-icons" data-toggle="tooltip" data-placement="top" title="Detail">list</i>
												</button>'); ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>

								<tfoot>
									<tr>
										<th>No</th>
										<th>Nisn</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Tempat & Tanggal Lahir</th>
										<th>Alamat</th>
										<th>No Telp</th>
										<th>Nama Ayah</th>
										<th>Pekerjaan Ayah</th>
										<th>Nama Ibu</th>
										<th>Pekerjaan Ibu</th>
										<th>Tahun Masuk</th>
										<th>Tahun Lulus</th>
										<th>No Ijazah</th>
										<th>No SKHU</th>
										<th>Organisasi</th>
										<th>Status</th>
										<th>Deskripsi</th>
										<th>Aksi</th>
									</tr>
								</tfoot>

							</table>

						</div>
					</div>
				</div>
			</div>
			<!-- #END# Basic Alerts -->
		</div>
</section>