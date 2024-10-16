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
define( 'DB_NAME', '02_db' );

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
define( 'AUTH_KEY',         '$f%M.VB$0T!Ky:i&S1TYbw.#7;a@Z+v#Tg3,^ i$CtE4m #}ls$eSANP9T]6]%]y' );
define( 'SECURE_AUTH_KEY',  'f:hUBu!%OU_d6DAzRs~^jA6@`>>&]ILDy@?5]unN3L,WU^E#H:js934OJZ3;%pB4' );
define( 'LOGGED_IN_KEY',    't!^fcS7J=6;j5 Z$*#2X05sC#j9vUD@njSrGpr,y/+-1,kSh2ZT3HK_AkCvIen2o' );
define( 'NONCE_KEY',        '60;~,W0BB=-Zh)3{CsYk>Z:?a}`V%EN~.M^2!m4rX8qTF^Oq0?JS2jR5d?0DwBr.' );
define( 'AUTH_SALT',        '>TY+PU:2)%zkKAK{LLw+l=Bp1TMwVc0+;gk:lw4}c+xH-)3#<X$[5+}(vEH(nz|n' );
define( 'SECURE_AUTH_SALT', '^f0M8DCs<{8zdFEU8ft4LGvJ,xZ{A!7I(HDPTc[-z:N#@2YEQ0xydmMF.zWx%(_}' );
define( 'LOGGED_IN_SALT',   'dm+D=}6}`MU@GC0aH?.[B3]@CCr3m<pL;BONeKq!u`nGpD1jNazTh0*_:.<V1|3Y' );
define( 'NONCE_SALT',       '*)A(@$g}Q/}sQ(,^,>/lc(DMX-{PdZ?O^,pZK~|YBePDwf_NHJDN5<*;h1Lc^v+x' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
