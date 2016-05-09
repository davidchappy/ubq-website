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
define('DB_NAME', 'wordpress_ub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kR1SM@R13');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** User added - new location for Uploads folder **/

//require_once(ABSPATH.’wp-settings.php’);
//define('UPLOADS', '/wordpress/wp-content/uploads');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|Dgw<@r+}(&ySePv[`laG>-qcBB+AoHK/r2Bb^9(?)d`Jze`o^WRCJc4+8gA@7UI');
define('SECURE_AUTH_KEY',  'q{U9TKN3w.u;Smrl-C.o/v(PScRT;%)_V2_/^+>7GaiFrJ9(/R?<,Z}eJ<Hn=k;u');
define('LOGGED_IN_KEY',    'P0Zd:D5RbRmrzgC_~KJ*azFeGFWTN0~R.f;UI?%HO9O3,Mmb(]+}Uo{`+,t2cej)');
define('NONCE_KEY',        'OU=>hb5uitVe>~=L*E&5gE &)m3mD/p&| `T[k:^xlpqS;mKx95R1@{Nj@604zX1');
define('AUTH_SALT',        '55YV?&Z5(FwnSQOOy%&Xg;Vj2P~leNJ/9qz7#z9B>b+`Tbhc`uW_[X{jMd>Fua|j');
define('SECURE_AUTH_SALT', '<1~b{s@<@d,W#Vza;ESN$WV?C4fPZ-fs?euA3u89?#aJBd9$ku*j&>Le9&%nOmU/');
define('LOGGED_IN_SALT',   'Ca )i-*lx1,8LZroNQkn]WV6K.yi3B 80fTVbb)|_=mK*a{0(Qh1g[H#wB]PjeCa');
define('NONCE_SALT',       'jvqVC#wbWdm!XcVkq]9`ukhTK|`E~Ju,PgM[v<[zrwVRI`y|ikuNb[jr:sZeA&}_');

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
