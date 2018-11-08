<?php
/**
 * Template Name: Home 
 *
 */

get_header();
wp_head();
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


<section class="main-content-slider">
  <?php echo do_shortcode("[masterslider id='1']"); ?>
</section>


<section class="content-general-home">
  <div class="content-mask-home" data-parallax='{"y" : 60, "distance": 300}'>
      <img src="<?php echo get_template_directory_uri(); ?>/images/home-mask.svg">
  </div>

<!-- D E S T I N O S -->
    <article class="content-destinos-home">
        <div class="content-titles-sections">
            <h1>
                Destinos
            </h1>
            <span data-parallax='{"scale": 1.2}'>Destinos</span>
            <h2>Lorem ipsum dolor sit met, consectetur adipiscing elit. Donen et porta lectus, ac aliquot sem. Duos sit met vehicle justo. Quisque ac ex tellu.</h2>
        </div>
    </article>
<!-- End Destinos -->

<!-- A C T I V I D A D E S -->
     <article class="content-actividades-home">
        <div class="content-titles-sections">
            <h1>
                Actividades
            </h1>
            <span data-parallax='{"scale": 1.2}'>Actividades</span>
            <h2>Lorem ipsum dolor sit met, consectetur adipiscing elit. Donen et porta lectus, ac aliquot sem. Duos sit met vehicle justo. Quisque ac ex tellu.</h2>
        </div>
        <div class="content-items-actividades">
            <ul>
                <a href="">
                    <li class="termas-icon"> 
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/termas-icon.svg" alt="Termas"> 
                        <h1 class="title-termas">Termas</h1>
                   </li>
                </a>
                <a href="">
                    <li class="patrimonio-icon">
                        <img class="patrimonio-icon" src="<?php echo get_template_directory_uri(); ?>/images/patrimonio-icon.svg" alt="Patrimonio"> 
                        <h1 class="title-patrimonio">Patrimonio y cultura</h1>
                   </li>
               </a>
                  <a href="">
                    <li class="nautica-icon">
                            <img  src="<?php echo get_template_directory_uri(); ?>/images/nautica-icon.svg" alt="Aventura Náutica"> 
                            <h1 class="title-nautica">Aventura Náutica</h1>
                    </li>
                  </a>
               <a href=""> 
               <li class="naturaleza-icon">
                       <img  src="<?php echo get_template_directory_uri(); ?>/images/naturaleza-icon.svg" alt="Naturaleza y Áreas Protegidas"> 
                       <h1 class="title-naturaleza">Naturaleza y Áreas Protegidas</h1>
               </li>
               </a>
               <a href="">
                <li class="pueblos-icon">
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/pueblos-icon.svg" alt="Pueblos con encanto"> 
                        <h1 class="title-pueblos">Pueblos con encanto</h1>
                </li>
               </a>
               <a href="">
                <li class="sabores-icon">
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/sabores-icon.svg" alt="Sabores"> 
                        <h1 class="title-sabores">Sabores</h1>
                </li>
               </a>
            </ul>
        </div>

        <div class="main-content-posteos-actividades">
            <?php
                    global $post;
                    $class_actividades = 0;
                    $image_data = wp_get_attachment_image_src ( get_the_post_thumbnail( $post->ID), 'full' );
                    $image_url = $image_data[0];
                    $wp_query = new WP_Query(); $wp_query->query('showposts=4&cat=2' . '&paged='.$paged );
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
            <div style="clear:both"></div>
            <a href="/actividades" class="button-vermas">Ver más</a>
        </div>
    </article>
<!-- End Destinos -->

</section>

<?php
 get_footer();
?>
