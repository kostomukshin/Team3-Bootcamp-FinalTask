<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>

  <style>
    .site-header{position:sticky;top:0;z-index:10;background:rgba(255,255,255,.12);backdrop-filter:blur(10px);border-bottom:1px solid rgba(255,255,255,.22)}
    .site-header__inner{max-width:1100px;margin:0 auto;padding:18px 16px;display:flex;align-items:center;justify-content:space-between;gap:16px}
    .brand{display:flex;flex-direction:column;gap:6px}
    .brand__title{margin:0;font-size:22px;line-height:1.1;letter-spacing:.2px}
    .brand__meta{margin:0;opacity:.9;font-size:13px}
    .nav{display:flex;align-items:center;gap:10px;flex-wrap:wrap}
    .nav a{display:inline-block;padding:8px 10px;border-radius:10px;text-decoration:none;color:inherit;opacity:.95}
    .nav a:hover{background:rgba(255,255,255,.14)}
    .nav .cta{background:rgba(255,255,255,.18);border:1px solid rgba(255,255,255,.22)}
    @media (max-width:720px){.site-header__inner{flex-direction:column;align-items:flex-start}.nav{width:100%}}
  </style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="site-header">
    <div class="site-header__inner">
      <div class="brand">
        <h1 class="brand__title"><?php bloginfo('name'); ?></h1>
        <p class="brand__meta">Version 1.6 • min=100 • max=200 • warmup=120</p>
      </div>

      <nav class="nav" aria-label="Main">
        <a href="/">Home</a>
        <a href="#about">About</a>
        <a class="cta" href="#status">Status</a>
      </nav>
    </div>
  </header>
