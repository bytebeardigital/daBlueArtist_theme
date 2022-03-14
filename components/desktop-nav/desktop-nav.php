<?php

?>
<div
  class="site-header"
  style="
    background-position: top center;
    background-size: cover;
    background-image:
    linear-gradient(to bottom, rgba(0,11,64, 0.75), rgba(0,11,64, 0.75)),
    url('http://dablueartist.local/wp-content/uploads/2022/02/IMG_5431-min-scaled.jpg');">
  <div class="site-inner">
    <div class="site-heading text-center">
        <h1 class="mb-0 heading">DaBlueArtists</h1>
        <p class=" site-leading">Let the music speak</p>
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