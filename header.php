<!DOCTYPE html>
<html lang="fr">
  
  <head>
    <meta charset="utf-8">
    <title>The Layers Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/image/xi.png">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- AOS ANIMATIONS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     
    <!-- MON CSS et JS-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-css/custom-bootstrap.css">
    <script src="<?php bloginfo('template_directory') ?>/js/custom-js.js"></script>
    
    <!-- FONTS ET ICONS -->
    <link href="https://fonts.googleapis.com/css?family=Exo:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <?php wp_head(); ?>

  </head>
  
  <body>

    
    <!-- LE MENU -->

    <header> 
       <nav class="menu-container navbar navbar-dark navbar-expand-lg fixed-top" >
          <div class="container">

              <a href="<?php echo get_home_url(); ?>" class="navbar-brand">
                <h2 class="d-md-none uppercase navbar-title text-center" ><?php bloginfo('name') ?></h2>
                <img src="<?php bloginfo('template_directory') ?>/image/tlp_blanc.png" alt="THE LAYERS PROJECT" class="d-none d-md-block align-center menu-logo-link">
                 
              </a>  

              <button class="navbar-toggler float-left" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>

              <?php
              wp_nav_menu(array(
                     'theme_location' => 'top',

                     'container_class' => 'collapse navbar-collapse',
                     'container_id' => 'navbarNav',
                     'menu_class' => 'navbar-nav',
              )); 
              ?> 

          </div>
      </nav>

  </header> 