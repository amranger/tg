<?php get_header(); the_post(); ?>

<div class="feature">

<div class="container">
    <div id="myCarousel">
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item">
          <div class="row-fluid">
  
            <div class="well pricing-table span3 pull-center">
              <h3>
                <span class="blocked">Usability</span>
              </h3>
              <ul class="pricing-table-list">
                <li><i class="icon-ok"></i> &nbsp; Mobile Accessibility</li>
                <li><i class="icon-ok"></i> &nbsp; Content</li>
                <li><i class="icon-ok"></i> &nbsp; Effectiveness</li>
                <li><i class="icon-ok"></i> &nbsp; Cross-Platform Compatibility</li>
                <li><i class="icon-ok"></i> &nbsp; Handicap Compliance</li>
              </ul>
            </div>
            
            <div class="well pricing-table span3 pull-center">
              <h3>
                <span class="blocked">Design</span>
              </h3>
              <ul class="pricing-table-list">
                <li><i class="icon-ok"></i> &nbsp; Experience</li>
                <li><i class="icon-ok"></i> &nbsp; Ability for Growth</li>
                <li><i class="icon-ok"></i> &nbsp; Aesthetics</li>
                <li><i class="icon-ok"></i> &nbsp; Consistency</li>
                <li><i class="icon-ok"></i> &nbsp; Typography</li>
              </ul>
            </div>
            
            <div class="well pricing-table pricing-table span3 pull-center">
              <h3>
                <span class="blocked">Development</span>
              </h3>
              <ul class="pricing-table-list">
                <li><i class="icon-ok"></i> &nbsp; Load Times</li>
                <li><i class="icon-ok"></i> &nbsp; Page Structure</li>
                <li><i class="icon-ok"></i> &nbsp; Optimization</li>
                <li><i class="icon-ok"></i> &nbsp; Technology</li>
                <li><i class="icon-ok"></i> &nbsp; Consistency</li>
              </ul>
            </div>
            
            <div class="well pricing-table span3 pull-center">
              <h3>
                <span class="blocked">SEO</span>
              </h3>
              <ul class="pricing-table-list">
                <li><i class="icon-ok"></i> &nbsp; Proper Formatting</li>
                <li><i class="icon-ok"></i> &nbsp; Page Titles/URLs</li>
                <li><i class="icon-ok"></i> &nbsp; Content</li>
                <li><i class="icon-ok"></i> &nbsp; Malpractice</li>
                <li><i class="icon-ok"></i> &nbsp; Page Development</li>
              </ul>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>


	<div id="content" class="container-fluid">
		<div class="row-fluid spacer">
			<div class="span8">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
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