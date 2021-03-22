<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title>
			<?php if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ); echo ' | '; }
			echo bloginfo( 'name' ); echo ' - '; bloginfo( 'description', 'display' );  ?> 
		</title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  		<?php if(is_page(943)): // Get A Quote Page ?>
  			<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/less/slider.less">
  		<?php endif; ?>
  		
  		<!-- HORIZONTAL SCROLLING -->
		<?php if(is_front_page()): ?> 
		<script type='text/javascript' src='http://zhcoa1szx8c1jm0414amj6a1ee4.wpengine.netdna-cdn.com/wp-content/themes/bootstrap/library/js/hscroll.js?ver=3.5.2'></script>
		<?php endif; ?>

  		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>

		
		<!-- end of wordpress head -->

	</head>
	
	<body <?php body_class(); ?>>
		<header class="affix">
			<div id="inner-header" class="clearfix">
				<div class="row-fluid">
					<div class="span12 clearfix">
						<div class="row-fluid">
							<div class="span3">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php bloginfo('template_directory'); ?>/library/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" />
								</a><img class="visible-desktop" src="<?php bloginfo('template_directory'); ?>/library/images/telegraphics.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" style="position: absolute; top: -9999px;" />
							</div>
							<nav id="top-menu" class="menu-primary-navigation-container span9">
								<ul id="menu-primary-navigation" class="menu">
									<?php bones_main_nav(); ?>
								</ul>
							</nav>
						</div> <!-- end .row-fluid -->
					</div>
				</div>
			</div> <!-- end #inner-header -->
		</header> <!-- end header -->
