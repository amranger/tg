<?php 

// Creates [site_pages] Shortcode
function get_site_pages($atts, $content = null) {
        extract(shortcode_atts(array(
                "cat" => ''
        ), $atts));

		$recent = new WP_Query('post_type=tours&posts_per_page=1'); while($recent->have_posts()) : $recent->the_post();
			$tour_info = '<p><a href="'.get_permalink($recent->ID).'">'.get_the_title().'</a></p>';
		endwhile;
		
		$args = array('sort_column' => 'post_title', 'exclude' => '124, 119, 521, 121, 547', 'title_li' => '<h2>Site Pages</h2>');
        $site_pages = wp_list_pages( $args );
        $site_pages .= "<div class=\"span4\"><h2>Tour Info</h2>$tour_info</div>";
        return $site_pages;
}
add_shortcode("site_pages", "get_site_pages");


// Creates [image_path] Shortcode
function create_image_path($atts, $content = null) {
        extract(shortcode_atts(array(
                "cat" => ''
        ), $atts));

		$blogpath = get_bloginfo('template_directory');
        return $blogpath;
}
add_shortcode("image_path", "create_image_path");

// Creates [site_path] Shortcode
function create_site_path($atts, $content = null) {
        extract(shortcode_atts(array(
                "cat" => ''
        ), $atts));

		$sitepath = get_bloginfo('url');
        return $sitepath;
}
add_shortcode("site_path", "create_site_path");

