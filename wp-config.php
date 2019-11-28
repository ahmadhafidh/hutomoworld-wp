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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/kitatech/public_html/staging/hutomoworld-wp/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'kitatech_htmworld' );

/** MySQL database username */
define( 'DB_USER', 'kitatech_htmw' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm0Rd9yf$qulOyA8N&W' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bK0- !t0866;K2$n6<Gv`lUq70M[F3=_);G][ES9fJ^SSF8ZhgttunQxS$A/25wN' );
define( 'SECURE_AUTH_KEY',  'nD*?A8g_Ox#oskutI4qrH:?~FLunUi4nLhQXM>hl=pek?W@l+L~?0|B0ehhewx$2' );
define( 'LOGGED_IN_KEY',    'B`=#D2Qst-WOeS-RLZb0yelT-!>=M5y-z|`N^:G o{3z-Uur30s-PX5X|YB@p`zv' );
define( 'NONCE_KEY',        ';YMvkgkNG[&G}i6q2$o{[6-$|r+j%I*rs_Og*J6NTv;-!l]%ucz+)m*WKI-DMJ/o' );
define( 'AUTH_SALT',        '{PEy=ncDp).0)@9WA%#b3VYP2j9fCY{cTx;w4+SOX9s>Vk9:w/J<O[`!}Tu [lN>' );
define( 'SECURE_AUTH_SALT', 'u/tw3zLW{7G85v49#^ERpJp,QUV q%C(J4+ZPl4Jd[k~5`T!.j(M|{)q3A%9#Tg#' );
define( 'LOGGED_IN_SALT',   'mRuW{]{0Un_gb;0mWx5DN9T}&X,{2zaQK3.o0mt!1f828,3Eeq=UrZ%o*QE|bHk`' );
define( 'NONCE_SALT',       ']k#RbFI/KtJa ykYb=CI;y=R|5*+a%%Uze1z|Z)-V%ajj!dsxdovKb<fARGPh,>}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'htmw_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
