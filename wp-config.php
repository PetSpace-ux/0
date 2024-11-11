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
define( 'DB_NAME', '0_db' );

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
define( 'AUTH_KEY',         'y^/{:BuL5<!/g@S7(}o.1 ZkAIv[}jpHc4kaEdX~hmT4CO-^jw:i6*/kte)FrE&T' );
define( 'SECURE_AUTH_KEY',  'I^W~SVYXY)-YpYsSJS$49,$a8t4>+e}8_#;bgl!920gSXPO<; ^>bF.iv626JBdg' );
define( 'LOGGED_IN_KEY',    'G5Tw_@?!(87cu<BgF/3zAuI_xx4RoC,GnQ7jO;@mCk0#vx^azoF$ed5s 024,/73' );
define( 'NONCE_KEY',        '8T+[+wv!_}Amu]KcB~I2b1A!!kj;.r_h=d52/%E4DFS.oZ&T~%u)2w*X0?+xKVJw' );
define( 'AUTH_SALT',        'byb{}<C5Yl?l,O9hXmgGc]V*{8=EW&o_>~NHcHM|k9`7;VY<]-w{.iAqxcpBr kz' );
define( 'SECURE_AUTH_SALT', 'A5uA]GGDk7a=_C4!^y)I[`ge$>PztZQ?M(,}jUzKBvm0$I_#}p}n;b]c^VM_h.b8' );
define( 'LOGGED_IN_SALT',   'UNCC{nvE9UMFcE6a|nc*Y}g8T%{5:wg>&UjI/~bW:bc&1<1G =W@n)=T9~9X.[(6' );
define( 'NONCE_SALT',       'zS=WVc@$lqrDDk7Jm[/:F2;r:A+-e>Wl+c~8{Z:2^]EtonB^JVhcI^Ki#x&um)ka' );

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
