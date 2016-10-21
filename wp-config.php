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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3e|Vr@NVb,>9!f^{-IfqTEs@Twb:&eaN_@t9lo$m=*? &b>p])kG<uYH6k>s,riK');
define('SECURE_AUTH_KEY',  'F^=C2rpuKAKi^pm6Sr7=oH(ZuUvr(,;3*py+h/*h;%34]RWxrg |]ji4dhP1GL/5');
define('LOGGED_IN_KEY',    '?KyxSv=%T?=VDHXJ/9]#>6fM*(+0HlXvd|/<XC|0`ZDJdhs%>i[yh$8>Pyv{*B;f');
define('NONCE_KEY',        'MGG6C(]V}27!2z(V037gBdeEY XeF.&@M8r@ 47`Yku.]yax,n6U(ov@1uuKwi(}');
define('AUTH_SALT',        'f1o6N5pXC5M2^dfXyD;M#o<@1,=moqbn1,KEDS!Av[mDY.43<(T78@=b}>Y{4P]}');
define('SECURE_AUTH_SALT', 'oFMFB.Eu:?LcW0$B5/iX7X6,$,/gB&,`|ho$uG}F0!UA_#tkXWH(#cIkTPP#BqAI');
define('LOGGED_IN_SALT',   '-@2lD,YpS==:=SI`s,[6WtB52}}N*.PK7w5o bMC--PI[7)L[y<+T-&<i/<-SZUx');
define('NONCE_SALT',       '=P{kcMTQIJY>sOrTX&Bm=Bx]!t59+i%U<4-owf+pYFdnGjM(4y8#=,7yUTGkDKD)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
