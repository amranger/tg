<?php class RecentWidget extends WP_Widget
{
    function RecentWidget(){
		$widget_ops = array('description' => 'Displays Recent Posts');
		$control_ops = array('width' => 400, 'height' => 300);
		parent::WP_Widget(false,$name='ET Recent Posts',$widget_ops,$control_ops);
    }

  /* Displays the Widget in the front-end */
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'Recent Posts' : $instance['title']);
		$postsNum = empty($instance['postsNum']) ? '' : $instance['postsNum'];

		echo '<div class="widget ul-thumb">';

		if ( $title )
		echo $before_title . $title . $after_title;
?>	
<ul>
	<?php $custom_query = new WP_Query("showposts=$postsNum");
	if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post();
		include(TEMPLATEPATH . '/includes/widget-post.php'); ?>
	<?php endwhile; endif; 
	wp_reset_postdata(); ?>
</ul>
<?php
		echo '</div></div> <!-- end .widget -->';
	}

  /*Saves the settings. */
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = stripslashes($new_instance['title']);
		$instance['postsNum'] = stripslashes($new_instance['postsNum']);

		return $instance;
	}

  /*Creates the form for the widget in the back-end. */
    function form($instance){
		//Defaults
		$instance = wp_parse_args( (array) $instance, array('title'=>'Recent Posts', 'postsNum'=>'5') );

		$title = htmlspecialchars($instance['title']);
		$postsNum = htmlspecialchars($instance['postsNum']);

		# Title
		echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></p>';
		# Number of posts
		echo '<p><label for="' . $this->get_field_id('postsNum') . '">' . 'Number Of Posts:' . '</label><input type="text" class="widefat" id="' . $this->get_field_id('postsNum') . '" name="' . $this->get_field_name('postsNum') . '" value="'.$postsNum.'"  /></p>';
	}

}// end RecentWidget class

function RecentWidgetInit() {
  register_widget('RecentWidget');
}

add_action('widgets_init', 'RecentWidgetInit');

?>