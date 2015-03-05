<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'digitalescapemedia');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         '38X+h+.+b_H71dc!=IS|ou*-g?P{Ni+Qn[|bQh)lfH9!|JO:p@x?XHV/f@K](r9X');
define('SECURE_AUTH_KEY',  '?s5k)|qUTS.;JAVGPn5J%(^`A|:{MZVYjq8G|Y31gAG-n#zkgD5ZsohAO6!7)EZy');
define('LOGGED_IN_KEY',    '/8w%^9LbBgi:(Tq~dgd-^vYE.um~|C2QYP{o1*Y@1K7v|{n{LshwS<H-*gl{:qwy');
define('NONCE_KEY',        'N)AK2&a.1*][?@H[*+{@,bAfq255Obw`E+i4pN!Y(TYOF*eJoVw89~r+8cX`U]94');
define('AUTH_SALT',        'q;`:n*<vy!(}j%=x;d(mA:ds5%&6-Fu [<1o+2CDG-O/f5[ `*LEQmCaLS&g}xC~');
define('SECURE_AUTH_SALT', '[Xh2GR9U|6509B;<ha?+tV:LONQH8C7oVtRpWCYDL-@fj9KHLf?ap2hNV*4kq+XY');
define('LOGGED_IN_SALT',   '(y)C8!1|OPc4)N;*Ojnx+O35uD[r>1^m_X9nvVxJ?}k#7XG UIE1kwi!74RDC1;,');
define('NONCE_SALT',       '0s0SbnDY`)nyKT$e.3/G/)&0KKsuWzSX:s;{R+;Glb<.QSw!f+~Nt{V*[4a)zKEZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
