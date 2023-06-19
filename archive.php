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
    <div class="news__all-item">
      <div class="news__all-item-box">
        <time class="news__all-item-date" datetime="">2.24.2023</time>
        <div class="news__all-item-title">タイトル入ります。</div>
        <div class="news__all-item-text">NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。</div>
      </div><!--news__all-item-box-->
    </div><!--news__all-item-->
    <div class="news__all-item">
      <div class="news__all-item-box">
        <time class="news__all-item-date" datetime="">2.24.2023</time>
        <div class="news__all-item-title">タイトル入ります。</div>
        <div class="news__all-item-text">NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。</div>
      </div><!--news__all-item-box-->
    </div><!--news__all-item-->
    <div class="news__all-item">
      <div class="news__all-item-box">
        <time class="news__all-item-date" datetime="">2.24.2023</time>
        <div class="news__all-item-title">タイトル入ります。</div>
        <div class="news__all-item-text">NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。</div>
      </div><!--news__all-item-box-->
    </div><!--news__all-item-->
    <div class="news__all-item">
      <div class="news__all-item-box">
        <time class="news__all-item-date" datetime="">2.24.2023</time>
        <div class="news__all-item-title">タイトル入ります。</div>
        <div class="news__all-item-text">NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。</div>
      </div><!--news__all-item-box-->
    </div><!--news__all-item-->
    <div class="news__all-item">
      <div class="news__all-item-box">
        <time class="news__all-item-date" datetime="">2.24.2023</time>
        <div class="news__all-item-title">タイトル入ります。</div>
        <div class="news__all-item-text">NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。NEWSの内容が入ります。</div>
      </div><!--news__all-item-box-->
    </div><!--news__all-item-->

  </div>

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