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
define( 'DB_NAME', 'ebooks' );

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
define( 'AUTH_KEY',         'e%q8Sm7q|D&}pmL<$gc=<!a%B_d]>BEM@C[FxMK6X31I35ednfSiz_2?MCJ1D @e' );
define( 'SECURE_AUTH_KEY',  '.XLLwUP%SA#NfUAPthGh`*+!nI},m819]&^l>}B-y745q5UYuk.VHZ{Ma>@do[i8' );
define( 'LOGGED_IN_KEY',    'KAYkX?d!_#6x-VU{:oe Oi,m/Asj{3`NV=!||_[A F<>}T#NF#D>tO&t$0<+iHl*' );
define( 'NONCE_KEY',        'Z15bLe9qw#LQ`GvW-=8c:DbsZMbg>XZ#zP]|`CC#@6{ZO1 qwoX:K4FIu%]PVA,c' );
define( 'AUTH_SALT',        'J^9DsO&)khB=.SIpE`^]&@U-|~BQo/POFQ])l1$T3V&QV7(a3IzMTmT@8fqhujcK' );
define( 'SECURE_AUTH_SALT', 'Ia-eGhGzYn8exp(oK<.Kp@GTj..&9Y>>$Jke|4$i(p}F~.r5l!%FJ$R%nA}Jv[d{' );
define( 'LOGGED_IN_SALT',   '=lO^cN|&%wwmW._>]7B|-:VU3;du&BT]q4 i`,)E|W~aZ4;j8wi8zh+_Eg!75VDr' );
define( 'NONCE_SALT',       '.~jo%.b$#npA5&a6j]4}T5w|1F:&tD5g6e9hXV7V,`V374 T]>O=K_T$QPX{dZ_-' );

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
