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
define( 'DB_NAME', 'haloki_wp' );

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

/** Tự động cập nhật WordPress */
define('WP_AUTO_UPDATE_CORE', true);  

/** Tăng bộ nhớ PHP cho WordPress */
define( 'WP_MEMORY_LIMIT', '128M' );

/** Tự động sửa lỗi WordPress */
define( 'WP_ALLOW_REPAIR', true );

/** Vô hiệu hóa việc chỉnh sửa file theme và plugin trong WordPress Admin */
define('DISALLOW_FILE_EDIT', true);

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
define( 'AUTH_KEY',         '|/|A$5@C;#Nvz%kW5ynEa$R~n)lKq3_!Eb6<0/_.<<Y<MlSFr3QoMP`PAZA&7=lp' );
define( 'SECURE_AUTH_KEY',  ']T*Q.c)2*%iU[RC(([&Z/P<#bH=_m;!/p9!]xuO N/p.fsJ5s&hs[IpMt4^llcqi' );
define( 'LOGGED_IN_KEY',    'uZ5 Pn:|m[klEpH?f3@K+Fl2W)Lm_4M}/Z:G:3J-%wGuD[u/<b??,.P=R_7g1TPr' );
define( 'NONCE_KEY',        '=+qYf(8Me<`){HO}.k0kbVdn7_Jm/y8)hIXug{F6/ DWV6j)ZG>+&&WCJW;ZU/;-' );
define( 'AUTH_SALT',        'D1wsfs|{5*).@-9.41(W#1-0>a?6xjkh/!)FE-Z(gz:q1CClFh8Bvpjfye7eP)rr' );
define( 'SECURE_AUTH_SALT', 'M|>LO~N{jCr4kdnw4]Ca%^]q|* 2Wqqeo&Np)S%.Iq@&Antn<@l02fWhrf1:~QL(' );
define( 'LOGGED_IN_SALT',   ',EDI[geUPXS1u6%hF(F42@%*;?mz?N7(-+@W8olDf)3~b5s 2q}{l:kkH`!P4`]H' );
define( 'NONCE_SALT',       '%JZ!!>X#k3kggUr4HB%oj+*J%$wFjE6d#{5aK://;7R5p#:wZB y9WXF|v_&^Uo[' );





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
