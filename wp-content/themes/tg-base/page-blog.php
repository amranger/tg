<?php /* Template Name: Blog Page */ ?>
<?php get_header(); the_post(); ?>

		<!-- ==============================================
		SERVICES
		=============================================== -->
		<header class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1>Blog</h1>
				</div>	
			</div>
		</header>		


		<div class="container">
			<div class="row">
				<!-- ==============================================
				BLOG
				=============================================== -->
				<section class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged );
					$wp_query = new WP_Query($args); ?>
					<?php while ( have_posts() ) : the_post(); ?>
	
						<article id="post-<?php the_ID(); ?>">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) the_post_thumbnail('blog-main', array('class'=>'img-responsive img-thumbnail')); ?></a>
							<p><?php print_excerpt(320); ?></p>

							<div class="clearfix"></div>
							<div class="bottom-article">
								<ul class="list-inline list-unstyled meta-post">
									<li><i class="fa fa-calendar icon"></i><?=the_date();?></li>
									<li class="visible-lg"><i class="fa fa-user icon"></i><?php the_author();?></li>
									<li><?php blog_cat($post->ID); ?></li>
									<li class="visible-lg"><i class="fa fa-comment icon"></i><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></li>
									<li class="pull-right"><a href="<?php the_permalink(); ?>">Continue reading &gt;</a></li>
								</ul>
							</div>	

						</article>	
	
						<hr />
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
					<hr />
				</section>
				<aside class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
					<?php get_sidebar(); ?>
				</aside>
			</div>	
		</div>		


<?php include('footer-blog.php'); ?>