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
define( 'DB_NAME', getenv('DB_NAME') );		// The name of the database for WordPress
define( 'DB_USER', getenv('DB_USER') ); 	// MySQL database username
define( 'DB_PASSWORD', getenv('DB_PASSWORD') ); 	// MySQL database password
define( 'DB_HOST', getenv('DB_HOST') ); 	// MySQL hostname

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'CkqzLrBHqa}kQ*D|2^cR/>BRPY6/A--izC@vrHO4GuqL0Q/6H:k2V.=I{4P%alr2');
define('SECURE_AUTH_KEY',  '?!-c-m!f`mL14/e6yz7oxyn{~-(^xAkA?qlB[Mf8R+%n|k{-Ag.pTekYD/};]!#8');
define('LOGGED_IN_KEY',    'SA,sxP&,*O*KlVc^bA63YIdYSyn)TbfBJpA7x$]@PSmCf}VR7::hoR&l.:~F{u~D');
define('NONCE_KEY',        '8IwI]xtJ`=0*05)ch;?[r18Sj9wtDN5]n&[A8e@Bi+)wgUo]UVorm<q#u,H-]*uf');
define('AUTH_SALT',        'WcC9f76*uQ#P(UA[eQ0g{J!y^eQb,8VK7_]o~v__:I+f_`4h-QESaA)!U?G<2>9x');
define('SECURE_AUTH_SALT', 'z,s2[/1H!Yiltp+|^&9bm:nm1FaE2(eWA -$Ng2em`NHIY6~F0aP-sMr@{i~D`24');
define('LOGGED_IN_SALT',   'IGDums+-avLD,6U<)PYJ@5BKRBwd;@^B#T|zU7!#(p*MY)p82Mp/,wR33^t$|4T4');
define('NONCE_SALT',       'W_;ayOw-6dyZ6s}BP#4:nUE%e;D,,% BK[T-dBxKR_a&(b-V#9CI;Bo=gWUbCt0)');

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

/**
 * configure HTTPS
 */
define('FORCE_SSL_ADMIN', true);
define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST']);
$_SERVER['HTTPS']       = 'on';
$_SERVER['SERVER_PORT'] = 443;

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
