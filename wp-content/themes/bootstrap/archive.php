<?php get_header(); global $post; ?>

	<div id="content" class="container-fluid">
		<div class="row-fluid">
			<div class="span8">
				<h1 class="single-title spacer" itemprop="headline"><?php single_tag_title(); ?></h1>			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>">
						<div class="row-fluid">
							<div class="spacer">
								<div class="post-heading">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								</div>
								<div class="span3">
									<div class="post-image">	
										<a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) the_post_thumbnail('blog-main'); ?></a>
									</div>
								</div>
								<div class="span8">
									<?php print_excerpt(320); ?>
								</div>
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
				<?php endif; ?>
				<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
					<?php page_navi(); // use the page navi function ?>
				<?php } else { // if it is disabled, display regular wp prev & next links ?>
					<nav class="wp-prev-next">
						<ul class="clearfix">
							<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
							<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
						</ul>
					</nav>
				<?php } ?>
			</div>
            <?php get_sidebar(); // sidebar 1 ?>
		</div>
	</div>
<?php get_footer(); ?>