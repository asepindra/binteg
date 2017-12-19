<nav>
	<ul class="nav nav-pills" id="mainNav">
		<li class="<?=$isberanda?>">
			<a href="<?=site_url()?>">
			<i class="fa fa-home"> </i>
				Beranda
			</a>
		</li>
		<li class="<?=$isAboutUs?>">
			<a href="<?=site_url('AboutUs')?>" class='dropdown-toggle' data-toggle="dropdown">
			<i class="fa fa-gear"> </i>
				Referensi
			</a>
			<ul class="dropdown-menu">
					<li>
						<a href="<?=site_url('index.php/referensi/fakultas')?>">
							<div class="details">
								<div class="name"><i class="fa fa-dot-circle-o"></i>
								<strong>Fakultas</strong></div>
<!-- 								<div class="message">
									Lorem ipsum Commodo quis nisi ...
								</div> -->
							</div>
						</a>
					</li>

					<li>
						<a href="<?=site_url('index.php/referensi/program_studi')?>">
						<i class="fa fa-dot-circle-o"></i>
							<strong>Program Studi</strong>
						</a>
					</li>
					<li>
						<a href="<?=site_url('index.php/referensi/jurusan')?>">
						<i class="fa fa-dot-circle-o"></i>
							<strong>Jurusan</strong>
						</a>
					</li>					
					<li>
						<a href="<?=site_url('index.php/referensi/akreditasi')?>">
						<i class="fa fa-dot-circle-o"></i>
							<strong>Akreditasi</strong>
						</a>
					</li>					
			</ul>			
		</li>
		<li class="<?=$isDaftarLayanan?>">
			<a href="<?=site_url('index.php/transaksi/layananPendidikan')?>">
			<i class="fa fa-info"> </i>
				Layanan Pendidikan
			</a>
		</li>
		<li class="<?=$isPenerimaan?>">
			<a href="<?=site_url('index.php/transaksi/penerimaan')?>">
			<i class="fa fa-download"> </i>
				Penerimaan
			</a>
		</li>
		<li class="<?=$isfaq?>">
			<a href="<?=site_url('index.php/transaksi/pengeluaran')?>">
			<i class="fa fa-send"></i>
				Pengeluaran
			</a>
		</li>
		<li class="<?=$isLayananku?>">
			<a href="<?=site_url('index.php/transaksi/saldo')?>">
			<i class="fa fa-money"> </i>
				Saldo
			</a>
		</li>
		<li class="<?=$isLayananku?>">
			<a href="<?=site_url('index.php/referensi/log')?>">
			<i class="fa fa-history"> </i>
				Log
			</a>
		</li>
		<li class="<?=$isLayananku?>">
			<a href="<?=site_url('index.php/referensi/wslink')?>">
			<i class="fa fa-link"> </i>
				WS Link
			</a>
		</li>		
	</ul>
</nav>
