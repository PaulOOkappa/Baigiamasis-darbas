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
define( 'DB_NAME', 'CustomWP' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '<K2BB;1=(PehH 3`-vb/r>CC70a5DG#[!-HpDld-]ZJ<n!JKJ&M%x~?[8e<S]WAq' );
define( 'SECURE_AUTH_KEY',  'h-r[<2&&>QU&Ur}uC$|`V3omJZ b}5f-Gu6V-q)tN%8Kh93Txr?i(T&)bDY>.m;T' );
define( 'LOGGED_IN_KEY',    '2*1uXT{4wXwO6y**hDk# nw;}D{MfKAP,6u{35$8e2jANj;Ln0:PI bqud(?mg@Y' );
define( 'NONCE_KEY',        'yBtzfT:Y<V%)p/J0-~veC`0eCD,W*B[U3@|;_Q0qM^=B;LfQ9)kxNh`x-r^`@:&E' );
define( 'AUTH_SALT',        'qz]AY1PzCKqAy2HSmY0us% K!%ZLYO:~D#~hx/@3`6EsZ9`R|~q/U?3UhIGkmxGB' );
define( 'SECURE_AUTH_SALT', 'ndDAr%+0)7Ks::j>NmR=OohqKCPvr7/5P-&1,2^V `xoPd*Fp(|pmptRw)ya R;*' );
define( 'LOGGED_IN_SALT',   'T8H#}5@0BHh:! ?<vh2iS%=>lHKy )SwSQ1tR$Ca%j4Rka0rRfQ*G$+7q:=t0#MV' );
define( 'NONCE_SALT',       'H@O^e]k5JMqpSz7?[VV>iB-,&5y:|~!D?f7R/7@=!takZSF@|A=W/=_MH)],oG/)' );

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
