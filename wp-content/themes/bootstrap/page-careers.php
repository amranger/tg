<?php 
/* 
Template Name: Careers
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<style type="text/css">
	.well h3 { text-align: left; }
	h1 { font-size: 3em; }
</style>
	<div id="content" class="container-fluid" style="padding-top: 120px;">
		<div class="row-fluid">
			<div class="span8">
				<article>
					<div class="row-fluid">
						<div class="spacer">
							<div class="well">
							<?php if(has_post_thumbnail()) the_post_thumbnail('full', array('class'=>'img-responsive', 'style'=>'margin-bottom: 20px;')); ?>
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
							
								<h3>Contact Information</h3>
								<p>If you are interested, please send your name, email, city/state, resume and a link to your portfolio to <a href="mailto:careers@telegraphicsinc.com">careers@telegraphicsinc.com</a>. Thank you and we look forward to hearing from you!</p>
							</div>
						</div> <!-- end .span8 -->
					</div> <!-- end .row -->
				</article> <!-- end article -->
			</div>
            <div class="span4">
            	<div class="entry last">
		            <?php include(get_template_directory().'/includes/social-icons.php');?>
            	</div>
            </div>
		</div>
	</div>

<?php get_footer(); ?>