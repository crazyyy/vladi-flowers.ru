<?php get_header(); ?>

  <?php get_sidebar(); ?>

      <div id="content" class="column">

        <div class="jshop productfull">

          <div class="jshop-img">
            <?php if ( has_post_thumbnail()) :?>
              <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>
              <a rel="lightbox" class="single-thumb" href="<?=$url?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
            <?php endif; ?><!-- /post thumbnail -->
          </div><!-- jshop-img -->

          <div class="jshop_prod_description clearfix">
            <h1><?php the_title(); ?></h1>
            <p>
              <?php if( get_field('composition') ) { ?>
                <span class="green">Состав</span>: <?php the_field('composition'); ?>
                <br>
              <?php } ?>
              <?php if( get_field('decor') ) { ?>
                <span class="green">Оформление</span>: <?php the_field('decor'); ?>
                <br>
              <?php } ?>
            </p>
            <div class="clearer"></div>
            <?php if( get_field('price') ) { ?>
              <div class="prod_price">
                Цена: <span id="block_price"><span class="chislo"><?php the_field('price'); ?></span> <span class="val">руб.</span></span>
              </div><!-- prod_price -->
            <?php } ?>
            <form class="prod_buttons">
              <label for="quantity">
                Количество:&nbsp;
              </label>
              <input type="text" name="quantity" id="quantity" class="quantity" value="1">
              <input type="submit" class="button-zakaz" value="">
            </form><!-- prod_buttons -->

          </div>
        <!-- description end -->
        <div id="clearer"></div>

      </div><!-- jshop productfull -->

      <?php get_template_part('jshop_list_product'); ?>

      <?php comments_template(); ?>

    </div>
    <!-- div#content is closed-->
  </div>
  <!-- div#container is closed-->

<?php get_footer(); ?>
