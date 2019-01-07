<?php get_header(); ?>

<main role="main" class="wide-container justify-content-center text-white">
       
       <?php
              if( have_posts() ):
              while( have_posts() ):
              the_post();
       ?>
       
       <section class="justify-content-center container">
              
              <h2 class="padding-intro text-center"><?php the_title() ; ?> </h2>

              <div class="d-flex mb-5 row">
                     
                     <div class="mt-5 col-lg-6 card card-modulable">
                            <?php 
                            if(get_the_post_thumbnail_url()): ?>
                                   <img class="img-intro card-image" src="<?php the_post_thumbnail_url() ?>" alt="Image de présentation de l'événement">
                            <?php endif; ?>
                     </div>
                     
                     <div class="justify-content-center col-lg-6 event-content-padding article-presentation">
                            <?php the_content()?> 
                     </div>
                     
              </div>
              
       
       </section>

       
       
       
       <?php
              endwhile;
              endif;
       ?>

</main>

<?php get_footer() ?>