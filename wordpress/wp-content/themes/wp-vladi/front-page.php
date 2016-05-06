<?php /* Template Name: Home Page */ get_header(); ?>

  <?php get_sidebar(); ?>

      <div id="content" class="column">

        <div class="item-page clearfix">
          <div class="clearer"></div>

          <?php  $posts = get_field('top_block'); if( $posts ): ?>
            <div class="moduletable clearfix">
              <h3>Свадебные цветы и букеты</h3>
              <div class="latest_products">

              <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>

                  <div class="block_item">
                    <div class="item_image">
                      <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail()) :
                          the_post_thumbnail('medium');
                        else: ?>
                          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                      </a>
                    </div>
                    <a class="namecategory" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
              </div>
            </div>
          <?php endif; ?>



          <?php if(get_field('top_products')): ?>
            <?php while(has_sub_field('top_products')): ?>

              <div class="mainmodul">
                <h3><?php the_sub_field('block_title'); ?></h3>
                <span class="more-produkt">
                  <a href="<?php the_sub_field('more_link'); ?>" title="<?php the_sub_field('block_title'); ?>">Смотреть еще...</a>
                </span>
                <div class="moduletable">
                  <div class="latest_products">

                    <?php  $posts = get_sub_field('4_top_elements'); if( $posts ): ?>
                      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>

                          <div class="block_item">
                            <div class="item_image">
                              <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail()) :
                                  the_post_thumbnail('medium');
                                else: ?>
                                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                              </a>
                            </div>
                            <span class="chislo"><?php the_field('price'); ?></span> <span class="val">руб.</span> |
                            <a href="<?php the_permalink(); ?>">Подробнее</a>
                          </div>

                        <?php endforeach; ?>
                      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>

                  </div><!-- latest_products -->
                </div><!-- moduletable -->
              </div><!-- mainmodul -->

            <?php endwhile; ?>
          <?php endif; ?>



        </div><!-- item-page -->
      </div><!-- div#content is closed-->
    </div><!-- div#container is closed-->

<?php get_footer(); ?>
