<?php /* Template Name: Projects Page */ ?>
<?php get_header(); the_post(); ?>

	<section class="container ">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">	
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">							
						<h1><?=the_title()?></h1>
					</div>	
				</div>	
				<div class="row">
					<div class="col-lg-12">
						<?php $last = count(get_field('project_list')); $xsCut = '';?>
						<?php $x=1; while(has_sub_field('project_list')): ?>	
							<?php if($x > 2):
								$xsCut = ' hidden-xs';
							endif; ?>
							
							<div class="row">
							
							<?php if($x%2==1):?>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center<?=$xsCut?>">
									<?php $image_attributes = wp_get_attachment_image_src(get_sub_field('services-image'),'full'); ?>
									<img src="<?=$image_attributes[0];?>" class="img-responsive" />
								</div>
								
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
									<h2><?=get_sub_field('services-title');?></h2>
									<?=get_sub_field('services-wysiwyg');?>
								</div>	
							<?php else: ?>
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
										<h2><?=get_sub_field('services-title');?></h2>
										<?=get_sub_field('services-wysiwyg');?>
									</div>	
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center<?=$xsCut?>">
										<?php $image_attributes = wp_get_attachment_image_src(get_sub_field('services-image'),'full'); ?>
										<img src="<?=$image_attributes[0];?>" class="img-responsive" />
									</div>
							<?php endif; ?>
							
							</div>
							<?php if($x!=$last && get_sub_field('services-wysiwyg')) echo '<hr />'; ?>

						<?php $x++; endwhile; ?>
					</div>
				</div> <!-- /.row -->
				
				<div id="article-buttons" class="row">
					<div class="col-lg-12 text-right">
						<a href="#" class="btn btn-primary btn-xl pull-left"><i class="fa fa-long-arrow-left icon"></i>All Services</a>
					</div>
				</div>
			</div>	
		</div>		
	</section>	

<?php get_footer(); ?>