<footer class="footer">
    <div class="footer__container">
        <div class="footer__logo-box">
            <a href="<?php echo home_url( '/' );?>" class="footer__logo"> Cake shop</a>
            <p class="footer__logo-sub">Made to order</p>
        </div><!--footer__logo-->
        <div class="footer__middle">
        <?php
        wp_nav_menu(
        array(
          'depth' => 1,
          'theme_location' => 'footer',
          'container' => '',
          'menu_class' => 'footer__nav'
             )
             );
        ?>
          <div class="footer__small is-pc">
            <small>©2023 cake shop. All Rights Reserved.</small>
          </div>
        </div><!--footer__middle-->
        <ul class="footer__icon">
            <li><a class="footer__icon-facebook" href="/"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a class="footer__icon-twitter" href="/"><i class="fa-brands fa-square-twitter"></i></a></li>
            <li><a class="footer__icon-instagram" href="/"><i class="fa-brands fa-instagram"></i></a></li>
        </ul><!--footer__icon-->
        <div class="footer__small is-sp">
            <small>©2023 cake shop. All Rights Reserved.</small>
          </div>
    </div><!--footer__container-->
</footer>

</div><!--body__container-->
<?php wp_footer() ?>
</body>
</html>
