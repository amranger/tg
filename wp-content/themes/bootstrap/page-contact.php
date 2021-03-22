<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>


<!-- start: Map -->
<div id="bigmap" class="hidden-phone">

	<!-- starts: Google Maps -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<div id="googlemaps-container-top"></div>
	<div id="map-area" class="row-fluid">
		<div id="googlemaps" class="google-map span12"></div>
	</div>
	<div id="googlemaps-container-bottom"></div>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.gmap.min.js"></script>
	<script type="text/javascript">
		$('#googlemaps').gMap({
			maptype: 'ROADMAP',
			scrollwheel: false,
			zoom: 13,
			markers: [
				{
					address: '9703 Cary Ave, Schiller Park, IL', // Your Address Here
					html: '',
					popup: false,
				}

			],

		});
	</script>
	<!-- end: Google Maps -->
</div>
<!-- end: Map -->	

<div id="content" class="container-fluid">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		<div class="row-fluid">
			<div class="span4">
				<?php include( get_template_directory().'/includes/contact.php'); ?>
				<div class="entry last">
					<?php include(get_template_directory().'/includes/social-icons.php');?>
				</div>
			</div> <!-- /.span4 -->
	
			<div class="span8">
				<h1><?=the_title()?></h1>
				<?php the_content(); ?>
				<div class="hero-unit"><?=do_shortcode('[gravityform id="2" name="Contact Us" title="false" ajax="true"]');?></div>
			</div> <!-- /.span8 -->
		
		</div><!-- /.row-fluid -->
	<?php endwhile; endif; ?>
</div> <!-- /.container-fluid -->

<?php get_footer(); ?>