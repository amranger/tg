<?php get_header(); ?>
<?php the_post(); ?>

		<!-- ==============================================
		EMPLOYEE
		=============================================== -->	
		
		
		<section class="container">	
			
			<div class="row">
				<div class="col-lg-12">
					<h1><?=the_title()?></h1>
				</div>
			</div>
				
			<div class="row">
				<div id="pic" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<?php $image_attributes = wp_get_attachment_image_src(get_field('e_image'),'mainemployee'); ?>
					<img src="<?=$image_attributes[0];?>" class="img-responsive img-thumbnail" />	

					<?php if(get_field('e_linkedin') != ''): ?>
						<a href="<?=the_field('e_linkedin'); ?>" target="_blank" class="pull-left icon-heading"><i class="fa fa-linkedin-square icon"></i></a>
					<?php endif; ?>	
					<h4><?=the_field('e_title'); ?></h4>
					<p><a href="mailto:<?=the_field('e_email'); ?>"><?=the_field('e_email'); ?></a></p>
					
				
					
				</div>	
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<?php the_field('e_content'); ?>
				</div>	
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<?php if(get_field('e_education')): ?>
					<h3>Education</h3>
					<ul class="list-unstyled" id="education">
						<?php while(has_sub_field('e_education')): ?>
							<li>	
								<strong><?=the_sub_field('school'); ?></strong><br />
								<?php if(get_sub_field('degree') != ''): ?>
									<span>
										<?=the_sub_field('degree'); ?>
										<?php if(get_sub_field('subject')): ?>, <?=the_sub_field('subject'); ?>
										<?php endif; ?>
										<?php if(get_sub_field('years') != '' ): ?>
											<br /><i><?=the_sub_field('years'); ?></i>
										<?php endif; ?>
									</span>
								<?php endif; ?>
							</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>

					<?php if(get_field('e_skills') != ''): ?>
						<div class="row">
							<div class="col-lg-12">
								<h3>Skills</h3>
								<p><?=the_field('e_skills'); ?></p>
							</div>
						</div>
				    <?php endif; ?>
					
					<?php if(get_field('fun_fact')!=''):?>
						<h3>Fun Fact</h3>
						<p><?=get_field('fun_fact'); ?></p>
					<?php endif; ?>
				</div>
				
				
			</div>	
			
		</section>	


<?php include('footer-blog.php'); ?>