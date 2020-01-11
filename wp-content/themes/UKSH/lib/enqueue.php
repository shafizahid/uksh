<?php 
function sz_enqueue_style() {
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css' );
    wp_register_style( 'font-awesome', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css' );
    wp_register_style( 'carousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css' );
    wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'carousel' );
    wp_enqueue_style( 'style' );

}

function sz_enqueue_scripts() {
    wp_register_script( 'jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js' ); 
    wp_register_script( 'jquery-migrate', get_template_directory_uri() . '/lib/jquery/jquery-migrate.min.js' );
    wp_register_script( 'bootstrap.bundle', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js' );
    wp_register_script( 'owl.carousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js' );
    // wp_register_script( 'main', get_template_directory_uri() . '/lib/wow/wow.min.js' );
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js' );
     
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-migrate' );
    wp_enqueue_script( 'bootstrap.bundle' );
    wp_enqueue_script( 'owl.carousel' );
    // wp_enqueue_script( 'wow' );
    wp_enqueue_script( 'main' );
}