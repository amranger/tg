<?php get_header(); ?>
<?php the_post(); ?>

		<!-- ==============================================
		ABOUT
		=============================================== -->
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<h1><?=the_title()?></h1>
					<?=the_content()?>
				</div>	
			</div>
		</div>
		

<?php get_footer(); ?>