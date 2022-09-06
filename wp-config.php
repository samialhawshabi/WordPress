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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'dq8)QH}V)(x=B5.YEq}]B<lPS-`SgIs{=u2[48qHlsdo|s8xKRtUZ}U$qOt&JX-y' );
define( 'SECURE_AUTH_KEY',  '3%mb[1B ,?+c93jKJ=f0$ooqidW(DBQ14 J1BA}9H8[%;][!m;58PX3(E2uu=qIJ' );
define( 'LOGGED_IN_KEY',    'rJO~-rRja@io-Y&RAR]M:E?VC;1fpTWxpeD~P^g(1#T$[by[.u5VH{R{#K/On/2@' );
define( 'NONCE_KEY',        'YrF:I/{}[>n$FpV/#skWryPL)-zP[4e~vz/S6%! NB|[mIeds#ml?X;9Ls{MSr9L' );
define( 'AUTH_SALT',        '`=Wm8&KaEK<KV*!C#fA#Ln)$ybFM2tfd-g]Y}d Wpug?1R_I~E#&C0cKb>(+H7tF' );
define( 'SECURE_AUTH_SALT', 'X_}KLYX%g4&=8np/]{h|xP>Rvq}N=k7mLLHc4HDrxCaSExR*CY~KN$Z$G9K3AKU;' );
define( 'LOGGED_IN_SALT',   '#Ybj,I!AkI5t~nXtv&8?hgsIT`9 ,{(s5y4}v9L3GR?J]z`~?7y5I DS>YE7WS8n' );
define( 'NONCE_SALT',       '7xf9>cQakB$Y5rss,2y:eCdWvb:(Zf-Jn{:p, +J6#VK&|Ca<)Qx9],@OaH7XC.8' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
