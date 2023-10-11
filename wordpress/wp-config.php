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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'user_db' );

/** Database password */
define( 'DB_PASSWORD', 'training' );

/** Database hostname */
define( 'DB_HOST', 'website-db.c50nksw01vcv.ap-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '(rq ZmaNuMV]o_+dQ=Z_!GB%D]kwP:wa!]itWe$UV4-5n3.rOs.;(5og//$Nd<b%' );
define( 'SECURE_AUTH_KEY',  'Te<1kMYC-j:FwE}An.1nP4SL^;G2AX[*nw$0-*C_yM^?0R`} Y4.|0a:@)Yih:Il' );
define( 'LOGGED_IN_KEY',    '4<xng#ANTy|(>}+k^F?E+Kp||qHz[=Lk61c<8E G=M/1:YAaa&AwAtLdJF0;MLs~' );
define( 'NONCE_KEY',        'O6Z6Zp:rNuQwN=^/j4x}D=3D9@Cm%]`B56Us+ck],rB6J[`}4^=KL~N Wis L#n5' );
define( 'AUTH_SALT',        'bMI.3-a>ACC^l),,&CN3_1wkNmA`3`&,OIG@ jxu4>@W{e2JguFL!z*DZ<9u]R-@' );
define( 'SECURE_AUTH_SALT', 'OKbEej:_](/FQgb-sFLo~k+&ozV!#Uv!&I5S!lH#)Ws8u>&ARe0t&9RSl%Y])UG6' );
define( 'LOGGED_IN_SALT',   '%|D%^,6sf#}cspY7t6!qmY=eRgI*^z`~(r[{6ph%*+)yP!LNF3pHUlr[).t!XER_' );
define( 'NONCE_SALT',       'M2^-!9hgVJ]{gZ[3PwdNOHY*5lIIpha!fd{2x;i1Y{CAv3]>UT&,+R1eHjc>%}?2' );

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
