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

add_action( 'init', 'prueba_cpt_combustible' );
/**
 * Register Post Type POST Combustibles
 *
 * @return void
 **/
function prueba_cpt_combustible() {
	$labels = array(
		'name'               => __( 'Combustibles', 'Prueba' ),
		'singular_name'      => __( 'Combustible', 'Prueba' ),
		'add_new'            => __( 'Añadir nuevo Combustible', 'Prueba' ),
		'add_new_item'       => __( 'Añadir nuevo Combustible', 'Prueba' ),
		'edit_item'          => __( 'Editar Combustible', 'Prueba' ),
		'new_item'           => __( 'Nuevo Combustible', 'Prueba' ),
		'view_item'          => __( 'Ver Combustible', 'Prueba' ),
		'search_items'       => __( 'Buscar Combustibles', 'Prueba' ),
		'not_found'          => __( 'No se han encontrado Combustibles', 'Prueba' ),
		'not_found_in_trash' => __( 'No se han encontrado Combustibles en la papelera', 'Prueba' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_rest'       => true, // Adds gutenberg support.
		'query_var'          => true,
		'rewrite'            => array(
			'slug'       => _x( 'servicios-combustibles', 'slug', 'Prueba' ),
			'with_front' => false,
		),
		'has_archive'        => false,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-category', // https://developer.wordpress.org/resource/dashicons/.
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
	);
	register_post_type( 'combustible', $args );
}


add_action( 'init', 'prueba_register_tax_vehiculo', 0 );
/**
 * Register Taxonomy Vehiculos
 */
function prueba_register_tax_vehiculo() {

	$labels = array(
		'name'          => __( 'Vehiculos', 'prueba' ),
		'singular_name' => __( 'Vehiculo', 'prueba' ),
		'search_items'  => __( 'Buscar Vehiculo', 'prueba' ),
		'all_items'     => __( 'Totos los  Vehiculos', 'prueba' ),
		'edit_item'     => __( 'Editar Vehiculo', 'prueba' ),
		'update_item'   => __( 'Actualizar Vehiculo', 'prueba' ),
		'add_new_item'  => __( 'Añadir nuevo Vehiculo', 'prueba' ),
		'new_item_name' => __( 'Añadir nuevo Vehiculo', 'prueba' ),
	);

	register_taxonomy(
		'vehiculo',
		array(
			'combustible',
		),
		array(
			'hierarchical'       => true,
			'public'             => true,
			'publicly_queryable' => true,
			'labels'             => $labels,
			'show_ui'            => true,
			'show_in_rest'       => true,
			'show_admin_column'  => true,
			'query_var'          => true,
			'rewrite'            => array(
				'slug' => _x( 'tipo-vehiculo', 'slug', 'prueba' ),
			),
		)
	);
}
