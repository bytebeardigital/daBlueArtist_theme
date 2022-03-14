<?php

//adds a class of button to a link
add_shortcode('button', function ($args, $content) {
  $color = !empty($args['color']) ? $args['color'] : 'normal';
  $size = !empty($args['size']) ? $args['size'] : 'medium';
  $style = !empty($args['style']) ? $args['style'] : 'light';
  $position = !empty($args['position']) ? $args['position'] : 'center';
  return str_replace('<a ', "<a class='button button__size--{$size} button__position--{$position} button__color--{$color} button__theme--{$style}' ", $content);
  // return str_replace('<a ', "<a class='button button--{$color} button--{$style}' ", $content);
});


// adds iframe

//returns site map shortcode
add_shortcode('site-map', function ($args, $content) {

  if (!empty($args['showall'])) {
  	$html = '<nav class="site-map editor-content">';

  	$post_types_we_want = [];
  	$post_types = get_post_types();

  	// EXCLUDES
		$exclude_list = [
			'attachment'
		];

		foreach ($exclude_list as $key => $exclude) {
			unset($post_types[$exclude]);
		}

		// map in data
		foreach ($post_types as $key => $post_type) {

			$post_type = get_post_type_object($post_type);

			if ($post_type->publicly_queryable || $post_type->name == 'page') {
				$post_types_we_want[] = [
					'title' => $post_type->label,
					'posts' => get_posts([
						'post_type' => $post_type->name,
						'numberposts' => -1,
						'orderby' => 'post_title',
						'order' => 'ASC'
					])
				];
			}
		}
	
		foreach($post_types_we_want as $post_type){
			if (!empty($post_type['posts'])) {
		  	$html .= '<h2>'.$post_type['title'].'</h2>';
		  		$html .= '<ul>';
		  		foreach($post_type['posts'] as $single){
				    $html .= '<li><a href="'.get_the_permalink($single).'">'.$single->post_title.'</a></li>';
			  	}
		  		$html .= '</ul>';
		  }
		}
		$html .= '</nav>';

  } else {
    $html =  wp_nav_menu([
      'theme_location'  => 'site-map',
      'container'       => false,
      'echo'      => false,
    ]);
  }

  return $html;
});