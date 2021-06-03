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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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

define('AUTH_KEY',         'CiNmh9#O:LOh;yw?vAH-oo+EjH;pg+-Qs]&[j@$HCvVxay&U8$,LOiVS2~m9l2xH');
define('SECURE_AUTH_KEY',  '3rU$#6m?H]-6`:v+rDNuumR!(^hWq#1.Ke>#wBG#7j&]~<Gt%RE@,9K/(/r,8RD ');
define('LOGGED_IN_KEY',    'r`C3:20k%}QJH$}7XW]l`eV$$T7dxUU$XaS3)n~ve)`!1f(+rczoIf~Pr3`}l+u=');
define('NONCE_KEY',        'f5.!Z [.R1`ZH> $~:Rk6ZY*mwWjH*!`ofa4[8PIm?nrHdH+GKs[a;8nwFj-)aj]');
define('AUTH_SALT',        'DmXNPTUNcyg!dT)95F<f0uJ[H;T8{.0WqLIyf|R$r+x^;YB-J;R {g_+hgT@P;lt');
define('SECURE_AUTH_SALT', 'G+?1+kWcK+`IyhJRfZed<n%:v;<7k/-#(44nc[1K^,394.Eb w-IHj~Prn :  N!');
define('LOGGED_IN_SALT',   'uM.@Sz))?Mv!DC&o5-CcU?v8*]L%c[OGTd:BBJoG L/sU77)YMnVO;nVEiTTn?wH');
define('NONCE_SALT',       'x<z0XIN/4FNHMK#U;Xg+vZ)dQfnc6_Ne`PuUO+nu&YORa2R%l#a%kLYq)^:fF y>');

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
