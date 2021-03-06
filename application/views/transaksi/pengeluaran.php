<?php
		$this->template->breadcrumbs (array(
						'Transaksi'=>'#','Pengeluaran',
					));
?>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-info alert-admin">
								<div class="row">
									<form action="<?php echo base_url();?>index.php/transaksi/uploadPengeluaran/" method="post" enctype="multipart/form-data">
										<div class="col-md-8">
											<h4>Import Data Pengeluaran (xls or xlsx)</h4>
											<p><strong class="warning"><i class="fa fa-warning"></i> Warning!</strong> Upload file excel menggunakan format yang sesuai.
											<a href="<?=base_url('resources/file/format_pengeluaran.xlsx')?>"><strong><i class="fa fa-download"></i>Contoh File Pengeluaran</strong></a> </p>
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
						
								<h2 class="panel-title">Data Pengeluaran</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered table-striped mb-none" id="datatable-editable">
										<thead>
											<tr>
												<th>Tanggal Pengeluaran</th>
												<th>Kode Akun</th>
												<th>Saldo</th>
												<th class="hidden-xs">Tanggal Update</th>
												<th class="hidden-xs">Aksi</th>
											</tr>
										</thead>
										<tbody>
										<?php
											setlocale(LC_MONETARY, 'id_ID');
											$no = 0;
											foreach ($data->result() as $key => $v) {
											echo "<tr data-item-id=".++$no.">
												<td>$v->Tanggal</td>
												<td>$v->KodeAkun
												</td>
												<td>".number_format($v->Saldo,0,".",".")."</td>
												<td>$v->TanggalUpdate</td>
												<td><a href='".base_url('index.php/transaksi/hapusPengeluaran/'.$v->Tanggal.'/'.$v->KodeAkun)."' title='Hapus' onclick='return confirm(\"Apakah yakin ingin dihapus?\")'><i class='fa fa-trash'></i></a></td>
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
