<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header style="border-bottom:1px solid #eee;padding:16px 0;">
  <div style="max-width:900px;margin:0 auto;padding:0 20px;display:flex;justify-content:space-between;align-items:center;font-family:system-ui;">
    <a href="<?php echo esc_url(home_url('/')); ?>" style="font-weight:700;text-decoration:none;color:inherit;">
      <?php bloginfo('name'); ?>
    </a>

    <nav>
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'fallback_cb' => false,
      ]);
      ?>
    </nav>
  </div>
</header>
