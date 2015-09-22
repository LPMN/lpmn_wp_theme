<?php
  if ( function_exists( 'add_theme_support' ) ):
    add_theme_support( 'menus' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
  endif;

  if ( function_exists('register_sidebars') ):
    register_sidebar(array(
      'name'=>'Sidebar',
      'before_title'=>'<h4>',
      'after_title'=>'</h4>'
    ));
  endif;

  add_editor_style( 'editor-style.css' );

  function my_init_method() {
    if (is_admin() == false ):
      wp_deregister_script( 'jquery' );
      wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
      wp_enqueue_script( 'jquery' );	  wp_register_script( 'jquery_ui' , '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');      	  wp_enqueue_script( 'jquery_ui' );	  
      wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'));
      wp_enqueue_script( 'bootstrap' );
      wp_register_script( 'global', get_template_directory_uri() . '/js/global.js', array('jquery'));
      wp_enqueue_script( 'global' );
    endif;
  }    
  add_action('init', 'my_init_method');

  // create sidebar for the calendar widget
  register_sidebar(array(
    'name' => __( 'Upcoming Events' ),
    'id' => 'events-sidebar',
    'description' => __( 'This only holds the events widget' ),
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));

  register_sidebar(array(
    'name' => __( 'Page' ),
    'id' => 'page-sidebar',
    'description' => __( 'Pages only sidebar.' ),
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));

  if (is_admin()) {
      wp_register_style( 'chosen-css', get_template_directory_uri() . '/chosen/chosen.css');
      wp_enqueue_style( 'chosen-css' );
      wp_register_script( 'chosen', get_template_directory_uri() . '/chosen/chosen.jquery.min.js', array('jquery'));
      wp_enqueue_script( 'chosen' );
      wp_register_script( 'admin-global', get_template_directory_uri() . '/js/admin-global.js', array('jquery'));
      wp_enqueue_script( 'admin-global' );
  }

  function register_donate_form ($form_group) {
    global $hidden_form_group;
    $hidden_form_group = $form_group;
    include_once('inc/join-donate-form.php');
  }
  

?>