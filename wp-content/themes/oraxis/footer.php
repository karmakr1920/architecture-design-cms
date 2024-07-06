<!-- Cta Section Start -->
<?php if (!is_page('130') && !is_front_page()) { ?>
	<section class="cta-banner-section-2">
		<div class="container">
			<div class="cta-banner-wrapper-2">
				<div class="cta-image wow fadeInUp" data-wow-delay=".3s">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cta-img.png" alt="cta-img">
					<div class="circle-shape">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/circle-border.png" alt="shape-img">
					</div>
				</div>
				<?php $call_to_acrion = get_field('call_to_acrion', 'option'); ?>
				<div class="section-title-area">
					<div class="section-title mb-0">
						<h2 class="text-white wow fadeInUp" data-wow-delay=".5s">
							<?php echo $call_to_acrion['title']; ?>
						</h2>
					</div>
					<a href="<?php echo $call_to_acrion['cta_button']['url']; ?>" class="theme-btn bg-white padding-style wow fadeInUp" data-wow-delay=".7s">
						<?php echo $call_to_acrion['cta_button']['title']; ?>
						<i class="fas fa-long-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
<!-- Footer Section Start -->
<footer class="footer-section section-bg-2">
	<div class="bg-shape">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-bg-shape.png" alt="shape-img">
	</div>
	<div class="container">
		<div class="footer-widgets-wrapper style-2">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
					<div class="single-footer-widget">
						<div class="widget-head">
							<a href="index.html">
								<img src="<?php echo get_field('footer_logo', 'option')['url']; ?>" alt="<?php echo get_field('footer_logo', 'option')['title']; ?>">
							</a>
						</div>
						<div class="footer-content">
							<p>
								<?php echo get_field('footer_logo_description', 'option'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
					<?php $address = get_field('address', 'option'); ?>
					<div class="single-footer-widget">
						<div class="widget-head">
							<h3>Address</h3>
						</div>
						<div class="footer-content">
							<div class="contact-info-area-2">
								<div class="contact-items">
									<div class="icon">
										<i class="fas fa-paper-plane"></i>
									</div>
									<div class="content">
										<p><?php echo $address['address_line']; ?></p>
									</div>
								</div>
								<?php $email = $address['email'];
								if (!empty($email)) { ?>
									<div class="contact-items">
										<div class="icon">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="content">
											<h6>
												<?php foreach ($email as $data) { ?>
													<a href="mailto:<?php echo $data['add_email']; ?>" class="link"><?php echo $data['add_email']; ?></a>
												<?php } ?>
											</h6>
										</div>
									</div>
								<?php } ?>
								<div class="contact-items">
									<div class="icon">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="content">
										<h6><a href="tel:0123456789101">012 345 678 9101</a></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 ps-lg-5 col-md-6 wow fadeInUp" data-wow-delay=".7s">
					<div class="single-footer-widget">
						<div class="widget-head">
							<h3>Get Free Link</h3>
						</div>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'footer',
							'container' => false,
							'menu_class' => 'list-items',
							// 'walker' => new My_Custom_Walker()
						));
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom style-2">
		<div class="container">
			<div class="footer-wrapper d-flex align-items-center justify-content-between">
				<p class="wow fadeInLeft text-white" data-wow-delay=".3s">
					&copy; <a href="index.html" class="text-white"><?php echo get_field('copyright', 'option'); ?></a> <?php the_date('Y') ?> | All Rights Reserved
				</p>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'policy',
					'container' => false,
					'menu_class' => 'footer-menu wow fadeInRight',
					'menu_id' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul class="%2$s" data-wow-delay=".5s">%3$s</ul>',
					// 'walker' => new Footer_Menu_Walker()
				));
				?>
			</div>
		</div>
	</div>
</footer>

<!--<< All JS Plugins >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script>
<!--<< Viewport Js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/viewport.jquery.js"></script>
<!--<< Bootstrap Js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<!--<< Nice Select Js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.nice-select.min.js"></script>
<!--<< Waypoints Js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.waypoints.js"></script>
<!--<< Counterup Js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
<!--<< Swiper Slider Js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<!--<< MeanMenu Js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.meanmenu.min.js"></script>
<!--<< Magnific Popup Js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<!--<< Wow Animation Js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
<!--<< Main.js >>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>