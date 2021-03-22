<?php 

// Disable Theme Switching
add_action('admin_init', 'slt_lock_theme');
function slt_lock_theme() {
	global $submenu, $userdata;
	get_currentuserinfo();
	if ($userdata->ID != 1) {
		unset($submenu['themes.php'][5]);
		unset($submenu['themes.php'][15]);
	}
}


// Change logo login URL
add_action('login_headerurl', 'my_custom_login_url');
function my_custom_login_url() { return 'http://www.telegraphicsinc.com'; }


// Change login logo
function custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url(http://includes.telegraphicsinc.com/images/telegraphics-wordpress.png) !important; width: 310px !important; height: 115px !important; background-size: 310px 115px !important;}
    </style>';
}
add_action('login_head', 'custom_login_logo');


// Remove WordPress Admin Bar
add_filter('show_admin_bar', '__return_false');


// Remove Dashboard Widgets
function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); 
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
} 
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' ); 


// Add Telegraphics, Inc. Dashboard Widget
function your_dashboard_widget() {
	echo file_get_contents('http://includes.telegraphicsinc.com/wordpress-feed.html');
};

function add_your_dashboard_widget() {
  wp_add_dashboard_widget( 'your_dashboard_widget', __( 'Telegraphics, Inc. WordPress Setup' ), 'your_dashboard_widget' );  
}   
add_action('wp_dashboard_setup', 'add_your_dashboard_widget' );


// Change Footer Text
function remove_footer_admin () {
    echo '<em>Thank you for choosing <a href="http://www.telegraphicsinc.com">Telegraphics, Inc</a>. Email us at <a href="mailto:support@telegraphicsinc.com">support@telegraphicsinc.com</a> for technical support.</em>';
}
add_filter('admin_footer_text', 'remove_footer_admin'); 


// Add Twitter Bootstrap's standard 'active' class name to the active nav link item
add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );
function add_active_class($classes, $item) {
	if($item->menu_item_parent == 0 && in_array('current-menu-item', $classes)) {
        $classes[] = "active";
	}
    return $classes;
}

