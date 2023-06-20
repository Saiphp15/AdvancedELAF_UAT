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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rasansa_uat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootdb@123$' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'GP2P.&z;Htna|~TjQ#7xi{Ky:*utL?NYXD<E=ez<`5.eq9l8K0)-A`c!(#NPEK^k' );
define( 'SECURE_AUTH_KEY',  'fL|(A7Wn-nWNfJu&T<kW>]y,ot%iODr4)`+ZGaPRc>33BE:Ny{5M:hIw8Jda>G/@' );
define( 'LOGGED_IN_KEY',    'C}NCi)-@P92hIi ,Sef=:WjT_=E7=pQz~bH[ESV0EU~:HdVTw-dHgyACsYnpR!mc' );
define( 'NONCE_KEY',        'cxks|){(I8x%QLzC4f><7G>}@WTNDdDrm(op-P=}6QX<0z.cuOfZqQ?nKjLaa[b2' );
define( 'AUTH_SALT',        '?i|N]FQap<5:~vhZ^oj}nw[:p+`#5n4@XN%-y%ZNpkl^MQx[(qlC||GV 5*?`(Wj' );
define( 'SECURE_AUTH_SALT', 'l}m~9T1/K#i%@#,W lQUYc4pNudggG(uA:~N<CWHYK~WUFb8fhV5*CIGUC}-fnqu' );
define( 'LOGGED_IN_SALT',   'r!]q|1X7`71qKG>jg{AC<oVEVtN|UE&+L(Xjm}OpE:rtAht#,41<|GZ(d(+jcgyb' );
define( 'NONCE_SALT',       '%1?zM|@}A{RPZsV):5S`xZjl%V7+(MVTy:%w`mVT&ky}vB@OUhA0~`83yhR.i>kx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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


define( 'FS_METHOD', 'direct' );