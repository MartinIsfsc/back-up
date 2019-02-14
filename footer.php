
    
    <!-- Le Footer -->

    <footer class="footer_text">
      
      <div class="functionnal-row">
          <div class="container">
            <div class="row d-flex">
            <div class="col-md-3 py-5">
              <?php
	              $params = array('pagename' => 'coordonnees');
	              $the_query = new WP_Query($params);

	              if ( $the_query->have_posts() ) :
		              while ( $the_query->have_posts() ) :
			              $the_query->the_post(); ?>

                <div>
                  <p class="uppercase font-weight-600 footer-title"><?php the_title() ?></p>
                  </div>
                <div >
                    <?php the_content() ?>
                </div>

                  <?php
                  endwhile;
                endif; 
              
              
	            wp_nav_menu(array(
                'theme_location' => 'bottom-contact',
                
		            'menu_class' => 'list-unstyled petite-marge-top',
	            ));
	            ?>
            </div>
            
            <div class="col-md-3 py-5">
              <div class="uppercase font-weight-600 footer-title">map du site</div>
	            <?php
	            wp_nav_menu(array(
                'theme_location' => 'bottom-map',
                
		            'menu_class' => 'list-unstyled petite-marge-top',
	            ));
	            ?>
            </div>   
            
            <div class="col-md-6 py-5">
	            <?php
	            $params = array('pagename' => 'a-propos');
	            $the_query = new WP_Query($params);

	            if ( $the_query->have_posts() ) :
		            while ( $the_query->have_posts() ) :
			            $the_query->the_post(); ?>

              <div>
                <p class="font-weight-600 uppercase footer-title"><?php the_title() ?></p>
                </div>
              <div>
                  <?php the_content() ?>
                  <a href="https://www.facebook.com/The-Layers-Project-438733686661474/?modal=admin_todo_tour"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="https://www.instagram.com/layersproject.belgium/?hl=fr"><i class="fab fa-instagram fa-2x"></i></a>
                  <a href="https://twitter.com/layers_project"><i class="fab fa-twitter-square fa-2x"></i></a>
                </p>
              </div>

                <?php
                endwhile;
	            endif; ?>
            </div>
            </div>
          </div>
        </div>

          <div class="functionnal-row darkened_background">  
            <div class="container">
              <div class="col-md py-2 align-items-center ">
                <?php
                 
	                $params = array('pagename' => 'sub-footer');
	                $the_query = new WP_Query($params);

	                if ( $the_query->have_posts() ) :
		                while ( $the_query->have_posts() ) :
                      $the_query->the_post(); ?>
                  
                  <div><?php the_content() ?></div>
              
                <?php
                  endwhile;
	              endif; ?>
              </div>
            </div>
            
          </div>

    </footer>

    <!-- BOOTSTRAP -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- AOS ANIMATIONS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init({disable:'phone'}); </script>


  </body>

</html>
