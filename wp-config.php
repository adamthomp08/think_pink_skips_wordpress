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
define('DB_NAME', 'think_pink_skips');

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
define('AUTH_KEY',         'mGwGHzR@^[w&D<m&xzRyl4G[*Ir4^r<`F{?^}]KAX3w{u4Qa+axOI9dE/iF&gkQa');
define('SECURE_AUTH_KEY',  'EnpFdvW(~5e,4fI;8d!-pmhr|H5^E*ShBf.R?A,l<.~5nk;cf~.9yr@%^J|pF @{');
define('LOGGED_IN_KEY',    'sY0F?/C N;umYLAf7]|6WAL-&L}8hKK4i6n&=Nq1IY[n(=!0NmU[zyW_gi/IKM[P');
define('NONCE_KEY',        'tL8,.YXGq-Cq4^!_(v?:9(5V_VI@$),+iAG)#%}+f4A[(?Xl-~RBsLvj~:k:Eq3o');
define('AUTH_SALT',        'Kn5.!SugkyUA$,/4zb~oJnCGQ#sjzdl)V#{HJUM~JAf/oZ6Mll~j`dTX;Ni+{u[F');
define('SECURE_AUTH_SALT', 'aC] &3-$lyP !>n.0H&<C{|v|X$^U2Li|7sEg*P!<v?5i%,0P&3kSuNWuv[QVGX{');
define('LOGGED_IN_SALT',   'N&q<zJ{{(f~J@1)Thlb<kD<Ni?RmsPjzjm:|6KlEy@&92&?Tnj>G*uM}w)v{9<i;');
define('NONCE_SALT',       '~~A[bfy{y7ah[R3 $`Pj {)PI&9R^3&J7$-SJ[/sDVU_^k%q!Rw$A fsxQ+&?_:q');

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
