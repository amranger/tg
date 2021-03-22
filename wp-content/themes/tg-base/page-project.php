<?php
/*
Template Name: Page Project
*/
?><?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<h1><?php the_title(); ?></h1>
			<h3><?= get_field('sub_title'); ?></h3>
			<?= get_field('content'); ?>
		</div>
		<div class="col-md-6 col-sm-6">
			<?php $image_attributes = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
			<img class="img-responsive" src="<?=$image_attributes[0];?>" />
		</div>
	</div><!-- .row -->
</div><!-- .container -->
<section id="case-studies" class="pad-top">
	<div class="container">
		<div class="row">
			<?php 
			$args = array('post_type' => 'project', 'category_name' => 'featured-project', 'order_by' => 'date', 'order' => 'ASC', 'posts_per_page' => 4 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
			?>
				<div class="col-md-3 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
					<div class="featured-image-container bottom-twenty">
						<a href="<?php the_permalink(); ?>"><img class="img-responsive img-center" src="<?= get_field('leader'); ?>" /></a>
						<div class="footer text-left">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						</div>
					</div>
				</div>
			<?php 
			endwhile; 
			?>
			
		</div><!-- .row -->
	</div><!-- .container -->

</section>
<?php get_footer(); ?>