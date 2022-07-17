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
define( 'DB_NAME', 'petshop' );

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
define( 'AUTH_KEY',         'D=pZ@S0P1[#XhT2?c/$][*}<e!@->]Zhyaf+y[8;tL75~0=c#{=cAFFR}u^ixe||' );
define( 'SECURE_AUTH_KEY',  'o73Vj:la@STqhImR!!$<Z= ypI#PZ+^R8]:2|!J;nsxKjk[h X1,*{H@T;l~:E+Q' );
define( 'LOGGED_IN_KEY',    '?wOe,~S-#X)~.myC7!a7>,74R+E:Xtr:f%l~[)ZM%Ac-QRN2|K%JR_.Q{ZkeDQs:' );
define( 'NONCE_KEY',        ';_<:7.966ddMk;M(E;*1ES m+U*SzCes$$gL=!9 ;RXL D1DleoZ0_t4=FwqC/,9' );
define( 'AUTH_SALT',        'H*aA./saly.BGJr_V6p3n09|>my22zE;:H)g=NgK}I4$>Eq,h_ B=RcUlchlIS`.' );
define( 'SECURE_AUTH_SALT', 'L>I1s0V%P@_UoKf?A)D51$#wg/b_g8c:eu qW]mGUa&,6hxohU@{N1bC!x&kI^^P' );
define( 'LOGGED_IN_SALT',   'D [|{2R)(8vCroM<JGy*}ku$v]*=D*kU3Sqd-#y&!3Yv,MV9`~N/fxbeC%INs#z7' );
define( 'NONCE_SALT',       'P`-^qh0j&*}hg.9/?ie,YaF$Yr}Lc&1qnP%nq0FoQL,5a#iywT(g-QUrTzf5Kr?_' );

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
