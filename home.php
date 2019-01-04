<?php get_header(); ?>

    
    <!-- LE SLOGAN -->
    
    <section class="slogan container-fluid text-center">

      <div class="col-sm row">
	    <?php
	    $params = array('pagename' => 'slogan');
	    $the_query = new WP_Query($params);

	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>

          <span class="slogan_titre col"><?php the_content() ?></span>

		    <?php
		    endwhile;
	    endif; ?>
    </div>

    </section>

    
    <!-- L'intro -->
    
    <section id="intro_container d-flex row text-center">
      
      <a href="projet.php" id="intro_link">introduction au projet</a>
      
      <p id="intro_texte">
        À l'heure où l'on voit des files interminables de voitures bloquées sur la route, à l'heure où l'on fait tout pour trouver des alternatives viables pour pouvoir circuler en ville, où l'on aimerait circuler plus rapidement et efficacement que jamais, on reste malgré tout coincé par les mêmes problèmes depuis des années déjà. C'est pourquoi, nous avons décidé de reprendre un projet de réaménagement de ville qui serait véritablement optimisé pour la circulation. Ce projet imaginé d'abord par Walt Disney, renaît aujourd'hui sous le nom de Layers Project.
      </p>
      
      <q>Une ville sur tous les plans</q>
    
    </section>

    
    <!-- L'agenda -->
    
    <section id="agenda_container d-flex row">
        
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
    
    <section id="news_container d-flex row">

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

    <footer class="d-flex">
      
      <span id="footer_coordonnees_titre">coordonnées</span>
                 
      
      <div id="footer_coordonnees_content">
            ASBL THE LAYERS PROJECT <br>
            Rue des charbonniers 12 <br>
            1020 Bruxelles <br>
            <br>
            TEL : <a href="callto:+3227343434" class="footer_link">+322 734 34 34</a>  <br>
            MAIL : <a href="mailto:layersproject.belgium@gmail.com" class="footer_link"> layers.project@gmail.com </a><br>
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
          <a href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i></a>  
          <a href="https://twitter.com"><i class="fab fa-twitter-square fa-2x"></i></a>
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

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  </body>

</html>
