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
								<h1 style="margin-top: 10px; padding: 0 0 40px;"><?php echo $title?></h1>
							</div>
							<?php if($this->aauth->is_loggedin()) { ?>
							<div class="col-md-4">
								<div class="mt-sm mb-xl">

								<center ><h4><span class="inverted inverted-tertiary">Login</span><span class="inverted inverted-primary"> Sebagai</span><span  class="inverted inverted-secondary"> <?php

									echo $this->aauth->get_user()->user_fullname
								?></span></h4></center>


								</div>
							</div>
							<?php }?>
						</div>
					</div>
				</section>
