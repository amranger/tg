<?php get_header(); ?>
<?php the_post(); ?>

<div id="content" class="container_12">

	<div id="primary-content" class="grid_8">
		<h1>Error 4OH4!</h1>
		<p>Hey, sorry about that! Looks like the page you're looking for isn't where it was suppose to be. You know how pages can be, give 'em an inch, they take a mile.</p>
		<p>Try using the site navigation at the top, or the search box below to find where that little rascal ran off to!</p>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div><!-- /#primary-content -->

	<div id="secondary-content" class="grid_4">
		<?php get_sidebar(); ?>			
	</div><!-- /#secondary-content -->

	<div class="clearfix"></div>
</div><!-- /#content -->

<?php get_footer(); ?>