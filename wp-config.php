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
define( 'DB_NAME', 'KarolinaSzymkowicz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=J}ROa|O5|K&NgT,>{T.ZU8<FCuC{wU_b9/G=Dw-l@<cKn/S0.ysh]5!1Z~2a]&j' );
define( 'SECURE_AUTH_KEY',  'eg&Nj]+`+c9e7.`RfT`A3E`+KkR`D]*<KvUaFSSK<x9,QkCr2+z^QYyC6rS]v&d!' );
define( 'LOGGED_IN_KEY',    '4jzN)I$G7I-1Sfcg;JH!;hcG]3 HeF8`XiD>FQrANmRAyl<+AVY)E8JaKF|Gb3cR' );
define( 'NONCE_KEY',        '?VzmJbu<+A,Pdurp<s%Bh<DMiT<O2cT&XWZ*%A*g^+}=0>Dv3O_1rG9-HDu9tI#(' );
define( 'AUTH_SALT',        'pb[DFk=boT8K/)NG1 rA5*0 AB04IP?Y{-<fG)s.$k)@b,4;YiH03=E?X5{(nzaH' );
define( 'SECURE_AUTH_SALT', 'EJp?F7u!<(:|V&`n|K4`,n%&1i}6Oo83JR}Ew+5~(_Zw,8zkG72)2K{>y6&MVv/y' );
define( 'LOGGED_IN_SALT',   'Hytnnx9zf4pKO#y A Dl/j3NpHM1< ,1_2d=>.fxRER~KaJ9xX~L!Tu6z|WrB+&M' );
define( 'NONCE_SALT',       '-)<1zb}6S+[$]eq&FtAHHitqO-*0wdR]uI.Ujfgn)gC*_Q(S+ri~a)::t_u3RGW%' );

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
