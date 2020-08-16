<?php

function init_template() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');

  // menu
  register_nav_menus(
    array(
      'top_menu' => 'Menú Principal'
    )
  );
}

add_action('after_setup_theme', 'init_template' );

function assets(){
  // manejo de librería
  wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css','','4.5.2','all');
  wp_register_style('montserrat','https://fonts.googleapis.com/css2?family=Montserrat&display=swap','','1.0','all');

  wp_enqueue_style('estilos',get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0','all');

  // agregando archivos js
  wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', '', '1.16.0', true );

  wp_enqueue_script('bootstraps', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery', 'popper'), '4.5.2', true );
  wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);
}

add_action('wp_enqueue_scripts','assets');
