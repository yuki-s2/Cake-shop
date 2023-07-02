<?php get_header(); ?>
<section class="top">
 <div class="top__container">
 <div class="top__left">
   <div class="top__text">
     <div class="top__text-title">
       <h2 class="is-pc">We make your cake<br class="top__br">
       upon reservation.</h2>
       <h1 class="is-sp">Cake shop</h1>
     </div>
     <div class="top__text-title-sub">
       <p class="top__text-title-sub-p">Customize your cake to your liking.</p>
       <p class="is-sp">Made to order</p>
     </div>
   </div><!--top__text-->
   <div class="top__sns">
       <div class="top__sns-facebook">
         <a href=""><i class="fa-brands fa-facebook"></i></a>
       </div>
       <div class="top__sns-twitter">
         <a href=""><i class="fa-brands fa-square-twitter"></i></a>
       </div>
       <div class="top__sns-instagram">
         <a href=""><i class="fa-brands fa-instagram"></i></a>
       </div>
   </div><!--top__sns-->
 </div><!--top__left-->
 <div class="top__img">
     <img src="<?php echo get_template_directory_uri() ?>/img/top_img-min.png" alt="">
 </div><!--top__img-->
 </div><!--top-container-->
</section><!--top-->


<section class="process fade">
    <div class="process__items">
        <div class="process__item">
          <h4 class="process__item-title">Order</h4>
          <div class="process__item-img"><img src="<?php echo get_template_directory_uri() ?>/img/11213_line-min.png" alt="/"></div>
          <p class="process__item-text is-pc">You can make reservations<br>online or order in-store.</p>
        </div>

        <div class="process__arrow"><img src="<?php echo get_template_directory_uri() ?>/img/Arrow 1.svg" alt=""></div>

        <div class="process__item">
          <h4 class="process__item-title">Cooking</h4>
          <div class="process__item-imgK"><img src="<?php echo get_template_directory_uri() ?>/img/16648_line-min.png" alt="/"></div>
          <p class="process__item-text is-pc">Cakes are made upon reservation.</p>
        </div>

        <div class="process__arrow"><img src="<?php echo get_template_directory_uri() ?>/img/Arrow 1.svg" alt=""></div>

        <div class="process__item">
          <h4 class="process__item-title">Delivery</h4>
          <div class="process__item-imgT"><img src="<?php echo get_template_directory_uri() ?>/img/12494_line-min.png" alt="/"></div>
          <p class="process__item-text is-pc">Available for delivery or in-store pickup.</p>
        </div>
    </div>
</section><!--process-->


<section class="service fade">
    <div class="section__title-box">
        <h3 class="section__title"><span>/&nbsp;</span>Service</h3>
        <p class="section__title-sub">Please use the best service<br class="is-sp"> for you from this list.</p>
    </div>
    <ul class="slider slide">
        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 6-min.png" alt=""><p class="service__title">Customize</p></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 5-min.jpeg" alt=""><p class="service__title">Regular menu</p></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 7-min.png" alt=""><p class="service__title">Delivery</p></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 6.png" alt=""><p class="service__title">Shop</p></a></li>
        </ul><!--/slider-->
</section>

<section class="news">
    <div class="news__items fadeUpTrigger">
    <?php
    $args = array (
        'post_type'      => 'post', 
        'posts_per_page' => 3, 
    );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ):
    setup_postdata($post); 
      ?>
        <a href="<?php the_permalink(); ?>" class="news__item  fadeIn">
         <time class="news__item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
         <div class="news__item-title"><?php the_title(); ?></div>
        </a>
    <!-- 繰り返し処理する内容 -->
    <?php
    endforeach;
    wp_reset_postdata();
    ?>
    </div>
    
    <div class="news__btn">
    <?php
        $category = get_the_category();
        if($category[0]) : ?>
      <a href="<?php echo get_category_link($category[0]->term_id); ?>" class="news__btn-a">News<i class="fas fa-angle-right news__btn-arrow"></i></a>
      <?php endif; ?>
    </div>
</section>


