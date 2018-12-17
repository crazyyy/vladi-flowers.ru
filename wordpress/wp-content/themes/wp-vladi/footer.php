
    <div id="header-main">
      <div id="horizontalmenu-bg">
        <div id="horizontalmenu">
          <?php wpeHeadNav(); ?>
        </div>
        <!-- div#horizontalmenu is closed-->
      </div>
      <!-- div#horizontalmenu-bg is closed-->
      <div id="header">
        <div id="logo">
          <a class="logo" href="<?php echo home_url(); ?>" title="<?php wp_title( '' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" border="0" alt="<?php wp_title( '' ); ?>"></a>
          <div class="custom">
            <p><span class="slogan">Магазин цветов и подарков</span></p>
            <p><span class="tel">тел.: +7-904-236-87-95;<br>тел.: +7-(82167)-157-55</span></p>
            <p><span class="adres">АДРЕС: г. Ухта, 30 лет октября, 21</span></p>
          </div>
        </div>
        <!-- div#logo is closed-->
        <div id="breadcrambs">
          <div class="moduletable">
            <div class="breadcrumbs">
              <span class="showHere">Вы здесь: </span><?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?></div>
          </div>
        </div>
        <!-- div#breadcrambs is closed-->
        <div id="shoping-search">
          <div class="moduletable">
            <form method="get" name="searchForm" action="<?php bloginfo('url'); ?>/">
              <input type="text" class="inputbox" style="width: 223px; height:29px" name="s" id="jshop_search" value="Поиск">
              <input class="button" style="width: 26px; height:24px;" type="submit" value="" id="submit_search">
            </form>
          </div>
        </div>
        <!-- div#shoping-search is closed-->
        <div class="img-header-left"></div>
        <div class="img-header-right"></div>
        <div id="advert">
          <div class="moduletable">
            <h3>Дарите любимым цветы!</h3>
            <div class="custom">
              <span></span></div>
          </div>
        </div>
      </div>
      <!-- div#header is closed-->
    </div>
    <!-- div#header-bg is closed-->
    <div id="empty"></div>
    <div id="bottom-bg"></div>
  </div>

  <div class="moduletable">
    <div id="rsform_feedback_container">
      <div id="width-feedback">
        <div id="rsform_feedback">
          <a href="#" class="modal"><img src="<?php echo get_template_directory_uri(); ?>/img/saved_resource.png" alt="Свяжитесь с нами"></a>
        </div>
      </div>
    </div>
  </div><!-- moduletable -->

  <?php wp_footer(); ?>

  <script>
    window.url = '<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>';
    window.title = '<?php the_title(); ?>';
    window.id = '<?php echo $post->ID; ?>';
    window.price = '<?php the_field('price'); ?>';
  </script>

  <div class="modal-window modal-window-contact">
    <h2>Свяжитесь с нами!</h2>
    <?php echo do_shortcode('[contact-form-7 id="110" title="Contact Form"]'); ?>
    <span class="close">x</span>
  </div><!-- /.modal-window-contact -->

  <div class="modal-window modal-window-buy">
    <p>Вы покупаете <span class="sstitle"></span> в количестве <span class="ssquantity"></span> по цене <span class="ssprice"></span> руб., на общую сумму <span class="sspriceall"></span> руб.</p>
    <p>Укажите, пожалуйста, свои данные и наш менеджер в ближайшее время свяжется с вами для уточнения заказа!</p>
    <?php echo do_shortcode('[contact-form-7 id="111" title="Buy"]'); ?>
    <span class="close">x</span>
  </div><!-- /.modal-window-buy -->

  <div class="modal-window-bg"></div>
  <!-- /.modal-window-bg -->


</body>
</html>
