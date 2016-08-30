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
define('DB_NAME', 'agency_pro');

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
define('AUTH_KEY',         'fu(npv7 fQ9<duG(}1M^ZeVS2(%@bF/M@Lq~nqX[jX4&Iay@xra>HMn:%PO&HegQ');
define('SECURE_AUTH_KEY',  'l`b!I(=MA1j+Ko|^jt7C>DJ7IkI+$|u0/d{G0S=0V }}KhNP:F&u;eHNY7swAOp]');
define('LOGGED_IN_KEY',    'L@8PqAg5Vuyep{k :l@T+]Ce8Tl%x%?bi4)4vN}dH@*e#3o:$]uFlza;[,H+cTzB');
define('NONCE_KEY',        'N8gs%[IWZ/=.D+I7HP5sP}.vFd8X);C[C;3uoVe%$Sx37:Raj@f4irFuDDO[?W2s');
define('AUTH_SALT',        '(}8ONBZbHsc3r>#5PT=iMgMD0^r;&>POCiqgisx3)Ft=s%bQ4x$6(E`*n7Wbqu23');
define('SECURE_AUTH_SALT', 'rIQXde$o`.7$?yQ4e@5cZuzM}|?|y wIRfa$[dQo^VPx]`vej/7GKo~9!@M;_HI_');
define('LOGGED_IN_SALT',   'CqctRz&x1($R-_@xp9$FeOP+h.jFq?3Kai]IuaHGhG8`o8H0wUjDARz0<#|t0`]t');
define('NONCE_SALT',       '$`k6wMf(87=hA8lR,bK}a>4Cist9=Q|Ofv[0wm73 oXLR73h1<t.T5IDWe!le9Tu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

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
