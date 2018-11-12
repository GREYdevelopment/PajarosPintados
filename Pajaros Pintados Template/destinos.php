<?php
/**
 * Template Name: Destinos
 *
 */

get_header('sections');
?>

<script>
    $(document).ready(function(){

  $(".posteo-destino").mouseover(function() {
      $(this).find(".arrow-vermas-destinos").addClass('move-arrow-post');
});

  $(".posteo-destino").mouseout(function() {
      $(this).find(".arrow-vermas-destinos").removeClass('move-arrow-post');
});

    });
    
</script>

<!-- A C T I V I D A D E S -->
<article class="content-destinos-page">
        <div class="content-titles-sections">
            <h1>
                Destinos
            </h1>
            <span>Destinos</span>
        </div>

    <div class="post-destino-general-page">
      <?php
                    global $post;
                    $class_actividades = 0;
                    $image_data = wp_get_attachment_image_src ( get_the_post_thumbnail( $post->ID), 'full' );
                    $image_url = $image_data[0];
                    $wp_query = new WP_Query(); $wp_query->query('showposts=24&cat=5' . '&paged='.$paged );
                    while ($wp_query->have_posts()) : $wp_query->the_post();
      ?>
            <div class="posteo-destino">
              <a href="<?php the_permalink() ?>" class="<?php echo novedades_.$class_novedades += 1 ?>">
              <div class="content-bg-shadow"></div>
              <div class="post-destino-img" style="background: url(<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>) center !important; background-size: cover !important;">
                    </div>
                         <h1 class="text-destinos">
                             <?php the_title();?>
                            <span class="content-bar-bottom"></span>
                        </h1>
                         <div class="description-destinos" ><?php the_excerpt(); ?></div>
                         <div>
                           <img class="arrow-vermas-destinos" src="<?php echo get_template_directory_uri(); ?>/images/arrow-right-destino.svg" alt="">
                        </div>
              </a>
            </div>
     <?php endwhile; ?>
  </div>
        <div style="clear:both"></div>
    </article>
<!-- End actividades -->


<!-- end HOME -->

<?php
 get_footer();
?>
