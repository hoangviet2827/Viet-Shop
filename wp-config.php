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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         'C3AIb)$?dQ+7^BEAP)=N|A,xAz7&HTWftpt<_A*$v~C52<t>cm}ldURH=B^_[kHR' );
define( 'SECURE_AUTH_KEY',  'oI,&]e!YvK#2Q&hkm?&2n+:6j>B7;-Eyv8D Gg`_aJ0>?o^Em?=7JC&~N:(c8iGH' );
define( 'LOGGED_IN_KEY',    'BMjW4fdtBCKA8]!OpIK6&|JE)gWKzeN1q$~0P{*Iqk:q<s.8>:gnc1nb:FY1qTLJ' );
define( 'NONCE_KEY',        '$jnn(|r}#u]sO&0r#<[!}5@XcmQ imRZ=cHPXyR=b9)&4$Voy=G*60GPXJ&l?JJm' );
define( 'AUTH_SALT',        'VH@>Rs_E_3=%.g?#C$~EdlVNWfhMRC%(&]}U@a.XuXhg~k=C|<&l.bvsON(L=}xw' );
define( 'SECURE_AUTH_SALT', 'OmBKOLU|_*_61G%kHO%To?]i(M2ifS-T xBJgm:`%6z9D. +;02/Hj<{Z/;Cxu,O' );
define( 'LOGGED_IN_SALT',   'Jiee|`:K cp[dk-%DapZS_0~Yn?MirF18{`L^2w^x-+B<&5P<yOFr-A&K=d4#S$P' );
define( 'NONCE_SALT',       '1g-6ZAX+HHh9RlZP~hUhtcH[DDh;bvuT2||e-.ktH*gv|JJt]`QX6U#oqB)jt^NU' );

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
