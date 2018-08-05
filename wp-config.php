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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jaradeh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Om&Vw_7nQI)+413*o/5;bm+MN< pITQIO-8pw[RQm(^zIz1DKLXO!vRGp$>JhMMv');
define('SECURE_AUTH_KEY',  'YWSh?R,Gx+1uG)vD3x! 0!cPtL*7v#X[2ek$#$uy,s6z@wLof@rTKGn},=6lqq=Z');
define('LOGGED_IN_KEY',    '!EWjj`G?FUQ3`5LYlW4@EcJTSU!y.5&+awC}vk:sgzL!QJPp`nZJ;zz-h7tG,L*y');
define('NONCE_KEY',        ';CoF3w-t>G;qR.]9l=!+`!8@.)doJ&xhmoLRm40M(zXCWL#)_]aKw5Nc/o7s-tDL');
define('AUTH_SALT',        ' ~_?WZ$TVjy>#!`,0Y,TKs</} VU.o?LS`l?~+l9& 1;/.~f5sZ5U,lEa96Z Co8');
define('SECURE_AUTH_SALT', '_n@VH4TJ(csE65Aa4B{HUUNMGK+I^QyP:CPuB@%u(:VGmuc&j.B._0hW{jPTbO!z');
define('LOGGED_IN_SALT',   'WQWOGS*X?>5lKN?M3k0G(k5j^7{>R,zX6=882.ThmcP[Gq/4b{M;Cm?VR#V`mJU>');
define('NONCE_SALT',       'Nlyv]rHA HNX&L^2,P$U4v^+$a4d7}2wapZsJZ3B94M5?h7W`1_4D)d{g-L)ui4?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
