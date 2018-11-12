<!DOCTYPE html>
<html  <?php language_attributes();?>>
 <head>
  <meta charset="utf-8">

  <title>Pájaros Pintados – Corredor Turístico del Río Uruguay</title>

  <meta name="description" content="El Corredor de los Pájaros Pintados es una invitación para descubrir el río que le da nombre a un país y disfrutar y dejarse sorprender por los bellos paisajes y su gente." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Llamados Jquery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax-scroll.js"></script>
  <!-- End Jquery -->

    <!-- Carousel -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Llamado Estilos -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- End estilos -->

  <link href="https://fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">


   <?php wp_head(); ?>


   <script>
    $(document).ready(function(){

    $('#nav-icon3').click(function(){
    $('#nav-icon3').toggleClass('open');
    $('#nav-icon3').toggleClass('menu-bg');
    $('.content-menu-desplegable').toggleClass( 'menu-animation');
    $('.content-list-menu').toggleClass( 'list-general-animation');
    $('.content-icon-menu').toggleClass( 'menu-move-right');

    $('.lista-actividades').removeClass( 'menu-animation-dropdown');
    $('.lista-destinos').removeClass( 'menu-animation-dropdown-destinos');

});

  $('.menu-text').click(function(){
    $('#nav-icon3').toggleClass('open');
    $('#nav-icon3').toggleClass('menu-bg');
    $('.content-menu-desplegable').toggleClass( 'menu-animation');
    $('.content-list-menu').toggleClass( 'list-general-animation');
});

  $('.content-search-icon').click(function(){
    $('.search-content').fadeToggle(300, "linear");
});

$('.content-search-close').click(function(){
    $('.search-content').fadeOut(300, "linear");
});

$('.button-dropdown-actividades').click(function(){
    $('.lista-actividades').toggleClass( 'menu-animation-dropdown');
    $('.lista-destinos').removeClass( 'menu-animation-dropdown-destinos');
    $(this).find(".arrow-menu img").toggleClass('move-arrow-menu');
});

$('.button-dropdown-destinos').click(function(){
    $('.lista-destinos').toggleClass( 'menu-animation-dropdown-destinos');
    $('.lista-actividades').removeClass( 'menu-animation-dropdown');
    $(this).find(".arrow-menu img").toggleClass('move-arrow-menu');
});

});
   </script>

 </head>

<body <?php body_class(); ?>>


<!--  H E A D E R -->
<nav class="content-menu-general header-move menu-colors">

  <a href="/home" class="content-logo-general logo-desapear">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-general-pajaros.png" alt="Pájaros Pintados">
  </a>

    <a href="/home" class="content-logo-slim logo-appear">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-slim.svg" alt="Pájaros Pintados">
  </a>

    
    <div class="content-icon-menu">
      <h1 class="menu-text">MENÚ</h1>
       <li id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </li>
        <div class="content-search-icon">
             <img class="search-white logo-desapear" src="<?php echo get_template_directory_uri(); ?>/images/search-icon.svg" />
             <img class="search-blue logo-appear" src="<?php echo get_template_directory_uri(); ?>/images/search-icon-blue.svg" />
        </div>
        <div class="search-content">
          <div class="content-search-close"> <img src="<?php echo get_template_directory_uri(); ?>/images/exit-search.svg" /></div>
           <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
            <input type="text" placeholder="Buscar..." value="<?php the_search_query(); ?>" name="s" id="s" />
          </form>
        </div>
   </div>


   <div class="content-menu-desplegable">
      <ul class="content-list-menu">
        <li class="item-menu-one"><a href="">INICIO</a></li>
        <li class="item-menu-one"><a href="">MAPA DE VIAJE</a></li>
        <li class="item-menu-two button-dropdown-actividades">ACTIVIDADES <span class="arrow-menu"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-menu.svg" alt=""></span></li>
        <div class="content-list-desplegable lista-actividades">
            <li><a target="_parent" href="/termas">Termas</a></li>
            <li><a target="_parent" href="/">Naturaleza y áreas protegidas</a></li>
            <li><a target="_parent" href="/">Aventura Náutica</a></li>
            <li><a target="_parent" href="/">Patrimonio y cultura</a></li>
            <li><a target="_parent" href="/">Pueblos con encanto</a></li>
            <li><a target="_parent" href="/">Sabores</a></li>
        </div>

        <li class="item-menu-two button-dropdown-destinos">DESTINOS <span class="arrow-menu"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-menu.svg    " alt=""></span></li>
        <div class="content-list-desplegable lista-destinos">
            <li><a target="_parent" href="/termas">Termas</a></li>
            <li><a target="_parent" href="/">Naturaleza y áreas protegidas</a></li>
            <li><a target="_parent" href="/">Aventura Náutica</a></li>
            <li><a target="_parent" href="/">Patrimonio y cultura</a></li>
            <li><a target="_parent" href="/">Pueblos con encanto</a></li>
            <li><a target="_parent" href="/">Sabores</a></li>
            <li><a target="_parent" href="/termas">Termas</a></li>
            <li><a target="_parent" href="/">Naturaleza y áreas protegidas</a></li>
            <li><a target="_parent" href="/">Aventura Náutica</a></li>
            <li><a target="_parent" href="/">Patrimonio y cultura</a></li>
            <li><a target="_parent" href="/">Pueblos con encanto</a></li>
            <li><a target="_parent" href="/">Sabores</a></li>
        </div>

        <li class="item-menu-one"><a href="">INSTITUCIONAL</a></li>

      </ul>
  </div>

</nav>

<!--  END header -->
