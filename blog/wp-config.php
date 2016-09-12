<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dhankhar_wp');

/** MySQL database username */
define('DB_USER', 'dhankhar_wp');

/** MySQL database password */
define('DB_PASSWORD', 'minister2414');

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
define('AUTH_KEY',         '7Q!P;u%uSq`+l$kCM@Qc5u+a=7A]KyrYd1,@LpX2DM-3-!>wr[ufHF9Oy8H{NAV[');
define('SECURE_AUTH_KEY',  '!Q=Ek$/ns^Naga%flwcl^!xD?h`TV{=SH[]g7s8tV-3gTISrbxq<RW9^+Y|ctyhc');
define('LOGGED_IN_KEY',    '(vQ->0F&Z&p$cI2KjBkqA&!Gz[SnXI-Vc!,eX,~[5G+o.}EF3>jN3w5VuY=)8G<N');
define('NONCE_KEY',        '#D^XEG>^BMp0sdz-X;qsZg]|_Zd$C[W7R8,d@?.:]P~Mo/VXUD2Q*l_oinJdtd<M');
define('AUTH_SALT',        ';0At(M;0Gtyr IQN|?6qg9^Jt|&r]-8.:j.8onea~[_8._KH 8b(?WtA*E:+I5jx');
define('SECURE_AUTH_SALT', 'QXD|+j;pxV6C2xW/wPyN+uirNLDIT]uYC Q&|nd|%WEw:Bfpej=o+hM7y#=[)Rff');
define('LOGGED_IN_SALT',   '0!iXS bLI+C$I^h8^y>=%6Z69#TdE/6#6><BPsNl$}R6l`yU,rHT|N`y6mCJ^6]p');
define('NONCE_SALT',       'Q%=3i;1Vhj.}~+CE?C9r+a;W.2?zkxv@~cq7sdnR-CtViz<gUG>&OfWa0jeSl+RJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bl0g_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
