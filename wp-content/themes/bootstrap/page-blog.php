<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); global $post; ?>

	<div id="content" class="container-fluid">
		<div class="row-fluid">
			<div class="span8">
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged );
				$wp_query = new WP_Query($args); ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>">
						<div class="row-fluid">
							<div class="spacer">
								<div class="post-image">
									<div class="post-heading">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</div>
									<a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) the_post_thumbnail('blog-main'); ?></a>
								</div>
								<?php print_excerpt(320); ?>
								<div class="bottom-article">
									<ul class="meta-post unstyled">
										<li><i class="icon-calendar"></i> <?=the_date();?></li>
										<li><i class="icon-user"></i> <?php the_author();?></li>
										<li><i class="icon-folder-open"></i> <?php blog_cat($post->ID); ?></li>
										<li><i class="icon-comment"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?> </li>
									</ul>
									<a class="pull-right" href="<?php the_permalink(); ?>">Continue reading &gt;</a>
								</div>
							</div> <!-- end .span8 -->
						</div> <!-- end .row -->
					</article> <!-- end article -->
				<?php endwhile; ?>

			<?php if(function_exists('wp_pagenavi')):
				wp_pagenavi();
			else: ?>		  
				<div class="nav-previous">
				<!-- next_post_link -->
				</div>
				  
				<div class="nav-next">
				<!-- previous_post_link -->
				</div>
			<?php endif; ?>
			</div>

            <?php get_sidebar(); // sidebar 1 ?>
		</div>
	</div>

<?php get_footer(); ?>