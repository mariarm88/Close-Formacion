<?php

/**
 * 
 * Post type Cursos
 *
 * @author Mari Romero
 * @category Demo
 * @package Prueba
 * @version 1.0.0
 */

defined('ABSPATH') || exit;


///post type en singular
add_action( 'init', 'demo_cpt_curso' );
/**
 * Register Post Type PAGE Name CPT
 *
 * @return void
 **/


function demo_cpt_curso() {
	$labels = array(
		'name'               => __( 'Cursos', 'Prueba' ),
		'singular_name'      => __( 'Curso', 'Prueba' ),
		'add_new'            => __( 'Añadir nuevo Curso', 'Prueba' ),
		'add_new_item'       => __(	'Añadir nuevo Curso', 'Prueba' ),
		'edit_item'          => __( 'Editar Curso', 'Prueba' ),
		'new_item'           => __( 'Nuevo Curso', 'Prueba' ),
		'view_item'          => __( 'Ver Curso', 'Prueba' ),
		'search_items'       => __( 'Buscar Name', 'Prueba' ),
		'not_found'          => __( 'No se ha encontrado', 'Prueba' ),
		'not_found_in_trash' => __( 'No se ha encontrado en la papelera ', 'Prueba' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_in_rest'       => true, // Adds gutenberg support.
		'show_ui'            => true,
		'query_var'          => true,
		'rewrite'            => array(
			'slug'       => _x( 'cursos-formacion', 'slug', 'Prueba' ),
			'with_front' => false,
		),
		'has_archive'        => false,
		'capability_type'    => 'page',
		'hierarchical'       => true,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-welcome-learn-more', // https://developer.wordpress.org/resource/dashicons/.
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions' ),
	);

	///post type en singular
	register_post_type( 'curso', $args );
}