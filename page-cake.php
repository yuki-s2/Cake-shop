<?php get_header(); ?>
<section class="cake__top">
    <div class="cake__top-text">
      <h2 class="cake__top-title"><?php the_title(); // タイトルを表示 ?></h2>
      <p class="cake__top-p">These are standard favorites.</p>
    </div>   
</section>

<section class="cake__main">
  <div class="cake__main-imgH">
    <img src="<?php echo get_template_directory_uri() ?>/img/レインボウホール 2.jpeg" alt="">
  </div>
  <div class="cake__main-details">
    <div class="cake__main-details-left">
      <div class="cake__main-details-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/Frame 16 (3)-min.png" alt="">
      </div>
    </div><!--cake__main-details-left-->
    <div class="cake__main-details-right">
      <div class="cake__main-details-text">
        <p><?php $page_data = get_page_by_path('cake'); $page = get_post($page_data);
$content = $page -> post_content;

// HTMLタグを除外した上で本文を表示する
echo strip_tags($content); ?></p>
      </div>
    </div><!--cake__main-details-right-->
  </div><!--cake__main-details-->
</section>

<?php get_footer(); ?>