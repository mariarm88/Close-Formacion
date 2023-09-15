<?php

/**
 * cmkadhc añade el header al php
 *
 * Ejemplo archivo tema
 *
 * @author Mari Romero
 * @category Demo
 * @package Prueba
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

/**
 * Summary.
 *
 * Description.
 *
 * @since 1.0.0
 */
class Demo_Theme
{

	/**
	 * Construct of Class
	 */
	public function __construct()
	{
		// Añado la acción para que me inserte el archivo js y css
		// Poner una prioridad alta para que la cargue al final, si se le pone una prioridad baja lo ignora
		add_action('wp_enqueue_scripts', array($this, 'demo_enqueue_styles'), 99);

		// Importante hacer esto, sino los remove_action fallarían si los pongo en el constructor
		add_action('get_header', array($this, 'demo_header_functions'));
	}

	/**
	 * # Functions
	 * ---------------------------------------------------------------------------------------------------- */

	// Función para insertar los archivos de js y css
	public function demo_enqueue_styles()
	{
		wp_enqueue_style(
			'demo-css',
			DECL_PLUGIN_URL . '/includes/theme/assets/style.css', // Ruta donde está el archivo, cogiendo la URL base definida en el demo.php
			false,
			DECL_VERSION // Versión del demo.php para que se actualice al mismo tiempo
		);

		wp_enqueue_script(
			'demo-js',
			DECL_PLUGIN_URL . '/includes/theme/assets/scripts.js', // Ruta donde está el archivo, cogiendo la URL base definida en el demo.php
			false,
			DECL_VERSION // Versión del demo.php para que se actualice al mismo tiempo
		);
	}

	// Función agregada en add_action en el constructor
	public function demo_header_functions()
	{
		if (is_single()) { /// Si es una landing y no tiene otras páginas heredadas
			// Eliminar acción, función y la prioridad
			remove_action('generate_before_header_content', 'generate_do_site_logo', 5);

			// Añadir una nueva acción y esa función se crea después
			 add_action('generate_before_footer', array($this, 'demo_before_footer'), 5);
		}
	}

	// Función agregada en add_action
	public function demo_before_footer()
	{
		echo '<div class="footer">';
		// echo 'hola';
		echo '<div>';
	}
}

new Demo_Theme();
