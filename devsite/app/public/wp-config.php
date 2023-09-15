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


define('AUTH_KEY',         'wIXnjFjv6aKX7DBG5uRqYpu6rmoill7L5c1DoD9wy8cD+H+bdy1DFtAGaYQhLhaWHvNGeAc1rTJUoP7daqoWAA==');
define('SECURE_AUTH_KEY',  'ZzFKPykMi2v9i2TgNqrRCkEk6Y5vwOe6fjVl7jMGZ1Q4PSPSJ3n/hxWTYNc+GHnXYkhIDLJZGY9QsNJGPZ0kmA==');
define('LOGGED_IN_KEY',    'XKidg7PlynOW1m128Pgb7YyKqQ7cBbbPPXpBn5BNIa7SBRvNRyAzbFUTHhv+VzgHupxtDAgTr5TLy7DQzg1eJg==');
define('NONCE_KEY',        'd7lBxI59wwRPS1KM2nuT2r67G9jKZhlpPUC93lDYnXq8w1BUAmHBGVF5B1/oPg2ssOYmBbEKU7sjvriPBkLUlA==');
define('AUTH_SALT',        '0z7C0bIRt+yCVIA70EJcT0gMnMiBXMxJO/8CYfFYqBoG6Hx/Rr4rv0UrEAHw0R6xBspPgwG4CT0mGxGe9O7Ecg==');
define('SECURE_AUTH_SALT', 'IHTbUcjTc+dhtzKHaLLJGFzKb8C1YB3HbO44HsHsyhIw1qhoLsDMpd82rkbSKLpfFhalc5DJkZfzhqgpJrRxww==');
define('LOGGED_IN_SALT',   'OuZAN8adLxU9QO/tbtNaiDcwyrUVLL2u/mXnhg3hy0ahWm9zmNopyR/JOdv1+1MeTDXLaZnFYBeNzggqFHhXTA==');
define('NONCE_SALT',       'z4LkEzwrSXg2PDXVZrGum4cmL8qgZO7lA3PFZCafaYJHEdw3WjGnl0MwXQdxmz1OqDg6ieAksgwPviiufwYyBQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
