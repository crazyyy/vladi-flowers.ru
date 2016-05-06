<?php get_header(); ?>

  <?php get_sidebar(); ?>

    <div id="content" class="column">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('item-page'); ?>>
          <span class="header_article"><?php the_title(); ?></span>
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
