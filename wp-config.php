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
define('DB_NAME', 'festival');

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
define('AUTH_KEY',         'rCaV+>-]<<u-P)E-bcd+|&on-Zp#NU-naosF)%)k>Nbw+^N*[^J5m}l?72nutWSv');
define('SECURE_AUTH_KEY',  'h>eym~?nU2L{T=O4wG~8im.m8$ek}q)oIwO-Y*>d<u>tBaTm)>z)k48FU-B4Gc*0');
define('LOGGED_IN_KEY',    'e?.&5[ &E|aN6EMg%Qd_AY`=s%I$W%O>_u_O o#uEew{PKf0C2[nSvB-4f|?jARY');
define('NONCE_KEY',        'O5q[KGt0Di*ZSw~|J_xGl-O60.#!&O>hbENkE+X}8Ts$E]!2+gcun}Ft}=(V:7q9');
define('AUTH_SALT',        'Kk{-edKVCX3#.yub>,*+Kg]Nf--x|9|r.y!IG!-G_`2TS]4_w],nf%{K!6;>^C6C');
define('SECURE_AUTH_SALT', ',Pe*K0S2J9Vl2+Hqu!.gk*0Z|!IZ:vTp+HqaT}|liAsj>Z|-iX@n[C+amNs=OqJ6');
define('LOGGED_IN_SALT',   ',yFC=[F5;Q 9wZ{bg|lO_iqep4]oU/AN|I:Xr8^Sn6v+F]Qk(g-W+3tvN(t++T3F');
define('NONCE_SALT',       'J5+1=sW?0Z ,Bsb+|WQb85xLvtGS2ii1a9*%BIY;:5S#oWf(.&E@%rDmn$De!/ t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fest_';

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
