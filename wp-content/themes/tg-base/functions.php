<?php 

require_once(get_template_directory() . '/functions/sidebars.php'); 
require_once(get_template_directory() . '/functions/post_thumbnails.php');
require_once(get_template_directory() . '/functions/custom-post-types.php'); 
require_once(get_template_directory() . '/functions/shortcodes.php'); 
require_once(get_template_directory() . '/functions/menus.php'); 
require_once(get_template_directory() . '/functions/customizations.php'); 



// Check URL for http, add it if not present
function tg_checkURL($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}

function get_vimeo_video($vurl){
	$pieces = explode("/", $vurl);
	$field_value = end($pieces);
	
	return  '<iframe src="http://player.vimeo.com/video/'.$field_value.'" width="480" height="272" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
}

function blog_cat($ID) {
	$categories = get_the_category($ID);
	$separator = ' + ';
	$output = '';
	if($categories){
		foreach($categories as $category) {
			$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
	echo trim($output, $separator);
	}
}

function terms_no_link($ID){
	 $terms = get_the_terms($ID, "project_tags");
	 $count = count($terms); $x=1;
	 if ( $count > 0 ){
	     foreach ( $terms as $term ) {
		   echo ($x==1 ? '' : ' + ');
	       echo $term->name;
	       $x++;
	     }
	 }
}


// Add lead class to first paragraph
function first_paragraph($content){
    global $post;

    // if we're on the homepage, don't add the lead class to the first paragraph of text
/*
    if( is_page_template( 'page-homepage.php' ) )
        return $content;
    else
*/
        return preg_replace('/<p([^>]+)?>/', '<p$1 class="lead">', $content, 1);
}
add_filter('the_content', 'first_paragraph');


// Variable & intelligent excerpt length.
function print_excerpt($length) { // Max excerpt length. Length is set in characters
        global $post;
        $text = $post->post_excerpt;
        if ( '' == $text ) {
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace(']]>', ']]>', $text);
        }
        $text = strip_shortcodes($text); // optional, recommended
        $text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' if you want to keep some tags</p>
	    $text = substr($text,0,$length);
        $excerpt = reverse_strrchr($text, '.', 1);
        if( $excerpt ) {
/*                 echo '<p>'; */
                echo apply_filters('get_the_excerpt',$excerpt);
                echo ' <a href="'.get_permalink($post->ID).'">Read Article &gt;</a>';
        } else {
                echo apply_filters('the_excerpt',$text);
        }
}
// Returns the portion of haystack which goes until the last occurrence of needle
function reverse_strrchr($haystack, $needle, $trail) {
    return strrpos($haystack, $needle) ? substr($haystack, 0, strrpos($haystack, $needle) + $trail) : false;
}

function siblings() {
    global $post;
    $siblings = get_pages('child_of='.$post->post_parent.'&parent='.$post->post_parent);
    foreach ($siblings as $key=>$sibling){
        if ($post->ID == $sibling->ID){
            $ID = $key;
        }
    }
    $closest = array('before'=>get_permalink($siblings[$ID-1]->ID),'after'=>get_permalink($siblings[$ID+1]->ID),'after_title'=>get_the_title($siblings[$ID+1]->ID));

    return $closest;
}

// Force Search.php page to display on search
add_filter( 'request', 'my_request_filter' );
function my_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}

// Limit search results to JUST posts
function SearchFilter($query) {
     if ($query->is_search) {
          $query->set('post_type','post');
     }
     return $query;
}
add_filter('pre_get_posts','SearchFilter');

add_action("gform_notification_format", "set_notification_format", 10, 4);
function set_notification_format($format, $notification_type, $form, $lead){
    if($notification_type == "admin")
        return "text"; //setting admin notifications as text
    else
        return "html"; //setting user notifications as text
}

// Login Page Styles
function login_styles() { ?>
    <style type="text/css">
    	html body.login {
            background: url('http://www.telegraphicsinc.com/wp-content/uploads/2014/07/Tg_Background.jpg') no-repeat bottom center fixed;
			-webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        body.login div#login h1 a {
            background: url('http://www.telegraphicsinc.com/wp-content/uploads/2014/07/TG_Logo.png') !important;
            width: 310px !important;
            height: 115px !important;
            background-size: 310px 115px !important;
        }
        html body.login form {
            background: transparent;
            box-shadow: none;
        }
        html body.login label, html body.login #backtoblog a, .login #nav a {
	        color: #fff;
        }
        html body.login #backtoblog a:hover, .login #nav a:hover {
	    	color: #ddd;
        }
		.wp-core-ui .button-primary {
	        background: #d44169;
	        border-color: #d44169;
	        box-shadow: none;
        }
		.wp-core-ui .button-primary:hover, .wp-core-ui .button-primary:active, .wp-core-ui .button-primary:focus {
	        background: #d44169;
	        border-color: #ff6891;
	        box-shadow: none;
        }
        .login .message {
	        border-left: 4px solid #d44169;
        }
        </style>
<?php }
add_action( 'login_enqueue_scripts', 'login_styles' );