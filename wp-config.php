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
define( 'DB_NAME', 'onlinestore_db' );

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
define( 'AUTH_KEY',         '%}Z~x/a,I_aS?U,p0>X!.{ZA1nr@|~=0$Qwmjo@}k~z(miqtV1]UwdZARZMk!(+l' );
define( 'SECURE_AUTH_KEY',  'Y~bC2wL=FVR?~iCx@EVp~:]/w~Vj4/FA?M]NwC6+Aq3hTgO%!SiIN@2U~-n=%r3!' );
define( 'LOGGED_IN_KEY',    'mr(<iMF,FQ^n6FVqDKo&wSyxn>(cqC>;CUrptXs|l)+ZUva0Ll:)2Km4S4wr(fYZ' );
define( 'NONCE_KEY',        'AHUPv>S98|p)Kl1O>=wq_(sS12.nGh}@H<to&t:dl!QZC{8+QOXVJD{>`:GC(`m1' );
define( 'AUTH_SALT',        '-t|} `ryc:yHZ^}aq2M+2se&8[wesY$WLuyWLQ%HEyaZo;8tqv]1fGf---(i3L;M' );
define( 'SECURE_AUTH_SALT', 'H5{sF2|hRWBdQaa&s.R83BST$}u$CRw%{UiKyPw]t5_VW]^GDifC,l5s]%P/%F!X' );
define( 'LOGGED_IN_SALT',   '@z.Kbr:U#?P9FEDbE@:X(uImrdh0As 2 `m/GA/CvM^ruA o[I<I*C%pfpc^`)G}' );
define( 'NONCE_SALT',       'n3YZiyx)s7`0hU-pm9of#0Q!@FySBheD8>>`nq;Z`sv3-6$HWWQVaPr>+T{p,zzB' );

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
