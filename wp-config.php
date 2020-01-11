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
define( 'DB_NAME', 'wordpress-two' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '59c2L@tX]dnuQM#|syI{=XbeVp({e$=@4RX8Phr-0u_=jKa)OpX8bi-HJ!RFD?>4' );
define( 'SECURE_AUTH_KEY',   'nYKopLcz ^kGuAong`k>5tak_/Aq*gGG?}} ]F9WrSVlq&n+>L5~KRZx~ S::2B{' );
define( 'LOGGED_IN_KEY',     '9ew%t{36~?~/LF;N<gj!tuJ[FtBN=EH4?4Cw ;ZZ-vE+g?{2MC6IR=;ll%2SI[w7' );
define( 'NONCE_KEY',         'BsET%OdcRb~w@be1*8U0rq4wz}Gy:P=p<35&j|rh}*e!k~v=$DMJ~*)1q0StbPp~' );
define( 'AUTH_SALT',         '5(6uAH51@%(y^-Qqw:Fu0.:ibxE>jhd-egYX/q.i!/E3hQ+#ry7:N%-U_Fm`vA]5' );
define( 'SECURE_AUTH_SALT',  'v!+y.G:f|@Zw;BYm%J>e5QWF|*D6Wft%n}4XZD*/X5~Jm1?G=Spy-#&*o2No@J`H' );
define( 'LOGGED_IN_SALT',    'e(}azgCBE ]9eDM]xq8AQ^(-@q4}@xUR%6Gv8HEG#(m+.H~@0@vUq[X6F6c],B@<' );
define( 'NONCE_SALT',        ']Aw&-<Qia6l6qITU)#G^b-)h<O3$5T-j{vR;}nbJVYYx~r,T,F&5jBGtDei[UkUr' );
define( 'WP_CACHE_KEY_SALT', 'iymG:G0CZM)$x#.2 $0s%/Yo@w`L)gmW;zEa%5&3Q3GZiyrx&KpZW8b7@xOExU=3' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
