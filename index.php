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

          <div class="slogan_titre "><?php the_content() ?></div>

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

            <a href="<?php echo get_home_url() ?>/projet" class="title_link uppercase text-center"><?php the_title() ?></a>
            <div class="intro_texte"><?php the_content() ?></div>
		      <?php
		      endwhile;
	      endif; ?>
      </div>

    </section>

    
    <!-- L'agenda -->
    
    <section class="py-5 px-4 bg-light">
        
      <div class="functionnal-row pb-3">
        <div class="px-3 py-3 pt-md-4 pb-md-4 mx-auto text-center">
          <a href="<?php echo get_home_url()?>/category/agenda" class="title_link uppercase lightened"> agenda</a>
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

            <div class="col-lg card-group">
              <div class="card card-anim-shadow card-shadow mb-4 mx-lg-3">

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

    
    <!-- Les News -->
    
    <section class="py-5 px-4">
      
      <div class="functionnal-row pb-3">
        <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <a href="<?php echo get_home_url()?>/categories/news" class="title_link uppercase">news</a>
        </div>
      </div>
      
      <div class="wide-container mx-sm-2 mx-md-5">
        <div class="row">

	        <?php
	        $params = array('post-type'=>'news' , 'category_name' => 'news','posts_per_page' => 4);
	        $the_query = new WP_Query($params);

	        if ( $the_query->have_posts() ) :
		        while ( $the_query->have_posts() ) :
			        $the_query->the_post(); ?>

          <div class="col-lg-3 card-group">
            <div class="card card-anim-shadow mb-3">

	            <?php
	            if(get_the_post_thumbnail_url()): ?>
                <a href="<?php the_permalink(); ?>">
                  <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Card card-anim-shadow image ">
                </a>
	            <?php endif; ?>

              <div class="card-body">
                <p class="card-text">
                  <a href="<?php the_permalink() ; ?>" class="card-link">
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

    <?php get_footer() ?> 
