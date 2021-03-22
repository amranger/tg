<?php get_header(); ?>
<?php the_post(); ?>
	<div id="content" class="container-fluid">
		<div class="row-fluid">
			<div class="span8">
				<article id="post-<?php the_ID(); ?>">
					<div class="row-fluid">
						<div class="spacer">
							<div class="post-image">
								<div class="post-heading">
									<h2><?php the_title(); ?></h2>
								</div>
								<?php if(has_post_thumbnail()) the_post_thumbnail('full'); ?>
								<div class="bottom-article">
									<ul class="meta-post unstyled">
										<li><i class="icon-calendar"></i> <?=the_date();?></li>
										<li><i class="icon-user"></i> <?php the_author();?></li>
										<li><i class="icon-folder-open"></i> <?php blog_cat($post->ID); ?></li>
									</ul>
									<ul class="meta-post unstyled" style="float: right;">
										<li> 
											<?php echo wp_socializer(facebook, array(
												'type' => like,
											));?>
										</li>
										<li id="retweet"> 
											<?php echo wp_socializer(retweet, array(
												'type' => compact,
											));?>
										</li>										
										<li> 
											<?php echo wp_socializer(pinterest, array(
												'type' => horizontal,
											));?>
										</li>										
									</ul>
								</div>								
							</div>
							<?php the_content(); ?>
<!--
							<div id="pagenav">
								<?php// next_post('&laquo; %', '', 'yes'); ?> | <?php// previous_post('%&raquo;', '', 'yes'); ?>
							</div>
							<div class="clearfix"></div>
-->
							
							<div class="well" id="authorbio">
								<?php if(get_the_author() == 'Joe Martin'): ?>
									<div class="user-image span2">
										<?php $employee = wp_get_attachment_image_src( get_field('e_image', 50),'employee'); ?>
										<img src="<?=$employee[0];?>" class="img-polaroid" />
									</div>
									<div class="span8">
										<h5>About the Author</h5>
										<h2>Joe Martin<br /><small>Project Manager for Telegraphics, Inc.</small></h2>
										<?=the_field('e_excerpt', 50); ?>
									</div>
									<div class="clearfix"></div>
								<?php elseif( get_the_author() == 'Aaron Ranger'): ?>
									<div class="user-image span2">
										<?php $employee = wp_get_attachment_image_src( get_field('e_image', 52),'employee'); ?>
										<img src="<?=$employee[0];?>" class="img-polaroid" />
									</div>
									<div class="span8">
										<h5>About the Author</h5>
										<h2>Aaron Ranger<br /><small>Web Developer for Telegraphics, Inc.</small></h2>
										<?=the_field('e_excerpt', 52); ?>
									</div>
									<div class="clearfix"></div>
								<?php elseif( get_the_auther() == 'Nathan Selep'): ?>
								
								<?php else: ?>	
								<?php endif;?>
							</div>							
							<?php comments_template('',true); ?>
						</div> <!-- end .span8 -->
					</div> <!-- end .row -->
				</article> <!-- end article -->
			</div> 
			<?php get_sidebar(); // sidebar 1 ?>
		</div>
	</div>
<?php get_footer(); ?>