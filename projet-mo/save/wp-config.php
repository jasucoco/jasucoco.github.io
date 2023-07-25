<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projet-mo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pw>&qExdQx?Z)`*MvqL(8~2k:AjA%Rc=vmM.6. Mts?Kqz*^V3OpY[gY3Cj>gdME' );
define( 'SECURE_AUTH_KEY',  'jyu,e#~.UQt,SpBq~=8{W?FB}kwJ?(l{??Y@&/1<gk?PusKvD^Ptk_wST)wk:6#3' );
define( 'LOGGED_IN_KEY',    '&m?BH<~83{9>iL(<]uc[1jcz_[KMv5*9.&1@mM6~6OceY,^YY9zsl LqH|PIa|G]' );
define( 'NONCE_KEY',        '1G*L+Kv32In~?-adQZ1ZTQNUO~Q!K6Cxb|YJGv9M%;5wh})y#iO=af,A75fN:ud3' );
define( 'AUTH_SALT',        'UCRaDfJg)p1Rnl8AM_#/#wMqCe|02luGZ($KL,gbzjC]7el5CyB&}5J/O)!*y>$N' );
define( 'SECURE_AUTH_SALT', 'u;t_ZU~ty.z4Byi0blk4~kKq8 >Ls1k;ZY!7RE$W6N<%:%9bozpr5zM|5N!3WyS&' );
define( 'LOGGED_IN_SALT',   'tU3hn&x8h<|(hpT5J03%6 {_Jdu$z> cT;nmQ?4`GhW9$^E/9VvS79?XB@hL3yI)' );
define( 'NONCE_SALT',       '%0k(zoh#A,e4N@HAE{<2Lv?+}+0bN3lP` d ]SGxi32}Z{##=YKkSfaNETERxUYj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
