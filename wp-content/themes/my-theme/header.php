<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>

  <style>
    :root{
      --white: #fff;
      --w-85: rgba(255,255,255,.85);
      --w-55: rgba(255,255,255,.55);
      --line: rgba(255,255,255,.22);
      --pill: rgba(255,255,255,.14);
    }

    .site-header{
      border-bottom: 1px solid var(--line);
    }

    .site-header__inner{
      max-width: 1100px;
      margin: 0 auto;
      padding: 22px 16px;
      display: flex;
      align-items: baseline;
      justify-content: space-between;
      gap: 16px;
    }

    .brand{
      display:flex;
      align-items:baseline;
      gap: 10px;
      flex-wrap: wrap;
    }

    .brand__title{
      margin:0;
      color: var(--white);
      font: 700 26px/1.1 system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      letter-spacing: .2px;
    }

    .brand__dot{
      display:inline-block;
      width:8px;height:8px;
      border-radius:999px;
      background: var(--white);
      opacity:.9;
      transform: translateY(-2px);
    }

    .brand__meta{
      margin:0;
      color: var(--w-85);
      font: 500 13px/1.2 system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      opacity: .95;
    }

    .pill{
      display:inline-flex;
      align-items:center;
      gap:10px;
      padding: 12px 18px;
      border-radius: 999px;
      border: 1px solid var(--line);
      background: var(--pill);
      color: var(--white);
      font-size: 20px;   /* ВОТ ГЛАВНОЕ ИЗМЕНЕНИЕ */
      font-weight: 700;
      line-height: 1;
      letter-spacing: .3px;
      white-space: nowrap;
    }

    .pill span{
      color: var(--w-55);
      font-weight: 600;
    }

    @media (max-width: 720px){
      .site-header__inner{flex-direction:column;align-items:flex-start}
      .pill{width:fit-content}
    }
  </style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="site-header__inner">
    <div class="brand">
      <h1 class="brand__title"><?php bloginfo('name'); ?></h1>
      <i class="brand__dot" aria-hidden="true"></i>
      <p class="brand__meta">Bootcamp deployment</p>
    </div>

    <div class="pill">
      v1.6 <span>•</span> min=100 <span>•</span> max=200 <span>•</span> warmup=120
    </div>
  </div>
</header>
