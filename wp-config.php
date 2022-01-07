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
define( 'DB_NAME', 'wp_tutorial' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'r|R!kPzDL(`jtlZmOEXF,7c:>@t;TK r``Nh.As?Th#dteuY{;LMH~CU9<1HKuL]' );
define( 'SECURE_AUTH_KEY',  ']WIbzgg*X80Uf.*c 8Rk?xv`H`~W!6Sei,KJ##npaS5D{~DdP)t>#]hVSaBiF^[W' );
define( 'LOGGED_IN_KEY',    '15~Vg*%q{U+yGaoacNOBD2NvR-~p,L^BZyddG3a)m]x?bHz==-qH4dP%2xN;W~0%' );
define( 'NONCE_KEY',        '/WPEGQiU<u=lROPGsW>5PJgDS/Swoek%}ON}BC+/~:+6)(:+H(HJ}sxU;>ILgc^B' );
define( 'AUTH_SALT',        '[GM0:czLh|om7:e#4S|F-$G9Q,7wy{G?s:asYp_}WxUr[e7+TV4802QM _OW]H2P' );
define( 'SECURE_AUTH_SALT', 'd~g?S.Hm?n_)&cQq&pkV>+0PToCWzIo<@ic$_~|-3oKINvv(7fO_=QSoe-}s+/3Q' );
define( 'LOGGED_IN_SALT',   '09P5vrjf-{fm,u2}yOm]Wt%COX%/*C.RR:@?rZ|4#-54:RN1j(&oQsDWb{8T;2:=' );
define( 'NONCE_SALT',       '0*UBL[|?%i]83;{a`W&ju)EQQH 5>T4[:At`:#MZ0$tb%DRowaK GNTO(FyWnoS&' );

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
