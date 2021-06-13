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
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123123' );

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
define( 'AUTH_KEY',         '5Xp6ep_i%6Nf7#Eq`EoGRbEIt=GZ1iCQglUzzY2DEW{ 1;Hojr( *DL&VX^#+WDn' );
define( 'SECURE_AUTH_KEY',  'o3B,PJ?X7t`U yWhK :0zZaMRKQ%nTfmvm>%D Kd+TwlYO6S_goGT.HYlc:>J0SP' );
define( 'LOGGED_IN_KEY',    '6{VefLjIhVb+yD);dtEt[D{v^4L$BU0>>N/|$QC#Hh[Ib[^e7XvOy/1TT*y~Xa%Q' );
define( 'NONCE_KEY',        'pNdiWE2E2blc2pm]9J,Wz| xvlHnQkW0?9hH<r=tW|IC>l)q,]uwttT/=n:*Veh+' );
define( 'AUTH_SALT',        'byiS|[-:!#;4PGWJbv2=4w]]nob Ct9djN7KUVM_N%B8$pDWTg6.]MG&8nt`70${' );
define( 'SECURE_AUTH_SALT', '..N2Y74I-L^v~7LXGOk^T1@w6x766FLVM}35!Eua5E)ao=dY2|>hx^xNOv84_Xv8' );
define( 'LOGGED_IN_SALT',   ' 4Vo#10R c~ae*D`~WKZ3 rcQBIr[3d5G`2<VUK^nMTw1WWq.|-=$}y`$%l+r?ZY' );
define( 'NONCE_SALT',       'I ^:g}jQ%4WS[O/_0H<WLEc_k8~h289B^4>kyM}D`J{09wp(xyTx$WeTeZ/P7wT|' );

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
