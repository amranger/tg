<?php get_header(); the_post();?>
<style>
	.bg-dark-grey {
			color: <?= get_field('text_color_one'); ?>;
			background: <?= get_field('background_color_one'); ?>;
		}
	#responsive, .social-links li a, .social-links li a:hover, #contact .gform_footer input.gform_button, .btn-meflat, .sphere {
		color: <?= get_field('text_color_two'); ?>;
		background: <?= get_field('background_color_two'); ?>
	}
	.bg-light, .flex-direction-nav .flex-next, .flex-direction-nav .flex-prev {
		color: <?= get_field('text_color_three'); ?>;
		background: <?= get_field('background_color_three'); ?>;
	}
	.bg-grey, .single-project #project-logo {
		color: <?= get_field('text_color_four'); ?>;
		background: <?= get_field('background_color_four'); ?>;
	}
	<?php if(is_single('1458')): ?>
		.before-button {background-image: url('<?php bloginfo('template_directory'); ?>/library/images/buttons/frp_before_button.png');}
		.after-button {background-image: url('<?php bloginfo('template_directory'); ?>/library/images/buttons/frp_after_button.png');}
	<?php elseif(is_single('1430')): ?>
		.before-button {background-image: url('<?php bloginfo('template_directory'); ?>/library/images/buttons/ea_before_button.png');}
		.after-button {background-image: url('<?php bloginfo('template_directory'); ?>/library/images/buttons/ea_after_button.png');}
	<?php elseif(is_single('155')): ?>
		.before-button {background-image: url('<?php bloginfo('template_directory'); ?>/library/images/buttons/tf_before_button.png');}
		.after-button {background-image: url('<?php bloginfo('template_directory'); ?>/library/images/buttons/tf_after_button.png');}
		<?php elseif(is_single('67')): ?>
		.before-button {background-image: url('<?php bloginfo('template_directory'); ?>/library/images/buttons/cfp_before_button.png');}
		.after-button {background-image: url('<?php bloginfo('template_directory'); ?>/library/images/buttons/cfp_after_button.png');}
	<?php endif; ?>
</style>

<section id="para-one" data-speed="1" style="background: url(<?= get_field('leader'); ?>) no-repeat <?php if( is_single( array(1458))): ?>bottom<?php elseif( is_single( array(155, 1430))): ?>center<?php else:?>top<?php endif; ?> center fixed; background-size: cover;">
</section><!-- #para-one -->


<div id="project-logo">
				<?php $image_attributes = wp_get_attachment_image_src(get_field('logo'), 'full'); ?>
				<img class="img-responsive"src="<?=$image_attributes[0];?>" />
</div><!-- #logo -->

