<?php
		$this->template->breadcrumbs (array(
						'Error'=>'#'
					));


?>
					<section class="page-not-found">
						<div class="row">
							<div class="col-md-6 col-md-offset-1">
								<div class="page-not-found-main">
									<h2>404 <i class="fa fa-file"></i></h2>
									<p>Halaman yang anda akses tidak ada atau tidak valid.</p>
								</div>
							</div>
							<div class="col-md-4">
								<h4 class="heading-primary">Berikut Link yang berguna</h4>
								<ul class="nav nav-list">
									<li><a href="<?php echo site_url('') ?>">Home</a></li>
									<li><a href="<?php echo site_url('DaftarLayanan') ?>">Daftar Layanan</a></li>
									<li><a href="<?php echo site_url('Panduan') ?>">Panduan</a></li>
									<li><a href="<?php echo site_url('Faq') ?>">FAQ's</a></li>
									<li><a href="<?php echo site_url('Provider') ?>">Provider</a></li>
								</ul>
							</div>
						</div>
					</section>