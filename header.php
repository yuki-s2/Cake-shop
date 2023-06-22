<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="/favicon.ico">
<?php wp_head() ?>
</head>
<body>
<div class="body__border">
<div class="drawer drawer--right">
        <!-- ハンバーガーボタン -->
        <button type="button" class="drawer-toggle drawer-hamburger">
          <span class="sr-only">toggle navigation</span>
          <span class="drawer-hamburger-icon"></span>
        </button>
        <!-- ナビゲーションの中身 -->
        <nav class="drawer-nav" role="navigation">
        <?php
          wp_nav_menu(
          array(
          'depth' => 1,
          'theme_location' => 'drawer',
          'container' => '',
          'menu_class' => 'drawer-menu'
           )
           );
        ?>
          <div class="drawer-icon">
          <div class="searchFromMini drawer-search">
           <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" id="search-formmini">
              <input type="hidden">
              <input type="search" id="search-field" autocomplete="off" class="search-field" name="s" value="">
              <button class="search-submit"><i class="fa fa-search drawer-searchIcon"></i></button>
           </form>
          </div>
          <div class="drawer-icon-basket"><img src="<?php echo get_template_directory_uri() ?>/img/GroupB.svg" alt="買い物かご"></div>
          </div><!--drawer__icon-->
        </nav>
    </div>

<header class="header is-pc">
  <div class="header__logo is-pc">
    <h1>Cake shop</h1>
    <p>Made to order</p>
  </div>
  <nav class="header__nav is-pc">
  <?php
      wp_nav_menu(
        array(
          'depth' => 1,
          'theme_location' => 'global', 
          'container' => '',
          'menu_class' => 'header__nav-list'
        )
      );
    ?>
  </nav>

  <div class="header__icon is-pc">
  <div class="searchFromMini is-pc">
    <form class="is-pc" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" id="search-formmini">
      <input type="hidden">
      <input type="search" id="search-field" autocomplete="off" class="search-field" name="s" value="">
     <button class="search-submit is-pc"><i class="fa fa-search"></i></button>
    </form>
   </div>
    <div class="header__icon-basket is-pc"><img src="<?php echo get_template_directory_uri() ?>/img/GroupB.svg" alt="買い物かご"></div>
  </div>
</header>
