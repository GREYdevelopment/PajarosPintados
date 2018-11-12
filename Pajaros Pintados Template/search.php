<?php
/**
 * Category Search
 *
 */

get_header('sections');

 wp_reset_query();
?>


<section class="content-search-general">

        <div class="content-titles-sections">
            <h1>
                Resultados de Búsqueda
            </h1>
            <span data-parallax='{"scale": 1.2}'>Búsqueda</span>
            <h2> - <?php the_search_query(); ?> - </h2>
          </div>

  <div class="content-resultados">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php if (is_search() && ($post->post_type=='page')) continue; ?>
          <a class="content-post-slim" href="<?php the_permalink() ?>" class="<?php echo novedades_.$class_novedades += 1 ?>">
                    <div class="post-slim-img" style="background: url(<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>) center !important; background-size: cover !important;">
                    </div>
                    <div class="content-mask-post">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/mask-post-slim.svg" alt="">
                    </div>

                    <div class="content-text-post-slim">
                        <h1 class="text-post-slim">
                             <?php the_title();?>
                        </h1>
                         <div class="description-post-slim" ><?php the_excerpt(); ?></div>
                    </div>

           </a>
      <?php endwhile; else : ?>
       <p class="no-results"><?php _e( 'Lo sentimos, no hay resultados con este término de búsqueda.' ); ?></p>
      <?php endif; ?>

  </div>
  <div style="clear:both"></div>


  

</section>

<div style="clear:both"></div>


<?php  get_footer(); ?>