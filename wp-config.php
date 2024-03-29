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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ')VkUc+%mdVt~-||;x3H&G+<O+Lly.S_a-+C#o4dB[4sS<~zN-GizsA.ig.3TVs)Z');
define('SECURE_AUTH_KEY',  '{./K+rt`X ,>[6;eh3urS %0>%,f_V27It]1uE$vfF_9{ t4j:%nA?#-qh-nK6%]');
define('LOGGED_IN_KEY',    'v$n`4lVaTtq]r& 6Ir^#fJH.jn/TGm[DrlS-.EffX^2@fe rb.f,hH]&Mo2iv;Ry');
define('NONCE_KEY',        'ocVlzZZerPWQI<#]0HbA >4TS|fa,^dH]|;rvV7zNMJ6~Jc~WR[,VLu|PWr1toVN');
define('AUTH_SALT',        'hrU]bW?i S{|>+udO]+sP/>.@)7+t*}Fp0;/XdBi|xs*w^Q:LW|Q}, ,|,d$??Tu');
define('SECURE_AUTH_SALT', '5kx1mCSRmc!-%7O;C?xfnAGkps`B-=--E+EB;_!|z,5f2_5djXjD!pgXKL[t:ES/');
define('LOGGED_IN_SALT',   '/&1d3 n3-RswdTv5?Uj_V[+q=M5Mh^KU#P+r+Zr1.ntxLBP+=u?70Ue+h+ix1XK,');
define('NONCE_SALT',       'OFPf|I9kt@+xT),!I)/*+-Ik$k]:7|Hh76xAmi25<{(`?2q-!3KiAEIRw{q3yiU!');

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
