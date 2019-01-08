<?php get_header() ?>

<main role="main">
  
  <section class="container">
    <div class="row">
     <div class="container text-center"> 
      <?php 
        $post_id = 222;
        $queried_post = get_post($post_id);
        $title = $queried_post->post_title;
        $content = $queried_post->post_content;
      ?>

        <h1 class="page-title text-center padding-intro pb-3"> <?php echo $title?> </h1>

        <div class="page-normal-content page-normal-content-justify">
          <?php echo $content;?>
        </div>

      </div>
    </div>

    <div class="row">

        <div class="col-lg-6 py-5">
          <?php 
	          $params = array('name' => 'asbl-image');
            $the_query = new WP_Query($params);
            
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) :
                $the_query->the_post();
                
            if(get_the_post_thumbnail_url()):

            ?>
              
          <img src="<?php the_post_thumbnail_url();?>" alt="Atomium" class="asbl-left-image">
          
          <?php endif; ?>
              <?php
        		endwhile;
        	endif;
        	?>

        </div>

        <div class="col-lg-6 py-5">
          <?php 
            $post_id = 224;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
            $content = $queried_post->post_content;
          ?>
          <div class="text-center page-normal-content page-normal-content-justify"> <?php echo"$content" ?></div>

        </div>

    </div>

    <div class="row">

        <div class="col-12">
          
          <?php 
	          $params = array('name' => 'asbl-solutions');
            $the_query = new WP_Query($params);
            
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) :
                $the_query->the_post();
            ?>

          <div class="text-center page-normal-content page-normal-content-justify py-5">
            <?php the_content()?>
          </div>

              <?php
        		endwhile;
        	endif;
        	?>

        </div>

    </div>
  </section> 



  <section class="row functionnal-row bg-light justify-content-center">

    <div class="container card-deck py-5">
      <div class="row">
      
      <div class="card col-md-6 py-5">
          <?php 
	          $params = array('name' => 'martin-delporte');
            $the_query = new WP_Query($params);
            
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) :
                $the_query->the_post();
                
            if(get_the_post_thumbnail_url()):

          ?>
              
          <img src="<?php the_post_thumbnail_url();?>" alt="Martin Delporte" class="card-img rounded-circle col-8 asbl-image-perso mx-auto">

          <h4 class="page-subtitle text-center text-dark pt-4"><?php the_title() ?> </h4>

          <div class="card-text">
            <?php the_content()?>
          </div>
          
          <?php endif; ?>
              <?php
        		endwhile;
        	endif;
        	?>
      </div>

      <div class="card col-md-6 py-5">
          <?php 
	          $params = array('name' => 'josias-van-droogenbroeck');
            $the_query = new WP_Query($params);
            
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) :
                $the_query->the_post();
                
            if(get_the_post_thumbnail_url()):

          ?>
              
          <img src="<?php the_post_thumbnail_url();?>" alt="Josias Van Droogenbroeck" class="card-img rounded-circle col-8 mx-auto asbl-image-perso ">

          <h4 class="page-subtitle text-center text-dark pt-4"><?php the_title() ?> </h4>

          <div class="card-text">
            <?php the_content()?>
          </div>
          
          <?php endif; ?>
              <?php
        		endwhile;
        	endif;
        	?>

      </div>

      </div>
    </div> 
  </section>





  



</main> 

<?php get_footer() ?>