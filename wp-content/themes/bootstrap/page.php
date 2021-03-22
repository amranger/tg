<?php get_header(); ?>
<?php the_post(); ?>
	<div id="content" class="container-fluid">
		<div class="row-fluid">
			<div class="span8">
				<article>
					<div class="row-fluid">
						<div class="spacer">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
							
							<?php if(is_page(1082)): ?>
								<div class="sellingpoints">
								<div class="row-fluid">
								<?php if(get_field('warranty_services')): $x=0;
									while(has_sub_field('warranty_services')): ?>
										<div class="span6">
											<div class="row-fluid<?=($x==0 ? ' first':'');?>">
												<div class="span4">
													<i class="<?=get_sub_field('w_icon');?> enormous-icon circled pull-center bggray"></i>
												</div>
												<div class="span8">
													<h3><?=get_sub_field('w_title');?></h3>
													<p><?=get_sub_field('w_content');?></p>
												</div>
											</div>
										</div>
										<?php if($x%2): ?></div><div class="row-fluid"><?php endif; ?>
								<?php $x++; endwhile; endif; ?>
								</div>
								</div>
								
								<h2>Start Today!</h2>
								<p>Please fill out the form below to get started on your new web presence. An actual person, not an automated system, will be contact to help get things started.</p>
								<?=do_shortcode('[gravityform id="4" name="Get a Quote" title="false" description="false" ajax="true"]');?>
							<?php endif; ?>
						</div> <!-- end .span8 -->
					</div> <!-- end .row -->
				</article> <!-- end article -->
			</div>
            <div class="span4">
	            <?php include( get_template_directory(). '/includes/contact.php'); ?>
            	<div class="entry last">
		            <?php include(get_template_directory().'/includes/social-icons.php');?>
            	</div>
            </div>
		</div>
	</div>

<?php get_footer(); ?>