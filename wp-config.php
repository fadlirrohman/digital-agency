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
define( 'DB_NAME', 'company' );

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
define( 'AUTH_KEY',         '>j^xPNp#er(s+mBhdqUjDnQ1pq9Vcvhv{g>FJ~bJp)0oT<#t)#m6&d%X ,}E?VHi' );
define( 'SECURE_AUTH_KEY',  'lNVtz~p,g-~=RV|<T#r3lTDGv_:OM)t*YVxa=HPn[}qp^bU ;}%Ium@*enz_(e9+' );
define( 'LOGGED_IN_KEY',    'hiLZC:&xvREe)3y1OPNqUPgSL!sMd;6u3oY0A.:a=PtMZeS3-bog1Bn_d h1V.Hf' );
define( 'NONCE_KEY',        ')>Xe9&t z1]4rq;#(pC<5|pz{+19HGh16Ub8=}UI nqSwOL2TtfV~J%NaVpA{=I0' );
define( 'AUTH_SALT',        '$.;:{D!]2={f)bD!il~wQ@1isI5>GwIJ}`?wF/1)[K,==%:(~8GhoXg`w+YSU4v:' );
define( 'SECURE_AUTH_SALT', 'yDy]ETDgNX5+sVPHeWYI5)UI/i[dD*Q8ZGZscOm*}FukH,#%67+~;fZ()Z$x}yuP' );
define( 'LOGGED_IN_SALT',   'Xz&lP<upxH XXTIj7l|lqcR2i&LeHYME)L!Vjs5l#6]F)aoHU3PaemhOwR+qV~C/' );
define( 'NONCE_SALT',       ' }9*>?^O4Loj${=YaHDqyrUw1NQ;C)mEmKD|,4-*Tw&$~*=naGd`T)me^/RnwE0k' );

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
