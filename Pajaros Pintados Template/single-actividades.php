<?php
/**
 * Category Actividades
 *
 */
 
 get_header('sections');
 
 wp_reset_query();
?>

<section class="main-content-post">
    <article class="content-actividad-general">
        <div class="content-image-post">
           <?php the_post_thumbnail(); ?>
        </div>

        <div class="conten-etiquetas-post">
         <?php if (get_post_meta($post->ID, 'etiqueta_nautica', true)) : ?>
                                  <h4 class="etiqueta-post-nautica etiqueta-general"><?php echo get_post_meta($post->ID, 'etiqueta_nautica', true); ?></h4>
                                 <?php endif; ?>
                                 <?php if (get_post_meta($post->ID, 'etiqueta_termas', true)) : ?>
                                  <h4 class="etiqueta-post-termas etiqueta-general"><?php echo get_post_meta($post->ID, 'etiqueta_termas', true); ?></h4>
                                 <?php endif; ?>
                                 <?php if (get_post_meta($post->ID, 'etiqueta_patrimonio', true)) : ?>
                                  <h4 class="etiqueta-post-patrimonio etiqueta-general"><?php echo get_post_meta($post->ID, 'etiqueta_patrimonio', true); ?></h4>
                                 <?php endif; ?>
                                 <?php if (get_post_meta($post->ID, 'etiqueta_naturaleza', true)) : ?>
                                  <h4 class="etiqueta-post-naturaleza etiqueta-general"><?php echo get_post_meta($post->ID, 'etiqueta_naturaleza', true); ?></h4>
                                 <?php endif; ?>
                                 <?php if (get_post_meta($post->ID, 'etiqueta_pueblos', true)) : ?>
                                  <h4 class="etiqueta-post-pueblos etiqueta-general"><?php echo get_post_meta($post->ID, 'etiqueta_pueblos', true); ?></h4>
                                 <?php endif; ?>
                                 <?php if (get_post_meta($post->ID, 'etiqueta_sabores', true)) : ?>
                                  <h4 class="etiqueta-post-sabores etiqueta-general"><?php echo get_post_meta($post->ID, 'etiqueta_sabores', true); ?></h4>
           <?php endif; ?>
        </div>



        <div class="content-text-post">
          <h1>
              <?php the_title(); ?> 
            <span class="content-bar-post"></span>
         </h1>
		  <?php the_content(); ?>
        </div>

        <div class="content-post-right">

        </div>
        <div style="clear:both"></div>


    <div class="single-post-items">

        <div class="content-titles-vermas">
            <h1>
                Más actividades
            </h1>
            <span >Actividades</span>
        </div>

    <div class="content-vermas-activiades">
    <?php
                    global $post;
                    $class_actividades = 0;
                    $image_data = wp_get_attachment_image_src ( get_the_post_thumbnail( $post->ID), 'full' );
                    $image_url = $image_data[0];
                    $wp_query = new WP_Query(); $wp_query->query('showposts=4&cat=2' . '&paged='.$paged );
                    while ($wp_query->have_posts()) : $wp_query->the_post();
      ?>
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
     <?php endwhile; ?>
     <div style="clear:both"></div>
    <a href="/actividades" class="button-vermas">Ver más</a>
    </div>

    </div>


    </article>



</section>
 
<?php  get_footer(); ?>