<?php

?>
<nav class="d-flex flex-column mobile-nav">
  <div class="align-self-end button-tray">
    <button class="mobileButton" id="mobileNavButton">
    <span class="navbar-toggler-icon">
          <?php echo render_svg('menu-icon'); ?>
        </span>
    </button>
  </div>
  <div class="menu-tray closed-menu" id="mobileMenu">
  <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav flex-column mobile-nav-menu',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="menu--item  %2$s">%3$s</ul>',
                'depth' => 5,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
  </div>

  </nav>
 