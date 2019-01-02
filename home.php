<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>The Layers Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/image/xi.png"> 
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <?php wp_head(); ?>
  </head>
  
  <body>

    
    <!-- LE MENU -->
    
    <header>

      <a href="index.php" id="menu_logo"><img src="<?php bloginfo('template_directory') ?>/image/tlp_blanc.png" alt="THE LAYERS PROJECT" id="menu_logo_link"></a>
      <span id="menu_accueil"> <a href="index.php" class="menu_link">accueil</a> </span>
      <span id="menu_projet"> <a href="projet.php" class="menu_link"> projet </a></span>
      <span id="menu_asbl"> <a href="asbl.php" class="menu_link"> asbl</a></span>
      <span id="menu_agenda"> <a href="agenda.php" class="menu_link"> agenda</a> </span>
      <span id="menu_news"><a href="news.php" class="menu_link">news</a> </span>
      <span id="menu_galerie"><a href="galerie.php" class="menu_link">galerie</a> </span>

    </header>

    
    <!-- LE SLOGAN -->
    
    <section id="slogan">
      
      <p id="slogan_titre">Lâche ta caisse !</p>

    </section>

    
    <!-- L'intro -->
    
    <section id="intro_container">
      
      <a href="projet.php" id="intro_link">introduction au projet</a>
      
      <p id="intro_texte">
        À l'heure où l'on voit des files interminables de voitures bloquées sur la route, à l'heure où l'on fait tout pour trouver des alternatives viables pour pouvoir circuler en ville, où l'on aimerait circuler plus rapidement et efficacement que jamais, on reste malgré tout coincé par les mêmes problèmes depuis des années déjà. C'est pourquoi, nous avons décidé de reprendre un projet de réaménagement de ville qui serait véritablement optimisé pour la circulation. Ce projet imaginé d'abord par Walt Disney, renaît aujourd'hui sous le nom de Layers Project.
      </p>
      
      <q>Une ville sur tous les plans</q>
    
    </section>

    
    <!-- L'agenda -->
    
    <section id="agenda_container">
        
      <a href="agenda.php" id="agenda_link"> agenda</a>
      
      
      <!-- évent 1 -->
      <a href="event_laurent_alexandre" id="agenda_event_block1_link">
        <div id="agenda_event_block1">  
          <img src="image/laurent_alexandre.jpeg" id="agenda_event_image1" alt="laurent alexandre">
          <p class="agenda_event_date" id="agenda_event_date1">21 / 11 conférence de laurent alexandre</p>
        </div>
      </a>

      <div id="agenda_event_block2"> 
        
        <img src="image/elon_musk.jpg" id="agenda_event_image2" alt="elon musk">
        
        <p class="agenda_event_date" id="agenda_event_date2">11 / 02 conférence d'elon musk</p>
      
      </div>

      
      <div id="agenda_event_block3"> 

        <img src="image/journee_sans_voitures.png" id="agenda_event_image3" alt="groupe en vélo devant monument">

        <p class="agenda_event_date" id="agenda_event_date3">22 / 09 journée sans voitures</p>

      </div>


    </section>

    
    <!-- Les News -->
    
    <section id="news_container">

      <a href="news.php" id="news_link">news</a>

      <p class="news_article_titre" id="news_article_titre1">la technologie en plein coeur de la ville</p>

      <img src="image/ecran.png" id="news_article1" alt="écran">
        
      <p class="news_article_titre" id="news_article_titre2">une ville sans embouteillages ?</p>

      <img src="image/ecran.png" id="news_article2" alt="écran">

      <p class="news_article_titre" id="news_article_titre3">prix de la meilleure idée de la décénie</p>

      <img src="image/ecran.png" id="news_article3" alt="écran">
      
      <p class="news_article_titre" id="news_article_titre4">laurent alexandre, ou les révélations d'un homme déchu</p>
    
      <img src="image/laurent_alexandre.jpeg" id="news_article4" alt="laurent alexandre">

    </section>

    
    <!-- Le Footer -->

    <footer>
      
      <span id="footer_coordonnees_titre">coordonnées</span>
                 
      
      <div id="footer_coordonnees_content">
            ASBL THE LAYERS PROJECT <br>
            Rue des charbonniers 12 <br>
            1020 Bruxelles <br>
            <br>
            TEL : <a href="callto:+3227343434" class="footer_link">+322 734 34 34</a>  <br>
            MAIL : <a href="mailto:layers.project@gmail.com" class="footer_link"> layers.project@gmail.com </a><br>
      </div>
    


      <span id="footer_map_titre"> map du site</span>
  
      <div id="footer_map_content">
        
        <p>
            <a href="index.php" class="footer_link"> Accueil</a> <br>
            
            <a href="projet.php" class="footer_link">Projet</a> <br>
            
            <a href="asbl.php" class="footer_link">ASBL</a> <br>
            <br>
            <a href="agenda.php" class="footer_link">Agenda</a> <br>
            
            <a href="news.php" class="footer_link">News</a> <br>
            
        </p>

      </div>

      
      <span id="footer_asbl_titre">l'asbl</span>

      <div id="footer_asbl_content">
        
        <p>
          Nous sommes une jeune ASBL belge qui a pour but de promouvoir le projet d'aménagement des villes dans l'optique de l'optimisation de la circulation, la modernité, l'écologie et le confort dans les transports. 
          <br>
          <br>
          Rejoignez-nous sur les réseaux : <br>
          <a href="https://www.facebook.com/The-Layers-Project-438733686661474/?modal=admin_todo_tour"><i class="fab fa-facebook-square fa-2x"></i></a>
          <a href="https://twitter.com"><i class="fab fa-instagram fa-2x"></i></a>  
          <a href="https://instagram.com"><i class="fab fa-twitter-square fa-2x"></i></a>
        </p>

      </div>

      
      <span id="footer_copyright">
          
        <span id="footer_copyright_content">
            COPYRIGHT 2018 | Tous droits réservés | 
            <a href="index.php" class="footer_link">thelayersproject.be</a> | 
            <a href="conditions.php" class="footer_link"> Conditions générales d'utilisation </a> 
            et 
            <a href="mentions_legales.php" class="footer_link"> Mentions Légales</a>
      
        </span>
        
      </span>  
    
    </footer>

  </body>

</html>
