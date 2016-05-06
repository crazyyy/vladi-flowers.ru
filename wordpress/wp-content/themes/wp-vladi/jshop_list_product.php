<div class="related_header">Обратите внимание на эти товары</div>
<div class="jshop_list_product">
  <table class="jshop list_related">
    <tbody>
      <tr>

        <?php query_posts( array(
          'post_type' => product,
          'showposts' => 4 ) );
        ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <td width="25%" class="jshop_related">
          <table class="product productitem_72">
            <tbody>
              <tr>
                <td class="image">
                  <div class="image_block">
                    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                      <?php if ( has_post_thumbnail()) :
                        the_post_thumbnail('medium');
                      else: ?>
                        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                      <?php endif; ?>
                    </a><!-- /post thumbnail -->
                  </div>
                  <div class="info-prod">
                    <span><span class="chislo"><?php the_field('price'); ?></span> <span class="val">руб.</span></span>
                    &nbsp;|&nbsp;
                    <a class="button_buy" href="<?php the_permalink(); ?>">Купить</a> &nbsp;
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

      </tr>
    </tbody>
  </table>
</div><!-- jshop_list_product -->
<div class="clearer"></div>
