<?php
// Можно оставить пустым, но файл нужен часто для расширений темы.
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'my-theme-style',
    get_stylesheet_uri(),
    [],
    filemtime(get_stylesheet_directory() . '/style.css')
  );
});
