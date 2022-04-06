<?php
$background_image = get_field('background_image', 'options');
$hero_heading = get_field('hero_heading', 'options');
$hero_subtext = get_field('hero_subtext', 'options');
?>
<div
  class="site-header"
  style="
    background-position: top center;
    background-size: cover;
    background-image:
    linear-gradient(to bottom, rgba(0,11,64, 0.75), rgba(0,11,64, 0.75)),
    url(<?php echo (empty($background_image)) ? 'nope' : $background_image ;?>);">
  <div class="site-inner">
    <div class="site-heading text-center">
        <h1 class="mb-3 heading"><?php echo (empty($hero_heading)) ? '' : $hero_heading ;?>s</h1>
        <h3 class="site-leading"><?php echo (empty($hero_subtext)) ? '' : $hero_subtext ;?></h3>
    </div>
    <div class="navigation">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav custom-nav text-center mx-auto mt-4 mb-md-0',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="menu--item  %2$s">%3$s</ul>',
                'depth' => 5,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
    </div>
  </div>


</div>