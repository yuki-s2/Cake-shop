<?php get_header(); ?>

<section class="news__top">
    <div class="news__top-text">
      <h2 class="news__top-title">News</h2>
      <p class="news__top-p">Please check back for reports on new menus and restaurant operations.</p>
    </div>   
</section>

<section class="news__pickUp">
  <ul class="news__pickUp-items">
    <li class="news__pickUp-item">
      <a href="">
      <img class="news__pickUp-thumbnail" src="" alt="">
      <p class="news__pickUp-title">タイトル入ります</p>
      </a>
    </li>
    <li class="news__pickUp-item">
      <a href="">
      <img class="news__pickUp-thumbnail" src="" alt="">
      <p class="news__pickUp-title">タイトル入ります</p>
      </a>
    </li>
    <li class="news__pickUp-item">
      <a href="">
      <img class="news__pickUp-thumbnail" src="" alt="">
      <p class="news__pickUp-title">タイトル入ります</p>
      </a>
    </li>
  </ul>
</section><!--news__pickUp-->

<section class="news__all">
  <div class="news__all-title">Notice</div>
  <div class="news__all-items">
  <?php if (have_posts()) : // 記事があれば表示 ?>
       <?php while(have_posts()) : // 記事数分ループ ?>
       <?php the_post(); ?>
    <div class="news__all-item">
      <div class="news__all-item-box">
       <a href="<?php the_permalink();  // 記事のリンクを表示 ?>" class="news__all-item-a">
        <time class="news__all-item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
        <div class="news__all-item-title"><?php the_title(); // タイトルを表示 ?></div>
        <div class="news__all-item-text"><?php the_excerpt(); // 抜粋を表示 ?></div>
       </a>
      </div><!--news__all-item-box-->
    </div><!--news__all-item-->
       <?php endwhile; ?>
       <?php endif; ?>
  </div><!--news__all-items-->

<?php if(paginate_links()) : //ページが1ページ以上あれば以下を表示 ?>
<!-- pagination -->
<div class="news__pagination">
  <?php
  echo paginate_links(
    array(
      'end_size' => 1,
      'mid_size' => 1,
      'prev_next' => true,
      'prev_text' => '<i class="fas fa-angle-left"></i>',
      'next_text' => '<i class="fas fa-angle-right"></i>',
    )
    );
  ?>
</div><!-- /pagination -->
<?php endif; ?>

</section>



<?php get_footer(); ?>