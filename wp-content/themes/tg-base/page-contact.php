<?php /* Template Name: Contact Page */ ?>
<?php get_header(); the_post(); ?>

<?php  $location = get_field('location', 'options'); if( !empty($location) ): ?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
			<?php $image_attributes = wp_get_attachment_image_src(get_field('logo', 'options'), 'logo' ); ?>
			<center>
				<img src="<?=$image_attributes[0];?>" />
			</center>
			<p>9703 Cary Ave.<br />
			Schiller Park, IL 60176</p>
		</div>
	</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-push-3 col-md-push-3 col-sm-push-3">
			<?=do_shortcode('[gravityform id="2" name="Contact Us" title="true" ajax="true"]');?>	
		</div>
		<div id="our-office" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-lg-pull-6 col-md-pull-6 col-sm-pull-6">
			<h3>Our Office</h3>
			<p>Telegraphics, Inc.<br>
			9703 Cary Ave.<br>
			Schiller Park, IL 60176</p>
			<p>ph 847-834-9327<br>
			fax 847-928-0808</p>
			<p><small><a href="mailto:info@telegraphics.com" title="Email Us"><i class="fa fa-envelope"></i> info@telegraphicsinc.com</a><br />
			<a href="mailto:support@telegraphicsinc.com"><i class="fa fa-user"></i> support@telegraphicsinc.com</a><br />
			<a href="skype:tg_chicago?userinfo"><i class="fa fa-skype"></i> @tg_chicago</a><br />
			<a href="https://plus.google.com/117456864039273675060/about"><i class="fa fa-video-camera"></i> google hangout</a></small></p>
		</div>
		
		<div id="careers" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<h3>Careers</h3>
			<p>As our team continues to grow, we're always looking for talented people to work with. Check out our careers section for current open positions.</p>
			<p><a class="btn btn-primary" href="<?=bloginfo('url')?>/backend-website-developer/"><i class="fa fa-user icon"></i>&nbsp;View Openings &nbsp;</a></p>
		</div>
	</div>
</div>

<?php include('footer-blog.php'); ?>