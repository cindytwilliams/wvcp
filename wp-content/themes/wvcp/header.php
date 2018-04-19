<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <?php wp_head();?>

  </head>

  <body>
	  
    <!-- Facebook widget code -->
	  <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

      <div class="row w-100">

        <!-- logo -->
        <div class="col-lg-4 nav-col1">
         <a class="navbar-brand" href="/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/wvcp-logo.png" alt="WVCP logo" width="100%"></a>
        </div>

        <!-- navigation -->
        <div class="col-lg-8 nav-col2">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

          <!--<button type="button" class="btn btn-danger"><i class="fa fa-volume-up" aria-hidden="true"></i> Listen Now</button>-->
          <?php
          wp_nav_menu( array(
          'theme_location'    => 'main_nav',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'navbarResponsive',
          'menu_class'        => 'navbar-nav ml-auto',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker()
          ) );
          ?>

          <p class="public-stmt text-right text-white text-muted">If you have questions about WVCP's public inspection file, email the station's manager <a href="mailto:howard.espravnik@volstate.edu">Howard.Espravnik@volstate.edu</a></p>

        </div>    <!-- ./col -->

      </div>    <!-- ./row -->

    </div>  <!-- ./container -->

    </nav>

    <!-- Header with Background Image -->
    <header class="wvcp-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <main>
      <div class="container">