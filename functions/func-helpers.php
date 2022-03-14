<?php

// converts a phone number to a tel: link
function phone_to_link($num){
    $number_only = preg_replace('/[^0-9]/', '', $num);
    return '<a class="link" href="tel:'.$number_only.'">'.$num.'</a>';
  }


// converts email address to a mailto: link
function email_to_link($email){
    return '<a class="link" href="mailto:'. antispambot( $email ).'">'.esc_html( antispambot( $email ) ) .'</a>';
  }


  /**
 * This is just a for wp_get_attachment_image that makes it html5 and next gen images
 */
function wp_image($image_id, $size = 'large', $args = []){
  if(gettype($args) == 'string'){
    $args = [ 'class' => $args ];
  }

  return wp_get_attachment_image($image_id, $size, '', $args);
}

/**
 * Converts a youtube or vimeo video to work with iframes
 * Vimeo example: https://player.vimeo.com/video/ID
 * Youtube example: https://www.youtube.com/embed/ID
 * @param $url
 * @param $options | these are things like mute, background, loop, etc.
 */
function convert_video_link_for_iframe($url, $options = []){
  if(strpos($url, 'vimeo') !== false ){
    $url = 'https://player.vimeo.com/video/' . preg_replace('/[^0-9]/', '', $url);
  }

  if(strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false){
    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $id);
    $id = !empty($id[0]) ? $id[0] : null;
    $url = 'https://www.youtube.com/embed/' . $id;
  }

  if(!empty($options)){
    $url .= '?';
    foreach($options as $key => $value){
      if($key == 'loop' && $value == 1 & !empty($id)){
        $url .= 'playlist=' . $id . '&';
      }

      $url .= $key . '=' . $value . (count($options) - 1 !== $key ? '&' : '');
    }
  }

  return trim($url);
}

// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
  return 28;
  }
  add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );