<?php get_header(); ?>

<section class="single__top">
    <div class="single__top-text">
      <h2 class="single__top-title"><?php the_title(); ?></h2>
      <div class="single__meta">
      <time class="single__published" datetime="<?php the_time('c'); ?>">Release <?php the_time('Y/n/j'); ?></time>
      <?php if (get_the_modified_time('c') !== get_the_time('c')) : ?>
      <time class="single__updated" datetime="<?php the_modified_time('c'); ?>">Update <?php the_modified_time('Y/n/j'); ?></time>
      <?php endif; ?>
    </div><!-- single__meta -->
    </div>   

</section>

<section class="single__main">
    <div class="single__thumbnail">
      <?php the_post_thumbnail('large'); ?>
    </div><!-- single__thumbnail -->

    <div class="single__body">
    <?php the_content(); // 本文の表示 ?>
    </div>

      <div class="single__pagination">
        <?php previous_post_link('%link', '<div class="single__pagination-prev"><i class="fa-solid fa-angles-left"></i>PREV</div>'); ?>
        <?php
        $category = get_the_category();
        if($category[0]) : ?>
                   <a href="<?php echo get_category_link($category[0]->term_id); ?>" class="single__pagination-list">NEWS</a>
                   <?php endif; ?>
        <?php next_post_link('%link', '<div class="single__pagination-next">NEXT<i class="fa-solid fa-angles-right"></i></div>'); ?>
      
</section>


<?php get_footer(); ?>