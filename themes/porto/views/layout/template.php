<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IconE=edge">

		<title>Mau Daftar - Layanan Portal Pendaftaran</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url().THEMES;?>img/favicon.png" type="image/x-icon" />
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
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>vendor/carousel.marquee.scrollbox/demos/article.css">

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
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url().THEMESPATH;?>vendor/modernizr/modernizr.min.js"></script>
		<style>
			.scroll{
			  overflow: scroll;
			  height: 500px;

			  /*script tambahan khusus untuk IE */
			  scrollbar-face-color: #CE7E00;
			  scrollbar-shadow-color: #FFFFFF;
			  scrollbar-highlight-color: #6F4709;
			  scrollbar-3dlight-color: #11111;
			  scrollbar-darkshadow-color: #6F4709;
			  scrollbar-track-color: #FFE8C1;
			  scrollbar-arrow-color: #6F4709;
			}
		</style>

	</head>
	<body>
		<div class="body">
			<header id="header" class="header-narrow" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 0, "stickySetTop": "-0px", "stickyChangeLogo": true}'>
				<div class="header-body" style="background: url(<?php echo base_url().THEMESPATH;?>img/md-bg-header.jpg">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.html">
										<img alt="Porto" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url().THEMESPATH;?>img/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">

								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<?php $this->load->view('navigation') ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
			<?php if($isSlider):  
						echo $slider;
				endif;
			?>
			<?php if($jumBreadcrums > 1):  
						echo $breadcrumbs;
				endif;
			?>
				
				<!-- CONTENT DARI WEB YANG BERUBAH-UBAH SESUAI DENGAN PEMANGGILAN DI CONTROLLER -->			
				<?php echo $contents ?>
				<!-- **************************************** -->
<!-- 				<div class="home-intro" id="home-intro">
					<div class="container">

						<div class="row">
							<div class="col-md-12">
							<center>
								<p>
									File: app/theme/porto/view/layout/template.php 
									<span>This will show on all page</span><br>
									<span>Please change it...</span>
								</p>
								</center>
							</div>

						</div>

					</div>
				</div>	 -->
			</div>
			<?php $this->load->view('footer') ?> 
		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/jquery-cookie/jquery-cookie.min.js"></script>

		<script src="<?php echo base_url().THEMESPATH;?>master/style-switcher/style.switcher.js"></script>

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
		<script src="<?php echo base_url().THEMESPATH;?>vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>js/views/view.home.js"></script>


		<!-- Admin Extension Specific Page Vendor -->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/pnotify/pnotify.custom.js"></script>

		<!-- Admin Extension Specific Page Vendor -->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js"></script>
		<script src="<?php echo base_url().THEMESPATH;?>vendor/carousel.marquee.scrollbox/jquery.scrollbox.js"></script>

		<!-- Admin Extension -->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/javascripts/theme.admin.extension.js"></script>

		<!-- Admin Extension Examples -->
		<script src="<?php echo base_url().THEMESPATH;?>admin/assets/javascripts/forms/examples.wizard.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url().THEMESPATH;?>js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url().THEMESPATH;?>js/theme.init.js"></script>

		<!-- Examples -->
		<script src="<?php echo base_url().THEMESPATH ?>js/examples/examples.portfolio.js"></script>

		<script>


// In your JavaScript
var auth_response_change_callback = function(response) {
  console.log("auth_response_change_callback");
  console.log(response);
}

var auth_status_change_callback = function(response) {
  console.log("auth_status_change_callback: " + response.status);
}

</script>


<div id="status">
</div>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>
