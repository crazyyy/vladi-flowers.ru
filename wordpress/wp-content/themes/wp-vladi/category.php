<?php get_header(); ?>

  <?php get_sidebar(); ?>

    <div id="content" class="column">

      <div class="blog">
        <h1><?php _e( 'Categories for', 'wpeasy' ); the_category(', '); ?></h1>
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div><!-- blog -->

    </div><!-- content -->

  </div>
  <!-- div#container is closed-->

<?php get_footer(); ?>
