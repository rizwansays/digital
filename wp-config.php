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
define( 'DB_NAME', 'digital' );

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
define( 'AUTH_KEY',         '8qo4&f-OL&[9s).q?q [OWi[O7sK]iVQfrZCVTH2!){65kx>*}A*l0Q$P op-{pH' );
define( 'SECURE_AUTH_KEY',  'aQ4up)P]&zp#M]Qmhy>~2#rG0/:Su!QK~4!i:,Axhg~CgqdIPy[&MNII^=ha,em5' );
define( 'LOGGED_IN_KEY',    '1VXj?-KtT0aFD{3E+@Zfqo~Tm.?A4LSnF,7BJ^mJcojuJ?W%`,tv.P$A+/160jET' );
define( 'NONCE_KEY',        '!!4#lQ[VhPs16_%&V*APV5~wOGC5OZ~p?I@Vk8[?N97|F$bd~~Sb1)t{ ?k*6t$w' );
define( 'AUTH_SALT',        'SojW)4w+%]8[w&))Eo-c6Ttq#`3~;m4}Ykl$lh%OKR0*>nwZSX38>[nY2yzPLu_B' );
define( 'SECURE_AUTH_SALT', 'C=dUF!4j(kY,H %{S x!N$Tu>nqnSc5swqu(FbSyA+$q_,/C!Hsa!SV8$rQi%r_J' );
define( 'LOGGED_IN_SALT',   'B:3&rg1v!&R~G{>.eGAE/OeGk7s{,F{)*F~S>#jmpmZ(&?Y$Ro/(gq3L fj)rL;T' );
define( 'NONCE_SALT',       'MUDAsHhD~I1#jOpe?/3_ZU)Jp2pIZ6ny|s^Xq5v0l?s#z^$F<c7]R@s%4c>@@6iA' );

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
