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
define( 'DB_NAME', 'School' );

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
define( 'AUTH_KEY',         '1YBb&AH[v~@Q.LGGm,m[#?vNuY|xtH f]Xbx`NtOGU<$i:p}y>z).:b5rX0=2aXL' );
define( 'SECURE_AUTH_KEY',  'J|Y!V?,vmhh12+(hrh|iW2nQ~plTkNuva-7Eua9&qpZE m?Ltx/pR{>knz%A^n/g' );
define( 'LOGGED_IN_KEY',    'hu,wX=B_gn%ox(.5S1[S_J`FB0!j}8N:L*x]B[k11ND@&KJM@L)v=l;2{Ld0!yuT' );
define( 'NONCE_KEY',        'MUW94*1[}[:w1.0|Y)9xZl#Tl44A]sm3TyWus9(@A;hbSnU[9#w%B8z^yZ?*!|v!' );
define( 'AUTH_SALT',        'w).xqq>mzh||Fadt34~v/v]},.RS#z1{+?te8aYJdlM&an3q>kFeEJgjsj9S:4zN' );
define( 'SECURE_AUTH_SALT', '}9*|2%kvKjKL5Z5h${-{74G7vI{|fMMQ4#KpPqRRKj)( [c{W$nH-S%*![aBePME' );
define( 'LOGGED_IN_SALT',   'ZUyh[%9<l==15$R%EZ|:f@oqQjRNem%`BLmyWV8#)V:wep}V}|~-`ntBW#ZDb_Yi' );
define( 'NONCE_SALT',       '] &Ag[fm5vrrT3H6BT0*De7`@0lqd;Z(aE]/p& HB&vjy=~Sbo%|fP{+mzUHy*pi' );

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
