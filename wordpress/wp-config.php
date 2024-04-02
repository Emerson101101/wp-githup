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
define( 'DB_NAME', 'Emerson' );

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
define( 'AUTH_KEY',         'GN.KE%N`4a$3LGQ9UGTDsb}K4lnl@jz!l+`m9wK2sg7<Qe%</o_Q,xCx2T7c9)x1' );
define( 'SECURE_AUTH_KEY',  'am+X2+ WK<SUuP$ukR]sEes}e;UL9(aEen{`UriJ=.=%$;3{].g.e/BS# qY-5}x' );
define( 'LOGGED_IN_KEY',    'H2Qu)-]0>7kg,3Ap!v8@X|2.30L!&m-4RFPyNsIh^(p86ouTy$IWI*rt)LuqTA,N' );
define( 'NONCE_KEY',        '! rmQiy9T(W.`cM1tDkkNor2EeatPoJqt32(Z@HmP58A=i`&p$-J1TDI$.!}9G~{' );
define( 'AUTH_SALT',        'G#vXf<mZ_35)mFUgzEfnNu}[OyQYpnlDVj,0xi5Reng(Ymg@>!T ebP-.)9iki-b' );
define( 'SECURE_AUTH_SALT', 'ntGd:h:7%YG(z#d0F,FJo[tx#0]w^8YU>4/!]s{-IDP/u+6fPjX%%^z!kBvXZv_J' );
define( 'LOGGED_IN_SALT',   '@gdH##Xw-.`0~9N6E8o^}#{Nzc];cpKR$7,|`Bu>=F=L=G{t;%wHb7Ir|`BqYi@O' );
define( 'NONCE_SALT',       '8-?V*h@j-!)If2e(UMuT,sX>C2$34[Vfz]|.U,/NoIiKNy|$CN4>U7DG90EbNOO<' );

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
