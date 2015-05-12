<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '0zGQusmz[:a>OH@ %<iI1<HmW7T3LDK3&rSR*{MP<w98bVi1b<)pCa09<5W ^e0{');
define('SECURE_AUTH_KEY',  '4[v4+uh~CUp%u,DyGaU~ !]<(-g:KB<{WJO6`r5]{ok?+k,zR6_05Y9`|(YtL>Yd');
define('LOGGED_IN_KEY',    'rxxURN`Tjo,Y$Cm@b:SI.rH@ZI/ZY4@B6DtdvXV:%e0<dik0rB<z>mKsyo[r^37b');
define('NONCE_KEY',        'i&[h)we|:go))NMy[U0R_Zu m1Z;$gX`[9{j4nIP^=uq(rs=I9YZsr:~(riiA>?k');
define('AUTH_SALT',        'l,3#`*P7<,`WmX~/v6G>*E/uH5I@MS$8)+2 +PFlFQAVzG@G}GB=v}%0qlxLA>B7');
define('SECURE_AUTH_SALT', 'Ko2&RhRabzZmMP>lq9T-J;s }KVk8=w9r}i`SCN9f,J@;me~329I6Z@9HZpT60tj');
define('LOGGED_IN_SALT',   'c1_gFQCM7AK^KD=pJaaY2[:RPerR]N~<3qD.%~3_orF^o#T=W@5%>0@|mVB/.%DE');
define('NONCE_SALT',       'v/ dCk$};9%XvQ/fQ]H sDbMG5<6?R2C*mL(Ys3&49RY$sMA?:u[(ad4{7*@N>vE');

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
