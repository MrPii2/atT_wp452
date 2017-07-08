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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ';~@5MTIhm#N<Tvi`rppJuA@k_,$!Q:zXONR*P9A)]!1b7V6rnKa1Fs/&?D07g%q9');
define('SECURE_AUTH_KEY',  '#&mdXV3.8u+=SvnWqYVAA_7 R6Swo~:oN%`/SjyP-@!Nk2z#eh,|5%G{=VO+x.1x');
define('LOGGED_IN_KEY',    '3{ep$6`(#Yhl*)xj}bX)l8-C~}Cri^]u`)`{K g_4Tz[yy/<b^T%ui$0DiCnD}3)');
define('NONCE_KEY',        'q&-ZBP]0?/S`v{=[VK%R9Q~^B7N,U@x:iR%B<Wq{}5->!k!MU_IL[V=M!Xooq<?F');
define('AUTH_SALT',        '##GR#cu.D@2k+ErYRr$k2,_)mS58ApQvAbSp (HFrwDz%4:5Vfx{<&~=hK(k;Q]W');
define('SECURE_AUTH_SALT', 'Lrp-@][M8mny{wN!A#Lt]~Z.9cYFT=zT;fnQMZ`O1]qr^o(?g,qf{x!*u6iINcVO');
define('LOGGED_IN_SALT',   'C(x_d;d}~&_7h{/M;$#+9LK}a4J`4L4!8T|E)e`NP[g!6x3}n7>Jba}IlSmwW`8=');
define('NONCE_SALT',       '3>Exj=7}%[DdY9~+smF`*I+G<+aawYUtD5x6C/e7WC/l9ck<qY!XhGc97re[ls62');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp452_';

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
