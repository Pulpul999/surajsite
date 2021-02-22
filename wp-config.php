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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'J-<Q*MCO-GjvE8*h}JHzK_TY9yyLBT@)%r`@?jwA1g?.CG[ttuDMG^)z`++Jsh0Y' );
define( 'SECURE_AUTH_KEY',  '<KgU3GmDiR)kXLNf]e!+lS.DCj4k`kmAYL}eNqx%1Et4BI88TG-_=nlY6h:DpOSh' );
define( 'LOGGED_IN_KEY',    '1L/r`]d4*2sN6SA*lab.,e,qW,l/PTSWhCf~@1cq{2$@k/:E@QFThC(i78?)p:vj' );
define( 'NONCE_KEY',        '9v9g0zZEAFWBPhNd+#QyI&yjvMMul/aR{nT%3}YIo|cp2~^dK5:iQSH&MM4QSSsN' );
define( 'AUTH_SALT',        'Z`yFSl@u0t&sAoerOop1}Nf}F%`r4F%]74sjk9AgNxR4zyZ8N%:7C(@E4W06=sdZ' );
define( 'SECURE_AUTH_SALT', '![_M.7+70!Fq!;CTDufV[+5ESv8I&F7`ed32:Mi84 Ye1^(Vw(?^6uK<Yu=XpA< ' );
define( 'LOGGED_IN_SALT',   'y2e^>JDy=`Xi/3$&fPteq<B&-m<FTBRyn@C;;WFNPBl?r*9kph=:~=fxp@361_BN' );
define( 'NONCE_SALT',       ']Fku8;h#?9/.(U&/}3 )0jYcfA6A<[PpK7~{4K$erA2[M-I+(2 |U_,B.k.s^>eb' );

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
