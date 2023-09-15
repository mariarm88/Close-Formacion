<?php

/**
 * 
 * Post type Centros
 *
 * @author Mari Romero
 * @category Demo
 * @package Prueba
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

add_action( 'init', 'demo_cpt_centro' );
/**
 * Register Post Type POST Centros
 *
 * @return void
 **/
function demo_cpt_centro() {
	$labels = array(
		'name'               => __( 'Centros', 'Prueba' ),
		'singular_name'      => __( 'Centros', 'Prueba' ),
		'add_new'            => __( 'Añadir nuevo Centros', 'Prueba' ),
		'add_new_item'       => __( 'Añadir nuevo Centros', 'Prueba' ),
		'edit_item'          => __( 'Editar Centros', 'Prueba' ),
		'new_item'           => __( 'Nuevo Centros', 'Prueba' ),
		'view_item'          => __( 'Ver Centros', 'Prueba' ),
		'search_items'       => __( 'Buscar Centros', 'Prueba' ),
		'not_found'          => __( 'No se han encontrado Centros', 'Prueba' ),
		'not_found_in_trash' => __( 'No se han encontrado Centros en la papelera', 'Prueba' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_rest'       => true, // Adds gutenberg support.
		'query_var'          => true,
		'rewrite'            => array(
			'slug'       => _x( 'centros-formacion', 'slug', 'Prueba' ),
			'with_front' => false,
		),
		'has_archive'        => false,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-admin-multisite', // https://developer.wordpress.org/resource/dashicons/.
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
	);
	register_post_type( 'centro', $args );
}
