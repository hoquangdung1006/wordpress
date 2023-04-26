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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' eomDc|DSD;8V9PrjSl6,I(6$[#P{4S{Z`j_eN93hXwC5e[t{;5bPse/:[9u}XV9' );
define( 'SECURE_AUTH_KEY',  '/t`U)E9My(VCtHSTq#hy:<Bb1{Wih;jas1 5ZX1[1Yj7yX;jyfu#srSy%@e~<GZw' );
define( 'LOGGED_IN_KEY',    'JQYpf?JSdojX&%N6M&Lnx8-,3N|U*XIUj487X<|*JK~5eG#`=n1$&j48ys)(nQ.1' );
define( 'NONCE_KEY',        '0DJJw]skj@/sJQ<mU+{8!su2O@B1VGm=Ux=E C6=dmqP}Pk,6RZ&~_IWMn8)(= o' );
define( 'AUTH_SALT',        '(vh(WMkN0Nhp3VC7lkR!ZhWNpkkC?4Vs6Xs8NK>(*8_Mdj0xtrjy|f1P{kwRf-Kg' );
define( 'SECURE_AUTH_SALT', 'vu^=h?i|gv{,&Y{ZH+USN? @5T*d^y},J[6o6{ropeQSB1V)_`?}4uk+Yk-SjvRy' );
define( 'LOGGED_IN_SALT',   'Pi|&R17)9XeNb(rx2K(Bm1 ]^O::F)$7bu>PfwQ!|b.({l>ux=:4-67VVRXS:siC' );
define( 'NONCE_SALT',       '_hhX74!o=FJ A~l)`xSEYO5xu*<}*1?|I)f6[,48@->AQZkuZvn7Uk80qIEr[v56' );

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
