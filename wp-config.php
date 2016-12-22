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
define('DB_NAME', 'project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'itcode');

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
define('AUTH_KEY',         '%:nZqX1Pzp/x`+nB@T!j9C&7 =3!E_sV|gQE A.6f}kx5)ZY:|M?P.Ra?/J>_DbL');
define('SECURE_AUTH_KEY',  'uZ5aa McBFDw,3L<OF,aBat9|[3,$zm[Uan-#emQQTNSqwG;sh^M@q-DDHy+p5, ');
define('LOGGED_IN_KEY',    '@96%UfZK=>3L=&cGi]OhPe?A.f*8/a@F5zh~,$)LkEK1,Fp6bS:://kh/ EB.+V ');
define('NONCE_KEY',        'G?:zrZy%]@30@I4QQ_M/rQ6w!*5mWwT)ApK`g!}~0jN~P##J!+ _}qfA|y4 d~iL');
define('AUTH_SALT',        'a#A?8)_pKJ1pChcJ3r>fh<gg_VjZNXcLqH}RBGRSciGw~dyIj)kMk6Cwq*>{_K)U');
define('SECURE_AUTH_SALT', 'aL]kX4n[.+3nEA3v]HxbAX#aA0zN)hxB%j5S`JA a>J1ui+=4[$V_jr><ntaipl;');
define('LOGGED_IN_SALT',   'B6$L*_OL&[G,*e1wlO?YK<Dc%p]d|a:s9%C3xm0zr  |>`!K17}kn^d9HWQdw{VJ');
define('NONCE_SALT',       '*1,{}5}uuq)6/xqDMH/gp1^W>{7~U?R,==pJ+I,~~}R|y=C@2PXk{3yOcmEw2fWd');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
