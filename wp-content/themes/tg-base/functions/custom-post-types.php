<?php



// The register_post_type() function is not to be used before the 'init'.
 add_action( 'init', 'project' );

/* Here's how to create your customized labels */
function project() {
	$labels = array(
		'name' => _x( 'Project', 'post type general name' ), // Tip: _x('') is used for localization
		'singular_name' => _x( 'Project', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'Project' ),
		'add_new_item' => __( 'Add New Project' ),
		'edit_item' => __( 'Edit Project' ),
		'new_item' => __( 'New Project' ),
		'view_item' => __( 'View Projects' ),
		'search_items' => __( 'Search Projects' ),
		'not_found' =>  __( 'No Projects found' ),
		'not_found_in_trash' => __( 'No Projects found in Trash' ),
		'parent_item_colon' => ''
	);

	// Create an array for the $args
	$args = array( 'labels' => $labels, /* NOTICE: the $labels variable is used here... */
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'show_in_nav_menus' => false,
		//'show_in_menu' => 'edit.php?post_type=tours',
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'page-attributes', 'revisions' ),
		'taxonomies' => array( 'category' )
	); 

	register_post_type( 'project', $args ); /* Register it and move on */
}

// The register_post_type() function is not to be used before the 'init'.
 add_action( 'init', 'service' );

/* Here's how to create your customized labels */
function service() {
	$labels = array(
		'name' => _x( 'Service', 'post type general name' ), // Tip: _x('') is used for localization
		'singular_name' => _x( 'Service', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'Service' ),
		'add_new_item' => __( 'Add New Service' ),
		'edit_item' => __( 'Edit Service' ),
		'new_item' => __( 'New Service' ),
		'view_item' => __( 'View Services' ),
		'search_items' => __( 'Search Services' ),
		'not_found' =>  __( 'No Services found' ),
		'not_found_in_trash' => __( 'No Services found in Trash' ),
		'parent_item_colon' => ''
	);

	// Create an array for the $args
	$args = array( 'labels' => $labels, /* NOTICE: the $labels variable is used here... */
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'show_in_nav_menus' => false,
		//'show_in_menu' => 'edit.php?post_type=tours',
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'page-attributes' )
	); 

	register_post_type( 'service', $args ); /* Register it and move on */
}

// The register_post_type() function is not to be used before the 'init'.
 add_action( 'init', 'employee' );

/* Here's how to create your customized labels */
function employee() {
	$labels = array(
		'name' => _x( 'Employee', 'post type general name' ), // Tip: _x('') is used for localization
		'singular_name' => _x( 'Employee', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'Employee' ),
		'add_new_item' => __( 'Add New Employee' ),
		'edit_item' => __( 'Edit Employee' ),
		'new_item' => __( 'New Employee' ),
		'view_item' => __( 'View Employees' ),
		'search_items' => __( 'Search Employees' ),
		'not_found' =>  __( 'No Employees found' ),
		'not_found_in_trash' => __( 'No Employees found in Trash' ),
		'parent_item_colon' => ''
	);

	// Create an array for the $args
	$args = array( 'labels' => $labels, /* NOTICE: the $labels variable is used here... */
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'show_in_nav_menus' => false,
		//'show_in_menu' => 'edit.php?post_type=tours',
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'page-attributes' )
	); 

	register_post_type( 'employee', $args ); /* Register it and move on */
}


// Creates 'Categories' for Custom Post Type
 register_taxonomy( 'project_tags', 'project', array( 'hierarchical' => false, 'label' => __('Tags') ) ); 
// register_taxonomy( 'pics_cateogry', 'tour_pics', array( 'hierarchical' => true, 'label' => __('Categories') ) ); 




/*******************************************************
** Retrieve Taxonomy Information about the current post
********************************************************/

// Let's find out if we have taxonomy information to display
// Something to build our output in
function custom_post_taxonomy($taxo_name) {
	global $post;

	// Variables to store each of our possible taxonomy lists
	// This one checks for an Operating System classification
	$taxo_list = get_the_term_list( $post->ID, $taxo_name, '', ', ', '' );
	
	return $taxo_list;
}