<?php get_header() ?>

<main role="main">          

    <section class="container py-5 ">
      
      <h1 class="page-title text-center padding-intro pb-3"><?php the_title()?></h1>

      <h2 class="page-subtitle text-center py-5"> C'est pour bientôt !</h2>

      <div class="row">
        
        <div class="wide-container col-lg card-deck">          
          <?php
            $params = array('category_name' => 'nearest-event', 'posts_per_page' => 2);
	          $the_query = new WP_Query($params);

	          if ( $the_query->have_posts() ) :
		          while ( $the_query->have_posts() ) :
			          $the_query->the_post(); ?>
          

            <div class="card card-modulable col-lg-6 mb-4">

                <?php
                if(get_the_post_thumbnail_url()): ?>
                    <img class="card-img" src="<?php the_post_thumbnail_url() ?>" alt="Evénément">
                <?php endif; ?>
                              
                <a href="<?php the_permalink() ; ?>"  class="text-no-deco">
                  <div class="card-img-overlay px-4 py4">
                    <p class="card-title uppercase">
                      <?php the_title() ; ?>
                    </p>
                    <p class="card-text">
                      <?php the_excerpt() ; ?>
                    </p>
                  </div>
                </a>
                              
            </div>
                              
                <?php
              endwhile;
              endif;
            ?>
        
          </div>
      </div>



      <h2 class="page-subtitle text-center py-5 petite-marge-top"> On a encore le temps...</h2>

      <div class="wide-container ">
          <div class="row">

	          <?php
            $params = array('category_name' =>'plus-loin');
	          $the_query = new WP_Query($params);

	          if ( $the_query->have_posts() ) :
		          while ( $the_query->have_posts() ) :
			          $the_query->the_post(); ?>

            <div class="col-lg card-group">
              <div class="card card-modulable mb-4">

	              <?php
	              if(get_the_post_thumbnail_url()): ?>
                    <img class="card-img" src="<?php the_post_thumbnail_url() ?>" alt="Evénément">
	              <?php endif; ?>
                
                <a href="<?php the_permalink() ; ?>"  class="text-no-deco">
                  <div class="card-img-overlay px-4 py4">
                    <p class="card-title uppercase">
                      <?php the_title() ; ?>
                    </p>
                    <p class="card-text">
                      <?php the_excerpt() ; ?>
                    </p>
                  </div>
                </a>
              
              </div>
            </div>

    	      <?php
    		      endwhile;
    	      endif;
    	      ?>
          </div>
        </div>

    </section>


</main>



<?php get_footer() ?>