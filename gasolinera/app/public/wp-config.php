<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}


define('AUTH_KEY',         '85Wx5agEH3f+jkLwYkIC4ibQIA+PqseRG4sKIESc7qWU9VszdENmkqhSrEUKucw6+1eAIZ5C7sju2BodZ7QhRA==');
define('SECURE_AUTH_KEY',  'vCTECkNmxD50Tk7EuiW40k6B5kQda5/m6ZmOcg0Vq/ANqx5yf6JxlaUNjRIjKuLicg6DGzG6gduOzo8ws9QX+w==');
define('LOGGED_IN_KEY',    'WE9to//GhxVXi9nmIuwQS14EZltob6sYekhrB4T4wzYcXdXTs/BD92ECi7pTm7skguS5Ok5ukMiSOPyI/tp6ag==');
define('NONCE_KEY',        'fnpweR6rIT9Vx3wx0c8kbocq9ABNKpEvtwnCFFpZvlE+x3vTJX3MqsmoIdVaeTsVTt4uboWRA6xh3HD5JNeSfA==');
define('AUTH_SALT',        'zZ3MSLefeMZJCpVyr8ry2Xbhf8IKKapmIlZI52wasS1hiMrHImonw7tMGvMLfg22YHYhLyP1aiNS+9cw1/Qwrg==');
define('SECURE_AUTH_SALT', 'QP2jqHD52J5ngfTZlvHQypVRJzaxPBgqUlX+T0tX4wqzpouHmDARjTwf+0buCO1AzOwbp7JIRw1ZRk1kC0HLqQ==');
define('LOGGED_IN_SALT',   '3xfNwwGci+EBcK7F+HUVMy1YKVj37mDFpXl8CvaCoSu8ARIUBBWqalLQ/ZwuCJej9TIEF3T68iIo9tNo2XSp4Q==');
define('NONCE_SALT',       'cYSD9DtT73fgE2t8dcI2qaU3koQhhhoYroxojhYw70yRCIbpD06qUL5CNJMiWzq2+o0FxH8WpZ92D8l9RKFg/w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
