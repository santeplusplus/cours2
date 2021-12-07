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
define( 'DB_NAME', 'cours' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ym5%JFPg]t%Wic~2AM<<HT-Nyt+CGqv<b6Cb7X:qbJf:_,}M8Q9(4fO.xJTBce5b' );
define( 'SECURE_AUTH_KEY',  'yx`QgTUcd?illX6I Ql_tC>cxVdUG{AM?X_S]`D$bmwO%z*rcadNcY@GCM.].gX,' );
define( 'LOGGED_IN_KEY',    'jWO2JzWEr(J^mA}DkvB&C*syN[Jy1+m*:-hQIP1xaV:X_B<:k&b%Wn2A@Y6tA[iA' );
define( 'NONCE_KEY',        '@>t^VwWUgP]P?}9VsF3atf[{2b1LHtJ1y<gR>eDpv[<fN:CUQ$SB/CYFHfvfeQ02' );
define( 'AUTH_SALT',        '$J53&Pj /3$#.#S6yC%hGw?UtClhie-$Cu]7zUWS<bF?:oUlYe5U*-j+>9N4j;s`' );
define( 'SECURE_AUTH_SALT', 'z2DE9ZlQ0;/Ady8%qJGBpL3F;</D-@T.c{?u|-0uHDtKNy@U;g6;AuYsY,/Bg!pg' );
define( 'LOGGED_IN_SALT',   '&n Bx!]t}gkKIK]#4eYJY9t+i[?2D[G[W|7():{7e:4vb73*_.`rc~&5(V%&jfn;' );
define( 'NONCE_SALT',       'h-MmOg/ISXCo~&;fh~S:H!bcS.;f!7S6fTNyQViO!o;MfV`uwx%RlHjTd!l7ldWm' );

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
