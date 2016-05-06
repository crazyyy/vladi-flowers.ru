<?php get_header(); ?>

  <?php get_sidebar(); ?>

    <div id="content" class="column">

      <div class="blog">
        <h1 class="search-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div><!-- blog -->

    </div><!-- content -->

  </div>
  <!-- div#container is closed-->

<?php get_footer(); ?>
