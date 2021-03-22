	<!--<article class="block">-->
	<div class="block <?php if($x % 2): ?>span4<?php else: ?>span3<?php endif; ?>">
		<div class="inner">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<h5><?php the_field('c_tag'); ?></h5>
			<a href="<?php the_permalink(); ?>"><?php $image_attributes = wp_get_attachment_image_src(get_field('c_image'), 'Large' ); ?>
			<img src="<?=$image_attributes[0];?>" /></a>
			<div class="text">
				<p><?php the_field('c_exerpt'); ?></p>
				
				<span class="tag_list">Services: <?php terms_no_link($post->ID); ?></span>
				
				<?php // the_tags('<span class="tag_list">Services: ',' + ','</span>'); ?>
			</div>
		</div>
	</div>
	<!--</article>-->
	