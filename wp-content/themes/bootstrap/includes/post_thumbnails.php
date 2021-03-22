<?php

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes

/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

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


};
/* --------------------------------------------- */

?>