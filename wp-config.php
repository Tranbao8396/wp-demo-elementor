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
define( 'DB_NAME', 'wp-demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '>+,YQ=gj,T+diYyL4t+Z:Hqc2/GqVP[cJGy)Vs2tUug%/4}W5Q$G#vL%1iNdAw8|');
define('SECURE_AUTH_KEY',  '<U@u0^#!#u5y`~V9:DL#&w21X>M}os(_]D4i82J?$Jn#@ixS%:WY_oIG~~W5V_h*');
define('LOGGED_IN_KEY',    'u|sP%G,(_@c-,OurGTIfs.Qt Q-HQ~+z-9n2Dr2O6-s-$>r:QZhsF<U6^nXHregd');
define('NONCE_KEY',        '5T/K/uVC~246Ye&<} l8[KcAqaK~urcxW_^`D0i1eA|z4_/(g3s;9$6xX0+k-D[n');
define('AUTH_SALT',        '&}&/=D_9V{8v|0@|9Pnt4bE`Y5K!6(QAk*fXZ@=V`*X>zNYaq=k[M^#Kw[/A!{/s');
define('SECURE_AUTH_SALT', 'E<zCAwS7-;DE[T{}e5nqK}k2NvJ!0RA^p6cn_0HQ|Lpk-Nju|z+JR>LVwKra5w-C');
define('LOGGED_IN_SALT',   '+Ivc5${M]6zo++FcQULA}!3l n,}{R/M;;p+J]vlWR./R/FJ]<Y5;t,JR9Hi]*nz');
define('NONCE_SALT',       ';yHd6:ej]F-qzOh,B*~+ ~4#4P0e+%Y.f6]d6QCFk#+p+7pSgazh/cV5;KN?}O#u');

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
