<?php get_header(); ?>

<section class="search__top">
    <div class="search__top-text">
      <h2 class="search__top-title">Search results for<br class="is-sp"> <span>"<?php the_search_query(); ?>"</span></h2>
    </div>   
</section>

<section class="newsPage__all search__all">
  <div class="newsPage__all-items">
  <?php if (have_posts()) : ?>
  <?php while(have_posts()) : ?>
  <?php the_post(); ?>
    <div class="newsPage__all-item">
      <div class="newsPage__all-item-box">
       <a href="<?php the_permalink(); ?>" class="newsPage__all-item-a">
        <time class="newsPage__all-item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
        <div class="newsPage__all-item-title"><?php echo mb_substr( $post->post_title, 0, 45) . '...'; ?></div>
        <div class="newsPage__all-item-text"><?php the_excerpt(); ?></div>
       </a>
      </div><!--news__all-item-box-->
    </div><!--news__all-item-->
  <?php endwhile; ?>
  <?php endif; ?>
  </div><!--news__all-items-->

  <?php if(paginate_links()) : ?>
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