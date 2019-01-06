<?php get_header() ?>
      <?php
        $params = array('pagename' => 'projet');
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
      ?>

<?php get_footer() ?>