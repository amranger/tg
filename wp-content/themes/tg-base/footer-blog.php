		<!-- ==============================================
		CONTACT
		=============================================== -->	
		<section id="contact" class="dark-bg light-typo padding-top">
			<div class="container">

				
					<div class="scrollimation scale-in">
						<div class="row">
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 hidden-xs">
								 <img src="<?php bloginfo('template_directory'); ?>/library/images/tg-letters.png" class="img-responsive" />
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-push-5 col-md-push-5 col-sm-push-5">
								<p>Tips on improving your existing site, the latest from Google and more.</p>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Keep Current with the TG Newsletter">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="button">Go!</button>
									</span>
								</div><!-- /input-group -->	
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-pull-5 col-md-pull-5 col-sm-pull-5">
								<small>
									<div itemscope itemtype="http://schema.org/Organization">
										<span itemprop="name">Telegraphics, Inc.</span><br />
										<span itemprop="description">An Interactive Media Company</span>
										<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
												<span itemprop="streetAddress">9703 Cary Ave</span><br />
												<span itemprop="addressLocality">Schiller Park</span>, <span itemprop="addressRegion">IL</span> <span itemprop="postalCode">60176</span>
										</div>
										<i class="fa fa-phone icon"></i><a itemprop="telephone" href="tel:8478349327">847-834-9327</a><br />
										<i class="fa fa-envelope icon"></i><a itemprop="email" href="mailto:info@telegraphicsinc.com">info@telegraphicsinc.com</a><br />
										<i class="fa fa-user icon"></i><a itemprop="email" href="mailto:support@telegraphicsinc.com">support@telegraphicsinc.com</a>
									</div>
								</small>
							</div>
						</div>
					</div>
				
			</div>
		</section>
		
		<!-- ==============================================
		FOOTER
		=============================================== -->	
		
		<footer id="main-footer" class="dark-bg light-typo">
		
			<div class="container">
			
				<hr>
				
				<div class="row">
				
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<ul class="social-links">
							<li class="scrollimation fade-right"><a target="_blank" href="http://www.facebook.com/telegraphics"><i class="fa fa-facebook fa-fw"></i></a></li>
							<li class="scrollimation fade-right d2"><a target="_blank" href="https://twitter.com/telegraphicsinc"><i class="fa fa-twitter fa-fw"></i></a></li>
							<li class="scrollimation fade-right d3"><a target="_blank" href="http://google.com/+TelegraphicsIncSchillerPark"><i class="fa fa-google-plus fa-fw"></i></a></li>
							<li class="scrollimation fade-right d4"><a target="_blank" href="http://www.pinterest.com/telegraphics/"><i class="fa fa-pinterest fa-fw"></i></a></li>
							<li class="scrollimation fade-right d5"><a target="_blank" href="http://www.linkedin.com/company/telegraphics-inc-"><i class="fa fa-linkedin fa-fw"></i></a></li>
							<li class="scrollimation fade-right d6"><a target="_blank" href="http://vimeo.com/telegraphics"><i class="fa fa-vimeo-square fa-fw"></i></a></li>
						</ul>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
						<p id="copyright">&copy;<?=date('Y',time())?> Telegraphics, Inc. All Rights Reserved. <a href="<?=bloginfo('url')?>/privacy-policy">Privacy Policy</a> | <a href="<?=bloginfo('url')?>/terms-of-use">Terms of Use</a></p>
					</div>
					
				</div>
				
			</div>
			
		</footer>
		
	<?php include(get_template_directory().'/includes/scripts.php'); ?>
	<?php wp_footer(); ?>

</body>
</html>