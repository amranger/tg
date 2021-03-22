<?php
/*
Template Name: Retainers Page
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<?php $indPage = $post->ID; ?>

<div class="feature">
<div class="container">
    <div id="myCarousel">
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item">
          <div class="row-fluid">
  
            <div class="well retainer-table span3 pull-center">
              <h3>
                <span class="blocked">Starter Pkg</span>
              </h3>
              <h2 class="pricing-table-price">
                <span class="frequency">save</span><br/>
                <span class="price"><span>$</span>70</span>
              </h2>
              <ul class="pricing-table-list">
                <li>5 hrs @ $180/hr = $900</li>
                <li><strong>YOUR COST - $830</strong></li>
              </ul>
              <a href="#gform_5" id="starter" class="btn btn-primary">
                Sign Up
              </a>
            </div>
            
            <div class="well retainer-table span3 pull-center">
              <h3>
                <span class="blocked">Pro Pkg</span>
              </h3>
              <h2 class="pricing-table-price">
                <span class="frequency">save</span><br/>
                <span class="price"><span>$</span>180</span>
              </h2>
              <ul class="pricing-table-list">
                <li>10 hrs @ $180/hr = $1,800</li>
                <li><strong>YOUR COST - $1,620</strong></li>
              </ul>
              <a href="#gform_5" id="pro" class="btn btn-primary">
                Sign Up
              </a>
            </div>
            <div class="well retainer-table span3 pull-center">
              <h3>
                <span class="blocked">Premium Pkg</span>
              </h3>
              <h2 class="pricing-table-price">
                <span class="frequency">save</span><br/>
                <span class="price"><span>$</span>430</span>
              </h2>
              <ul class="pricing-table-list">
                <li>20 hrs @ $180/hr = $3,600</li>
                <li><strong>YOUR COST - $3,170</strong></li>
              </ul>
              <a href="#gform_5" id="premium" class="btn btn-primary">
                Sign Up
              </a>
            </div>    
            <div class="well retainer-table span3 pull-center">
              <h3>
                <span class="blocked">Ultimate Pkg</span>
              </h3>
              <h2 class="pricing-table-price">
                <span class="frequency">save</span><br/>
                <span class="price"><span>$</span>1,260</span>
              </h2>
              <ul class="pricing-table-list">
                <li>50 hrs @ $180/hr = $9,000</li>
                <li><strong>YOUR COST - $7,740</strong></li>
              </ul>
              <a href="#gform_5" id="ultimate" class="btn btn-primary">
                Sign Up
              </a>
            </div>                    
            
            <div class="clearfix"></div>
			<div class="pull-center" style="padding: 5px 0;"><small><em>For more than 50 hours please contact us for customized discount at <a href="mailto:info@telegraphicsinc.com">info@telegraphicsinc.com</a>.</em></small></div>
          </div>
       </div>
        </div>
     </div>
    </div>
  </div>
  <div id="content" class="container-fluid retainer-form" style="display: none;">
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
  		</div>
		<div class="hero-unit span8">
			<?=do_shortcode('[gravityform id=5]');?>
		</div>
  	</div>
  </div>
<div class="span12 spacer">
					<div class="row-fluid sellingpoints">
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
	<h1><?=the_title(); ?></h1>
	<div class="row-fluid">
		<?=the_content()?>
	</div>
	<p>&nbsp;</p>
</div>			
  
<?php get_footer(); ?>