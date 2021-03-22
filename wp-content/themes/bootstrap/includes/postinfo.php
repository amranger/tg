<?php if (!is_single()): ?>
	<p class="post-meta">
		Posted by <?php the_author_posts_link(); ?> on <?php the_time() ?> in <?php the_category(', ') ?> | <?php comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?>
	</p>
<?php else: ?>
	<p class="post-meta">
		Posted by <?php the_author_posts_link(); ?> on <?php the_time() ?> in <?php the_category(', ') ?>
	</p>
<?php endif; ?>