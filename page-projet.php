<?php get_header() ?>
      
<h1 class="page-title text-center padding-intro pb-3">The Layers Project</h1>
  
  <?php
    $params = array('category_name' => 'projet');
    $the_query = new WP_Query($params);
    if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) :
        $the_query->the_post(); ?>

        <div class="container text-center text-white" data-aos="fade-up"  data-aos-duration="2000" data-aos-anchor-placement="center-bottom" data-aos-easing="ease-in-back">
          
          <h4 class="uppercase page-subtitle petite-marge-top" >
            <?php the_title() ?>
          </h4>
        
          <div class="row" >

            <div class="d-block text-center col-12 py-5 project-content px-lg-5 color-white" >
              <?php the_content() ?>
            </div>
            

          </div>



        </div>


      <?php
      endwhile;
    endif; 
  ?>

<?php get_footer() ?>