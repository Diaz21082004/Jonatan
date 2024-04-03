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
define( 'DB_NAME', 'wp_gh21a' );

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
define( 'AUTH_KEY',         'W]7@1er$ D;Oi %:q8P@Z-V4Jm.amlH<eWbl,$%EhHT8lkX8DKvfQZRVrd#0^/|d' );
define( 'SECURE_AUTH_KEY',  'pddQ_*mpf37+[u1Z[V=r-XFj6y+s9809AS&iQF{dxFCa<;..nXF3d,d)]f%&d&Zm' );
define( 'LOGGED_IN_KEY',    '5]04MN(o~U]!p%Qq(O@l|ec)h*~_qczl8zbs^57Q&-}0Cb]hDEu8]Cn,X3fkS^LM' );
define( 'NONCE_KEY',        'pL^;!hE8iL}X/+>VE~z<=Unw2nI.=cXuW8GlDwx)#fT-S|uCrV`4F`oDDYhV| <P' );
define( 'AUTH_SALT',        'IS%g2}$ol~[6dC(bE{#bD/*cwj!<cS#t{(N,Z>+)v:M0`X7tv..4IuW5z/+=-wP9' );
define( 'SECURE_AUTH_SALT', '+r>cxh?lbA*)p|i8F/(vN;cp:0(?wq=sdcb!LZv*uQg.u6*^7>!f$x:3SAXqZj!h' );
define( 'LOGGED_IN_SALT',   'C:$j?@%~EiRmv(+o!4BH81/KJaT<->[F,4@gO/!_.D!)Rry+kmu6V<J.~lh#RG]8' );
define( 'NONCE_SALT',       'Nl<3a}W!,kUt-| ) ]50EOc?tLcS[s(/{zLr<-g)-L2^.CBa$s.?2z,1.<{|+anh' );

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
