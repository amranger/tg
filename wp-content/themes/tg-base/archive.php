<?php
/**
 * The template for displaying Category pages.
 *
 * @package WordPress
 * @subpackage tgCustom
 * @since 1.0
 */

get_header(); ?>
<?php $results = $wp_query->found_posts;?> 
		<!-- ==============================================
		SERVICES
		=============================================== -->
		<header class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1><?php printf( __( 'Tag: %s', 'tgcustom' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
				</div>	
			</div>
		</header>		

		<div class="container">
			<div class="row">
				<section class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<!-- ==============================================
				BLOG
				=============================================== -->
						<?php while ( have_posts() ) : the_post(); ?>
		
							<article id="post-<?php the_ID(); ?> row">
								<div class="col-lg-4 col-md-4">
									<a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) the_post_thumbnail('blog-main', array('class'=>'img-responsive img-thumbnail')); ?></a>
								</div>
								<div class="col-lg-8 col-md-8">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p><?php the_date('n/j/Y', '<small><em>', '</em></small> - '); ?><?php print_excerpt(160); ?></p>
								</div>
	
								<div class="clearfix"></div>
							</article>	
		
							<?php if($x != $results): ?>
								<hr />
							<?php endif; ?>
						<?php $x++; endwhile; ?>
	
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
				</section>
				<aside class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
					<?php get_sidebar(); ?>
				</aside>
			</div>	
		</div>		


<?php include('footer-blog.php'); ?>