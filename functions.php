<?php
function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
  }
  add_action("after_setup_theme", "my_setup");


function my_script_init() {
  wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css", array(), "6.2.1", "all");
  wp_enqueue_style("slick-pc", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), "1.8.1", "all");
  //wp_enqueue_style("slick-pc.2", "css/6-1-7.css", array("slick-pc"), filemtime(get_theme_file_path('css/6-1-7.css')), "all");
  wp_enqueue_style("slick-sp", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css", array("slick-pc"), "1.9.0", "all");
  wp_enqueue_style("slick-sp.2", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css", array("slick-sp"), "1.9.0", "all");
  wp_enqueue_style("drawer", "https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css", array("slick-sp.2"), "3.2.1", "all");
  //wp_enqueue_style("animate", get_template_directory_uri() . "/css/animate.css", array(), filemtime(get_theme_file_path('css/animate.css')), "all");
  wp_enqueue_style("reset", get_template_directory_uri() . "/css/reset.css", array("drawer"), filemtime(get_theme_file_path('css/reset.css')), "all");
  wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array("reset"), filemtime(get_theme_file_path('css/style.css')), "all");
  wp_enqueue_script("iScroll&jquery", "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", array(),"1.11.3", true);
  wp_enqueue_script("iScroll","https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js", array("iScroll&jquery"), "5.1.3", true);
  wp_enqueue_script("drawer", "https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js", array("iScroll"), "3.2.1", true);
  wp_enqueue_script("slick", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array("drawer"), "1.8.1", true);
  //wp_enqueue_script("my", get_template_directory_uri() . "/js/wow.min.js", array(), filemtime(get_theme_file_path('js/wow.min.js')), true);
  wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");




function my_menu_init() {
    register_nav_menus(
      array(
        'global' => 'ヘッダーメニュー',
        'drawer' => 'ドロワーメニュー',
        'footer' => 'フッターメニュー'
      )
    );
  }
  add_action('init', 'my_menu_init');
?>