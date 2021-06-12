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
define( 'DB_PASSWORD', 'wordpress2021!' );

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
define( 'AUTH_KEY',         'E|u[r9t1FNTdas<zkuB9}&6~ RxwyL{txY,JKYKJWD,4spw%JkFRqv5/?AVTkeF0' );
define( 'SECURE_AUTH_KEY',  'n4in6a $lzCmmx#c>gsXB{8L5 /L(h_k`ju;;tfdCL=*vBJF.iUVWDBiFMFo!mY}' );
define( 'LOGGED_IN_KEY',    'eeaktB^Y+Op*}ZTEU?LMnOkvh)1w#&$ZF2_ n)2oQmY$z;Rj7n4Syv4p^*q!`2,&' );
define( 'NONCE_KEY',        'j{SB5sMCAtP#$%}uzjojSQhl?Z6v;?i/;F^}^oPZv+lPtGpJv|$/Ifw=)(s:Urm8' );
define( 'AUTH_SALT',        '-sd.chS{!qC?o cN>sMF^kcy5sX-Iy{}o3%2~*E.r/*If N,}|1LZ^bEnRD+PH p' );
define( 'SECURE_AUTH_SALT', '4AL* !`Y/m.!qTM=u9H?hs.AS^mc7h5I?K=(A@WH[_z{:Bk:?Z(^9H7ZYZExvO=x' );
define( 'LOGGED_IN_SALT',   'O-M}b9SRTmLl_JbjCY^uqZp]XA(Q=xo!X_$N=Jeu.b|>:KXhS[QT/TLWy%Ww:(Z$' );
define( 'NONCE_SALT',       'xURsZ8BwQ(^DNdez1j+a{AmaUq82d5YMBaLc)&0Xo9$l!oq7]p) 2)MyDh2136]y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
