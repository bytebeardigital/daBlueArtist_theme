<?php

/**
 * Returns the string contents of an SVG, it is great for when svgs need to change color or animate etc.
 * If you need more social or brand icons https://simpleicons.org/ is a great place to download them from
 * @param $name - name of the svg to render
 */
function render_svg($name){

  $svgs = [
    'facebook'  => '<i class="fa-brands fa-facebook-f"></i>',

    'youtube'   => '<i class="fa-brands fa-youtube"></i>',

    'twitter'   => '<i class="fa-brands fa-twitter"></i>',

    'instagram' => '<i class="fa-brands fa-instagram"></i>',

    'soundcloud' => '<i class="fa-brands fa-soundcloud"></i>',

    'tiktok' => '<i class="fa-brands fa-youtube"></i>',
  ];

  return !isset($svgs[$name]) ?: $svgs[$name];
}