<?php get_header(); ?>

  <?php get_sidebar(); ?>

    <div id="content" class="column">

      <div class="blog">
        <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
        <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
      </div><!-- blog -->

    </div><!-- content -->

  </div>
  <!-- div#container is closed-->

<?php get_footer(); ?>
