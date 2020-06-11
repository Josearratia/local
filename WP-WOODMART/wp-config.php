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
define( 'DB_NAME', 'wp-woodmart' );

/** MySQL database username */
define( 'DB_USER', 'ivan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rodriguez12' );

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
define( 'AUTH_KEY',         '&u]fU|=LzWN(X%dMvid3Wac]ZX^@gkm0_MQ;[4&l,bOFv(W(k[lP.fSe_P@obD0X' );
define( 'SECURE_AUTH_KEY',  '?%&?ql#F!b>),LEd%ZA3e:)K=!r}]urt,`Zl,qf>^;Y+MF)3!8uqAUCqLGfxOlc3' );
define( 'LOGGED_IN_KEY',    'ms| G%.PgKw$UIGMI^IDJ4F5U[@4*Ne&B7nxFh0kM#KEJx!sVV7NFTA0YMU.>t*(' );
define( 'NONCE_KEY',        'Ca<g2;/)|`M Lwa*j^qV @N~PG9#%@[MU3x7[lj{SerVhx&Og e:o!|8vszHh/B@' );
define( 'AUTH_SALT',        'pCxU8*mJ#6&-T[X5.SnX3pXqKeb1p/=/*/@>5ipWKg8T2X85@^@DzXgh]:=@|eaj' );
define( 'SECURE_AUTH_SALT', 'tcRRrRBWuoW<?m7Og6+3e]]0vU+H<&vYhy4&&WlGUAU[sJa^HU1v,)8Ai :RfOr>' );
define( 'LOGGED_IN_SALT',   '<.t&Q!ve+/>zBU$h=B&O~`yGgb_%c!E8<}vz>laH}_v;!.vy&KAFm@&=2!moF]Xv' );
define( 'NONCE_SALT',       'cMIH`WL7B$L2Dz[1SQ)hdkyp&}SIp4rd`^vJJwS3L2k<5I?fZ(V~7TMPrUe-v8NE' );

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
define('FS_METHOD','direct');
