<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">  

<!--<![endif]-->
<head>

	<!-- ==============================================
		Website by Telegraphics, Inc.
		Chicago, IL - info@telegraphicsinc.com
		http://www.telegraphicsinc.com
	=============================================== -->


	<!-- ==============================================
	Title and Meta Tags
	=============================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'tgcustom' ), max( $paged, $page ) );
	?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/library/images/favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#ee4976">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/library/images/favicons/mstile-144x144.png">
	<meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory'); ?>/library/images/favicons/mstile-70x70.png">
	<meta name="msapplication-square144x144logo" content="<?php bloginfo('template_directory'); ?>/library/images/favicons/mstile-144x144.png">
	<meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory'); ?>/library/images/favicons/mstile-150x150.png">
	<meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory'); ?>/library/images/favicons/mstile-310x310.png">
	<meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory'); ?>/library/images/favicons/mstile-310x150.png">
	
	
	<!-- ==============================================
	CSS
	=============================================== -->    
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/tg.css?ver=<?=date('Ymdis');?>" type="text/css"/>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
	
	<!-- ==============================================
	Fonts
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:400,700,300,100|Libre+Baskerville:800,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400italic' rel='stylesheet' type='text/css'>
	
	
	<!-- ==============================================
	JS
	=============================================== -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
	<script src="<?php bloginfo('template_directory'); ?>/library/js/css3-mediaqueries.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>


	<!-- ==============================================
	Facebook Meta 
	=============================================== -->
	<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
	<!-- the default values -->
	<meta property="fb:app_id" content="319211828195495" />
	<meta property="fb:admins" content="516820857" />	
	
	<!-- if page is content page -->
	<?php if (is_single()) { ?>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
	<meta property="og:type" content="article" />
	<?php if (function_exists('wp_get_attachment_thumb_url')): ?> 
	<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');?>
	<meta property="og:image" content="<?=$image_url[0];?>" />
	<?php endif; ?>
	
	<!-- if page is others -->
	<?php } else { ?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.telegraphicsinc.com/wp-content/themes/tg-base/library/images/telegraphics-tg-chicago-web-design.jpg" /> <?php } ?>
	
	<meta name="p:domain_verify" content="7fd7d08ea5a900e481c83ee0fa447026"/>
	<!-- ==============================================
	Pingback 
	=============================================== -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>


</head>

<body <?=body_class();?> data-spy="scroll" data-target="#main-nav" data-offset="100">
		<div id="fb-root"></div>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({appId: '319211828195495', status: true, cookie: true,
		             xfbml: true});
		  };
		  (function() {
		    var e = document.createElement('script'); e.async = true;
		    e.src = document.location.protocol +
		      '//connect.facebook.net/en_US/all.js';
		    document.getElementById('fb-root').appendChild(e);
		  }());
		</script>
		<!-- ==============================================
		MAIN NAV
		=============================================== -->
		<div id="main-nav" class="navbar <?php if( is_front_page()): ?>navbar-static-top<?php else: ?>navbar-fixed-top<?php endif; ?>">
			<div class="container">
			
				<div class="navbar-header">
				
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
					
					<!-- ======= LOGO (for small screens)========-->
					<a class="navbar-brand visible-xs" href="<?=bloginfo('url')?>"><img src="<?php bloginfo('template_directory'); ?>/library/images/tg-letters.png" class="img-responsive" /></a>
					
				</div>
				
				<div id="site-nav" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="<?=bloginfo('url')?>/about">About</a>
						</li>
						<li>
							<a href="<?=bloginfo('url')?>/services">Services</a>
						</li>
						<li id="logo">
							<a href="<?=bloginfo('url')?>">
								<img src="<?php bloginfo('template_directory'); ?>/library/images/tg-letters.png" class="img-responsive" />
							</a>
						</li>
						<li>
							<a href="<?=bloginfo('url')?>/blog">Blog</a>
						</li>
						<li>
							<a href="<?=bloginfo('url')?>/contact">Contact</a>
						</li>
					</ul>
				</div><!--End navbar-collapse -->
			</div><!--End container -->
			
		</div>







