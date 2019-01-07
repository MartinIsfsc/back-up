<?php get_header() ?>

<main role="main">          

    <section class="container py-5 ">
      
      <h1 class="page-title text-center"><?php the_title()?></h1>

      <div class="row">
          
          <?php
            $params = array('category_name' => 'agenda', 'posts_per_page' => 2);
	          $the_query = new WP_Query($params);

	          if ( $the_query->have_posts() ) :
		          while ( $the_query->have_posts() ) :
			          $the_query->the_post(); ?>
            
            <div class="card col-6">
              
              <?php
	              if(get_the_post_thumbnail_url()): ?>
                  <a href="<?php the_permalink(); ?>">
                    <img class="card-link" src="<?php the_post_thumbnail_url() ?>" alt="Image pour l'événement">
                  </a>
	            <?php endif; ?>
              
              <h1 class="jumbotron-heading"><?php the_title() ?></h1>
              <div class="lead text-muted"><?php the_content() ?></div>

            
            </div>    
            
              <?php
            endwhile;
          endif; ?>
          
        
      </div>

    </section>


</main>






                  <h1 class="agenda_titre">Agenda</h1>



                  <div class="nearest_event1">
                    <img src="image/agenda1.jpg" id="agenda_photo1">
                  </div>



                  <p class="nearest_event_date" id="nearest_event-date1">21 / 11 conférence de laurent alexandre</p>



                  <div class="nearest_event2">
                    <img src="image/agenda1.jpg" id="agenda_photo2">
                  </div>



                  <p class="nearest_event_date" id="nearest_event-date2">11 / 02 conférence d'elon musk</p>



                  <section class="agenda_container">

                     <img src="image/laurent_alexandre.jpeg" id="agenda_event1" alt="laurent alexandre">

                     <p class="agenda_event_date" id="agenda_event-date1">21 / 11 conférence de laurent alexandre</p>

                     <img src="image/elon_musk.jpg" id="agenda_event2" alt="elon musk">

                     <p class="agenda_event_date" id="agenda_event-date2">11 / 02 conférence d'elon musk</p>

                     <img src="image/journee_sans_voitures.png" id="agenda_event3" alt="groupe en vélo devant monument">

                     <p class="agenda_event_date" id="agenda_event-date3">22 / 09 journée sans voitures</p>

                  </section>

<?php get_footer() ?>