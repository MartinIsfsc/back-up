<?php get_header()?>

    <main role="main" class="container text-center">
        
        <?php
          $params = array('pagename' => 'politique-confidentialite');
	      $the_query = new WP_Query($params);

	      if ( $the_query->have_posts() ) :
			      $the_query->the_post(); ?>

        <h1 class="page-title py-5"> 
            <?php the_title() ; ?>
        </h1>
        
        <div class="col-12 page-normal-content py-5">
            <?php the_content()?> 
        </div>

    	<?php
    	endif;
    	?>

    </main>

<?php get_footer()?>