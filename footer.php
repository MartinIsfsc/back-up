
    
    <!-- Le Footer -->

    <footer class="footer_text">
      
      <div class="functionnal-row">
          <div class="container">
            <div class="row d-flex">
            <div class="col-md-4 py-5">
              <?php
	              $params = array('pagename' => 'coordonnees');
	              $the_query = new WP_Query($params);

	              if ( $the_query->have_posts() ) :
		              while ( $the_query->have_posts() ) :
			              $the_query->the_post(); ?>

                <h4>
                  <p href="<?php the_title() ?>" class="uppercase"><?php the_title() ?></p>
                </h4>
                <div class="">
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
            
            <div class="col-md-2 py-5">
              <h4 class="uppercase">map du site</h4>
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

              <h4>
                <p href="<?php the_permalink() ?>" class=" uppercase"><?php the_title() ?></p>
              </h4>
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
              <div class="col-md py-3 align-items-center ">
                <?php
                 
	                $params = array('pagename' => 'sub-footer');
	                $the_query = new WP_Query($params);

	                if ( $the_query->have_posts() ) :
		                while ( $the_query->have_posts() ) :
                      $the_query->the_post(); ?>
                  
                  <span><?php the_content() ?></span>
              
                <?php
                  endwhile;
	              endif; ?>
              </div>
            </div>
            
          </div>

    </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  </body>

</html>
