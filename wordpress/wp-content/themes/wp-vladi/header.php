<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div id="main">

    <div id="footer-position">
      <div id="footer">
        <div id="seo-text">
          <div class="moduletable">
            <div class="custom">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
        <!-- div#seo-text is closed-->
        <div id="bottom1">
          <div class="moduletable">
            <?php wpeFootNavOne(); ?>
          </div>
          <div class="moduletable">
            <?php wpeFootNavTwo(); ?>
          </div>
          <div class="moduletable">
            <?php wpeFootNavThree(); ?>
          </div>
        </div>
        <!-- div#bottom1 is closed-->
        <div id="bottom2"></div>
        <!-- div#bottom2 is closed-->
      </div>
      <!-- div#footer is closed-->
    </div>
    <!-- div#footer-positio is closed-->

    <div id="container">

      <div id="left" class="column">
