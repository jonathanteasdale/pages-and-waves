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
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'MJqGZA9R3I3BzOmBGxJQWnyTMUZzI88pE15dZHH9cxDanwDJrz/nRZtFr5NXuJc2d7ToA80NURT1mJKKT31klQ==');
define('SECURE_AUTH_KEY',  'l3+Uw1DDS45A9umfNbJP1k8c0QX0Cobv8gNKubScQ9Wozw7dgFScl4MPJcqilex6IWgH2tlE7iAf5CNrpkOWAw==');
define('LOGGED_IN_KEY',    'hIuz6N1A0SIsqLFllUCk2vvCMoGzSYe0wFvHCSM5DyUe+V6qmbLFSPo0kbutLvx7Wsxqd5SmjZIlzxyThFdfQg==');
define('NONCE_KEY',        '4J5sHHYnE/C8uWMHL11kGYr2bs0usw0RigbYkJtAUFpW7x+uuQgrZ3mGzMuiZkiMuTkdjP6jprTVDNWjEo+rKg==');
define('AUTH_SALT',        'Edwv5zuXa/hCHMIxdOGYemQ1Wd2DOM+OF2ELwrZ3nOKnzM5+ynz86Mrf/YxWk9X49M+9BmH8gmrYX5fRJP+5iQ==');
define('SECURE_AUTH_SALT', 'I9bKGHcBjt8tbjVcT/jcVJY0Wc9yVYS0AIIbG+GZ4A6mq2W8Kr3B9DUzlRBiO+XRUybVGSo21HJJ8vK9Fh9ZMQ==');
define('LOGGED_IN_SALT',   'AC/l+nL4O4Eqfe6jCfmrGq8pcISjFINYIz3UQGb1i1KJeSChoybyCsQOHvg5syzHsvhrcB4jvXxzXS40ND5GMQ==');
define('NONCE_SALT',       'R9KHArg5uumRwIhKPGOJRwDFF8j9/icJIJZ8tUwYDBIn7ptqVHMByGGG0LmZ/7g/YUbQ1QB5NDaxNqMfNwzWeQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
