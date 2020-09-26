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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress12*' );

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
define( 'AUTH_KEY',         'K2gk;8SwtJ|v$Y+e-lxP1.zP5ymcrf,n>t#FPqc?)|wUqNFfr1,:+XF#/FEYT&7F' );
define( 'SECURE_AUTH_KEY',  'K&b$?O(gXyV6&1s}NL$7UpW?yv6*)Vmi8#bngp>Q_!#jxwgk UI$~EWCY~8bz9]S' );
define( 'LOGGED_IN_KEY',    'sX2LGNj.,+qy;%H(5xDf K$h^qkBkTtr0MU,9!8xRriUxhjeb0Z h/s8dy_1Qo$p' );
define( 'NONCE_KEY',        'L_tHY[%Cmtd:-IK<!9Ix{A3tlmW:R7=!|?9;vtz56pIyjfbWfX?NM;A1 +e%(7Jz' );
define( 'AUTH_SALT',        'IIM2KPFY^?]g6p%JL~E^!= eKympp;~Q@smHET`A0g8b%ZzIJy$VtY :yP|->Fg1' );
define( 'SECURE_AUTH_SALT', 'Qm%z%g.J*18OKltuRC*w-&cHM(7+LB<Qn@E`f]i0/F}hY|^ y6+y#NoYu;r%ufB4' );
define( 'LOGGED_IN_SALT',   '*R!;J4KC-]C4y6=DzJ4YmXDocg}:M .1]ijBo4X}o.xs[BdA/muIK3cyM2@xm^T#' );
define( 'NONCE_SALT',       'J6k,)qwVU0MVg/#s;gO*XEx/bMIiS>h*&y.wKFt_XZ<8XT& Tq|Gy *YLZR9G&%]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
