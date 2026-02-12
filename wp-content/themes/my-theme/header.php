<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>

  <style>
    .site-header {
      border-bottom: 1px solid rgba(255,255,255,0.35);
    }

    .site-header__inner {
      max-width: 1100px;
      margin: 0 auto;
      padding: 20px 16px;
    }

    .site-title {
      margin: 0;
      color: #ffffff;
      font-size: 24px;
      font-weight: 600;
      letter-spacing: 0.3px;
    }

    .site-meta {
      margin: 6px 0 0 0;
      color: rgba(255,255,255,0.85);
      font-size: 13px;
    }
  </style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="site-header__inner">
    <h1 class="site-title"><?php bloginfo('name'); ?></h1>
    <p class="site-meta">Version 1.6 • min=100 • max=200 • warmup=120</p>
  </div>
</header>
