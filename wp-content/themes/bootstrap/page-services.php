<?php 
/* 
Template Name: Services Page
*/
?>
<?php get_header(); ?>

	<div id="content" class="container-fluid">
		<h1 class="single-title spacer"><?php the_title(); ?></h1>

		<div class="row-fluid spacer">
			<?php $args = array(
				'post_type'=>'service',
				'post_parent'=> 0,
				'posts_per_page' => 20,
				'post__not_in' => array(91,89,86)
			);?>
			<?php $recent = new WP_Query($args); $x=0;
				while($recent->have_posts()) : $recent->the_post(); ?>
					<div class="span6">
						<div class="span4 pull-center">
							<a href="<?php the_permalink(); ?>"><i class="<?=get_field('s_icon');?> enormous-icon circled pull-center bg<?=altcolor($x);?>"></i></a>
						</div>
						<div class="span8">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
							<p><?php the_field('s_excerpt'); ?></p>
						</div>
					</div>
					<?php if($x%2): ?></div><div class="row-fluid spacer"><?php endif; ?>
			<?php $x++; endwhile; wp_reset_query(); ?>
		</div>
		<div class="clearfix"></div>
	</div> <!-- end #content -->

<?php get_footer(); ?>