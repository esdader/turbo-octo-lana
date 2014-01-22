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
define('DB_NAME', 'merchanttavern_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'm10ilJA@%y');

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
define('AUTH_KEY',         '{$W,$ysH 6~+Qq]#.6_X{&Aw@O{w$!`5*ZOp^*Y0ZFqK,h]=|0WXo$_~iYr3VY7B');
define('SECURE_AUTH_KEY',  'g`e[oLr/QdDIhdA4?:XIIqo;=sTg|)(8UY|nW]yB9eE`h?DN0bCILked^aA?^rz5');
define('LOGGED_IN_KEY',    'M^qFV9`${dzuxdsg/=~&L!hehfOS}7 ?gVm1j$<zcw.:Bxj d;w/68cZRic[j#B^');
define('NONCE_KEY',        'h ktoFO0MQ.FEA<pDwi?b3!6RJ3S_50Uvg[vPoBC3 .9S|XOV=sjSEFd0US;7s@/');
define('AUTH_SALT',        'm(YE26)b<oUVL@xH=`P+?$iw+](,TPvlD8p|+gm,_hi]tg-JZiuZ<)^[YrSCE8!;');
define('SECURE_AUTH_SALT', '=*2[6ZRzI+Sag%vv~Ir,IOY46J)^G7iObMa:]Lrxag=Vu6We#-3?Nyx.a_MUsM~#');
define('LOGGED_IN_SALT',   'gl,^9!+Qk/`5c^(_d7f[+Y?zlo!Dk=M29<+yy|K$0W>,S;)`vkAc<:;y3AA+Aah~');
define('NONCE_SALT',       ']VKEsR4 .*9@,:O{F]-38BA{s)&,*v{0N.tB1-aPGm-,^XR?HIp4g+1??!VZOL[&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
