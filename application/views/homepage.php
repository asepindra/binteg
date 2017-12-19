
				<section class="section section-default section-with-mockup mb-none">
					<div class="row">
						<h2><center>Data Terakhir</center></h2>
					</div>
					<div class="row mt-xl">
						<div class="counters counters-text-dark">
							<div class="col-md-4 col-sm-6">
								<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
									<i class="fa fa-upload v-icon icn-holder"></i>
									<strong><?=$pengeluaran->Tanggal?></strong>
									<!-- <strong data-to="12" data-append="+">0</strong> -->
									<hr>
									<label>Pengeluaran</label>

								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
									<i class="fa fa-download v-icon icn-holder"></i>
									<strong><?=$penerimaan->Tanggal?></strong>
<!-- 									<strong data-to="19">0</strong>
 -->									<hr>
									<label>Penerimaan</label>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900">
									<i class="fa fa-money"></i>
									<strong><?=$saldo->Tanggal?></strong>
									<hr>
									<label>Saldo</label>
								</div>
							</div>
						</div>
					</div>
					</section>
