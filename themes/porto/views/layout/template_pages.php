<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Ajamma - Ajang Aspirasi Masyarakat Makassar</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

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
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url().THEMESPATH;?>css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url().THEMESPATH;?>vendor/modernizr/modernizr.min.js"></script>
		<style>
			.scroll{
			  overflow: scroll;
			  height: 600px;

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
		<?php
			error_reporting(E_ALL ^ E_NOTICE);
			$user_id      = $this->aauth->get_user()->id;
		?>
		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.html">
										<img alt="Porto" width="222" height="85" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url().THEMESPATH;?>img/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">

								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/ajammaki" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/ajammaki" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										</ul>
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
				<section class="page-header section-text-light section-background"  style="background-image: url(<?=base_url().THEMESPATH?>img/patterns/random_grey_variations.png);">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							<?php
								if(is_array($breadcrumbs))
								{
								echo '<ul class="breadcrumb">';
								foreach ($breadcrumbs as $key => $value) {
									# code...
									if($key !== 0)
									echo "<li><a href='".site_url($value)."'>".$key."</a></li>";
									else
									echo "<li class='active'>".$value."</li>";
								}
								echo '</ul>';
								}
								?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<h1 style="margin-top: 50px; padding: 0 0 40px;"><?=$title?></h1>
							</div>
							<div class="col-md-4">
								<div class="mt-sm mb-xl">

								<?php if($this->aauth->is_loggedin()) { ?>
								<center ><h4><span class="inverted inverted-tertiary">Selamat Datang</span><span class="inverted inverted-primary"> Kembali</span><span  class="inverted inverted-secondary"> <?php

									echo $this->aauth->get_user()->user_fullname
								?></span></h4></center>
								<?php }
								else
								{
								?>
									<div class="col-sm-5">
										<div class="row">
										 	<center><span class="appear-animation alternative-font " data-appear-animation="fadeInDown" data-appear-animation-delay="600">Registrasi </span></center>
									 	</div>
										<div class="row featured-boxes-style-2">
											<div class="featured-box featured-box-green  appear-animation featured-box-effect-4 nol-margin "  data-appear-animation="fadeInDown">
												<a href="#daftar" >
												<button type="button" data-hash class="icon-featured no-margin" alt="Daftar" >
												<i class="fa fa-registered"></i>
												</button>
												</a>
											</div>
										</div>
									</div>
									<div class="col-sm-7">
										<div class="row">
										 	<center><span class="appear-animation alternative-font " data-appear-animation="fadeInDown" data-appear-animation-delay="600">atau login dengan </span></center>
									 	</div>
										<div class="row featured-boxes-style-2">
											<div class="col-sm-4 featured-box featured-box-dark appear-animation featured-box-effect-4 nol-margin"  data-appear-animation="fadeInDown" data-appear-animation-delay="500">
												<a href="<?=site_url('site/login')?>" >
												<button type="button" href="" class="icon-featured " alt="Login Akun" >
												<i class="fa fa-lock"></i>
												</button>
												</a>
											</div>
											<div id="status"></div>
											<div class="col-sm-4 featured-box featured-box-secondary appear-animation featured-box-effect-4 nol-margin"  data-appear-animation="fadeInDown" data-appear-animation-delay="700">
												<!-- <a href="<?=site_url('user/login_fb')?>" > !-->
												<button type="button" href=""  onclick="checkLoginState()" class="icon-featured" alt="Login Dengan Facebook" >
												<i class="fa fa-facebook"></i>
												</button>
												<!-- </a> !-->
											</div>
											<div class="col-sm-4 featured-box featured-box-twitter appear-animation featured-box-effect-4 nol-margin"  data-appear-animation="fadeInDown" data-appear-animation-delay="900">
												<a href="<?=site_url('site/twitter')?>" >
												<button type="button" href="" class="icon-featured" alt="Login Dengan Twitter" >
												<i class="fa fa-twitter"></i>
												</button>
												</a>
											</div>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row mb-xl">
						<div class="col-md-8">

							<?php $this->load->view($main_view) ?>

						</div>

						<div class="col-md-4">
							<aside class="sidebar">

							<div class="row featured-boxes featured-boxes-style-8">
								<?php $this->load->view('site/box_tracking'); ?>
								<?php $this->load->view('site/box_hot_aduan'); ?>
								<?php $this->load->view('site/box_twitter'); ?>
							</div>

								<hr>

								<h4 class="heading-primary">Tentang Kami</h4>
								<p>Aplikasi "Ajamma" adalah Aplikasi yang diperuntukkan untuk warga kota makassar yang ingin
								memberikan aduan atau masukkan yang berhubungan dengan kota makassar. Aduan dari warga akan langsung diterima
								oleh anggota Dewan Perwakilan Rakyat Daerah Kota Makassar</p>

							</aside>
						</div>
					</div>



					<div class="row">
						<div class="col-md-12 center">
							<hr>
							<h2><span class="alternative-font font-size-md mt-xl">Makassar City, Sombere & Smart City</span></h2>
						</div>
					</div>

				</div>
				<section class="parallax section section-text-light section-parallax section-center mt-xl mb-none" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo base_url().THEMESPATH;?>img/slides/mesjid.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<h2><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs"></i><br><strong>Pendapat Warga</strong></h2>
								<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-none" data-plugin-options='{"items": 1, "loop": false}'>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Dengan Sistem Aduan ini Kita bisa melaporkan apa saja keluhan kita ke anggota dewan</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Baco</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Kita sebagai warga lebih dekatki dengan anggota dewanta</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Dg. Cora</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Tak ada duanya ini aplikasi</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Dg. Serang</strong></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="daftar" class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="call-to-action-content align-left pb-md mb-xl ml-none">
									<h2 class="mb-xs mt-xl">Formulir Registrasi <strong>Ajamma!</strong></h2>
									<p class="lead mb-sl">silakan membuat Id "Jamma!" baru Anda dengan mengisi formulir registrasi singkat di bawah ini:</p>
								</div>
                                   <form method="post" action="<?=site_url().'/site/register'?>" id="myform" name="myform" enctype="multipart/form-data"  class="form-horizontal" novalidate="novalidate">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="fullname">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="" name="fullname"  id="fullname" placeholder="Isi Nama Lengkap Anda" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="username">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="" name="username"  id="username" placeholder="Isi Username Anda" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="email">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email"  class="form-control" value="" name="email"  id="email" placeholder="Isi Email Anda" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="password">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" value="" name="password"  id="password" placeholder="Isi Password Anda" minlength="6" required>
                                        </div>
                                    </div>
								<div class="call-to-action-btn">
									<button type="submit"  class="btn btn-lg btn-primary"><i class="fa fa-user mr-xs"></i> Daftar</button>
									<p><span class="alternative-font font-size-sm mt-xs text-color-primary">Jadilah Warga yang sombere!</span></p>
								</div>
                                  </form>

							</div>
						</div>
					</div>
				</section>
			</div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Hubungan</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Dikembangkan Oleh</h4>
								<p>Sekretariat Dewan Perwakilan Rakyat Daerah Kota Makassar.</p>
								<div class="col-md-4">
									<a href="index.html" class="logo">
										<img alt="Porto Website Template" class="img-responsive" src="<?php echo base_url()?>resources/image/galeri/Makassar.png">
									</a>
								</div>

							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Kontak Kami</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Alamat:</strong>JL Andi Pangerang Pettarani, Blok E No. 1-2, Kec. Makassar. Makassar - Sulawesi Selatan</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (0411) 868296</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="dprd-makassarkota.go.id">sekretariat@dprd-makassarkota.go.id</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Ikuti Kami</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<p>DPRD Kota Makassar© Copyright 2016. All Rights Reserved.</p>
							</div>
							<!-- <div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.html">Sitemap</a></li>
										<li><a href="contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div> -->
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
<!--
		<script src="<?php echo base_url().THEMESPATH;?>master/style-switcher/style.switcher.js"></script>
!-->
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
		<script src="js/views/view.home.js"></script>


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

		<!-- Theme Custom -->
		<script src="<?php echo base_url().THEMESPATH;?>js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url().THEMESPATH;?>js/theme.init.js"></script>
		<script type="text/javascript">
		var url_connectfb = "<?php echo site_url('site/connect_fb')?>";
		var url_pagefb = "<?php echo site_url('site/pagefb')?>";
		</script>
		<script src="<?php echo base_url()?>plugins/fb-core.js"></script>
		<script src="<?php echo base_url()?>plugins/fb-login.js"></script>
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
          <script>

			(function($) {

			'use strict';

				$( "#myform" ).validate({

		            rules: {
		                email: {
		                    required: true,
		                    email: true,
		                    remote: {
		                        url: "<?=site_url('welcome/cekemail')?>",
		                        type: "post"
		                     }
		                },
		                username: {
		                    required: true,
		                    remote: {
		                        url: "<?=site_url('welcome/cekuser')?>",
		                        type: "post"
		                     }
		                }
		            },
		            messages: {
		                email: {
		                    required: "Please Enter Email!",
		                    email: "This is not a valid email!",
		                    remote: "Email already in use!"
		                },
		                username: {
		                    required: "Please Enter Username!",
		                    remote: "User already in use!"
		                }
		            }
				});
/*				jQuery.validator.setDefaults({
				  debug: true,
				  success: "valid"
				});
				var form = $( "#myform" );
				form.validate();
				$( "button" ).click(function() {
					if(form.valid())
					{

					}
				  alert( "Valid: " + form.valid() );
				});
*/
			}).apply(this, [jQuery]);
          </script>

	</body>
</html>
