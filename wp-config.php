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
define( 'DB_NAME', 'unaux_34342201_wp' );

/** Database username */
define( 'DB_USER', '34342201_2' );

/** Database password */
define( 'DB_PASSWORD', '!865p)SikP' );

/** Database hostname */
define( 'DB_HOST', 'sql209.byetcluster.com' );

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
define( 'AUTH_KEY',         'ycohr21z5n6zkqlageqvsfn4u72y6bodeu8rdhdxzarctjucis0vzovi7zltdpy4' );
define( 'SECURE_AUTH_KEY',  '0jqimqfvqptqmwmd1ltjt6x0joniveqtsehpnbhbkbeznkhxq43egmeotz9roumh' );
define( 'LOGGED_IN_KEY',    'olokx2mh196qwvjiioik8wmbuyr7lrzinvymiyyjsznusa1ueqbk3xplk8dyqebm' );
define( 'NONCE_KEY',        'miazh5ldmhjnhhaxfzyrd9zkcizs8b4uhsz3itok3n0n9hgtlutmhqovxzygkdyk' );
define( 'AUTH_SALT',        'xa0ujgxffqgujphtgiy0xag2bcnmrib8j12f8fxklsd42rsfnohdwjdzlecujsic' );
define( 'SECURE_AUTH_SALT', 'o98vqhbarjylnoahyso25e1exodhivdvyrwxeupl0o0brpxkeivv2edhcujrn1sy' );
define( 'LOGGED_IN_SALT',   '9h70flf1ggvtscssrd1dyewlxvqmamhpxr3nauslpp9rlzzrxnwk6irzv0lk6ywa' );
define( 'NONCE_SALT',       'yqkgbgn8dvlljyux1woaytvljoddchysg7pqeosgtaa97a2gksappj93aq2y69i7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpts_';

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
