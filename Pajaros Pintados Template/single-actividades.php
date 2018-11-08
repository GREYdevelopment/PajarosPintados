<?php
/**
 * Category Actividades
 *
 */
 
 get_header(noticia);
 
 wp_reset_query();
?>

<section class="main-content-post">
    <article class="content-actividad-general">
        <div class="content-image-post">
           <?php the_post_thumbnail(); ?>
        </div>

        <div class="content-text-post">
          <h1><?php the_title(); ?></h1>
		  <?php the_content(); ?>
        </div>
    </article>

</section>
 
<?php  get_footer(); ?>