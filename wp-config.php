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
define( 'DB_NAME', 'custom' );

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
define( 'AUTH_KEY',         'R:8(ZK7b:TKa0E _+/YcOJ Bhu(?OV!ryzUb&ETL|DIhPJ]sw4@VMUuJI+AnsPC0' );
define( 'SECURE_AUTH_KEY',  '+XzfC0KeVuAs54MbeE|!D,!9@airdy83tSH 6)C7j;)H=D184m5A;dcO2)|Kd>*k' );
define( 'LOGGED_IN_KEY',    'YOfHY*T$?JGs[4z6R<0j*Rv>jS6_q>tw, z([hXWG|I58 HFO8dPmBl!ITOCn0x3' );
define( 'NONCE_KEY',        '_1y4<)mnk4t>YloU/4oPG_i}h@!{d+&Jsgmub?DH5mGk{!RdFE:_n{GM:a/wy.A!' );
define( 'AUTH_SALT',        'Kz#AJA*])m>xQG&o}lm<]!n>V{}8K7#TfFi1]Gj3}&`mzS;E`,~5|5ii}<B/6p<!' );
define( 'SECURE_AUTH_SALT', 'sEi6$~<jEwT:zv>BlaMh6O(@+1f-UtBQi7Xd2Ut*j@.Yc>/itfEb^!*e8_l$PvQ%' );
define( 'LOGGED_IN_SALT',   'GCg3L_ZCiLbKl/gNL/J*aaYF.abC&/F`JFtzu,$JxzF.)X6I% H?0L-cG7R5(Qk#' );
define( 'NONCE_SALT',       'ja>Dhd@z`bZt!%:q|g:4.oHx|:U0$2e8tO[TCL[vnL2JA35q6e]n?&W6je9cF.YA' );

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
