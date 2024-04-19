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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '7 08w>l+%hjk3@^)aul&hf2}%wo2}(Fe=F7Vp$i?A)>HRc44L*ofXi-%H-[Y5lPj' );
define( 'SECURE_AUTH_KEY',   '*tZ|IX(BkVe{;4Q,#:6%bvd0SRIGQuZUy|R-]#<q`)9>F{Bad+/%>T)`_v[9mf}M' );
define( 'LOGGED_IN_KEY',     ')$z84[hXk*##V8]f9OEi7yJIN5wktV?0dYv0lz<ZWr^z7{-HFIb]wF*ok3~*$@]j' );
define( 'NONCE_KEY',         '0.fB4vB/1$z7Nu[u|;``Q}Y)0_A~Ce,NRx%PfRI=mi ;7^s~Z}^`([:kRNsEZW3C' );
define( 'AUTH_SALT',         '/zq_*m$#[UpXvs^~5wiEF_ucyY68&L96R|C76&u9p?86pw]~8v/J9=SN7x2VwIU;' );
define( 'SECURE_AUTH_SALT',  'he0nY[y]w8,Ix?PU-NTcFj?$Wf>5=xt=LR,Jtox3)B!bkp+]$1R4H|6j=LN+!H~U' );
define( 'LOGGED_IN_SALT',    'yQK,3s5/5?Ce <d^FK9eA`xlp%&CC2x-p.yW{+j?Wq2KHBvT R#)($$i2*FkA_YC' );
define( 'NONCE_SALT',        '^j &Uzgv9rQ<KMKPvFg{yh;w?`eVx__bSY7[7[#.z,7AOPeVl(Uksh=r_)0s+:8t' );
define( 'WP_CACHE_KEY_SALT', '&-)<IL!|Ro]>AQ76kSgnEtT_9|l]AcMS[cS[z/-&j8uUoT-A*[UNkIk=)11C1C`w' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
