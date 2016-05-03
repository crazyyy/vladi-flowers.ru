
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
          <div class="custom">
            <a href="<?php echo home_url(); ?>" title="<?php wp_title( '' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" border="0" alt="<?php wp_title( '' ); ?>"></a>
            <p><span class="slogan">Магазин цветов и подарков</span></p>
            <p><span class="tel">8-925-802-88-29;<br>8-916-654-22-40</span></p>
            <p><span class="adres">г. Москва, ул. Южнобутовская дом 42</span></p>
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
            <form name="searchForm" method="post">
              <input type="text" class="inputbox" style="width: 223px; height:29px" name="search" id="jshop_search" value="Поиск">
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

  <style>
  #header + #content > #left > #rlblock_left,
  #content > #center > .dose > .dosesingle,
  #content > #right > .dose > .dosesingle {
    display: none !important;
  }
  </style>

  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/mootools-core.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/core.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/caption.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/modal.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.media.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
  <script>
    function isEmptyValue(value) {
    var pattern = /\S/;
    return ret = (pattern.test(value)) ? (true) : (false);
    }
  </script>
  <script language="javascript">
  $(document).ready(function() {
    var visota = $("#footer").height();
    $("#footer-position").height(visota);
    $("#empty").height(visota);
  });
  </script>

</body>
</html>
