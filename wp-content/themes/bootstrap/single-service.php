<?php get_header(); ?>
<?php the_post(); ?>
<?php $indPage = $post->ID; ?>

<?php if(is_single(232)):?>
<div class="feature">

<div class="container">
    <div id="myCarousel">
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item">
          <div class="row-fluid">
  
            <div class="well pricing-table span3 pull-center">
              <h3>
                <span class="blocked">Annual</span>
              </h3>
              <h2 class="pricing-table-price">
                <span>$</span>
                200<span class="frequency">/year</span>
              </h2>
              <ul class="pricing-table-list">
                <li>1 Website Update & Backup<br /><small>(1 time service)</small></li>
                <li>WordPress & Plugin Updates</li>
                <li>Database Backup</li>
                <li>Site Review</li>
              </ul>
              <a href="#gform_1" id="annual" class="btn btn-primary">
                Sign Up
              </a>
            </div>
            
            <div class="well pricing-table span3 pull-center">
              <h3>
                <span class="blocked">Semi-Annual</span>
              </h3>
              <h2 class="pricing-table-price">
                <span>$</span>
                250<span class="frequency">/year</span>
              </h2>
              <ul class="pricing-table-list">
                <li>2 Updates/Backups <br /><small>(every 6 months)</small></li>
                <li>WordPress & Plugin Updates</li>
                <li>Database Backup</li>
                <li>Site Review</li>
              </ul>
              <a href="#gform_1" id="semi" class="btn btn-primary">
                Sign Up
              </a>
            </div>
            
            <div class="well pricing-table pricing-table span3 pull-center">
              <h3>
                <span class="blocked">Quarterly</span>
              </h3>
              <h2 class="pricing-table-price">
                <span>$</span>
                400<span class="frequency">/year</span>
              </h2>
              <ul class="pricing-table-list">
                <li>4 Updates/Backups per year <br /><small>(every 3 months)</small></li>
                <li>WordPress & Plugin Updates</li>
                <li>Database Backup</li>
                <li>Site Review</li>
              </ul>
              <a href="#gform_1" id="quarter" class="btn">
                Sign Up
              </a>
            </div>
            
            <div class="well pricing-table span3 pull-center">
              <h3>
                <span class="blocked">Monthly</span>
              </h3>
              <h2 class="pricing-table-price">
                <span>$</span>
                600<span class="frequency">/year</span>
              </h2>
              <ul class="pricing-table-list">
                <li>12 Updates/Backups per year <br /><small>(every month)</small></li>
                <li>WordPress & Plugin Updates</li>
                <li>Database Backup</li>
                <li>Site Review</li>
              </ul>
              <a href="#gform_1" id="month" class="btn btn-primary">
                Sign Up
              </a>
            </div>
            <div class="clearfix"></div>
			<div class="pull-center" style="padding: 5px 0;"><small><em>Additional fees may apply to any sites launched prior to <?=date('F Y',strtotime('3 months ago')); ?>.</em></small></div>
          </div>
       </div>
        </div>
     </div>
    </div>
  </div>
  <div id="content" class="container-fluid warranty-form" style="display: none;">
  	<div class="row-fluid">
  		<div class="span4">
  			<div class="entry">
	  			<h3>Questions</h3>
	  			<p>If you have any questions, you can email us at <a href="mailto:info@telegraphicsinc.com">info@telegraphicsinc.com</a> or call our offices at (847) 834-9327 and ask for a project manager.</p>
  			</div>
  			<div class="entry last">
				<h3>Our Office</h3>
				<p>Telegraphics, Inc.<br>
				9703 Cary Ave.<br>
				Schiller Park, IL 60176</p>
				<p>ph 847-834-9327<br>
				fax 847-928-0808</p>
				<p><a href="mailto:info@thisistg.com" title="Email Us">info@thisistg.com</a></p>
			</div>

<!--  			<h3>Do I HAVE to sign up for this?</h3>
  			<p>Absolutely not, it is completely optional. We do, however, strongly encourage your participation. Even if it's just once a year for us to update the system. We'll sleep easier at night knowing we have a recent backup just-in-case something happens to your site.
-->
  		</div>
		<div class="hero-unit span8">
			<?=do_shortcode('[gravityform id=1]');?>
		</div>
  	</div>
  </div>
