<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%xuRfgxWK4NWoaX=3U`o@m`s~Fish`f-4{l2XA_~)QhBNa[*QidKKIrUBd5?zmV2' );
define( 'SECURE_AUTH_KEY',  '8mC[6{<NPO,P$g#>jwqE:ov{)6Fc(DL$8Vm QL}Dp:$3@m&]8Uvp[h%^h<JrEija' );
define( 'LOGGED_IN_KEY',    'ja~]x7;4*y#rMM7LFH_.j?<Twa&h8]W9F5te@8kLLliPE_{p#{K:V,dpknj|g/mN' );
define( 'NONCE_KEY',        'V%qe^l&3yn,eRMMKoROe_r@Hj?Gk3z-;RntlLB@k><>JOkyA[,{AkCAKbbSVJL|P' );
define( 'AUTH_SALT',        'pf1?NGIonUV2~&jXq8-@6FqqJ}dx(5A*Dh_u(LQEy*@#{psnue.yV]wBn)<@R6}[' );
define( 'SECURE_AUTH_SALT', '}CBf7B^he I,D|EqdV`jk&)?`E6cp <B9UZE?!D-HmD0(NgcA]p98qU1HB8@1sPs' );
define( 'LOGGED_IN_SALT',   'HV,q!dj`h~Qi?1g&9pReINONgqu7P~xIn%M:u>uUPA(evvavm*r7P& Vs*4Ly7m~' );
define( 'NONCE_SALT',       'T-L0VOY@w}qS5ZI04Vvgi;#WgXJE%o9Y#)HW<KF6qEMZtsVx1wM}4({0]ism@,G@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