<section class="gallery fade">
    <div class="section__title-box">
        <a href="<?php echo home_url('/catalog/'); ?>" class="section__title-a"><h3 class="section__title"><span>/&nbsp;</span>Gallery</h3></a>
        <p class="section__title-sub">This is a standard popular menu item.</p>
    </div>
    <div class="gallery__container" id="js-tab">
        <div class="gallery__container-left">
            <div class="gallery__left-upper">
                <div class="gallery__item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/fe0526ae8f0482ece54f67cffd20cf8a 2.jpg" alt="/" data-nav="0">
                    <div class="gallery__item-title">Banana</div>
                </div>
                <div class="gallery__item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/Frame 16 (2)-min.png" alt="/" data-nav="1">
                    <div class="gallery__item-title">Blueberry</div>
                </div>
                <div class="gallery__item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/Frame 16 (3)-min.png" alt="/" data-nav="2">
                    <div class="gallery__item-title">Rainbow</div>
                </div>
            </div><!--gallery__left-upper-->
            <div class="gallery__left-lower">
                <div class="gallery__item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/Frame 16 (4)-min.png" alt="/" data-nav="3">
                    <div class="gallery__item-title">Strawberry</div>
                </div>
                <div class="gallery__item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/Frame 16-min.png" alt="/" data-nav="4">
                    <div class="gallery__item-title">Orange</div>
                </div>
                <div class="gallery__item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/Frame 16チョコ.png" alt="/" data-nav="5">
                    <div class="gallery__item-title">Chocolate</div>
                </div>
            </div><!--gallery__left-lower-->
        </div><!--gallery__container-left-->
        <div class="gallery__container-right" data-content="0">
            <img src="<?php echo get_template_directory_uri() ?>/img/バナナホール.jpeg" alt="/">
        </div>
        <div class="gallery__container-right" data-content="1">
            <img src="<?php echo get_template_directory_uri() ?>/img/Frame 11-min.jpeg" alt="/">
        </div>
        <div class="gallery__container-right" data-content="2">
            <img src="<?php echo get_template_directory_uri() ?>/img/レインボウホール 2.jpeg" alt="/">
        </div>
        <div class="gallery__container-right" data-content="3">
            <img src="<?php echo get_template_directory_uri() ?>/img/Frame 5-min.jpeg" alt="/">
        </div>
        <div class="gallery__container-right" data-content="4">
            <img src="<?php echo get_template_directory_uri() ?>/img/オレンジホール.jpeg" alt="/">
        </div>
        <div class="gallery__container-right" data-content="5">
            <img src="<?php echo get_template_directory_uri() ?>/img/チョコレートホール.jpeg" alt="/">
        </div>
    </div><!--gallery__container-->
</section>


<section class="customize fade">
    <div class="section__title-box">
        <h3 class="section__title"><span>/&nbsp;</span>Customize</h3>
        <p class="section__title-sub">You can choose your decoration items and<br> colors according to your taste and purpose.</p>
    </div>
    <div class="customize__container">
        <div class="customize__left">
            <img src="<?php echo get_template_directory_uri() ?>/img/デコレーション 1.png" alt="/">
        </div><!--customize__left-->
        <div class="customize__right">
            <div class="customize__right-box">
            <div>
            <ul class="customize__list">
                <li class="customize__item">・ Size</li>
                <li class="customize__item">・ Cream</li>
            </ul>
            </div>
            <div>
            <ul class="customize__list-center">
                <li class="customize__item">・ Pearl</li>
                <li class="customize__item">・ Fruit</li>
            </ul>
            </div>
            <div>
            <ul class="customize__list">
                <li class="customize__item">・ Message</li>
                <li class="customize__item">・ Photo</li>
            </ul>
            </div>
            </div>
        </div><!--customize__right-->
    </div>
</section>


<section class="shop fade">
    <div class="section__title-box">
        <h3 class="section__title"><span>/&nbsp;</span>Shop</h3>
        <p class="section__title-sub is-pc">You can order and pick up your order at the store.</p>
        <p class="section__title-sub is-sp">You can pick it up at the store.</p>
    </div>
    <div class="shop__img">
        <img src="<?php echo get_template_directory_uri() ?>/img/Frame 31-min.png" alt="/">
    </div>
    <ul class="shop__information">
        <li class="shop__information-item">Open:&emsp;9:00〜17:00</li>
        <li class="shop__information-item">Regular holiday:&emsp;Monday</li>
        <li class="shop__information-item">Address:&emsp;Musasino Kichijoji 1-23-4</li>
    </ul>
    <div class="shop__contact">
        <div class="shop__contact-item">
            <p>Tell...</p>
            <img src="<?php echo get_template_directory_uri() ?>/img/マイプロジェクト (2)-min.png" alt="/">
        </div>
        <div class="shop__contact-item">
            <p>E-mail...</p>
            <img src="<?php echo get_template_directory_uri() ?>/img/マイプロジェクト (1).png" alt="/">
        </div>
    </div>
</section>

<?php get_footer(); ?>