<?php
define('S_THEME_ROOT', get_template_directory_uri());
define('S_CSS_DIR', S_THEME_ROOT . '/css');
define('S_JS_DIR', S_THEME_ROOT . '/js');
define('S_IMG_DIR', S_THEME_ROOT . '/img/');
echo S_CSS_DIR;
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('blog', S_CSS_DIR . '/blog.css');
    wp_enqueue_style('footer', S_CSS_DIR . '/footer.css');
    wp_enqueue_style('gallery', S_CSS_DIR . '/gallery.css');
    wp_enqueue_style('nav', S_CSS_DIR . '/nav.css');
    wp_enqueue_style('portfolio', S_CSS_DIR . '/portfolio.css');
    wp_enqueue_style('post', S_CSS_DIR . '/post.css');
    wp_enqueue_style('style', S_CSS_DIR . '/style.css');

    wp_enqueue_script('script', S_JS_DIR . '/script.js');

    wp_enqueue_style('font_one', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet');

    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO');
    wp_enqueue_style('font_awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU');

});
