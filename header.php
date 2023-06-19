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
          <ul class="drawer-menu">
            <li><a class="drawer-brand" href="#">Cake shop</a></li>
            <li><a class="drawer-menu-item" href="#">Catalog</a></li>
            <li><a class="drawer-menu-item" href="#">Delivery</a></li>
            <li><a class="drawer-menu-item" href="#">Contacts</a></li>
          </ul>
          <a href=""><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></a>
        </nav>
    </div>

<header class="header is-pc">
  <div class="header__logo is-pc">
    <h1>Cake shop</h1>
    <p>Made to order</p>
  </div>


  <div class="header__nav is-pc">
    <ul class="header__nav-list">
        <li><a href="#" class="header__nav-item">Home</a></li>
        <li><a href="#" class="header__nav-item">Catalog</a></li>
        <li><a href="#" class="header__nav-item">Delivery</a></li>
        <li><a href="#" class="header__nav-item">Contacts</a></li>
    </ul>
  </div>

  <div class="header__icon is-pc">
    <div class="header__icon-search is-pc"><img src="<?php echo get_template_directory_uri() ?>/img/Group.svg" alt="検索"></div>
    <div class="header__icon-basket is-pc"><img src="<?php echo get_template_directory_uri() ?>/img/GroupB.svg" alt="買い物かご"></div>
  </div>
</header>
