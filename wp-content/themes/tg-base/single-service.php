<?php get_header(); the_post(); ?>
		<?php
		
		 global $post;
		if ($post && $post->ID == 232) {
    		include(TEMPLATEPATH . '/single-warranty.php');
    	exit();
	}
	
	?>
		
		
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
							<?php $last = count(get_field('services-content')); $xsCut = '';?>
							<?php $x=1; while(has_sub_field('services-content')): ?>	
								<?php if($x > 2):
									$xsCut = ' hidden-xs';
								endif; ?>
								
								<?php if(is_single(232) && $x==2): ?>
									<div class="row">
										
									</div>
								<?php endif; ?>
								
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
									<?php if(is_single(94)): ?>
										<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
											<h2 class="text-center"><?=get_sub_field('services-title');?></h2>
											<div class="row">
												<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
													<?php $image_attributes = wp_get_attachment_image_src(get_sub_field('services-image'),'full'); ?>
													<img src="<?=$image_attributes[0];?>" class="img-responsive" style="margin: 30px 0;" />											
												</div>
											</div>
											<?=get_sub_field('services-wysiwyg');?>
										</div>	

										<div class="col-lg-3 col-lg-offset-1 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
											<div id="list-large" class="well">
												<h4>Time Spent on Mobile Devices</h4>
												<ul class="list-unstyled">
													<li><em>84%</em> Use them at home</li>
													<li><em>80%</em> Use them during miscellaneous downtime throughout the day</li>
													<li><em>74%</em> Use them while waiting in lines or for appointments</li>
													<li><em>69%</em> Use them while shopping</li>
													<li><em>64%</em> Use them at work</li>
													<li><em>62%</em> Use them while watching TV</li>
													<li><em>47%</em> Use them during their commute</li>
												</ul>
												<p>Compete, Inc.<br /><small><a href="http://blog.compete.com/2010/03/12/smartphone-owners-a-ready-and-willing-audience/">“Smartphone Owners: A Ready and Willing Audience”</a></small></p>
											</div>
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
									
								<?php endif; ?>
								
								</div>
								<?php if($x!=$last && get_sub_field('services-wysiwyg')) echo '<hr />'; ?>

							<?php $x++; endwhile; ?>
						</div>
					</div>
					<div class="row" style="display: none;">
						<?php 
						switch($post->ID) {
							case 75:
							$serviceType = "WordPress";
							$serviceSlug = "wordpress";
							break;
							
							case 91:
							$serviceType = "Discovery";
							$serviceSlug = "discovery";
							break;		
							
							case 94:
							$serviceType = "Responsive Web Design";
							$serviceSlug = 'responsive-web-design';
							break;					
			
							case 89:
							$serviceType = "CSS";
							$serviceSlug = "css";
							break;		
							
							case 86:
							$serviceType = "Information Architecture";
							$serviceSlug = "information-architecture";
							break;		
							
							case 78:
							$serviceType = "Hosting";
							$serviceSlug = "hosting";
							break;		
							
							case 42:
							$serviceType = "Template Manipulation";
							$serviceSlug = "template-manipulation";
							break;		
							
							case 232:
							$serviceType = "Extended Warranty";
							$serviceSlug = "extended-warranty";
							break;
							
							case 82:
							$serviceType = "SEO";
							$serviceSlug = "seo";
							break;
							
							default:
							$serviceType = "Web Design";
							$serviceSlug = "web-design";
							break;					
						}
						?>
						<div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 text-center">
							<h3>Some clients who have used TG's <?=$serviceType;?> services include:</h3>
							<ul class="list-unstyled list-inline">
							
								<?php $args = array(
													'post_type' => 'project',
													'posts_per_page' => 10,
													'tax_query' => array(
														array(
															'taxonomy' => 'project_tags',
															'field' => 'slug',
															'terms' => $serviceSlug
														)
													)
												);
								$recent = new WP_Query($args); $x=0;
								while($recent->have_posts()) : $recent->the_post();
								 echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
								endwhile; wp_reset_query(); ?>
							
							<em>...And more!</em>
							</ul>
						</div>
					</div> <!-- /.row -->
					
					<div id="article-buttons" class="row">
						<div class="col-lg-12 text-right">
							<a href="#" class="btn btn-primary btn-xl pull-left"><i class="fa fa-long-arrow-left icon"></i>All Services</a>
							<?php // get_posts in same custom taxonomy
							$postlist_args = array(
							   'posts_per_page'  => -1,
							   'orderby'         => 'menu_order',
							   'order'           => 'ASC',
							   'post_type'       => 'service',
							); 
							$postlist = get_posts( $postlist_args );
							
							// get ids of posts retrieved from get_posts
							$ids = array();
							foreach ($postlist as $thepost) {
							   $ids[] = $thepost->ID;
							}
							
							// get and echo previous and next post in the same taxonomy        
							$thisindex = array_search($post->ID, $ids);
							$previd = $ids[$thisindex-1];
							$nextid = $ids[$thisindex+1];
							if ( !empty($previd) ) {
							   // echo '<a rel="prev" class="btn btn-primary btn-lg" href="' . get_permalink($previd). '"><i class="fa fa-long-arrow-left icon"></i>'.get_the_title($previd).'</a>';
							}
							if ( !empty($nextid)) {
								if(is_single(1340)) {
								   echo '<a rel="next" class="btn btn-primary btn-xl" href="' . get_bloginfo('url'). '/contact">Contact Us<i class="fa fa-share icon"></i></a>';
								} else {
								   echo '<a rel="next" class="btn btn-primary btn-xl" href="' . get_permalink($nextid). '">'.get_the_title($nextid).'<i class="fa fa-long-arrow-right icon"></i></a>';
								}
							} ?>						
							<?php $linkers = siblings(); ?>
<!-- 							<a href="<?=$linkers['after'];?>" class="btn btn-primary btn-xl"><?=$linkers['after_title'];?><i class="fa fa-long-arrow-right icon"></i></a> -->
						</div>
					</div>
				</div>
			</div>	
		</div>		
	</section>	

<?php get_footer(); ?>