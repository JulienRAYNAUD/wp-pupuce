<?php

define('PUPUCE_VERSION', '1.0.0');

//Chargement dans le front-end
function pupuce_scripts(){

//Chargement des styles
  wp_enqueue_style('pupuce_bootstrap' , get_template_directory_uri(). '/css/bootstrap.min.css', array(), PUPUCE_VERSION, 'all');
	wp_enqueue_style('pupuce_custom' , get_template_directory_uri(). '/style.css', array('pupuce_bootstrap'), PUPUCE_VERSION, 'all');

//Chargement des scripts
  wp_enqueue_script('pupuce_script' , get_template_directory_uri(). '/js/pupuce.js', array('jquery'), PUPUCE_VERSION, true);

}

add_action('wp_enqueue_scripts', 'pupuce_scripts');

//Chargement dans l'admin
function pupuce_admin_scripts(){

//Chargement des styles
  wp_enqueue_style('pupuce_bootstrap-adm' , get_template_directory_uri(). '/css/bootstrap.min.css', array(), PUPUCE_VERSION );

}

add_action('admin_init', 'pupuce_admin_scripts');
