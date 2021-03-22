<?php			
// Register the footer aside
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' 			=> 'Footer Columns',
		'id' 			=> 'footer-columns',
		'description'	=> __('Bottom middle content area.'),
		'before_widget' => '<div id="%1$s" class="widgetcontainer %2$s grid_4">',
		'after_widget' => '</div></div><!-- /.widget -->',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3><div class="textwidget">',	
	));	
	
// Register the blog aside
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' 			=> 'Blog Sidebar',
		'id' 			=> 'blog',
		'description'	=> __('Blog sidebar.'),
		'before_widget' => '<div id="%1$s" class="widgetcontainer %2$s">',
		'after_widget' => '</div></div><!-- /.widget -->',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',	
	));	
	
// Register the blog aside
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' 			=> 'Footer Consulting',
		'id' 			=> 'consulting',
		'description'	=> __('Footer Consulting'),
		'before_widget' => '<div id="%1$s" class="textwidget %2$s">',
		'after_widget' => '</div><!-- /.widget -->',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',	
	));	