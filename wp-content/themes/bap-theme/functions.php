<?php
function bap_setup() {
  add_theme_support('title-tag');
  register_nav_menus([
    'primary' => 'Menu principal',
  ]);
}
add_action('after_setup_theme', 'bap_setup');
