<?php
?>

<div class="navbar navbar-expand-md byte-nav">
    <div class="byte-nav__inner-wrapper">
      <a class="byte-nav__brand-link" href="<?php echo home_url(); ?>"> <?php
        echo (has_custom_logo()) ? '<img class="byte-nav__brand-link--brand-logo" width="70" src="' . esc_url( $site_logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">' : '<h1>' . get_bloginfo('name') . '</h1>' ?></a>

         <button class="byte-nav__toggler" id="ChangeToggle" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Navbar Button Icon -->
            <span  id="toggler-icon--open" class="byte-nav__toggler--icon">
            <i class="fas fa-bars"></i>
            </span>

            <span  id="toggler-icon--close"  class="byte-nav__toggler--icon hidden">
            <i class="fas fa-times"></i>
            </span>


        </button>
        <!-- Nav Menu Container -->
                <div class="collapse navbar-collapse byte-nav__menu" id="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'byte-nav__menu--wrapper',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="byte-nav__menu--item %2$s">%3$s</ul>',
                'depth' => 5,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
    </div>
</div>