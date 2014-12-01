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
define('DB_NAME', 'songtrung');

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
define('AUTH_KEY',         '(kL||Q*CSu}J[.z|.Q-Ll8><x>6|g_t1($RS8tXFjB#G[fY>H[H|-69*/`]K}lLn');
define('SECURE_AUTH_KEY',  '3IV:#RKvX<!nh>tKFNk?YQt.+1(_N|1p+*oYD;r6Z>[;JA)lHKri6xPR>Zr3&1%#');
define('LOGGED_IN_KEY',    'CMfg1t-HVL^r<Q27lI`G_Ln}AczO5XId,yMhtRbZ_cBWZb/*WPeG6gHtMbp&+$HY');
define('NONCE_KEY',        'SOm |X?+_>[lny1_<=}Iw&kBsRN;+vl*>|t9}z@l.2JB*HHj7G)`l{XP][#0],r7');
define('AUTH_SALT',        'g$v$=BE+-2;s#uMW]R%#P *i#W#7#?>HQ39rE,Drp^1FG/L]O>PDh@*cnHjzj#rC');
define('SECURE_AUTH_SALT', 'tbgJ/i6PE~wW[_fkJ>$#|k|wf|]yWQ:06Qs-@9Tv>5*1dk:#EYocDMI7,8|mHno.');
define('LOGGED_IN_SALT',   '77P#h<|9bOXT3}AsH.z%4EyZ&#<KC *+-ggG1K|#L|2`ApNg]wTW+f7z%Tb6S}q6');
define('NONCE_SALT',       '.&)p@ow{a#mSPi1PSkDg>Cu;jHgLHVIc[|.63WtUGIaorP}x*@!_W8z+=WJH0A Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

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
