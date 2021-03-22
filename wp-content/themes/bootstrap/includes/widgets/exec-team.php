<?php

class Exec_Team_Widget extends WP_Widget {
  function Exec_Team_Widget() {
    $widget_ops = array(
      'description' => 'A widget for executive team members.' 
    );
    $this->WP_Widget('exec_team', 'Executive Team', $widget_ops);
    $x=1;
  }

  function form($instance) {
    $name = esc_attr($instance['name']);
    $title = esc_attr($instance['title']);
    $bio = esc_attr($instance['bio']);
    $photo = esc_attr($instance['photo']);

    ?>
      <p>
        <label for="<?php echo $this->get_field_id('name'); ?>">Name: 
        <input class="widefat" 
               id="<?php echo $this->get_field_id('name'); ?>" 
               name="<?php echo $this->get_field_name('name'); ?>" 
               type="text" 
               value="<?php echo attribute_escape($name); ?>" />
        </label>
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('title'); ?>">Title: 
        <input class="widefat" 
               id="<?php echo $this->get_field_id('title'); ?>" 
               name="<?php echo $this->get_field_name('title'); ?>" 
               type="text" 
               value="<?php echo attribute_escape($title); ?>" />
        </label>
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('bio'); ?>">Bio: 
        <textarea class="widefat" 
               id="<?php echo $this->get_field_id('bio'); ?>" 
               name="<?php echo $this->get_field_name('bio'); ?>" 
               type="text"><?php echo attribute_escape($bio); ?></textarea>
        </label>
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('photo'); ?>">Image ID: 
        <input class="widefat" 
               id="<?php echo $this->get_field_id('photo'); ?>" 
               name="<?php echo $this->get_field_name('photo'); ?>" 
               type="text" 
               value="<?php echo attribute_escape($photo); ?>" />
        </label>
        <span style="font-size: .85em; font-style: italic;">ID of image uploaded on the <a href="<?=bloginfo('url')?>/wp-admin/upload.php" target="_blank">Media</a> page.</span>
      </p>
      
    <?php
  }

  function update($new_instance, $old_instance) {
    $instance = $old_instance;
    $instance['name'] = strip_tags($new_instance['name']);
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['bio'] = $new_instance['bio'];
    $instance['photo'] = strip_tags($new_instance['photo']);

    return $instance;
  }

  function widget($args, $instance) {
    extract($args, EXTR_SKIP);
    
		//echo $before_widget;
		
		$name = $instance['name'];
		$title = $instance['title'];
		$bio = $instance['bio'];
		$photo = $instance['photo'];
				
		echo '<div class="grid_5 executive_team">';
		$image_attributes = wp_get_attachment_image_src($photo,'about-page');
		echo '<img src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'">';
		echo '<h4>'.$name.'</h4><h5>'.$title.'</h5><p>'.$bio.'</p>';
		echo '</div>';
		//echo $after_widget;
		$x++;
  }
}

register_widget('Exec_Team_Widget');

?>