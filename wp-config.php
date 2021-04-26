<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'sanmiguelecom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a|BsZqIm K.+ThU J_Mz{^YYI1`O.`GD@0Ns[:,f%4c.d$4Juh{B.uD4l`xME>C|' );
define( 'SECURE_AUTH_KEY',  '*)8f|^5Zk`D1TQ*j!SIxT=9bL?yUKc.P-ieUzbQn$Wf *}[%g!UWHmP423:rDcDD' );
define( 'LOGGED_IN_KEY',    '{vzD -?dj]!nubVhuE^<5nR=KifyF5t83schOAm/0w:t661]F{^~).A/~TIj_9x{' );
define( 'NONCE_KEY',        'L}?UM0~<$=8jOkxh^/X/|gz9Z1haU+1^:>T=jTm8xDv[dHm2FoA-@Fjg%2J.xk>v' );
define( 'AUTH_SALT',        'd 6wz]2s5*/@u)MKlM8n}eIm`HIgivI(7j.e;hx90@*4rkt,8=$;jOUH(O7:0$&i' );
define( 'SECURE_AUTH_SALT', 'r;PcC174`^d5O&;oNMB};EQR/VEB5&iwFzb:isz^s+$|wpDY]n;T@A6PJ<hk|(iY' );
define( 'LOGGED_IN_SALT',   '9i,7C21$u*:A)N,.I~LQMm|8ztnQJzcc>/@$zKSI*$A7=Q.=cS3OrT~,,8&in01.' );
define( 'NONCE_SALT',       '$-e_nNL1#sq2d6 N`w+Kz`!bD{D{;6dOlgm5CFWiGOJ}LZ(|ul~J*`Cc#!Ixt.oj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
