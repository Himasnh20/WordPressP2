<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'Project2' );

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
define( 'AUTH_KEY',         '79e9a]evE0X5il%0=a9bI:r7t@[aCTeV(ng:?vHoy-VRLA1m 3,4>Gh?_E12*@&>' );
define( 'SECURE_AUTH_KEY',  'AE[PukM=2%qHp%%~$o|~;k^q04|8J*80|!:)sUUT>$zJ1DX5`aox  [KbUi^fGk<' );
define( 'LOGGED_IN_KEY',    '%s/Am:H{WzjD-X}e$&!UHK%,?d,cfzO#BfFTHB$Q0dHRkI[pUUa$5ESy[D,xyp|Y' );
define( 'NONCE_KEY',        'MDrK,tVbDs..*5C/+VleI9(;S^AE>8Sn_r;D-.-SwG:6j[Sa]zf`Vo(j-8vmX*wy' );
define( 'AUTH_SALT',        'AD2g;*v@Sa{W/6EJgY4TZouO:g8u/afOxV[7T#M8Lx.g&ta!it2igJ_K3#_6Vs2K' );
define( 'SECURE_AUTH_SALT', ' @7LJH<L-sT*o&s7<XpzohJ]5*e h[UHMt4`;dM{o8v (w}EnpqkQWb{SedeNqpf' );
define( 'LOGGED_IN_SALT',   'HAz!m!K2TnS&#{`<mX.e1KI ?B;67B?Rtcn Gx/r)l[,e^w0e;2k+?!0rl2Q@!P|' );
define( 'NONCE_SALT',       '(+7*TP8#W.qeVfM^As#HA4bB>Wj.u_O=>z:hU/F%|L^`Hm0e9FkZ3qd[F/8GGcqX' );

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
