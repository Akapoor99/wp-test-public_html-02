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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ayushman_wpst01' );

/** MySQL database username */
define( 'DB_USER', 'ayushman_wpst01' );

/** MySQL database password */
define( 'DB_PASSWORD', 'X@7p86SP[9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'w1kjgdhav88iabym5itwcsq3npvt9v0xyhn7nohxmvsuvh8pxqx1ddqcnhqhcuaw' );
define( 'SECURE_AUTH_KEY',  'ri1hyqcw6bqsxgau9s8uvw0wfo8v6hqdpss0rq14htcxux02uyh11ofcxwy2sajk' );
define( 'LOGGED_IN_KEY',    'l8xj94zkpwdrhnwqzb1custonieduyllt7jye64scau8p8h06qqvbnalnxcvkacg' );
define( 'NONCE_KEY',        'ttusuinpqj55qafki078mdfua4klpheg4meivxrrasd84hijzwpzo0r0d7fercbs' );
define( 'AUTH_SALT',        'ieqjlqdfs4ke4vc2rfqpjzj907r2k6yk050nuqdnyfkcx35msgsbbecrtihvdkab' );
define( 'SECURE_AUTH_SALT', '8a82iurhyzfel4khe3sozpac2yakzjmhpp55p3x5f1ab2mdpvrrcyjwsaqbob3t5' );
define( 'LOGGED_IN_SALT',   '0itrl5dbhrkfpojfjnthtdkczmwikelhh0lrobcweptnt2sce4khudufjctjkqxc' );
define( 'NONCE_SALT',       'bfnypa6gqofvgfjw5fk2aifymdqosbzqwlga6tvk6ayaeqknyhg7sug35col9ksv' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

