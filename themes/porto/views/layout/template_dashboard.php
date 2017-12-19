<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>BINTEG (Open Source, V.1)</title>
		<?php
		// if(isset($meta)){
		//  	$this->load->view('meta',$data['meta']);
		// }
		// else {
		//  	$this->load->view('meta_default',$data['meta']);

		// } ?>

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url().THEMESPATH;?>img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url().THEMESPATH;?>img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/theme-shop.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/circle-flip-slideshow/css/component.css">


		<!-- Skin CSS -->
<!-- 		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/skins/skin-corporate-3.css">
 -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/skins/default-dashboard.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/custom.css">
		<!-- Head Libs -->


		<!-- Form -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/dropzone/basic.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/dropzone/dropzone.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/codemirror/theme/monokai.css" />

		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Admin Extension Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/pnotify/pnotify.custom.css" />

		<!-- Admin Extension CSS -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/stylesheets/theme-admin-extension.css">

		<!-- Admin Extension Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>admin/assets/stylesheets/skins/extension.css">


		<script src="<?php echo base_url().THEMESPATH;?>vendor/modernizr/modernizr.min.js"></script>


	</head>
	<body>
		<style type="text/css">
			.fb_iframe_widget iframe{ position: relative;}
			/*.fb_iframe_widget{overflow: hidden;} */
			.fb-comments{overflow: hidden;}
			.fb_ltr{margin-bottom: -50px; position: relative;}
			.fb-comments > span{ margin-bottom: -50px}
		</style>

		<div class="body">
			<header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 148, "stickySetTop": "-108px", "stickyChangeLogo": false}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
								<h1>[BINTEG] BIOS INTEGRATOR <small>Open Source  V.1</small></h1>
								</div>
							</div>
							<div class="header-column">
								<ul class="header-extra-info hidden-xs">
									<li>
										<div class="feature-box feature-box-style-3">
											<div class="feature-box-icon">
												<i class="fa fa-gears"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">BINTEG V.1</h4>
												<p><small>Developed by UIN Alauddin Makassar</small></p>
											</div>
										</div>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="header-container header-nav header-nav-bar header-nav-bar-primary">
						<div class="container">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
								<?php

									$this->load->view('navigation');
									
								?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
			<?php //if($this->aauth->is_loggedin()): ?>

				<?php //endif; ?>
				<?php if($jumBreadcrums > 1):  
						echo $breadcrumbs;
				endif;
				?>

				<div class="container">

					<?php echo $contents ?>

				</div>


			</div>

			<footer class="short" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h4 class="heading-primary">About BINTEG</h4>
							<p>Aplikasi BINTEG adalah aplikasi Open Source dan tidak diperjualbelikan dengan keperluan apapun. Aplikasi BINTEG digunakan untuk dapat melakukan import data exel kedalam aplikasi</p>
							<hr class="light">
						</div>
						<div class="col-md-3 col-md-offset-1">
							<h5 class="mb-sm">Developed By</h5>
							<span class="phone">UIN Alauddin Makassar</span>
							<p class="mb-none">Pusat Teknologi Informasi dan Pangkalan Data</p>
							<ul class="list list-icons list-icons-sm">
								<li><i class="fa fa-envelope"></i> asep@uin-alauddin.ac.id</li>
							</ul>

						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="<?=site_url()?>" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="<?php echo base_url().THEMESPATH;?>img/logo.png">
								</a>
							</div>
							<div class="col-md-11">
								<p>© Copyright 2017. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/common/common.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery.stellar/jquery.stellar.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url().THEMESPATH;?>js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php echo base_url().THEMESPATH;?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php echo base_url().THEMESPATH;?>js/views/view.contact.js"></script>

		<!-- Admin Extension Specific Page Vendor -->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/pnotify/pnotify.custom.js"></script>

		<!-- Admin Extension Specific Page Vendor -->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/select2/js/select2.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/fuelux/js/spinner.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/dropzone/dropzone.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/codemirror/lib/codemirror.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/codemirror/mode/css/css.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/summernote/summernote.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/ios7-switch/ios7-switch.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/javascripts/theme.admin.extension.js"></script>


		<!-- Admin Extension Examples -->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/javascripts/forms/examples.advanced.form.js"></script>

		<!-- Admin Extension -->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/javascripts/theme.admin.extension.js"></script>

		<!-- Admin Extension Examples -->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/javascripts/forms/examples.wizard.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/javascripts/forms/my.wizard.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
<!--		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script> !-->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/javascripts/tables/examples.datatables.editable.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url().THEMESPATH;?>js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url().THEMESPATH;?>js/theme.init.js"></script>


		<script type="text/javascript">

		(function($){
		    // Enables popover #1
		    $("[data-toggle=popover]").popover();

		    // Enables popover #2
		    $(".link-popover").popover({
		        html : true,
		        placement : "top",
		        content: function() {
		          return $("#"+$(this).attr('link-content')).html();
		        },
		        title: function() {
		          return $("#"+$(this).attr('link-title')).html();
		        }
		    });

		}).apply(this, [jQuery]);
					</script>

					<script type="text/javascript">
					$('#ws_penerimaan').click(function(){
						$('#form_penerimaan').submit();
						return false;
					})

					$('#ws_pengeluaran').click(function(){
						$('#form_pengeluaran').submit();
						return false;
					})

					$('#ws_saldo').click(function(){
						$('#form_saldo').submit();
						return false;
					})	

					$('#ws_layananpendidikan').click(function(){
						$('#form_layananpendidikan').submit();
						return false;
					})	
						function copyToClipboard(element) {
						  var $temp = $("<input>");
						  $("body").append($temp);
						  $temp.val($(element).text()).select();
						  document.execCommand("copy");
						  alert('Berhasil di copy')
						  $temp.remove();
						}					
					</script>		

</body>
</html>
