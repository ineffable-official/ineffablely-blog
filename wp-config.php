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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '37920320' );

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
define( 'AUTH_KEY',         '4Pw[<fjbjeC&v6WY2 n$Ih @06m-eEkSj*yWPDp-F=vZ}:vMy~6,J=0jRM:`Wl/i' );
define( 'SECURE_AUTH_KEY',  '99Ai(x4P%QRDW[gV8IsNnJ{$fwCpJAI7C{1o~G+?Hz+&,|HGK$fo!^Ci?)qTn%u%' );
define( 'LOGGED_IN_KEY',    '6oLu]gJeMu.2D}nv788&/L~a1rwfBL=6wG }t@^{ES1~+uMG!3g7ze44]d$?f]ff' );
define( 'NONCE_KEY',        '+IQkK@)`6O  Q-k20 >pGz_;O@IHC!0me6NPGU5OTEEJB^5.o^tzeGUm?HnJl4E2' );
define( 'AUTH_SALT',        'Dw*:5]:zcI-Xyp+hil%SK,TLNk082`hVz>h{^,jD|uCDx8le{c4D:,({W9o|/*15' );
define( 'SECURE_AUTH_SALT', 'o3_/9WLPHO{`{&Z?vQrMv-v8-o9P<FZG51*9+z3xr~Fy|oYK9;l#q_gveN_`Su8K' );
define( 'LOGGED_IN_SALT',   '3tCtWk+V]b.{xKR7&pMCtduCsn&n4Q35z1p-dZQCN6%sMaU8Y*WH#BzpT(<k lU@' );
define( 'NONCE_SALT',       '0>mv}#}&oiaVS=5[gaLS^:jT|&<#O])_#k?^D4k[9ktW)@&2CN:f0<.6hokjT|:>' );

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
