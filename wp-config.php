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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'events_ms_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y_rfP=}{89zlWk4t9}uHr!fnF5178$lj:-m^qR#oMq@NU4&-bFuI]0+Iz;]`;bdU' );
define( 'SECURE_AUTH_KEY',  'V41Eq !F*[~lged:Fgz+a3lp8oG9${5A:TUfiB+6oFTQ|cQYP?a$jNQ[V0FU|Jx>' );
define( 'LOGGED_IN_KEY',    ' o$FIHln%L[0#ul eESJ<K9tC8)*JWLFH?[X@+Zi-cf}23<ea8fNxhzS/!-WIFIn' );
define( 'NONCE_KEY',        'B d{@FqIab=8!BQTz(]5OsA@^FM]AbC|tVAVtX5I{$s9=piiT9aegUi(KM%&Pg4x' );
define( 'AUTH_SALT',        '7G`O.ziI>^+E?Uc`.b%VM45y/#M?@o2J+m(G9,y4,baRml+::xkc5V<@H53>Qt&+' );
define( 'SECURE_AUTH_SALT', 'Wa[p6_c5O5h0F/ NhfG/m^6$rfyz`|OCJ/J`@=g~?)twC)/%1f+g-b|or]`zQ/|%' );
define( 'LOGGED_IN_SALT',   'pA_F2i:hM}..{.yYirH[sPAIjpU~rwtYAN0tx?7giSjrEea]uWotQ?o&x:xxp_CT' );
define( 'NONCE_SALT',       '${yz&)/cQ}XG,}wR=CDp{zMsJAI=EYbC,x~pt!](&uTY|F&`LT,PMbh$,t@>/73P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
