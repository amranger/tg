<?php get_header(); the_post(); ?>



		<div class="container">
			<div class="row">
				<!-- ==============================================
				BLOG
				=============================================== -->
				<section class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	
	
						<article id="post-<?php the_ID(); ?>">
							<h1 class="h2"><?php the_title(); ?></h1>
							<?php if(has_post_thumbnail()) the_post_thumbnail('full', array('class'=>'img-responsive img-thumbnail blog-feature')); ?>
							
							<div id="blog-meta" class="well">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<ul class="list-unstyled list-inline the-meta">
											<li><i class="fa fa-calendar icon"></i><?=the_date();?></li>
											<li>By <?php the_author();?></li>
											<li><i class="fa fa-folder-open icon"></i><?php blog_cat($post->ID); ?></li>
										</ul>									
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<ul class="list-unstyled list-inline pull-right socialMedia">
											<li><?php dd_twitter_generate('Compact','twitter_username') ?></li>
											<li><?php dd_fblike_generate('Like Button Count') ?></li>
											<li><?php dd_google1_generate('Compact') ?></li>
										</ul>									
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<?php the_content(); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<p><small><em><?php the_tags(); ?></em></small></p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<ul class="list-unstyled list-inline socialMedia">
										<li><?php dd_twitter_generate('Compact','twitter_username') ?></li>
										<li><?php dd_fblike_generate('Like Button Count') ?></li>
										<li><?php dd_google1_generate('Compact') ?></li>
									</ul>																		
								</div>
							</div>
							<hr />
							<div class="row">
								<div class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="well" id="authorbio">
										<div class="row">
										<?php if(get_the_author() == 'Joe Martin'): ?>
											<div class="user-image col-lg-3 col-md-3 col-sm-3 hidden-xs">
												<?php $employee = wp_get_attachment_image_src( get_field('e_image', 50),'employee'); ?>
												<a href="<?=bloginfo('url')?>/employee/joe-martin/"><img src="<?=$employee[0];?>" class="img-polaroid" /></a>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<h5>Written By</h5>
												<h2><a href="<?=bloginfo('url')?>/employee/joe-martin/">Joe Martin<small>Interactive Director for Telegraphics, Inc.</small></a></h2>
												<?=the_field('e_excerpt', 50); ?>
											</div>
											<div class="clearfix"></div>
										<?php elseif( get_the_author() == 'Aaron Ranger'): ?>
											<div class="user-image col-lg-3 col-md-3 col-sm-3 hidden-xs">
												<?php $employee = wp_get_attachment_image_src( get_field('e_image', 52),'employee'); ?>
												<a href="<?=bloginfo('url')?>/employee/aaron-ranger/"><img src="<?=$employee[0];?>" class="img-polaroid" /></a>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<h5>Written By</h5>
												<h2><a href="<?=bloginfo('url')?>/employee/aaron-ranger/">Aaron Ranger<small>Web Developer for Telegraphics, Inc.</small></a></h2>
												<?=the_field('e_excerpt', 52); ?>
											</div>
											<div class="clearfix"></div>
										<?php elseif( get_the_auther() == 'Nathan Selep'): ?>
										
										<?php else: ?>	
										<?php endif;?>
										</div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">						
									<?php comments_template('',true); ?>
								</div>
							</div>

						</article>	
				
				</section>
				
				<aside class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
					<?php get_sidebar(); ?>
				</aside>
			</div>	
		</div>		





<?php include('footer-blog.php'); ?>