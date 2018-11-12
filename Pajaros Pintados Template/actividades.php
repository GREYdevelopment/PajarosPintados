<?php
/**
 * Template Name: Actividades
 *
 */

get_header('sections');
?>

<script>
    $(document).ready(function(){
      $(".content-post-actividad").mouseover(function() {
          $(this).find(".arrow-vermas-post").addClass('move-arrow-post');
          $(this).find(".content-viewmore").addClass('move-vermas-icon');
    });
      $(".content-post-actividad").mouseout(function() {
          $(this).find(".arrow-vermas-post").removeClass('move-arrow-post');
          $(this).find(".content-viewmore").removeClass('move-vermas-icon');
    });
    });
    
</script>

<!-- A C T I V I D A D E S -->
<article class="content-actividades-page">
        <div class="content-titles-sections">
            <h1>
                Actividades
            </h1>
            <span data-parallax='{"scale": 1.2}'>Actividades</span>
        </div>

        <div class="main-content-posteos-actividades content-actividades-single-page">
            <?php
                    global $post;
                    $class_actividades = 0;
                    $image_data = wp_get_attachment_image_src ( get_the_post_thumbnail( $post->ID), 'full' );
                    $image_url = $image_data[0];
                    $wp_query = new WP_Query(); $wp_query->query('showposts=2&cat=2' . '&paged='.$paged );
                    while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            <a class="content-post-actividad" href="<?php the_permalink() ?>" class="<?php echo actividad_.$class_actividades += 1 ?>">
                    <div class="post-actividad-img" style="background: url(<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>) center !important; background-size: cover !important;">
                    <div class="content-viewmore"> + </div>
                    </div>

                            <div class="actividad-text-post">
                                <h1><?php the_title();?></h1>
                                <h3 class="date-noticia"><?php the_time('d / m / Y') ?></h3>
                                <p><?php the_excerpt(); ?></p>

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

                                 <div >
                                     <img class="arrow-vermas-post" src="<?php echo get_template_directory_uri(); ?>/images/arrow-right-post.svg" alt="">
                                 </div>
                            </div>
                            
             </a>
            <?php endwhile; ?>
            <div class="navigation-content">
               <?php wpbeginner_numeric_posts_nav(); ?>
             </div>
        </div>
        <div style="clear:both"></div>
    </article>
<!-- End actividades -->


<!-- end HOME -->

<?php
 get_footer();
?>
