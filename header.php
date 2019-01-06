<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>The Layers Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/image/xi.png">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     
    <!-- MON CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-css/master.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-css/custom-bootstrap.css">
    
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
                <h2 class="d-md-none uppercase navbar-title text-center" >the layers project</h2>
                <img src="<?php bloginfo('template_directory') ?>/image/tlp_blanc.png" alt="THE LAYERS PROJECT" class="d-none d-md-block align-center menu-logo-link">
                 
              </a>  

              <button class="navbar-toggler float-left" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>

              <?php
              // Docs : https://developer.wordpress.org/reference/functions/wp_nav_menu/

              // Pour rappel : les emplacements des menus sont définis dans le
              // fichier functions.php et assignés au(x) menu(s) dans le backoffice
              // de WP (Apparence/Menu).
              wp_nav_menu(array(
                     'theme_location' => 'top',

                     // Le(s) param(s) ci-dessous demande à WP d'ajouter certaines
                     // classes/id aux balises générées afin de correspondre au mieux à
                     // votre squelette HTML/CSS.
                     'container_class' => 'collapse navbar-collapse',
                     'container_id' => 'navbarNav',
                     'menu_class' => 'navbar-nav',
              )); 
              ?> 

          </div>
      </nav>

  </header> 