<?php
		$this->template->breadcrumbs (array(
						'Transaksi'=>'#','Layanan Pendidikan',
					));
?>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-info alert-admin">
								<div class="row">
									<form action="<?php echo base_url();?>index.php/transaksi/uploadLayananPendidikan/" method="post" enctype="multipart/form-data">
										<div class="col-md-8">
											<h4>Import Data Layanan Pendidikan (xls or xlsx)</h4>
											<p><strong class="warning"><i class="fa fa-warning"></i> Warning!</strong> Upload file excel menggunakan format yang sesuai.
											<a href="<?=base_url('resources/file/format_layanan_pendidikan.xlsx')?>"><strong><i class="fa fa-download"></i>Contoh File Layanan Pendidikan</strong></a> </p>
											<input type="file" name="file_upload" >
											<p>
												<input class="btn btn-lg btn-sm btn-primary" type="submit" value="Upload">
											</p>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">

					<div class="row">
						<div class="col-md-12 panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Data Layanan Pendidikan</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered table-striped mb-none" id="datatable-editable">
										<thead>
											<tr>
												<th>Kode Satker</th>
												<th>Tahun</th>
												<th>Bulan</th>
												<th>Kode Fakultas</th>
												<th>Kode Prodi</th>
												<th>Kode Jurusan</th>
												<th>Kode Akreditasi</th>
												<th>Tanggal Update</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										<?php
											setlocale(LC_MONETARY, 'id_ID');
											$no = 0;
											foreach ($data->result() as $key => $v) {
											echo "<tr data-item-id=".++$no.">
												<td>$v->kode_satker</td>
												<td>$v->tahun</td>
												<td>$v->bulan</td>
												<td>$v->kode_fakultas</td>
												<td>$v->kode_program_studi</td>
												<td>$v->kode_jurusan</td>
												<td>$v->kode_akreditasi</td>
												<td>$v->tanggal_update</td>
												<td><a href='".base_url('index.php/transaksi/hapusLayananPendidikan/'.$v->kode_satker)."' title='Hapus' onclick='return confirm(\"Apakah yakin ingin dihapus?\")'><i class='fa fa-trash'></i></a></td>
											</tr>";
												
											}
										?>

										</tbody>
									</table>
									</div>
							</div>						

						</div>

					</div>


				</div>
