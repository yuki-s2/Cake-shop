<?php get_header(); ?>
<section class="contact__top">
    <div class="contact__top-text">
      <h2 class="contact__top-title">Contact us</h2>
      <p class="contact__top-p">Please send your questions using this form.</p>
    </div>   
</section>

<section class="contact__form">
<div class="contact__form-container">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();?>
 <?php the_content();?>
<?php endwhile; ?>
<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>