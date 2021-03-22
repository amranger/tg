<?php
// Creates [site_url] Shortcode
function create_site_path($atts, $content = null) {
        extract(shortcode_atts(array(
                "cat" => ''
        ), $atts));

		$sitepath = get_bloginfo('url');
        return $sitepath;
}
add_shortcode("site_url", "create_site_path");

// Force shortcodes to display in widgets
add_filter('widget_text', 'do_shortcode');
