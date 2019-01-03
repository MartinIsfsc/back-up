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
    
    <!-- <header>

      <a href="index.php" id="menu_logo"><img src="<?php bloginfo('template_directory') ?>/image/tlp_blanc.png" alt="THE LAYERS PROJECT" id="menu_logo_link"></a>
      <span id="menu_accueil"> <a href="index.php" class="menu_link">accueil</a> </span>
      <span id="menu_projet"> <a href="projet.php" class="menu_link"> projet </a></span>
      <span id="menu_asbl"> <a href="asbl.php" class="menu_link"> asbl</a></span>
      <span id="menu_agenda"> <a href="agenda.php" class="menu_link"> agenda</a> </span>
      <span id="menu_news"><a href="news.php" class="menu_link">news</a> </span>
      <span id="menu_galerie"><a href="galerie.php" class="menu_link">galerie</a> </span>

    </header>
  -->


       <nav class="menu-container navbar navbar-expand-lg fixed-top" >
          <div class="container">

              <a href="index.html" class="navbar-brand"><img src="<?php bloginfo('template_directory') ?>/image/tlp_blanc.png" alt="THE LAYERS PROJECT" class="d-inline-block align-top menu-logo-link"> </a>  

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
                     'menu_class' => 'navbar-nav navbar-right',
              )); 
              ?> 
            
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>

          </div>
      </nav>