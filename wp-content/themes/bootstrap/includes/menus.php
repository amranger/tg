<?php
// Remove Widgets from Widget Area
function tg_remove_wp_widgets(){
  unregister_widget('WP_Widget_Archives'); // Archives
  // unregister_widget('WP_Widget_Calendar'); // Calendar
  // unregister_widget('WP_Widget_Categories'); // Categories
  unregister_widget('WP_Widget_Links'); // Links
  unregister_widget('WP_Widget_Meta'); // Meta
  unregister_widget('WP_Widget_Pages'); // Pages
  // unregister_widget('WP_Widget_Recent_Comments'); // Recent Comments
  // unregister_widget('WP_Widget_Recent_Posts'); // Recent Posts
  unregister_widget('WP_Widget_RSS'); // RSS
  unregister_widget('WP_Widget_Search'); // Search (a search from)
  unregister_widget('WP_Widget_Tag_Cloud'); // Tag Cloud
  // unregister_widget('WP_Widget_Text'); // Text
  unregister_widget('WP_Nav_Menu_Widget'); // Custom Menu
}

// add_action('widgets_init', 'tg_remove_wp_widgets', 1);

// Remove Primary Menu Items
function tg_remove_menu_items() {
  global $menu;
  $restricted = array(
  	// __('Posts'), 
  	// __('Media'),
  	__('Links'), 
  	// __('Pages'),
  	// __('Comments'), 
  	 __('Plugins'), 
  	// __('Users'),
  	__('Tools'), 
  	// __('Settings')
  );
  end ($menu);
  while (prev($menu)){
    $value = explode(' ',$menu[key($menu)][0]);
    if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
      unset($menu[key($menu)]);}
    }
  }

// Hide menu navigation items from non-admin users
function hide_menus() { ?>
	<style type="text/css">
	   #toplevel_page_edit-post_type-acf, #toplevel_page_wp-security-scan-securityscan, #toplevel_page_pb_backupbuddy_getting_started, #toplevel_page_theme-options, #wp-admin-bar-wp-logo, #side-sortables #acf_860, #wpadminbar .quicklinks #wp-admin-bar-new-content a { display:none;}
	</style>
<?php }

function wps_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('about');
    $wp_admin_bar->remove_menu('wporg');
    $wp_admin_bar->remove_menu('documentation');
    $wp_admin_bar->remove_menu('support-forums');
    $wp_admin_bar->remove_menu('feedback');
    $wp_admin_bar->remove_menu('view-site');
}
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );

// Remove Sub Menus from Dashboard
function adjust_the_wp_menu() {
  $page = remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
  $page = remove_submenu_page( 'themes.php', 'themes.php' );
  $page = remove_submenu_page( 'themes.php', 'theme-editor.php' );
  $page = remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
  $page = remove_submenu_page( 'options-general.php', 'options-writing.php' );
  $page = remove_submenu_page( 'options-general.php', 'options-reading.php' );
  $page = remove_submenu_page( 'options-general.php', 'options-media.php' );
  $page = remove_submenu_page( 'options-general.php', 'options-permalink.php' );
}

// Remove "Gallery" Setting from media upload
add_action( 'admin_head_media_upload_gallery_form', 'mfields_remove_gallery_setting_div' );
if( !function_exists( 'mfields_remove_gallery_setting_div' ) ) {
    function mfields_remove_gallery_setting_div() {
        print '
            <style type="text/css">
                #gallery-settings *{
                display:none;
                }
            </style>';
    }
}

// hide "add new" on Tours
function tg_add_box() {
  global $submenu;
  unset($submenu['edit.php?post_type=tours'][10]);
}

// hide "add new" button on the listing and post pages for Tours
function tg_add_buttons() {
  global $pagenow;
  if(is_admin()){
	if($pagenow == 'edit.php' && $_GET['post_type'] == 'tours'){
		echo '<style type="text/css">.add-new-h2{display: none;}</style>';
	}
	if($pagenow == 'post.php' && $_GET['post'] == 17){
		echo '<style type="text/css">.add-new-h2{display: none;}</style>';
	}
  }
}

global $current_user;
get_currentuserinfo();
if($current_user->user_login != 'telegraphics') {
	add_action('admin_menu', 'tg_remove_menu_items');
	add_action('admin_head', 'hide_menus');
	add_action( 'admin_menu', 'adjust_the_wp_menu', 999 );
	add_action('admin_menu', 'tg_add_box');
	add_action('admin_head','tg_add_buttons');
}