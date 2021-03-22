<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<div id="content" class="container-fluid">
		<div class="row-fluid spacer">
			<div class="span4">
				<?=the_content()?>
				<?php include(get_template_directory().'/includes/social-icons.php');?>
			</div> <!-- /.span4 -->
			<div class="span8">
				<h1 class="single-title" itemprop="headline"><?php the_title(); ?> the team</h1>
				<div class="row-fluid">
					<?php 
					// Display Custom Post Type
					$recent = new WP_Query('post_type=employee&orderby=menu_order&order=ASC&posts_per_page=10'); $x=2;
					while($recent->have_posts()) : $recent->the_post(); ?>	
						<div class="span4">
							<div class="about">
								<h2><?=the_title(); ?></h2>
								<h3><?=the_field('e_title'); ?></h3>
								<?php $e_image = wp_get_attachment_image_src(get_field('e_image'), 'mainemployee'); ?>
								<a href="<?php the_permalink(); ?>"><img src="<?=$e_image[0]; ?>" /></a>
							</div>
							<p><?=the_field('e_excerpt'); ?></p>
						</div>
						<?php if(($x % 3) == 1): ?>
						</div><div class="row-fluid"> 
						<?php endif; ?>
					<?php $x++; endwhile; wp_reset_query(); ?>
				</div>
			</div> <!-- /.span8 -->
		</div><!-- /.row-fluid -->
		<div class="clearfix"></div>
</div> <!-- /.container-fluid -->

<?php get_footer(); ?>