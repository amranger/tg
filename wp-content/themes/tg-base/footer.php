		<!-- ==============================================
		CONTACT
		=============================================== -->
		<section id="contact" class="dark-bg light-typo padding-top">
			<div class="container">
				<?//= do_shortcode('[gravityform id="7" name="Get a Quote"]'); ?>
			</div>
		</section>

		<!-- ==============================================
		FOOTER
		=============================================== -->

		<footer id="main-footer" class="dark-bg light-typo">
			<div class="container">
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<ul class="social-links">
							<li class="scrollimation fade-right"><a target="_blank" href="http://www.facebook.com/telegraphics"><i class="fa fa-facebook fa-fw"></i></a></li>
							<li class="scrollimation fade-right d2"><a target="_blank" href="https://twitter.com/telegraphicsinc"><i class="fa fa-twitter fa-fw"></i></a></li>
							<li class="scrollimation fade-right d3"><a target="_blank" a href="https://plus.google.com/b/117456864039273675060/+telegraphicsIncSchillerPark/about" rel="publisher"><i class="fa fa-google-plus fa-fw"></i></a></li>
							<li class="scrollimation fade-right d4"><a target="_blank" href="http://www.pinterest.com/telegraphics/"><i class="fa fa-pinterest fa-fw"></i></a></li>
							<li class="scrollimation fade-right d5"><a target="_blank" href="http://www.linkedin.com/company/telegraphics-inc-"><i class="fa fa-linkedin fa-fw"></i></a></li>
							<li class="scrollimation fade-right d6"><a target="_blank" href="http://vimeo.com/telegraphics"><i class="fa fa-vimeo-square fa-fw"></i></a></li>
						</ul>
					</div>
					<div class="col-sm-6 text-right scrollimation fade-in">
						<div class="grs" itemscope itemtype="http://schema.org/Organization">
							<span itemprop="name">Telegraphics, Inc.</span><br />
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
								<span itemprop="streetAddress">9703 Cary Ave</span><br />
								<span itemprop="addressLocality">Schiller Park</span>, <span itemprop="addressRegion">IL</span> <span itemprop="postalCode">60176</span>
							</div>
							<a itemprop="telephone" href="tel:8478349327">847-834-9327</a><br />
							<a itemprop="email" href="mailto:info@telegraphicsinc.com">info@telegraphicsinc.com</a><br />
						</div>
						<p id="copyright">&copy;<?= date('Y', time()) ?> Telegraphics, Inc. All Rights Reserved. <a href="<?= bloginfo('url') ?>/privacy-policy">Privacy Policy</a></p>
					</div>
				</div>
			</div>
		</footer>

		<?php include(get_template_directory() . '/includes/scripts.php'); ?>
		<?php wp_footer(); ?>


		</body>

		</html>