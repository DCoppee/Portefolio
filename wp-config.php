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
define( 'DB_NAME', 'Portefolio' );

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
define( 'AUTH_KEY',         'G5-EVOH-=bsqYt~BS#2@uZ =ch`vk^qmtFx=)*|2XG;Ena^,V32|Aj-,^j>!(Utx' );
define( 'SECURE_AUTH_KEY',  '$>S^Azgb@zxt.yD87qnoUA/?[r8soZ33m=pr`;Y[35(I5O!1sBx9H8!V(dxY b}t' );
define( 'LOGGED_IN_KEY',    '6EEvRUyvI+V>bmR 8?k]{+62em Ib%4FE]I4{{*q W`27o^C-UWYEt-!BFUo&Ud>' );
define( 'NONCE_KEY',        'r:gY0d:Lkb~3{]<M$?@K_8~G.e7/O~ZCYWUA*kz)=NN,S3@WIK<V*D~9-eJv|?_?' );
define( 'AUTH_SALT',        '{P.aIv4t#8v,svSLPCmBY.X^&=dRka~Se~Rr$?]OnprnJh8nm(^;# ?p`T8L`ije' );
define( 'SECURE_AUTH_SALT', 'H7F#(~7.|jM6%}&,8Gt9I.^F|Q^[;EZ[(JuF+Ap.OjHg2:8gI5MFpOQgUnoiliQ4' );
define( 'LOGGED_IN_SALT',   '=gPnVz-$%y<J6~X2UhY4eYA|^/Pi<q`R?># z;eI4xf,@8m<wP2iS2xg!6y [4*b' );
define( 'NONCE_SALT',       'y*L?`H%cNG~&Zxg~GeC6*Y@]}=3,4v&;Di?LLKL)*p.i9.4c7MwC-W7!c7o)9Q3K' );

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
