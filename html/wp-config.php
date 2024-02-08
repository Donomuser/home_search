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
define( 'DB_NAME', 'home_search_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'En2aqskS' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '2i6~#C{iZnm<Htu]JVU.M1l]` Z|Tf!so/9x5rb&MW@;XD.PhGq,Uin23)szX3Oc' );
define( 'SECURE_AUTH_KEY',  '1Tl~v>Kh/(P 2 hb@H,-qJke;Z-,~TpePJ&{IK[p(16T;. *r[tvh1Z:@w*nVWc3' );
define( 'LOGGED_IN_KEY',    'L%&#udv0:,V^00dy|k(!C14g=9-0g?Z2=k)uToTV7Rjt^A^z#;@Oi,rhpd>-D[vA' );
define( 'NONCE_KEY',        'wgf6&c=$ *2_,rCzgx.p{xrHlggA@E!9oV[*NiM?;*7B1Nd44Ko4&wMSd,;vQ SQ' );
define( 'AUTH_SALT',        'ZBz]hx%v`l~ PUj*$|uH,&%l9=}b+IMwTDtCs`{K>AhNZv$f*RT8_n=XO&O[e?/n' );
define( 'SECURE_AUTH_SALT', 'H!K~n!d+SJX^ 9}Y4^p(izIp%:`|47Dn(D/O.3O`H4)ad|I.idKS`5gey}*6CG|-' );
define( 'LOGGED_IN_SALT',   '[tr]0.u3*th#SGIn*yw5N=g%)T{D[[`Cs8gy[y$O a+HKu2*&8g/yf3/WP=cy3Lc' );
define( 'NONCE_SALT',       'ODvJWv2S,R$0^G+<W>Is z((2*q+C;FHE32l{CbYh]jmF5b47b0NPrqDW<0K%|qU' );

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
