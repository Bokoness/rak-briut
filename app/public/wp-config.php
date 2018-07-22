<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L1UXSfIz6mCZ3zXERaBM0AObp/tXKfriPoi97w8jZ1NY18GuLtZs0hFCh6/lzl1arB5AIaOg7HtH6otdOYuPbw==');
define('SECURE_AUTH_KEY',  'AAawH416v6tkcdXDE3FIXxNHk/U/9YABGZuvp26+ceZ8IMyovDqLxz2VVns6rMMt8nBNTblmzh6JfRMylO/L5g==');
define('LOGGED_IN_KEY',    'uJ2YxZoNkthgrc2wOzkGK6NQxrM/wzGOE85p1p/a/7603q5EE7nDuHuGIqtaXRiHuE8zOXbA2LRZB4JKhPIsLA==');
define('NONCE_KEY',        'SMJO5YKEflq2BhEcAn7CNimtAw7olHUeGjHu2Zak24qC2Ns557F5iyaRXLe3RhbDIVyYmh3RM5go3oXtED0FBw==');
define('AUTH_SALT',        '3DSm2BnMSLBl5mLPEL1NBNaqjqoNrNzR0smAUPjk4jyX99Nu2Lgk4hWJ/PTNs8r5B9Dmujf2+qZPj1+rQ97qKQ==');
define('SECURE_AUTH_SALT', 'Vb/Tha46fl7ZwNwF1s0SpjJVmewYYiyIE3CRL2ZGnkjb3RqizjX6iBM49HZ6pJ8Oobz35hhd0QbziR1MklXtIA==');
define('LOGGED_IN_SALT',   'yt1Bt/tm6gC3H7CX2S6lMQnOlvYJG6+QqgKTGxuyY6eSUPK7Gt72ohZ+IuQRPVTpJk/cELckAepQM5ceBYD/gQ==');
define('NONCE_SALT',       'ugUhLC8gWKHgJ+np9XeIzT4NVYDQw3u4La5/Ub5aPQmPf6TrUFhAxaVnSNyjE6QTkj2wkhz8Sotnpykj9fHcWQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
