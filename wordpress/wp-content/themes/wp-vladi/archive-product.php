<?php get_header(); ?>

  <?php get_sidebar(); ?>

    <div id="content" class="column">

        <div class="item-page clearfix">
          <div class="clearer"></div>

            <div class="mainmodul">
              <h3><?php post_type_archive_title(); ?></h3>
              <div class="moduletable">
                <div class="latest_products category_products">

                  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <div id="post-<?php the_ID(); ?>" <?php post_class('block_item clearfix'); ?>>
                      <div class="item_image">
                        <a href="<?php the_permalink(); ?>">
                          <?php if ( has_post_thumbnail()) :
                            the_post_thumbnail('medium');
                          else: ?>
                            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                          <?php endif; ?>
                        </a>
                      </div><!-- item_image -->
                      <h2><?php the_title(); ?></h2>
                      <span class="chislo"><?php the_field('price'); ?></span> <span class="val">руб.</span> |
                      <a href="<?php the_permalink(); ?>">Подробнее</a>
                    </div><!-- block_item -->

                  <?php endwhile; else: ?>
                    <div class="block_item clearfix">
                      <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
                    </div><!-- /article -->
                  <?php endif; ?>

                </div><!-- latest_products -->
              </div><!-- moduletable -->
            </div><!-- mainmodul -->

        </div><!-- item-page -->

    </div><!-- content -->
  </div>
  <!-- div#container is closed-->

<?php get_footer(); ?>
