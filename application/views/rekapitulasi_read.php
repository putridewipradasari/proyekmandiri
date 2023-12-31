
   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Detail Profil
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Berikut ini adalah detail dari profil <?php echo humanize($first_name); ?> <?php echo humanize($last_name); ?>
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <tr><td>Nisn</td><td><?php echo $nisn; ?></td></tr>
                                <tr><td>Nama</td><td><?php echo humanize($first_name); ?> <?php echo humanize($last_name); ?></td></tr>
                                <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>                                
                                <tr><td>Tempat & Tanggal Lahir</td><td><?php echo $tempat_lahir; ?>, <?php echo indonesian_date($tanggal_lahir); ?></td></tr>                                
                                <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
                                <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
                                <tr><td>Nama Ayah</td><td><?php echo $nama_ayah; ?></td></tr>
                                <tr><td>Pekerjaan Ayah</td><td><?php echo $pekerjaan_ayah; ?></td></tr>
                                <tr><td>Nama Ibu</td><td><?php echo $nama_ibu; ?></td></tr>
                                <tr><td>Pekerjaan Ibu</td><td><?php echo $pekerjaan_ibu; ?></td></tr>
                                <tr><td>Tahun Masuk</td><td><?php echo $tahun_masuk; ?></td></tr>
                                <tr><td>Tahun Lulus</td><td><?php echo $tahun_lulus; ?></td></tr>
                                <tr><td>No Ijazah</td><td><?php echo $no_ijazah; ?></td></tr>
                                <tr><td>No Skhun</td><td><?php echo $no_skhun; ?></td></tr>
                                <tr><td>Organisasi</td><td><?php echo $ekskul; ?></td></tr>
                                <tr><td>Status</td><td><?php echo $status; ?></td></tr>
                                <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
                                <tr><td></td><td><a href="<?php echo site_url('rekapitulasi'); ?>" class="btn btn-flat btn-default">Kembali</a></td></tr>
                            </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>