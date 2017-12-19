<style type="text/css">
	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}	

</style>
					<br>

					<h4><i class="fa fa-link"></i> Layanan Pendidikan</h4>
					<code><span id="link_layananpendidikan"><?php echo site_url().'index.php/api/bios/LayananPendidikan' ?></span>
					<div class="pull-right col-md-3">
						<form class="pull-right col-md-12" id="form_layananpendidikan" method="post" action="<?php echo site_url().'index.php/api/bios/LayananPendidikan' ?>" target="_blank">						
						<div class="input-group">
						<a href="#" onclick="copyToClipboard('#link_layananpendidikan'); " class="input-group-addon" title="Copy Link"><i class="fa fa-copy"> </i> </a> 
							<a href="" class="input-group-addon" id="ws_layananpendidikan" title="Go to Ws"><i class="fa fa-link"> </i></a>
								<input type="text" class="form-control input-sm" name="tanggal_update" value="<?php echo  date('Y-m-d') ?>">
						</div>
						</form>					
					</div>
					</code>

					<h4><i class="fa fa-link"></i> Penerimaan</h4>
					<code><span id="link_penerimaan"><?php echo site_url().'index.php/api/bios/Penerimaan' ?></span>
					<div class="pull-right col-md-3">
						<form class="pull-right col-md-12" id="form_penerimaan" method="post" action="<?php echo site_url().'index.php/api/bios/Penerimaan' ?>" target="_blank">						
						<div class="input-group">
						<a href="#" onclick="copyToClipboard('#link_penerimaan'); return false" class="input-group-addon" title="Copy Link"><i class="fa fa-copy"> </i> </a> 
							<a href="" class="input-group-addon" id="ws_penerimaan" title="Go to Ws"><i class="fa fa-link"> </i></a>
								<input type="text" class="form-control input-sm" name="TanggalUpdate" value="<?php echo  date('Y-m-d') ?>">
						</div>
						<!-- <input type="hidden" name="TanggalUpdate" value="2017-12-11"> -->
						</form>					
					</div>
					</code>


					<h4><i class="fa fa-link"></i> Pengeluaran</h4>
					<code><span id="link_pengeluaran"><?php echo site_url().'index.php/api/bios/Pengeluaran' ?></span>
					<div class="pull-right col-md-3">
						<form class="pull-right col-md-12" id="form_pengeluaran" method="post" action="<?php echo site_url().'index.php/api/bios/Pengeluaran' ?>" target="_blank">						
						<div class="input-group">
						<a href="#" onclick="copyToClipboard('#link_pengeluaran'); " class="input-group-addon" title="Copy Link"><i class="fa fa-copy"> </i> </a> 
							<a href="" class="input-group-addon" id="ws_pengeluaran" title="Go to Ws"><i class="fa fa-link"> </i></a>
								<input type="text" class="form-control input-sm" name="TanggalUpdate" value="<?php echo  date('Y-m-d') ?>">
						</div>
						</form>					
					</div>
					</code>


					<h4><i class="fa fa-link"></i> Saldo</h4>
					<code><span id="link_saldo"><?php echo site_url().'index.php/api/bios/Saldo' ?></span>
					<div class="pull-right col-md-3">
						<form class="pull-right col-md-12" id="form_saldo" method="post" action="<?php echo site_url().'index.php/api/bios/Saldo' ?>" target="_blank">						
						<div class="input-group">
						<a href="#" onclick="copyToClipboard('#link_saldo'); " class="input-group-addon" title="Copy Link"><i class="fa fa-copy"> </i> </a> 
							<a href="" class="input-group-addon" id="ws_saldo" title="Go to Ws"><i class="fa fa-link"> </i></a>
								<input type="text" class="form-control input-sm" name="TanggalUpdate" value="<?php echo  date('Y-m-d') ?>">
						</div>
						</form>					
					</div>
					</code>
</script>