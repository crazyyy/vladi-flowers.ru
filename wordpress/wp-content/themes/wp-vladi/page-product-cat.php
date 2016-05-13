<?php /* Template Name: Product Category */ get_header(); ?>

  <?php get_sidebar(); ?>

    <div id="content" class="column">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('item-page'); ?>>
          <span class="header_article"><?php the_title(); ?></span>


            <div class="moduletable clearfix">
              <div class="latest_products category_products clearfix">

                <?php  $posts = get_field('4_top_elements'); if( $posts ): ?>
                  <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>

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

                    <?php endforeach; ?>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>

              </div><!-- latest_products -->
            </div><!-- moduletable -->


          <?php the_content(); ?>
        </div><!-- item-page -->
      <?php endwhile; else: ?>
        <div class="item-page">
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        </div>
      <?php endif; ?>

    </div><!-- content -->

  </div>
  <!-- div#container is closed-->

<?php get_footer(); ?>
