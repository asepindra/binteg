<?php
		$this->template->breadcrumbs (array(
						'Referensi'=>'#','Saldo',
					));
?>
				<div class="container">

					<div class="row">
						<div class="col-md-12 panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Data Referensi</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered table-striped mb-none" id="datatable-editable">
										<thead>
											<tr>
												<?php
													foreach ($obj[0] as $key => $h) {
														echo '<td>'.$key.'</td>';
													}
												?>
											</tr>
										</thead>
										<tbody>
										<?php
											$no = 0;
											foreach ($obj as $v) {
												echo '<tr data-item-id='.++$no.'>';
												foreach ($v as $key => $value) {
													echo '<td>'.$value.'</td>';
												}
												echo '</tr>';
												
											}
										?>

										</tbody>
									</table>
									</div>
							</div>						

						</div>

					</div>


				</div>
