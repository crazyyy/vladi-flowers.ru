
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
            <p><span class="tel">8-904-236-87-95;<br>8-904-271-57-55</span></p>
            <p><span class="adres">г. Москва, ул. 30 лет октября 21</span></p>
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

  <script language="javascript">
  $(document).ready(function() {
    var visota = $("#footer").height();
    $("#footer-position").height(visota);
    $("#empty").height(visota);
  });
  </script>

</body>
</html>
