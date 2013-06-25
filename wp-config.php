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
define('AUTH_KEY',         '%lbNs%NHYt+wKT/C7Nnd{9p4MVhraVW+=},q^@]Z2s]lQl39*G23t[pC9-2ec]Gz');
define('SECURE_AUTH_KEY',  '8#3]HXAMe|Xb&Ms-EiqM|D63|0[}cwx(aVPO(~+*@MnVj)eE^^B+nDP!dWlKx7Rw');
define('LOGGED_IN_KEY',    'gW;_<wzpFC^KFLD]AfcUwq_S>Mi:8x]KlB<-^Z;#C-EqGZgp6w$y_GwTOd?sA,TD');
define('NONCE_KEY',        'W/wK^F>>)Ajo,.Gl0lORBlFA=YsW|1>]IZV<k4e_H;k2sjI1,W-.^s{%G j!!kUU');
define('AUTH_SALT',        'sW:vE`1nK-=WSZhA%k4^=-(vsD8|;ZSaAjphv|SJ8x)2SkV|%d&D|E51o+s+)~h#');
define('SECURE_AUTH_SALT', '+-d~8UW1bNjO6!4F*&9e7s;L>_p]O)w~^GBzxN+1geb5,gw#^IGRC8A|gmf#V*Tl');
define('LOGGED_IN_SALT',   '<ikK%1b5& G4reV)3(9{4;mtft8[N%62E}LH<Xi33VM|k-$XG+>ZAJx6*e*=e,i8');
define('NONCE_SALT',       'HQ9!`!|p/-Fihf6-5Ry`jAp{J{=+T|f/2l>&97cVo |,e-nOGKbfA|yU8|C6bd)C');

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
