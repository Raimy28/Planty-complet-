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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'TjDn.}Yg2DiF,M-hqdR5Il>^`m#1:v.azJA;T_HzQ!-5+c_U7T.2}NX54$cH=/FS' );
define( 'SECURE_AUTH_KEY',   'E_uC6R`@gO.r:<%7oQeLh:{uJXq2!kO4!]t;i4bD-6h>3o_<a|=J}IK%@K: hYQf' );
define( 'LOGGED_IN_KEY',     'r)rG65Jvqwmu#A-}0,d2M-d0;o%@R2BpNUSnDBgY7zu>Qt.`3|6S1~K{t__u[{>#' );
define( 'NONCE_KEY',         '3jB6#OVbRB(SM<[oe=%}v* CIUKiC;Rt]+/ru1q-P!v#F8cWKB&D01~$-yCS$G;h' );
define( 'AUTH_SALT',         'T(m~4rUJ z69wXj@1m?D}$<$tT!rK7 a|+{b!9N-kd#Hr8;]vkN,I;+v^nl*|2$X' );
define( 'SECURE_AUTH_SALT',  'g~o<GC1$yj08^H_h=7h^R=X9kcTFDEg%{bbV6h5M&i_)pC_OufO6dKFLXNkmJK&^' );
define( 'LOGGED_IN_SALT',    'IseYp3$[B;@Z;:B:`_C:jqt4|!e/W[cej~z`tohx8&!.+5hNqE1(y_X6v/Zx!911' );
define( 'NONCE_SALT',        'PgyC.,XfK{1hMs{{cW9c*;9P94Mk2O2H&:{S<$SU|=lX!C5QC9m<xGg*R2Mf(V|I' );
define( 'WP_CACHE_KEY_SALT', 'i(o+3$r8VSET_5-R+`U?8ygrTA{*[Q!zLYDXJ*t:2l[yKP>#h#N4245MT{-l,&=%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
