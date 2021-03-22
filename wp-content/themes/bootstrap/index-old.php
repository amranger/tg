<?php get_header(); ?>

	<div id="portfolio" class="spacer">
	<div class="block span3">
		<div class="inner">
			<div class="text_box">
				<h1 class="h1">We Ask "Why?"</h1>
				<p>Buying a new site is like buying a new car. You don't <em>really</em> know what you're getting, and every sales person just seems like another con-man in a suit trying to take as much money from you as possible. We don't like it!</p><p>We want to know why it costs what it costs? Why this hosting? Why do I need this service?</p><p><a href="<?=bloginfo('url')?>/contact-us/">Contact us</a> today to ask "why"!</p>
			</div>
			<div class="arrowhead"></div>
		</div>
	</div>	
		<?php $args = array( 'numberposts' => -1,'post_type' => 'project', 'meta_key' => 'p_home', 'meta_value' => 'Yes', 'posts_per_page' => 2); ?>
	<?php $the_query = new WP_Query($args);?>
	<?php if($the_query->have_posts()): ?>
		<?php  $x=1; while ( $the_query->have_posts() ) : $the_query->the_post();?>
			<?php include(TEMPLATEPATH . '/includes/portfolio.php'); ?>
		<?php $x++; endwhile; wp_reset_query(); ?>
	<?php endif; ?>
	<div class="block span3">
		<div class="inner">
			<a href="<?php bloginfo('url'); ?>/free-website-review">
				<div class="text_box blue">
					<?php 
                    $page_data = get_page(144);
                    $title = $page_data->post_title;
                    echo '<h2 class="h1">'.$title.'</h2>';
                    ?> 	
                    <p><?=the_field('excerpt', 144); ?></p>
				</div>
				<div class="arrowhead blue"></div>
			</a>
		</div>
	</div>
	<?php $args = array( 'numberposts' => -1,'post_type' => 'project', 'meta_key' => 'p_home', 'meta_value' => 'Yes', 'posts_per_page' => 2, 'offset' => 2); ?>
	<?php $the_query = new WP_Query($args);?>
	<?php if($the_query->have_posts()): ?>
		<?php $x=1; while ( $the_query->have_posts() ) : $the_query->the_post();?>
			<?php include(TEMPLATEPATH . '/includes/portfolio.php'); ?>
		<?php $x++; endwhile; wp_reset_query(); ?>
	<?php endif; ?>
		<div class="block span3">
		<div class="inner">
			<a href="<?php bloginfo('url'); ?>/3-reasons-to-not-use-tg">
				<div class="text_box green">	
					<?php 
                    $page_data = get_page(150);
                    $title = $page_data->post_title;
                    echo '<h2 class="h1">'.$title.'</h2>';
                    ?> 	
                    <p><?=the_field('excerpt', 150); ?></p>
				</div>
				<div class="arrowhead green"></div>
			</a>
		</div>
	</div>
	<?php $args = array( 'numberposts' => -1,'post_type' => 'project', 'meta_key' => 'p_home', 'meta_value' => 'Yes', 'posts_per_page' => 6, 'offset' => 4); ?>
	<?php $the_query = new WP_Query($args);?>
	<?php if($the_query->have_posts()): ?>
		<?php $x=1; while ( $the_query->have_posts() ) : $the_query->the_post();?>
			<?php include(TEMPLATEPATH . '/includes/portfolio.php'); ?>
		<?php $x++; endwhile; wp_reset_query(); ?>
	<?php endif; ?>

	</div>
<?php get_footer(); ?>