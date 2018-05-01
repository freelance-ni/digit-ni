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
define('DB_NAME', 'digit_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cQAM3[X-ElBPu4+_Tw2;T*qYg.2n@jq~PFF1KO[pd??}E^C0FxVZ8Mw[.W{m8vZL');
define('SECURE_AUTH_KEY',  '; -K/^YrmB?Y^N:Q .S.24Gwh-#!gYt;ILq+:#0:7x)+t+yUE%{v#yy!u~Y$3J>v');
define('LOGGED_IN_KEY',    '>MTa[e`~nYv>H~8;Ba:t3jPql&ocID|z-T6/(>/MeNOOSILp4]>Sy!;]rb@[T]sJ');
define('NONCE_KEY',        'C5*}-xz<U@FG%qZi3bC<,1fkv;I=U 4*}BCQvSkmJ%x9Gi&gadfT}QL_D%cAL_(=');
define('AUTH_SALT',        '`?aG>16HiV|3EM:}W=6#=v!Z(>6~8+lXEM@6In(v t.dr4lG~FKjBO`6?|MTAAUy');
define('SECURE_AUTH_SALT', 'V4 Xu5$4#IXwhEB?BL`*HWS.cL-=yC]|LsYbi>XR&:c(^~h62VURS:0b$4gb`x/4');
define('LOGGED_IN_SALT',   '_AG+=cw!]p^BJZojBKIM*%KB~j2Gy$n~rz+G)u5v4.h^9`CC|K>NMjG[`gCVy}hL');
define('NONCE_SALT',       'BtI<2&r_ KgH$@Ew|pQskI~$di5JNvI@(CpuBT6ck#9h*7Y6Jn7dfRo?*{E(s0M}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
