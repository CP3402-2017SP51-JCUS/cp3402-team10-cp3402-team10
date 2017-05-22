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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '13110fc8095c46c826bc8a456ef76a29e44d60340b05a905');

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
define('AUTH_KEY',         'pP~+A]fhxYvs rDr;2m?7,KKInZ+63Ya{3T)V9]vOM>@&Zb^zv^|NR(<;_2jq!$S');
define('SECURE_AUTH_KEY',  '?}^_NQ_oju6b8mWB5]7>R7<e<%* MCMSgmJs!1vJ>M[fZm{PC7#w*y.9pbs3pXRA');
define('LOGGED_IN_KEY',    '>lbx9r20K*`39^h[kCX{t:+mQ4;8y=bvRw:B6TV5*Uv@)<hEE(/aX<)@ h*9^ccr');
define('NONCE_KEY',        'y<j2U>kojOf9<xKeVOgr-I(2[Es?~-DL)Y[1Q;&aD Cj[e7x2Gv^V/~p}tCpF*`y');
define('AUTH_SALT',        '<Ip=kM_D8lnAI9?WF0*/_u0As,3/L?;BmAYXWAS2IC6BE1K-%8[,0NoMQPJ,VLi]');
define('SECURE_AUTH_SALT', 'rJaXq..`$|Cn,/bdcNH3x%qNpR!{/MX.U,NX#d-P4L?+Wn!qKEY,c6oGR4Pg4D-:');
define('LOGGED_IN_SALT',   'At?LM|DaksXlQZgPNEb4`{V?gM9wk.f2agN,HoK5pE|Ed3?U%9E.I;h*I/&=xX}G');
define('NONCE_SALT',       'vN[k4$]H7Q>SsOpBvzGLtx]&4>2[8{T+5>zkE-^=cm$79(fgn#4-^)AGqtR[[R1p');

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