<section id="para-two" data-speed="2">
	<div class="banner-thin bg-white"></div>
	<section id="overview" class="bg-dark-grey pad-top neg-margin">
		<div class="container">
			<div class="row">
				<div id="overview-content" class="col-md-6 col-sm-6 col-md-push-6 col-sm-push-6">
					<div>
						<h1><?php the_title(); ?></h1>
						<div class="row">
							<div class="col-md-12">
								<?=get_field('project_brief');?>
							</div>
						</div><!-- /row -->
							<div class="row">
								<div class="col-md-12">
									<ul class="list-unstyled content">
										<?php if(get_field('project_bullets')):
											while(has_sub_field('project_bullets')): ?>
												<li><?=get_sub_field('bullet_point');?></li>
										<?php endwhile; endif; ?>
									</ul>
								</div>
							</div><!-- /row -->
						<p></p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-md-pull-6 col-sm-pull-6 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
					<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/safariwindow_long.png" />
					<div id="project-flexslider" class="flexslider">
					  	<ul class="slides">
					  		<?php if(get_field('screenshots')):
								while(has_sub_field('screenshots')): ?>
									<?php $image_attributes = wp_get_attachment_image_src(get_sub_field('screenshot'), 'full' ); ?>
									<li><img src="<?=$image_attributes[0];?>" class="img-responsive" /></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
					<img class="img-responsive visible-sm visible-xs" src="<?php bloginfo('template_directory'); ?>/library/images/browser_bottom.png" />
				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- #overview -->
	
	<?php if(get_field('quote') !=''):?>
		<div class="banner text-center">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
						<h2 class="three-hundred">"<?=get_field('quote');?>"</h2><br />
						<h4 class="three-hundred"><?=get_field('quoted_by_name');?><br /><small><?= get_field('quoted_by_title'); ?></small></h4>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</div>
	<?php endif; ?>
	
	<section id="responsive" class="pad-both">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
					<div class="text-center bottom-twenty">
						<?php $image_attributes = wp_get_attachment_image_src(get_field('devices'), 'full' ); ?>
						<img src="<?=$image_attributes[0];?>" class="img-responsive img-center" />
					</div>
					<div class="row">
						<div class="col-md-12 pad-top-twenty text-center">
							<h2 id="try" class="three-hundred">Try <a href="<?= get_field('website_url'); ?>"><?php the_title(); ?></a> on all of your devices</h2>
							<div class="row">
								<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
									<?= get_field('responsive_content'); ?>
								</div>
							</div><!-- .row -->
						</div>
					</div><!-- /row -->
				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- #responsive -->
	
	<section id="strategy" class="bg-grey pad-both text-center">
		<div class="container">
			<div class="row">
				<h2>Our Strategy</h2>
				<?php if( have_rows('highlights')): ?>
					<?php while( have_rows('highlights')) : the_row(); ?>
						<div class="col-md-4 col-sm-4">
							<div class="sphere">
								<i class="fa fa-4x <?=get_sub_field('icon');?> icon"></i>
							</div>
							<h3><?= get_sub_field('title'); ?></h3>
							<?=get_sub_field('content');?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- #strategy -->
	
	<section id="before-after" class="pad-top hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 text-center">
					<h2><?= get_field('ba_title'); ?></h2>
					<p><?= get_field('ba_description'); ?></p>
					<div id="before-after-btn" class="button before-button"></div>
				</div>
			</div><!-- .row -->
			<div class="row">
				<div id="before-after-images">
					<div class="col-md-6 col-sm-6">
						<?php $image_attributes = wp_get_attachment_image_src(get_field('before_img'), 'full'); ?>
						<img id="before" class="img-responsive tall" src="<?=$image_attributes[0];?>" />
					</div>
					<div class="col-md-6 col-sm-6">
						<?php $image_attributes = wp_get_attachment_image_src(get_field('after_img'), 'full'); ?>
						<img id="after" class="img-responsive short" src="<?=$image_attributes[0];?>" />
					</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	
	<section id="before-after-xs" class="pad-top visible-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 text-center">
					<h2><?= get_field('ba_title'); ?></h2>
					<p><?= get_field('ba_description'); ?></p>
				</div>
			</div><!-- .row -->
			<div class="row">
				<div id="before-after-images">
					<div class="col-xs-10 col-xs-offset-1">
						<?php $image_attributes = wp_get_attachment_image_src(get_field('before_img'), 'full'); ?>
						<img class="img-responsive" src="<?=$image_attributes[0];?>" />
						<h3>Before</h3>
					</div>
					<div class="col-xs-10 col-xs-offset-1">
						<?php $image_attributes = wp_get_attachment_image_src(get_field('after_img'), 'full'); ?>
						<img class="img-responsive short" src="<?=$image_attributes[0];?>" />
						<h3>After</h3>
					</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	
	<section id="modules">
		<?php if( have_rows('modules')): ?>
			<? $x = 1; while(have_rows('modules')) : the_row(); ?>
				<?php if($x % 2 != 0): ?>
					<?php if($x == 3): ?>
						<section class="bg-light pad-top hidden-xs text-center map">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
										<div class="module-content">
											<h2><?= get_sub_field('module_title'); ?></h2>
											<?= get_sub_field('module_text'); ?>
										</div>
									</div>
									<div class="col-md-12">
										<?php $image_attributes = wp_get_attachment_image_src(get_sub_field('module_pic'), 'full'); ?>
										<img src="<?=$image_attributes[0];?>" class="img-responsive img-center" />
									</div>
								</div><!-- /row -->
							</div><!-- /container -->
						</section>
					<?php elseif($x != 3): ?>
					<section class="bg-light pad-top hidden-xs">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="module-content">
										<h2><?= get_sub_field('module_title'); ?></h2>
										<?= get_sub_field('module_text'); ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<?php $image_attributes = wp_get_attachment_image_src(get_sub_field('module_pic'), 'full'); ?>
									<img src="<?=$image_attributes[0];?>" class="img-responsive" />
								</div>						
							</div><!-- /row -->
						</div><!-- /container -->
					</section>
					<?php endif; ?>
				<?php else: ?>
					<section class="bg-grey pad-top hidden-xs">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<?php $image_attributes = wp_get_attachment_image_src(get_sub_field('module_pic'), 'full'); ?>
									<img src="<?=$image_attributes[0];?>" class="img-responsive" />
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="module-content">
										<h2><?= get_sub_field('module_title'); ?></h2>
										<?= get_sub_field('module_text'); ?>
									</div>
								</div>
							</div><!-- /row -->
						</div><!-- /container -->
					</section>
				<?php endif; ?>
			<?php $x++; endwhile; ?>
		<?php endif; ?>
	</section><!-- #modules -->

	<section id="more" class="bg-dark-grey text-center pad-both">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="bottom-fifty">More Featured Projects</h2>
				</div>
			</div>
			<div class="row">
				<?php $args = array( 'post_type' => 'project', 'category_name' => 'featured-project', 'post__not_in' => array($post->ID), 'order_by' => 'title', 'order' => 'DESC', 'posts_per_page' => 3 ); ?>
				<?php $loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="col-md-4 col-sm-4">
						<div class="featured-image-container stack-margin">
							<a href="<?php the_permalink(); ?>"><img class="img-responsive img-center" src="<?= get_field('leader'); ?>" /></a>
							<div class="footer text-left">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	
</section><!-- #para-two -->

<?php get_footer(); ?>