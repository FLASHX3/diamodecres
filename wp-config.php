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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'diamodecare' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'v&wS?b5t))0eZ$n10wq*C0/vL/j#`%bdMjPBBk);}uD>>YBT`YaD<!d5F8].3fbh' );
define( 'SECURE_AUTH_KEY',  'US&{}Q@W83srXie19OXNNS}?Q:g4ef=n)LlL$l(#;9s`3`Voz-;Wa<q#:)8sAS6k' );
define( 'LOGGED_IN_KEY',    '^~zGC_mFoQ?^f~`f$XUq5@%OF=H(VLs[[NK}[WdMvi6Nb&HRA%W6DZQcg/3vBQ! ' );
define( 'NONCE_KEY',        '7Xcv{5v~tE-&0Ve0A[g-5]`&Lw@NPAY>j!UUcBcdK1ji=M3|KHkExb<u*F(nup_w' );
define( 'AUTH_SALT',        'AiE/kPrw;@:*n`fpgO!3q(.dj)qCeSa:IZd]A;VW0/.&GC~QK@Egxu9|v`u5`c^O' );
define( 'SECURE_AUTH_SALT', 'Ac)u~t2ypf }RB_AChw|M6;9wp<yw _<*7h,VY_UqPa`RBS9unUydup[m:nA[e1x' );
define( 'LOGGED_IN_SALT',   'S^ht}a.yG5A{uPBC3F.&:r0Ak[3[epyYOlKB#!:W)KfpK0WV?+C#O8o:Cz/|iS9O' );
define( 'NONCE_SALT',       'Ud$>l>{FG/<7{6YQv^|t^N!sU%V:1q`b#MH[LIZzD3i#de3sQ|FkX]jKIDX#A(!N' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
