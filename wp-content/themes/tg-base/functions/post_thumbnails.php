<?php

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
   add_theme_support( 'post-thumbnails' );
   
	set_post_thumbnail_size(540, 222, true);
 	add_image_size('company-image', 302, 302);
 	add_image_size('logo', 134, 50);
 	add_image_size('mainemployee', 220, 280, true);
 	add_image_size('employee', 220, 280, true);
 	add_image_size('blog-employee', 75, 75, true );
 	add_image_size('blog-main', 870, 350, true );
 	add_image_size('main-portfolio', 165, 165, true );
 	add_image_size('main-portfolio-thumb', 80, 80, true );
 	add_image_size('featured-project-img', 200, 150, true );

   
};
/* --------------------------------------------- */

?>