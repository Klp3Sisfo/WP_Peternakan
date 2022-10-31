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
define( 'DB_NAME', 'wordpress0' );

/** Database username */
define( 'DB_USER', 'admin peternakan' );

/** Database password */
define( 'DB_PASSWORD', 'adminPeternakan123' );

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
define( 'AUTH_KEY',         'p<_#U5/zSU[j8`EYIZTP5)%gxpQ^||I+.>C&5S!DVI9}IgEbUg@Vuv+#?tV[gg0s' );
define( 'SECURE_AUTH_KEY',  'lO3x!fQq _>d f>%z|;zlt`sts[qJiZ<(byXG[:Qi[=Tozs8PNLSh<J4P&.9TuBN' );
define( 'LOGGED_IN_KEY',    'b<:Lm^.y{C8DvENTk#08#Cc2u3*g{KK4H+L$jKCQ~+,HK<N$waS_DnVV0bLWK0fh' );
define( 'NONCE_KEY',        '/Mt*|ei)]lKPGBCI_~pC{q1xYc;[FkX!?x@(r>bqeV Ee>2t@ |L~2KwaVYk4qh1' );
define( 'AUTH_SALT',        '#K}LyNJ/~Gr@l:FxRZjNtP9Q<({PI[5a={R>oeYWN 58(kObbK$<T/*6qUNAG^tZ' );
define( 'SECURE_AUTH_SALT', 'Sjd{Ck16)dIaObivBH^[^O:^R@U:5<3S%I^?ze8-3L:azzT+p%bYXzY@^UjJq^&!' );
define( 'LOGGED_IN_SALT',   'X;W l8iIT4BQ3h?!0QCbhr5QEh`bUk8c>#+=3>5jYSm0y&{QEeGwF^.VZ(BKJQv>' );
define( 'NONCE_SALT',       '0$W<vuJz(P%E+r+J[4QX_d[7!Bp%Ccj)%H5Z![hZ ;Wi!Af0%mDQ]@6-CF3r*`mt' );

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
