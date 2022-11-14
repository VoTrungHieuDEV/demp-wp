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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nhahang' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'W|l-)O9C//:lte4&UTOv1Z#l>bBh(Nu+nC=p*!T&]KvC6D@hom)TWgCDK3Yi:T3:' );
define( 'SECURE_AUTH_KEY',  '0+@@|T}>^)0pUNS.r3ZhgLun3b Etg:E:6/^3udm(`i; irVy)C(7gHA%~>YcQf[' );
define( 'LOGGED_IN_KEY',    '<DTVN_VvNbq:w3E#vdxj*zjfqPK 2Cw:039>`7dz?w-Y?8!^[ !*GsW7fEcbpyK{' );
define( 'NONCE_KEY',        'lPU4AG|@#oeB`kA(9gY=;aVIXk3OsK3W<1,::RgL_/f[GM0<|_sefIh8<j1@)uLb' );
define( 'AUTH_SALT',        '!c2ke{]z%%f|,`:{K8 gzX3:u_7RL0fZc-NS~Li#+m^V[^=]$a$@) X`$z1xLJQI' );
define( 'SECURE_AUTH_SALT', 'H,GA*.i~tHm|/kd/t+i^hiUQxqfPCeNvYQC/hl!6W[!_qZ,[0aR.j{K;D<NO$z%<' );
define( 'LOGGED_IN_SALT',   '`pHGNeKUZ*?:Z[;Agm*%+t$d!8kXn7IC%&e|v_~Z6H<-o/i0$6 4}CZ|YvV>W|xh' );
define( 'NONCE_SALT',       'O3cdd,jjWs!Zx;^m~8nCD)Ztxju.Gb{|eSxpk}E/&l?8h>R+_()<b} G>ds8u;hd' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
