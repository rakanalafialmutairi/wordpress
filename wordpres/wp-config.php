<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'project2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q{^wJ>mlB.u+VRzjIG<x<OVd5M7h%OlIVnA.DJ;M:ehIh;^%;(;{)eyQ4/T:O6Rr' );
define( 'SECURE_AUTH_KEY',  'N9x/]8!%/RZ7^$m8|Fd(T,K.[Y+HecTNgSvc6_F@v@7=:Kd>V[R4rI;99@gJ.lr*' );
define( 'LOGGED_IN_KEY',    'F/H}5H_=mVT28}L;+!_|[ii7_U%lvb-bD:Hwq,Z{,%r{CPul%wtWyytKEwz8L>ZP' );
define( 'NONCE_KEY',        'UUehH9#^`<l)u@Z}l`HvWujgBtXQQrX{<~fU23WK{GAPR:lAolZG7JU4iN|*PJLi' );
define( 'AUTH_SALT',        '6>|rQFZ7;fYdRk64<%yhd@DovY^Kv<_0?j@W>U6ICPrD@ALiS|AWm1wVb0**NkKE' );
define( 'SECURE_AUTH_SALT', 'r?GzE||PJ>Z_a{}s Mc6?R[yRov@22E8wIk*,-cPoln8[HsjE_P:G4r4>*uVln0%' );
define( 'LOGGED_IN_SALT',   'v7$=kI#X447H7:s^R/Go?bIAOHRcvv.gP$Y>Pbbgx3I1v(![7c<c!LfD:t?(:C7E' );
define( 'NONCE_SALT',       'qt|n^:qA`6-{#AzzPjFjrCL1~&}q|BF|;csG3sYLCo`Yvop0HTmjVXm6?`tHcc#~' );

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
