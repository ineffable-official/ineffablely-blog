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
define( 'DB_NAME', 'xwswipkj_wp71' );

/** Database username */
define( 'DB_USER', 'xwswipkj_wp71' );

/** Database password */
define( 'DB_PASSWORD', '05)9p20[SP' );

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
define( 'AUTH_KEY',         '9kb8ougdhhqpnwm9t2nht4yvuox7pzqujlxk8tq8ivwlthx2tq34mt2bu0v2jcx9' );
define( 'SECURE_AUTH_KEY',  'aa8qbx3ztj91em3xtr3bbpa3igbvdileqqixjlpethvy7h3kdgzne8jxkafiiapj' );
define( 'LOGGED_IN_KEY',    'jpv7lo2i9aqpuenrfiezkfracxwvusgxipdybhu3war1jaanyqhjuexekaknkjh8' );
define( 'NONCE_KEY',        't35a4ovy5zdyyzeksnv57bpqxdguws8wkjnofuhzviklgvbwsfobnjj6perliyue' );
define( 'AUTH_SALT',        'wuh4xpmi3eveadhnr9wskitv8krzihzbkt1jwbxpnyyf1afyfmrjpjgs5gxvzgrn' );
define( 'SECURE_AUTH_SALT', '52pxteb2jrxyjbatafdihz4jtb6kqx2ilvkumm0lzpmsxmq4qxkjmyajpiz2z6g9' );
define( 'LOGGED_IN_SALT',   'fkftvtrxsmf02tyshgpxfoocrjfqet51on4nklegnj0qz5ffucreabl0yfl68igc' );
define( 'NONCE_SALT',       'njsdilkurwqjwhrihlis4jvffnuichc91hhd7wiy4lb16cfb4znuzovrbrxu6csc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbe_';

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
