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
define( 'AUTH_KEY',         'Q_VNa>w4rU%nAdE92Nt`&3:>lL49o9ZVdHIgn3vH,15SDTq  lBBu9cF>3/}8+[>' );
define( 'SECURE_AUTH_KEY',  'dMr|#B)A;xH6K:O>Saq- 3PivF#&575DbR+5vR.=g9s{rtAE8p|I@Kr#CJ~NVko&' );
define( 'LOGGED_IN_KEY',    'D7^^%XOMz#P6nZ,?TaX=ULu9r+^3LTFGwf0t*ccn@kA:/XTDr0XOvXt?li/&Q:2A' );
define( 'NONCE_KEY',        'M|<wT^n6j9{H?Fyy&?ey$;ibpc*AF}W{J*M*^pZ8U%?7dJ;ADI}v8Eu6r,M_:d7~' );
define( 'AUTH_SALT',        'iB,r@8ZBM?HNw0(3-<&@Q|j7=m*KXQBE Q=4}GiI%TJh-Rp T7gsIb?5(&_ULX|0' );
define( 'SECURE_AUTH_SALT', 'U1JH NlHIJ= +,u}2FcM,cDz]WApQs9wVy/}W>tFy3PHkoodd)jTwOnCt- &233u' );
define( 'LOGGED_IN_SALT',   ']636ZP42@G+V<U`B:o/gRd8sM3I|h;G|?L:)+{4$.S[(>.xRHv}YLTh+j(:AFf|(' );
define( 'NONCE_SALT',       'lVD[80A;-YBVfT>+IKg7{jATpejIorH4t/+23#GaM}1,W~J?U,)Hw,t/{D)Ab-e9' );

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
