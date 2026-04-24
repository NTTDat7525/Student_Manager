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
define( 'DB_NAME', 'studentmanager' );

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
define( 'AUTH_KEY',         'h,]ST_co#Lp(q yhhmct%(&`)H=VV@f9z._y,/xWlky<(1gHl0-=h$B7E cta0]1' );
define( 'SECURE_AUTH_KEY',  'G:F0Hx]H$<Vy}3|>^4:Vq.fe9()YkQ#z8P|x!MP/DnA<hwODTubShz?:e$$9|&o+' );
define( 'LOGGED_IN_KEY',    '#V&vi8 [1r1}]t:W7%8sKw|Vu!OA?WA-Mm(5{0!]jxTc.6q4Q^v%)z)AK]Mi,|G_' );
define( 'NONCE_KEY',        '3V.!A)P}L!tk}nxR8C7;r:rfY*yA!XBH!A=BpVaJKo!n|[`W%GD9i]sI)8i|Rb4_' );
define( 'AUTH_SALT',        'P~#9<wq=Q)Uu/_8`.lfXtlj[!|L/[]fBMZL90D%q{z9]:tx@!-?4b6KLsle{?c(<' );
define( 'SECURE_AUTH_SALT', 'VjA 92! PdMy8l2` S+dek7V!?7u?7W{@{R GBk=SX/1`)7|X^fjZ(>3Eo<mNi6=' );
define( 'LOGGED_IN_SALT',   'ElrEzD/>x&mKj#sI*<G[Iu8GEuyjB:|(n7#xw#T%)I#{{10S:Ikb/R>w&*:-9B4i' );
define( 'NONCE_SALT',       '&GxF&roKfbHqk[IwUR|uo,H@rv{/H/m`_MMc_c4bJ-NoKZ *eFv0RV26Pw>y24/!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
