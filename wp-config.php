<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fran' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'ANPfPED9TN5DYJi8TPjJKvhvPB3TrxQvLok5OYkXcbGHcxrygH7Oe7Aruefucac1' );
define( 'SECURE_AUTH_KEY',  'FL6TbacXg8hdpbCajJDta3uzc6udoRkbSzQbwdLnFvJx3VqOauVY8sbb78rMmq0T' );
define( 'LOGGED_IN_KEY',    'rpVPyekG7TyQ0sAZdzrv8ON5Td8LOa9BRTk0h4hB8fzDIEDRGMfoSaSngGrbFsfu' );
define( 'NONCE_KEY',        'y2YebRPIAesCwVkWUxSJBdviiNvGhXGUCGpOWsgCPRCjysJBB7k0ikz8q57lJ7jH' );
define( 'AUTH_SALT',        'N8WewCBAeQCaOuO8ztZjK7EEvYRUujudNiWvDoFEkYgZuE6sb9nGJuBDg8nAkYdJ' );
define( 'SECURE_AUTH_SALT', '7TAmFG5TYLzVDtKx0fbDcKYH3pLhC4EXNRTe7ctVOMXOfncxERJaZm2QA2UpiiS1' );
define( 'LOGGED_IN_SALT',   'MBklBvEIlzePI7vs9S3npRm2Au3CbeOqLgh0khAEkTUu1iP5mMRmcBGkR8RJvhbP' );
define( 'NONCE_SALT',       'CtMGwyrA1ERHDOqtnyEZlmGCXfdQ2rjvM7GFx4FYRMs2Q2QbLXfVYENymnVZ0TpN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
