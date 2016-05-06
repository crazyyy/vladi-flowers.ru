<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('items-row cols-1 row-0 clearfix'); ?>>
    <div class="item column-1">

      <h2><?php the_title(); ?></h2>
      <a rel="nofollow" class="text-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ( has_post_thumbnail()) :
          the_post_thumbnail('medium');
        else: ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
      </a><!-- /post thumbnail -->
      <?php wpeExcerpt('wpeExcerpt40'); ?>
      <p class="readmore"><a href="<?php the_permalink(); ?>">Подробнее...</a></p>

    </div><!-- item column-1 -->
  </div><!-- items-row cols-1 row-0 -->
  <?php endwhile; else: ?>
  <div class="items-row cols-1 row-0 clearfix">
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
