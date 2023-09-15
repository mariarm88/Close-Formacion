<?php

/**
 * 
 * Post type Profesores
 *
 * @author Mari Romero
 * @category Demo
 * @package Prueba
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

add_action( 'init', 'demo_cpt_profesor' );
/**
 * Register Post Type POST Profesores
 *
 * @return void
 **/
function demo_cpt_profesor() {
	$labels = array(
		'name'               => __( 'Profesores', 'Prueba' ),
		'singular_name'      => __( 'Profesor', 'Prueba' ),
		'add_new'            => __( 'Añadir nuevo Profesor', 'Prueba' ),
		'add_new_item'       => __( 'Añadir nuevo Profesor', 'Prueba' ),
		'edit_item'          => __( 'Editar Profesor', 'Prueba' ),
		'new_item'           => __( 'Nuevo Profesor', 'Prueba' ),
		'view_item'          => __( 'Ver Profesor', 'Prueba' ),
		'search_items'       => __( 'Buscar Profesores', 'Prueba' ),
		'not_found'          => __( 'No se han encontrado Profesores', 'Prueba' ),
		'not_found_in_trash' => __( 'No se han encontrado Profesores en la papelera', 'Prueba' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_rest'       => true, // Adds gutenberg support.
		'query_var'          => true,
		'rewrite'            => array(
			'slug'       => _x( 'profesores', 'slug', 'Prueba' ),
			'with_front' => false,
		),
		'has_archive'        => false,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/.
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
	);
	register_post_type( 'profesor', $args );
}




// Esta tasonomía es una categoría
add_action( 'init', 'demo_register_tax_departamento', 0 );
/**
 * Register Taxonomy Departamentos
 */
function demo_register_tax_departamento() {

	$labels = array(
		'name'          => __( 'Departamentos', 'Prueba' ),
		'singular_name' => __( 'Departamento', 'Prueba' ),
		'search_items'  => __( 'Buscar Departamento', 'Prueba' ),
		'all_items'     => __( 'Todos los Departamentos', 'Prueba' ),
		'edit_item'     => __( 'Editar Departamento', 'Prueba' ),
		'update_item'   => __( 'Actualizar Departamento', 'Prueba' ),
		'add_new_item'  => __( 'Añadir nuevo Departamento', 'Prueba' ),
		'new_item_name' => __( 'Añadir nuevo Departamento', 'Prueba' ),
	);


	//Aqui se pone de quien depende en ese caso es de profesor por lo tanto aparece como subcategoria 
	register_taxonomy(
		'departamento',
		array(
			'profesor',
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
				'slug' => _x( 'departamentos-formacion', 'slug', 'Prueba' ),
			),
		)
	);
}


// Esta tasonomía es una etiqueta este no se usa ya que no se selecciona sino que se puede incluir de forma manual. Es malo para el seo
add_action( 'init', 'demo_register_tax_horario', 0 );
/**
 * Register Taxonomy Horarios
 */
function demo_register_tax_horario() {

	$labels = array(
		'name'          => __( 'Horarios', 'Prueba' ),
		'singular_name' => __( 'Horario', 'Prueba' ),
		'search_items'  => __( 'Bucaar Horario', 'Prueba' ),
		'all_items'     => __( 'Todos Horarios', 'Prueba' ),
		'edit_item'     => __( 'Editar Horario', 'Prueba' ),
		'update_item'   => __( 'Actualizar Horario', 'Prueba' ),
		'add_new_item'  => __( 'Añadir nuevo Horario', 'Prueba' ),
		'new_item_name' => __( 'Añadir nuevo Horario', 'Prueba' ),
	);

	register_taxonomy(
		'horario',
		array(
			'profesor',
		),
		array(
			'hierarchical'       => false, /// hay que cambiar esto para que sea etiqueta
			'public'             => true,
			'publicly_queryable' => true,
			'labels'             => $labels,
			'show_ui'            => true,
			'show_in_rest'       => true,
			'show_admin_column'  => true,
			'query_var'          => true,
			'rewrite'            => array(
				'slug' => _x( 'horarios', 'slug', 'Prueba' ),
			),
		)
	);
}