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
define('DB_NAME', 'lelissdt_wp1');

/** MySQL database username */
define('DB_USER', 'lelissdt_guido');

/** MySQL database password */
define('DB_PASSWORD', '@de1ante');

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
define('AUTH_KEY',         '83U`4yf1l#a ,KEG@xnigq]%w`&D7%U!4YUmvv.~|p$v+ivAH>s>@+&>z+r:|1C8');
define('SECURE_AUTH_KEY',  'P:sV/7sZZ&Eb+<U)ki=gPSL=kUQcEA5)+na!jK1*MB<$9?sf4?cn!:YA+&R)>Me@');
define('LOGGED_IN_KEY',    'HD8_4, %KT22Z%y1^>A[L%6Kn#`L&8Msm{{:U-qbh`Ajbcf|zge|z:|@DZlSRS0w');
define('NONCE_KEY',        ':+RKtx=KGyo!/@FM .,:UN<<Y+A[o@y+O%h&U|&&hpR!M<?dPe0D+ElJgz]$~KIc');
define('AUTH_SALT',        ' (E}5]F!)8o>EM{-Zja+_yx38e8[,HOfeN]C)<7@Ys7-fqb}HK<0LJ9b{?8f{aH$');
define('SECURE_AUTH_SALT', '~D^BB&F56`aP/oFDkJ=iGx:;PXJ_Z/EfqWF@UY|o76V,-KX+6n~P+ q]/yR1Yz^9');
define('LOGGED_IN_SALT',   '>WPX[x87qO-#/-pWV7i[O6|h%C8F+Td{?2uX7Xp$f<PZzrp+/?4a&Fo~t8|BQ V=');
define('NONCE_SALT',       'T>Y? . XwgY|5%db=3(b@NE+`>-Zn/5?Pl^U*!+?R()`~Yyyk<D!Ii3KG&#sqyFs');

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

