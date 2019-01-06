<?php get_header(); ?>

    
    <!-- LE SLOGAN -->
    
    <section class="slogan jumbotron text-center d-flex align-items-center">

      <div class="col-sm align-items-center">
	    <?php
	    $params = array('pagename' => 'slogan');
	    $the_query = new WP_Query($params);

	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>

          <span class="slogan_titre "><?php the_content() ?></span>

		    <?php
		    endwhile;
	    endif; ?>
    </div>

    </section>

    
    <!-- L'intro -->
    
    <section class="jumbotron d-flex text-center">

      <div class="container">
	      <?php
	      $params = array('pagename' => 'introduction-au-projet');
	      $the_query = new WP_Query($params);

	      if ( $the_query->have_posts() ) :
		      while ( $the_query->have_posts() ) :
			      $the_query->the_post(); ?>

            <a href="<?php the_permalink() ?>" class="title_link uppercase text-center"><?php the_title() ?></a>
            <div class="intro_texte"><?php the_content() ?></div>
		      <?php
		      endwhile;
	      endif; ?>
      </div>

    </section>

    
    <!-- L'agenda -->
    
    <section class="py-5 bg-light">
        
      <div class="functionnal-row pb-3">
        <div class="px-3 py-3 pt-md-4 pb-md-4 mx-auto text-center">
          <a href="agenda.php" class="title_link uppercase lightened"> agenda</a>
        </div>
      </div>
        
        <div class="wide-container mx-sm-2 mx-md-5">
          <div class="row">

	          <?php
	          $params = array('category_name' => 'agenda','posts_per_page' => 3);
	          $the_query = new WP_Query($params);

	          if ( $the_query->have_posts() ) :
		          while ( $the_query->have_posts() ) :
			          $the_query->the_post(); ?>

            <div class="col-md-4 card-group">
              <div class="card mb-4">

	              <?php
	              if(get_the_post_thumbnail_url()): ?>
                  <a href="<?php the_permalink(); ?>">
                    <img class="card-img" src="<?php the_post_thumbnail_url() ?>" alt="Evénément">
                  </a>
	              <?php endif; ?>

                <div class="card-img-overlay px-4 py4">
                  <p class="card-title uppercase">
                    <a href="<?php the_permalink() ; ?>" class="agenda_event_date">
                      <?php the_title() ; ?>
                    </a>
                  </p>
                  <p class="card-text">
                    <?php the_excerpt() ; ?>
                  </p>
                  
                </div>
              </div>
            </div>

    	    <?php
    		    endwhile;
    	    endif;
    	    ?>
          </div>
        </div>

    </section>

    
    <!-- Les News -->
    
    <section class="py-5">
      
      <div class="functionnal-row pb-3">
        <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <a href="news.php" class="title_link uppercase">news</a>
        </div>
      </div>
      
      <div class="wide-container mx-sm-2 mx-md-5">
        <div class="row">

	        <?php
	        $params = array('category_name' => 'news','posts_per_page' => 4);
	        $the_query = new WP_Query($params);

	        if ( $the_query->have_posts() ) :
		        while ( $the_query->have_posts() ) :
			        $the_query->the_post(); ?>

          <div class="col-md-3 card-group">
            <div class="card mb-3">

	            <?php
	            if(get_the_post_thumbnail_url()): ?>
                <a href="<?php the_permalink(); ?>">
                  <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Card image ">
                </a>
	            <?php endif; ?>

              <div class="card-body">
                <p class="card-text">
                  <a href="<?php the_permalink() ; ?>">
                    <?php the_title() ; ?>
                  </a>
                </p>
                <p class="card-text">
                  <?php the_excerpt() ; ?>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="<?php the_permalink() ; ?>" class="btn btn-sm btn-outline-secondary">Plus</a>
                  </div>
                  <small class="text-muted"><?php the_date() ; ?></small>
                </div>
              </div>
            </div>
          </div>

    	  <?php
    		  endwhile;
    	  endif;
    	  ?>
        </div>
      </div>
    </section>


      <!-- <a href="news.php" id="news_link">news</a>

      <p class="news_article_titre" id="news_article_titre1">la technologie en plein coeur de la ville</p>

      <img src="image/ecran.png" id="news_article1" alt="écran">
        
      <p class="news_article_titre" id="news_article_titre2">une ville sans embouteillages ?</p>

      <img src="image/ecran.png" id="news_article2" alt="écran">

      <p class="news_article_titre" id="news_article_titre3">prix de la meilleure idée de la décénie</p>

      <img src="image/ecran.png" id="news_article3" alt="écran">
      
      <p class="news_article_titre" id="news_article_titre4">laurent alexandre, ou les révélations d'un homme déchu</p>
    
      <img src="image/laurent_alexandre.jpeg" id="news_article4" alt="laurent alexandre">

    </section> -->

    
    <!-- Le Footer -->

    <footer class="d-flex">
      
    <div class="container">
          <div class="row">

            <div class="col-sm-4 py-4">
              <?php
                // On récupère la "page" ayant "a-propos-de-nous" comme slug.
                // Docs: https://developer.wordpress.org/reference/classes/wp_query/
	              $params = array('pagename' => 'coordonnees');
	              $the_query = new WP_Query($params);

	              if ( $the_query->have_posts() ) :
		              while ( $the_query->have_posts() ) :
			              $the_query->the_post(); ?>

                <h4>
                  <p href="<?php the_title() ?>" class="text-white uppercase"><?php the_title() ?></p>
                </h4>
                <div class="text-white">
                    <?php the_excerpt() ?>
                </div>

                  <?php
                  endwhile;
                endif; 
              
              
	            wp_nav_menu(array(
                'theme_location' => 'bottom-contact',
                
		            'menu_class' => 'list-unstyled text-white',
	            ));
	            ?>
            </div>
            
            <div class="col-sm-3 py-4">
              <h4 class="text-white uppercase">map du site</h4>
	            <?php
	            wp_nav_menu(array(
                'theme_location' => 'bottom-map',
                
		            'menu_class' => 'list-unstyled text-white',
	            ));
	            ?>
            </div>   
            
            <div class="col-sm-4 col-md-5 py-4">
	            <?php
              // On récupère la "page" ayant "a-propos-de-nous" comme slug.
              // Docs: https://developer.wordpress.org/reference/classes/wp_query/
	            $params = array('pagename' => 'a-propos');
	            $the_query = new WP_Query($params);

	            if ( $the_query->have_posts() ) :
		            while ( $the_query->have_posts() ) :
			            $the_query->the_post(); ?>

              <h4>
                <p href="<?php the_permalink() ?>" class="text-white uppercase"><?php the_title() ?></p>
              </h4>
              <div class="text-white">
                  <?php the_excerpt() ?>
                  <br>
                  <a href="https://www.facebook.com/The-Layers-Project-438733686661474/?modal=admin_todo_tour"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
                  <a href="https://twitter.com"><i class="fab fa-twitter-square fa-2x"></i></a>
                </p>
              </div>

                <?php
                endwhile;
	            endif; ?>
            </div>

            <span class="row">
            <div class="col-sm-2 py-4">
              <h4 class="text-white">coordonnées</h4>
	            <?php
	            wp_nav_menu(array(
                'theme_location' => 'sub-bottom',
                
		            'menu_class' => 'list-unstyled text-white',
	            ));
	            ?>
            </div>
            </span>
            
          </div>
        </div>
      

      
      <!-- <span id="footer_asbl_titre">l'asbl</span>

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
        
      </span>   -->
    
    </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  </body>

</html>
