<?php get_header() ?>

<main role="main" class="container">
  
    <div class="row">
     <div class="container text-center"> 
      <?php 
        $post_id = 222;
        $queried_post = get_post($post_id);
        $title = $queried_post->post_title;
        $content = $queried_post->post_content;
      ?>

        <h1 class="page-title text-center padding-intro pb-3"> <?php echo $title?> </h1>

        <div class="page-normal-content">
          <?php echo $content;?>
        </div>

      </div>
    </div>

    <div class="row">

        <div class="col-lg-6 py-5">
          <?php 
             $query = new WP_Query( array( 'name' => 'asbl-image' ) );
          ?>
              

          <img src="
          <?php 
             $query = new WP_Query( array( 'name' => 'asbl-image' ) );
             get_the_post_thumbnail_url();
          ?>
          " alt="Atomium" class="asbl-left-image">


        </div>

        <div class="col-lg-6 py-5">
          <?php 
            $post_id = 224;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
            $content = $queried_post->post_content;
          ?>
          <div class="text-center page-normal-content"> <?php echo"$content"?></div>

        </div>

    </div>

    <div class="row">

        <div class="col-12">
          
          <?php 
             $query = new WP_Query( array( 'name' => 'asbl-principe' ) );
          ?>

          <div class="text-center page-normal-content py-5">
            <?php the_content()?>
          </div>

        </div>

    </div>





  



</main> 

<?php get_footer() ?>