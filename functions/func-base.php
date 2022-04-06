<?php



// Functions to help the theme out
function theme_configuration($options){

}
/*** Component functionality
 * */
function component($name, $args = [], $echo = true){
    $html = '';

    //set each key as a variable
    foreach($args as $key => $value){
      $$key = $value;
    }

    if($echo == false){
      ob_start();
    }

    //include the template to have access to variables
    $template_location = 'components/' . $name . '/' . $name . '.php';
    if(locate_template($template_location)){
      require(get_template_directory() . '/' . $template_location);
    } else {
      pr($name . ' component not found.');
    }

    if($echo == false){
      $html = ob_get_contents();
      ob_end_clean();
    }

    //unset any variables we've created
    foreach($args as $key => $value){
      unset($$key);
    }

    return $html;
   }

   /*** Theme Support ***/
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support( 'custom-header' );
add_theme_support('post');
add_theme_support('html5');
add_theme_support('menus');
add_theme_support('responsive-embeds');

// Custom Site Logo

add_theme_support( 'custom-logo');

/**
 * Adds the site logo to the login page
 */
add_action( 'login_enqueue_scripts', function() {
  $image_url = get_field('site_logo', 'options');

  $style = "
  <style type='text/css'>
    #login h1 a, .login h1 a {
      background-image: url('');
      width:320px;
      background-size: contain;
      background-repeat: no-repeat;
    }
  </style>
  ";

  echo $style;
});

/**
 * change the WP link on the login page
 */
add_filter( 'login_headerurl', function(){
  return home_url();
});




function get_attr_from_image_html($html, $attr){
  $dom = new DOMDocument();
  $dom->loadHTML($html);
  $image = $dom->getElementsByTagName('img');
  return $image[0]->getAttribute($attr);
}