<?php endif; ?>

	<div id="content" class="container-fluid">
		<div class="row-fluid">
		<?php if(!is_single(232)): ?>	
			<div class="span4 hidden-phone">
				<div class="entry">
					<?php $serviceimage = wp_get_attachment_image_src( get_field('s_image'),'company-image'); ?>
					<?php if($serviceimage): ?>
						<center><img src="<?=$serviceimage[0];?>" /></center>
					<?php else: ?>
						<div id="s_icon" class="bgpink">
							<i class="<?=get_field('s_icon');?> enormous-icon pull-center"></i>
						</div>
					<?php endif; ?>
				</div>
				<div class="entry">
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
					<h3>Some clients who have used TG's <?=$serviceType;?> services include:</h3>
					<ul style="padding-top: 10px;">
					
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
						 echo '<li>'.get_the_title().'</li>';
						endwhile; wp_reset_query(); ?>
					
					<em>...And more!</em>
					</ul>
				</div>
				<?php 
					// Display Custom Post Type
					$recent = new WP_Query('post_type=service&post_parent=0&posts_per_page=-1'); $x=1;
					while($recent->have_posts()) : $recent->the_post(); ?>
						<?php if($indPage): ?>
							<?php if($indPage == $post->ID): ?>
								<?php $activeService = 'activeService'; ?>
							<?php else: ?>
								<?php $activeService = ''; ?>
							<?php endif;?>
						<?php endif; ?>
						<div class="services <?=$activeService; ?>">
							<h3>
								<?php if($x == 1 || $x == 4 || $x == 7 || $x == 10 || $x == 13): ?>
									<a class="bgpink" href="<?php the_permalink(); ?>"><?=the_title(); ?></a>
								<?php elseif($x == 2 || $x == 5 || $x == 8 || $x == 11 || $x == 14): ?>
									<a class="bgblue" href="<?php the_permalink(); ?>"><?=the_title(); ?></a>
								<?php else: ?>
									<a class="bggreen" href="<?php the_permalink(); ?>"><?=the_title(); ?></a>
								<?php endif; ?>
							</h3>
						</div>
				<?php $x++; endwhile; wp_reset_query(); ?>
			</div>
		<?php endif; ?>
			<?php if(!is_single(232)): ?>
				<div class="span8">
					<h1><i class="<?=get_field('s_icon');?> huge-icon circled pull-center bg<?=altcolor($x);?> visible-desktop"></i><?=the_title(); ?></h1>
					<?=the_content()?>
					<div id="pagenav">
						<?php if(is_single('1135')):?>
							<?php 
								// Display Custom Post Type
								$recent = new WP_Query('post_type=service&post_parent=0&offset=1&posts_per_page=1');
								while($recent->have_posts()) : $recent->the_post(); ?>
							 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>&raquo;
							<?php endwhile; wp_reset_query(); ?>
						<?php elseif(is_single('42')): ?>
							<?php next_post('&laquo; %', '', 'yes'); ?>
						<?php else: ?>
							<?php next_post('&laquo; %', '', 'yes'); ?> | <?php previous_post('%&raquo;', '', 'yes'); ?>
						<?php endif; ?>
					</div>
				</div>

			<?php else: ?>
				<div class="span12 spacer">
					<h1><?=the_title(); ?></h1>
					<p class="lead">Using an online content management system to manage your site, you'll want to ensure it's not only backed-up regularly, but also up-to-date with the latest, most secure versions of the WordPress system and it's plugins.</p>
					
	<!-- 			<img class="aligncenter size-full wp-image-867" alt="Extended Website Warranty Protection" src="<?php bloginfo('template_directory'); ?>/library/images/extended-warranty-website-protection-graphic.png" /> -->
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
						<div id="pagenav">
						<?php 
							// Display Custom Post Type
							$recent = new WP_Query('post_type=service&post_parent=0&posts_per_page=1');
							while($recent->have_posts()) : $recent->the_post(); ?>
								&laquo;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<?php endwhile; wp_reset_query(); ?>
							| <?php previous_post('%&raquo;', '', 'yes'); ?>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<?php endif; ?>
			
		</div>
	</div>
	
<?php get_footer(); ?>