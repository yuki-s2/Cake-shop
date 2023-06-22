<?php get_header(); ?>

<section class="newsPage__top">
    <div class="newsPage__top-text">
      <h2 class="newsPage__top-title">News</h2>
      <p class="newsPage__top-p">Please check back for reports on new menus and restaurant operations.</p>
    </div>   
</section>

<section class="newsPage__pickUp">
    <ul class="newsPage__pickUp-items">
    <?php $pickup_query = new WP_Query(
      array(
        'post_type'      => 'post', // 投稿タイプ
        'tag'            => 'pickup', // pickupタグがついたものを 
        'posts_per_page' => 3 // 3件取得
      )
    );
    ?>

    <?php if ($pickup_query->have_posts()) : ?>
    <?php while($pickup_query->have_posts()) : ?>
    <?php $pickup_query->the_post(); ?>
      <div class="newPage__pickUp-item">
        <a href="<?php the_permalink(); ?>">
          <div class="newsPage__pickUp-box">
            <div class="newsPage__pickUp-thumbnail" src="" alt="">
              <?php if(has_post_thumbnail()):?>
              <?php the_post_thumbnail('medium'); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
              <?php endif; ?>
            </div>
            <p class="newsPage__pickUp-title"><?php echo mb_substr( $post->post_title, 0, 20) . '...'; ?></p>
          </div><!--newsPage__pickUp-box-->
        </a>
      </div>
    <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
  </ul>

</section><!--news__pickUp-->

<section class="newsPage__all">
  <div class="newsPage__all-title">Notice</div>
  <div class="newsPage__all-items">
  <?php if (have_posts()) : // 記事があれば表示 ?>
  <?php while(have_posts()) : // 記事数分ループ ?>
  <?php the_post(); ?>
    <div class="newsPage__all-item">
      <div class="newsPage__all-item-box">
       <a href="<?php the_permalink();  // 記事のリンクを表示 ?>" class="newsPage__all-item-a">
        <time class="newsPage__all-item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
        <div class="newsPage__all-item-title"><?php echo mb_substr( $post->post_title, 0, 45) . '...'; ?></div>
        <div class="newsPage__all-item-text"><?php the_excerpt(); // 抜粋を表示 ?></div>
       </a>
      </div><!--news__all-item-box-->
    </div><!--news__all-item-->
  <?php endwhile; ?>
  <?php endif; ?>
  </div><!--news__all-items-->

  <?php if(paginate_links()) : //ページが1ページ以上あれば以下を表示 ?>
  <!-- pagination -->
  <div class="newsPage__pagination">
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