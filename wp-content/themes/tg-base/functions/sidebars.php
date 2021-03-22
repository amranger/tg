<?php
// Register the blog aside
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' 			=> 'Blog Sidebar',
		'id' 			=> 'blog',
		'description'	=> __('Blog sidebar.'),
		'before_widget' => '<div id="%1$s" class="widgetcontainer %2$s">',
		'after_widget' => '</div><!-- /.widget -->',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',	
	));	