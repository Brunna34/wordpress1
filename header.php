<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT8">
        <meta name="viewport" content="width=device-width, initial-scaled=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <title><?php wp_title();?></title>
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Special+Elite&display=swap" rel="stylesheet">
       
        <?php wp_head(); ?>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/images"></script>
    </head>
    <body>
    
  <div class="navbar-fixed">  
  <nav class="grey darken-2">
    <div class="nav-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/barber.png" class="brand-logo">
     <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
     <ul class="left hide-on-med-and-down">
     <li><a href="<?php echo site_url();?>" class="nome-empresa"  title="<?php bloginfo(''); ?>"> Barbearia Brothers</a> </li>
    </ul>
     <ul class="right hide-on-med-and-down">
        <li><a href="#inicio" class="navbar">Início</a></li>
        <li><a href="#quem-somos" class="navbar">Quem somos</a></li>
        <li><a href="#port" class="navbar">Portfólio</a></li>
        <li><a href="#serviços" class="navbar">Serviços</a></li>
        <li><a href="#contato" class="navbar">Contato</a></li>
      </ul>
    </div>
  </nav>
  </div>
  <div>
    <ul class="sidenav" id="mobile-demo">
    <li><a href="#inicio">Ínicio</a></li>
    <li><a href="#quem-somos">Quem somos</a></li>
    <li><a href="#port">Portfólio</a></li>
    <li><a href="#serviços">Serviços</a></li>
    <li><a href="#contato">Contato</a></li>
  </ul>
</div> 
<main id="inicio">
        <div id="index-banner" class="parallax-container" >
          <div class="section no-pad-bot">
            <div class="container">
              <br><br>
              <h1 class="header center grey-text text-lighten-5">Barbearia Brothers</h1>
              <div class="row center">
                <h5 class="header col s12 light grey-text text-lighten-5">A modern responsive front-end framework based on Material Design</h5>
              </div>
              <div class="row center">
                <a href="#" id="download-button" class="btn-large waves-effect waves-light grey darken-4 ">Agende Conosco</a>
              </div>
              <br><br>
      
            </div>
          </div>
          <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/333.jpg" alt="Unsplashed background img 1"></div>
        </div>
        </div>
</main>


