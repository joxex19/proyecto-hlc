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
define( 'DB_NAME', 'HLC' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'qMn-+, CESoNS,=5zesp0D4 ::^MVmpGu*,He342ka%%~ka%_95b,L2f/Eq)6JeP' );
define( 'SECURE_AUTH_KEY',  'AL]6K(lK#j8[n]NuMwQ1:yzbki{.%r4,TD$FG6m(x|/O=|RGrVmx^q@vn5bKMi3s' );
define( 'LOGGED_IN_KEY',    'ce%o @yuIPk-[>MY_.xxlHR>8x$lNiu@if<4avT@K<5aYgqG3t.^Xcdg%uai1Rru' );
define( 'NONCE_KEY',        '=-aPH-y9&0v)r:smUDPa$`y2+per$,e+>ZodyyI@/a=h{1wuq&@tZ+P/?I6#^-~l' );
define( 'AUTH_SALT',        '!,8jkNXWcP1Ol/ieX^cz}w3_pOYh;Ec4EIZej_Hx%f]56.K-~[Iwy(Gyw%|67Wr;' );
define( 'SECURE_AUTH_SALT', '@d22&[c}Mb;:7p1XsuM3VNCU1c)V@q8e@-8PHb skCuT/Hni7.T<%W%xz[x!p#Ez' );
define( 'LOGGED_IN_SALT',   'H:i}^R{vzp$Xe.~%$$vfF2rXXL>!)3jCI5W| zm3KQA3z<vKk4=4bJ@_^I/ln7U0' );
define( 'NONCE_SALT',       '(7vZUu))#m.Q3HZFn<LxIW>v|t<d?zn,# J7&)``lZ]l;17N](g;Q&xM/uf:yzs&' );

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
