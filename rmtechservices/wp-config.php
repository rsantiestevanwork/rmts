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
define('DB_NAME', 'dbrmtechservices');

/** MySQL database username */
define('DB_USER', 'urmtechservices');

/** MySQL database password */
define('DB_PASSWORD', 'rootrmtechservices');

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
define('AUTH_KEY',         '&sNiK,YTeV-k)vqI? :Q+qI&l~K{):JLLjuX5>}|Yq2J36;GO2R|S!(4N~02IvxH');
define('SECURE_AUTH_KEY',  'eo>H69jp_<ORr-3*k48C(ML0]n.<L?[gp;0aYwTR;}crlXCB2^v>lWz%HR~^Ren&');
define('LOGGED_IN_KEY',    '}q{{Vt Pf-.Cr-HtKeq[7i*cm*jEzyszzIPrMt$_F$|V@^olL]rNjX|=a>zL /?O');
define('NONCE_KEY',        '{&TlBBI:F$=J4cbZKE;m6L=r~8-=Ym|>,&>,y:=;3L{+Im_+)af$/)K=gBWb:mB%');
define('AUTH_SALT',        '[PD 7VAPxXFTp~.^A3A#i68pRbIfHS4>+Ld{>.a%8MjW2 /jM+AjZo$1BFKU@3Dt');
define('SECURE_AUTH_SALT', 'B*7]8kEdbo7 =Z5md}}S[dwG{wLemfpGv59(E0H}{fjpf<rk`3/nPo_z^;zBT%Ww');
define('LOGGED_IN_SALT',   'o#Pf&u@tO7B|&nrEP5^HN/iPx_#5<?TR}OB Z(Rb1zU$P}wS(HSK|0#wKe}M=Po2');
define('NONCE_SALT',       '1(A4$8>nBkw!@_)6D;|^_)8{Gd[r|Nu<#rZ{:?cjW[&5OkY@j{W=.y9 fk{H JB|');

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
