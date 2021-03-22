<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
<?php the_post(); ?>


<!-- ==============================================
		ABOUT
		=============================================== -->
<section class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 hidden-xs">
			<h1><?= the_title() ?></h1>
			<?= the_content() ?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-0 col-md-offset-0" style="padding-top: 10px;">
			<?//=do_shortcode('[gravityform id="8" name="Support Request"]');?>
		</div>
	</div>
</section>


<?php include('footer-blog.php'); ?>