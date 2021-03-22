	<?php get_header(); ?>
<?php the_post(); ?>

	<div id="content" class="container-fluid spacer">
		<h1 class="spacer"><?php the_title(); ?></h1>
		<div class="row-fluid">
			<div id="quickinfo" class="span4">
				<div class="entry">
					<h5><?=the_field('e_title'); ?> - <a href="mailto:<?=the_field('e_email'); ?>"><?=the_field('e_email'); ?></a></h5>					
					<div class="post-thumbnail">
						<?php $employee = wp_get_attachment_image_src( get_field('e_image'),'mainemployee'); ?>
						<img src="<?=$employee[0];?>" />
						<?php if(get_field('fun_fact')!=''):?>
							<div class="funfact">
								<h3>Fun Fact</h3>
								<p><?=get_field('fun_fact'); ?></p>
							</div>
						<?php endif; ?>

					</div>
				</div>
				<div class="entry">
					<h3>Education</h3>
					<?php if(get_field('e_education')): ?>
					<ul id="education">
						<?php while(has_sub_field('e_education')): ?>
							<li>	
								<strong><?=the_sub_field('school'); ?></strong><br />
								<?php if(get_sub_field('degree') != ''): ?>
									<span>
										<?=the_sub_field('degree'); ?>
										<?php if(get_sub_field('subject')): ?>
											, <?=the_sub_field('subject'); ?>
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
				</div>
				<?php if(get_field('e_skills') != ''): ?>
					<div class="entry <?php if(get_field('e_linkedin') == ''): ?>last<?php endif; ?>">
						<h3>Skills</h3>
						<p><?=the_field('e_skills'); ?></p>
					</div>
			    <?php endif; ?>
				<?php if(get_field('e_linkedin') != ''): ?>
					<div class="entry last">	
						<ul id="social">
							<li><a id="linkedin" href="<?=the_field('e_linkedin'); ?>" target="_blank">LinkedIn</a></li>
						</ul>				
					</div>
				<?php endif; ?>
			</div>
			<div class="span8">
				<div class="entry last">
					<h2>Biography</h2>
					<?php the_field('e_content'); ?>
				</div>
			</div>
		</div> <!-- end .row-fluid -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
