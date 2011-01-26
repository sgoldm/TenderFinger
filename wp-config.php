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
define('DB_NAME', 'tenderfinger');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'lGJFaX VR/U!Grk[yc+X&.],P,VQ-U+8;fb-?mKmI:)x%hnl<+PL[2CR>J~ ^eMS');
define('SECURE_AUTH_KEY',  'G*B0?Pdgm~?1SHXP?Zae;1p /F%gC2lx_fQ=4GHURIniWm6`Wb@zJMB!Y->B0)Vr');
define('LOGGED_IN_KEY',    '5SLu VL=nS&j%L<T0w$?aeE!!u9N4yCdKGGa%N+?v&H-hknu~PiDmx9]jA{?Ky+1');
define('NONCE_KEY',        'NbF[3R!/f|O@P._z!WUYG@|,0pd;X|5}It%nDHz+54NMSn3{8=;lqVv@3c1_P^Az');
define('AUTH_SALT',        '&`@}87|OXJ%C^H}o#Eyz&Y1_)>Z05{%P9RGxHg;+>+:e%- mJ~:z*2_%D4{gzHR:');
define('SECURE_AUTH_SALT', 'Lx1jQ[0X*!m@g]*pM&4/x]!u-TH5]l(0s`3P<Z|?l#01LMLt(<m-tq(Cf}E.hUjh');
define('LOGGED_IN_SALT',   '!xh^ZXG!~|o:<J>4Va.)!uU@k:>)P>IZvPn3C@hIn[Lq=Y)sV&uhd^6w*]$.$j*Y');
define('NONCE_SALT',       'XB:iAsYQ}A<h=wz|0ve&e#jEbgJ*,EGc$FN0^*->8uC~=?9+![wIAu.y)?lm_Kn=');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
