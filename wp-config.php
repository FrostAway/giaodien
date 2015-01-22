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
define('DB_NAME', 'giaodien_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'QLtHyLZk(.:#trebzb3!K[i8;3QY/uFbe-GnY /{bFf=.-zeHzmO11>0eI2[4)Ym');
define('SECURE_AUTH_KEY',  '&mW24:V;6Z[lJGDSr( @Q~i{sLO;_eyymG@{|,(@D^F+{Q(-4;EH<|dY(9UC9{jI');
define('LOGGED_IN_KEY',    'z)bj+jc52DX*d?yShca|bsBvWUA9}+ W!Ru/dBIZ!u.M!XXEa8ls53[OAE81vRiU');
define('NONCE_KEY',        '*=XANt&),EeW8SNC.0% b;z`6E/!zZwv&}w6ZIH]sy|xXbiNc,i|70pSgs{!ei-_');
define('AUTH_SALT',        '|Wqm)<y4O_|L&Fp:Jv%j#4Ibb1H(y>a>|MfCv|rhgJ:NMS;fVAo|k(?z~~mx&cG6');
define('SECURE_AUTH_SALT', 'x&0Jz+_F~Kwa]KLa]1j0xy$vMJNe[!YiS;hqtl!~z+[~r{q0x:/$;):EEqnvP&rS');
define('LOGGED_IN_SALT',   '(v;(Z|ix>rhwUoAIE73]]M=[IF8?h1xL}VjXm=O2tOY+YN`;Fbw~,I-1g?yunSI^');
define('NONCE_SALT',       '-iH `NK_,ffytzHc~2DdMm-_g9ldJEsQ@Vc_hGYi!8@7V1*8S$BTVLu%7R|&{s`|');

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
