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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/wvcp-logo.png" alt="WVCP logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <nav><?php wp_nav_menu(array('menu' => 'Main Nav Menu', 'menu_class' => 'sf-menu',)); ?></nav>

        </div>
      </div>
    </nav>

    <!-- Header with Background Image -->
    <header class="wvcp-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!--<h1 class="display-3 text-center text-white mt-4">Business Name or Tagline</h1>-->
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">