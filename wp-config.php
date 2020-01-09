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
define( 'DB_NAME', 'ayushman_test' );

/** MySQL database username */
define( 'DB_USER', 'ayushman_test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test123' );

/** MySQL hostname */
define( 'DB_HOST', '77.104.150.158' );

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
define( 'AUTH_KEY',          '[9A0U2#nzkK3).9B |/] oYN3SZL1zd$@@UZ%qqnxxEv)Yc^ ^WM=8b|]87xnbYI' );
define( 'SECURE_AUTH_KEY',   '7e%#P<U>7g6eS|:L]:%GpBEIskFUry]<|ZM[p]:w%%a.Rm5CQk;:lj>dNr*9VHS,' );
define( 'LOGGED_IN_KEY',     'q0Xgn8Q@*,1w5T]]@kT$/b;Z1}U92srWs3Du;7?P~| c46b0]W0{Tu)f;@|Iz;I^' );
define( 'NONCE_KEY',         'E$1d}ti0L5wGCCRi|m+O|Ksg]*:n&{:I^y+qE<px6k4<Ct27s_^)`:y0rMl6k~r`' );
define( 'AUTH_SALT',         'kWZg(Cm|FAS;!$jp%mPWaK]>Q|nQCI~}#qI,JBjEzds1PlE1bx;F5K4Z<.|&1`r)' );
define( 'SECURE_AUTH_SALT',  '0FWX0MJoG=#r -hPQ[hDclV+3PP&3SWIeT^+5BNtWTu,<qJ;G<YtxI1pAEL#@x/j' );
define( 'LOGGED_IN_SALT',    'WnM`#VWE]UNrVl%ublWiij}1:kHm3%i;OU%|jl<P!IApNGEVq62U/8G}+(BPu(x5' );
define( 'NONCE_SALT',        '?r @,@b&e6g{&4h*sT*Vzi|1#=]!7*qV)LY,SrgWf=o?]07Xe@[8XZpWAI!C<s}$' );
define( 'WP_CACHE_KEY_SALT', '|f!2Qj=r}=~y!/]1$QgAZXT-gzL/@atG:DVVS<^[:_@0spdVBJ8sF?[_d#V!xA,8' );

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
