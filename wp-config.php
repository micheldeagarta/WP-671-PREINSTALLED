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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// Définir les constantes WordPress
define('DB_NAME', 'local');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'by2{q4I<^rG_mf@55@DhlL[p1m*FKjvfYItK(uni+ka^CPiKQy)Ia@cDY<Q9$n`T' );
define( 'SECURE_AUTH_KEY',   '5[V~=57kM=/Yd!fK>aOz<<dWjGgt?:FF0wRmn%bnk9]%A;Dr`6s XD7.(6(f#Zz(' );
define( 'LOGGED_IN_KEY',     'kZNZ4-OL8NaG;WA!6O)E!0g;{CoR=gg%lrtyicu7R,ZDiY F)6Z6CtzSsNi%JI{z' );
define( 'NONCE_KEY',         '(w-whr}YO01H<h>Drpgfo9q@5~r+}0H Owa%CUouB.th,O?J4dv~eli$5Q|6qOEx' );
define( 'AUTH_SALT',         'G4o^qUlF_Cg~-FcmE__AdE<KuhGIG2bjK)uE-+&4(Zz_gBhb6Yn$%F}3^%=c]15#' );
define( 'SECURE_AUTH_SALT',  '1YAUvmYjqE>^7Rt]s,glL!kofM^:R_3h]r&!<BEoLXSg/=uU~51|_ECnKMrm$:nf' );
define( 'LOGGED_IN_SALT',    'MAA[z.^rZl&Dq(WzB)bK=w?9nh{)3q%|^}0XPeYE`_p9!4p:|NBfdAMYvGBde,>q' );
define( 'NONCE_SALT',        'H9]BjW?ILaUD86^^~PRAT8qdwfYwC`~qRHqe2uvlDlZn&Kv=/{#m[yVd04y+n+eO' );
define( 'WP_CACHE_KEY_SALT', 'DL2>RH9|CHLU-9Zj?2`1V0zo|e>Tyrt,;nK[y~8d^--+TZ2FCS>vYav1B=~h--YP' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
