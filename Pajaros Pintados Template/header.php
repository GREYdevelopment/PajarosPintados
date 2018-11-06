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
  <!-- End Jquery -->

  <!-- Llamado Estilos -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- End estilos -->


   <?php wp_head(); ?>


   <script>
    $(document).ready(function(){

$('#nav-icon3').click(function(){
    $('#nav-icon3').toggleClass('open');
    $('#nav-icon3').toggleClass('menu-bg');
    $('.content-menu-desplegable').toggleClass( 'menu-animation');
    $('.content-list-menu').toggleClass( 'list-general-animation');

    $('.lista-actividades').removeClass( 'menu-animation-dropdown');
    $('.lista-destinos').removeClass( 'menu-animation-dropdown-destinos');
});

  $('.menu-text').click(function(){
    $('#nav-icon3').toggleClass('open');
    $('#nav-icon3').toggleClass('menu-bg');
    $('.content-menu-desplegable').toggleClass( 'menu-animation');
    $('.content-list-menu').toggleClass( 'list-general-animation');
});

$('.button-dropdown-actividades').click(function(){
    $('.lista-actividades').toggleClass( 'menu-animation-dropdown');
    $('.lista-destinos').removeClass( 'menu-animation-dropdown-destinos');
});

$('.button-dropdown-destinos').click(function(){
    $('.lista-destinos').toggleClass( 'menu-animation-dropdown-destinos');
    $('.lista-actividades').removeClass( 'menu-animation-dropdown');
});



});
   </script>

 </head>

<body <?php body_class(); ?>>


<!--  H E A D E R -->
<nav class="content-menu-general">

  <a href="/home" class="content-logo-general">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-general.png" alt="Pájaros Pintados">
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
             <img src="<?php echo get_template_directory_uri(); ?>/images/search-button.png" />
        </div>
   </div>


   <div class="content-menu-desplegable">
      <ul class="content-list-menu">
        <li class="item-menu-one"><a href="">INICIO</a></li>
        <li class="item-menu-one"><a href="">MAPA DE VIAJE</a></li>
        <li class="item-menu-two button-dropdown-actividades">ACTIVIDADES <span class="caret"></span></li>
        <div class="content-list-desplegable lista-actividades">
            <li><a target="_parent" href="/termas">Termas</a></li>
            <li><a target="_parent" href="/">Naturaleza y áreas protegidas</a></li>
            <li><a target="_parent" href="/">Aventura Náutica</a></li>
            <li><a target="_parent" href="/">Patrimonio y cultura</a></li>
            <li><a target="_parent" href="/">Pueblos con encanto</a></li>
            <li><a target="_parent" href="/">Sabores</a></li>
        </div>

        <li class="item-menu-two button-dropdown-destinos">DESTINOS <span class="caret"></span></li>
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

      </ul>
  </div>

</nav>

<!--  END header -->




