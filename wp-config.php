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
define('DB_NAME', 'ayoaycoc_pncmun_db');

/** MySQL database username */
define('DB_USER', 'ayoaycoc');

/** MySQL database password */
define('DB_PASSWORD', 'P455w0rd!');

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
define('AUTH_KEY',         '4N.7o~Sbut#%AnrUe{g:|@ZX$QU.eX.@ay@o|&f_wV@Dok1vfy,P>?Oc+i@~1e}-');
define('SECURE_AUTH_KEY',  '|^|hw a:f&$)7LPqgd%RGxkx{ 1U{cz}u?_^^5x+-Q88:#+HJWJh{+tgT1ydC=Q&');
define('LOGGED_IN_KEY',    '&^Ge*2~gTB+&/zv<jzP~~tk|h2j]zV{HOuI(j5ZdwF6HP:~KQ6o4{66vK~ua!.Ip');
define('NONCE_KEY',        '=-8w23Z4Ik$6W-90yc6|4^WW|so>Z]%kS+D-8Tz +X.(+GtT+>`r|=#m?F:FU<Sh');
define('AUTH_SALT',        '[#yLb<27AH%|}+tAeX3iB=nF$+@rkC{HQR]8^iJy<3A{x3,S#P#@Xc`[CT<EGc/n');
define('SECURE_AUTH_SALT', '8poen48+~uSc5@48O$TNE:qx#P> z7Jud^?ySPo+}xf3dv`yKm>j{G}v,2VmP>Q]');
define('LOGGED_IN_SALT',   'y429p!k<+(!31^qH>yaqvy(-%^jqxa!^8_dpjyFWF)v_+{~+X[0OuW}s;xY[;),L');
define('NONCE_SALT',       '$s)`fvLbK<=S+eAUws[0-GS:^3+rctV/jJB0GC&yw-B.lb/=jfKq!{di7W>+`=Hq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pncmun_';

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
