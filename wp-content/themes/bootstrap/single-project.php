<?php get_header(); ?>
<?php the_post(); ?>

	<div id="content" class="container-fluid spacer">
		<h1 class="spacer"><?php the_title(); ?></h1>
		<div class="row-fluid">
			<div id="quickinfo" class="span4">
				<div class="entry">
					<h5><?=the_field('c_tag'); ?></h5>
					<div class="post-thumbnail">
						<?php $company = wp_get_attachment_image_src( get_field('c_image'),'company-image'); ?>
						<img src="<?=$company[0];?>" />
					</div>
					<h3>Services Provided</h3>
					<span class="tag_list"><?php terms_no_link($post->ID); ?></span>
				</div>
				<div class="entry">
					<p>View their site at: <a href="http://<?=the_field('c_site'); ?>" target="_blank"><?=the_title()?></a></p>
				</div>
			</div>
			<div class="span8">
				<div class="entry">
					<h2>Project Summary</h2>
					<?php the_content() ;?>
				</div>
				<?php if(get_field('quote') != ''): ?>
					<div id="quote" class="entry">
						<div class="quote-center">
							<div><span>&quot;</span><?php the_field('quote'); ?><span>&quot;</span></div>
							<small class="byline">- <?php the_field('quoted_by'); ?></small>
						</div>
					</div>	
				<?php endif; ?>
				<?php if(get_field('p_video')): ?>
					<div class="entry">
						<div class="embed-container"><?=get_vimeo_video(get_field('p_video')); ?></div>
					</div>
				<?php endif; ?>
				<?php if(get_field('p_images')): ?>
					<div class="entry">
						<?php while(has_sub_field('p_images')): ?>
							<?php $projectimage = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
							<?php if(get_field('p_link') == 'yes'): ?>
								<a href="http://<?=the_field('c_site');?>"><img src="<?=$projectimage[0];?>" /></a>
							<?php else: ?>
								<img src="<?=$projectimage[0];?>" />
							<?php endif; ?>
							<?php if(get_sub_field('caption')): ?>
								<span class="caption"><?=the_sub_field('caption'); ?></span>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div> <!-- end .row-fluid -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
