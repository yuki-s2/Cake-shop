<?php get_header(); ?>

<section class="Catalog__top">
    <div class="Catalog__top-text">
      <h2 class="Catalog__top-title">Regular menu</h2>
      <p class="Catalog__top-p">These are standard favorites.</p>
    </div>   
</section>

<section class="Catalog__gallery">
    <div class="Catalog__items">
        <div class="Catalog__item">
            <div class="Catalog__item-img"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 16 (2)-min.png" alt=""></div>
            <h3 class="Catalog__item-title">Blueberry</h3>
            <div class="Catalog__item-price">3,000円</div>
        </div><!--Catalog__item-->
        <div class="Catalog__item">
        <div class="Catalog__item-img"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 16 (3)-min.png" alt=""></div>
            <h3 class="Catalog__item-title">Rainbow</h3>
            <div class="Catalog__item-price">3,000円</div>
        </div><!--Catalog__item-->
        <div class="Catalog__item">
            <div class="Catalog__item-img"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 16-min.png" alt=""></div>
            <h3 class="Catalog__item-title">Orange</h3>
            <div class="Catalog__item-price">3,000円</div>
        </div><!--Catalog__item-->
        <div class="Catalog__item">
            <div class="Catalog__item-img"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 16 (4)-min.png" alt=""></div>
            <h3 class="Catalog__item-title">Strawberry</h3>
            <div class="Catalog__item-price">3,000円</div>
        </div><!--Catalog__item-->
        <div class="Catalog__item">
            <div class="Catalog__item-img"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 16チョコ.png" alt=""></div>
            <h3 class="Catalog__item-title">Chocolate</h3>
            <div class="Catalog__item-price">3,000円</div>
        </div><!--Catalog__item-->
        <div class="Catalog__item">
            <div class="Catalog__item-img"><img src="<?php echo get_template_directory_uri() ?>/img/Frame 16 (1)-min.png" alt=""></div>
            <h3 class="Catalog__item-title">Flower</h3>
            <div class="Catalog__item-price">3,000円</div>
        </div><!--Catalog__item-->
    </div>
</section>

<section class="Catalog__NewCakes">
    <div class="Catalog__NewCakes-container">
        <div class="Catalog__NewCakes-img">
          <div class="Catalog__NewCakes-img-box">
            <div class="Catalog__NewCakes-circle">
              <p class="Catalog__NewCakes-circle-text"><span>N</span><span>e</span><span>w</span><span>!</span></p>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/チョコレートホール.jpeg" alt="">
          </div>
        </div>
        <div class="Catalog__NewCakes-right">
          <div class="Catalog__NewCakes-text">
            <h4 class="Catalog__NewCakes-title">Chocolate</h4>
            <div><a class="Catalog__NewCakes-btn">Check</a></div>
          </div>
        </div><!--Catalog__NewCakes-right-->
    </div>
</section>

<?php get_footer(); ?>