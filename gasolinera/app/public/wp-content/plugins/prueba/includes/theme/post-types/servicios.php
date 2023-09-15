<?php

/**
 * 
 * Post type Servicios
 *
 * @author Mari Romero
 * @category Prueba
 * @package Prueba
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

add_action( 'init', 'prueba_cpt_servicio' );
/**
 * Register Post Type PAGE Servicios
 *
 * @return void
 **/
function prueba_cpt_servicio() {
	$labels = array(
		'name'               => __( 'Servicios', 'Prueba' ),
		'singular_name'      => __( 'Servicio', 'Prueba' ),
		'add_new'            => __( 'Añadir nuevo Servicio', 'Prueba' ),
		'add_new_item'       => __( 'Añadir nuevo Servicio', 'Prueba' ),
		'edit_item'          => __( 'Editar Servicio', 'Prueba' ),
		'new_item'           => __( 'Nuevo Servicio', 'Prueba' ),
		'view_item'          => __( 'Ver Servicio', 'Prueba' ),
		'search_items'       => __( 'Buscar Servicios', 'Prueba' ),
		'not_found'          => __( 'No se han encontrado Servicios', 'Prueba' ),
		'not_found_in_trash' => __( 'No se han encontrado Servicios en la papelera ', 'Prueba' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_in_rest'       => true, // Adds gutenberg support.
		'show_ui'            => true,
		'query_var'          => true,
		'rewrite'            => array(
			'slug'       => _x( 'servicios', 'slug', 'Prueba' ),
			'with_front' => false,
		),
		'has_archive'        => false,
		'capability_type'    => 'page',
		'hierarchical'       => true,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-admin-multisite', // https://developer.wordpress.org/resource/dashicons/.
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions' ),
	);
	register_post_type( 'servicio', $args );
}