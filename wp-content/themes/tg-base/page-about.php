<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- ==============================================
		ABOUT
		=============================================== -->
		<section class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h1><?=the_title()?></h1>
					<?=the_content()?>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<address class="text-small">Telegraphics, Inc.<br />9703 Cary Ave.<br />Schiller Park, IL 60176<br />
							847-834-9327</address>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 small">
							<p><a href="mailto:info@telegraphics.com" title="Email Us"><i class="fa fa-envelope"></i> info@telegraphicsinc.com</a><br />
							<a href="mailto:support@telegraphicsinc.com"><i class="fa fa-user"></i> support@telegraphicsinc.com</a><br />
							<a href="skype:tg_chicago?userinfo"><i class="fa fa-skype"></i> @tg_chicago</a><br />
							<a href="https://plus.google.com/117456864039273675060/about"><i class="fa fa-video-camera"></i> google hangout</a></p>
						</div>
					</div>
				</div>	
				<div id="employees" class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-0 col-md-offset-0">
					<h2>The Telegraphics, Inc. Team</h2>
					<div class="clearfix"></div>
					<div class="row text-small">
						<?php $recent = new WP_Query('post_type=employee&posts_per_page=-1&orderby=menu_order&order=ASC'); $x=0;
							while($recent->have_posts()) : $recent->the_post(); ?>	
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center">
									<a href="<?php the_permalink(); ?>">
										<?php 
											$attachment = get_post(get_field('e_image'));
											$imageTitle = $attachment->post_title; 
											$image_attributes = wp_get_attachment_image_src(get_field('e_image'), 'mainemployee' ); 
										?>
										<img src="<?=$image_attributes[0];?>" class="img-responsive img-thumbnail img-center" alt="<?=$imageTitle;?>" />
									</a>
									<h4><?=the_title()?></h4>
									<h5><?=get_field('e_title');?></h5>
<!-- 									<p><?=get_field('e_excerpt');?></p> -->
								</div>	
						<?php $x++; endwhile; ?>	
					</div>
					<div class="row">
						<div class="col-lg-12">
							<a href="<?=bloginfo('url')?>/services" class="btn btn-primary btn-xl pull-right">Learn About Our Services <i class="fa fa-long-arrow-right icon"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		

<?php include('footer-blog.php'); ?>