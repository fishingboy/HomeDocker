<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'evonne' );

/** Database password */
define( 'DB_PASSWORD', 'evonne' );

/** Database hostname */
define( 'DB_HOST', 'home-mysql:3306' );

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
define( 'AUTH_KEY',         ':AYm)kt/6W -gTkWFCB!K(TdXOp`?#*^YX$vnASZSt(MJ9-]d9N]_=l1>2oL-2xl' );
define( 'SECURE_AUTH_KEY',  '@]WO*do 3EY;ks$saVEh[YBAzY9|/A*tszOhuq(vLeT=t4fF-S@<)&mnqTjvdrz/' );
define( 'LOGGED_IN_KEY',    'KYrBE>JD5ljPfGEpn.}S_>#/LP:~=Nl-e}H|F4[j/g%n!~Lq.goCnt4>r<WoFAZC' );
define( 'NONCE_KEY',        '?A3~oxo8n[jcd7Ka20*9;spaD)f6!d)O@i?>m429^%?_k#Z???MraE5(5amrV^zw' );
define( 'AUTH_SALT',        '~G%G}`pNNJ`gT:+{lkK[2#>iST<qf.hM>LY:S!B/a{p=agrH`%y:`n+/)$o5o[JY' );
define( 'SECURE_AUTH_SALT', 'B=*.dyfHw-vP.&,2Evaq*rEX}IyPlE2j.1${8HsMNW[c;TEaT|~i}k}i!by^Jl_i' );
define( 'LOGGED_IN_SALT',   'Rw/p`/$p)2*w93VOcQ^Ubb(k|DlFgv/$r2lA94I#8Rb[ckYw0I}6!%>:=2N64AmS' );
define( 'NONCE_SALT',       'x.NEl1OpU;:!1THS10X|P=JNK~_VGQ=6FV?b|/7wnlvF0i:(x(7pZ7su]J[mOAN7' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . 'wp-config.php/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
