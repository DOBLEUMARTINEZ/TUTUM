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
define( 'DB_NAME', 'ttmtech' );

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
define( 'AUTH_KEY',         'BfB .Yws6wydxYn`psJCr*MN(w{;_+%}!)z?L]srcLoJ{G4z49~.P&&f[8~}X5gE' );
define( 'SECURE_AUTH_KEY',  '!*c(>4/I:d.#a0(Xr7ioXm>E,`-w_ajlI;;PP5kylO4TQ0my`5uS3m2:u?r{j*&_' );
define( 'LOGGED_IN_KEY',    ':.W4e_0H Z`av ?oYRPozqSH>-RkAV]D`,Y+PTf|jE#`|%O6z,n2#v@|WJ*G9CBG' );
define( 'NONCE_KEY',        '* Nz~5(-A?!(fBm{q|}/{Y/OIZSIJh1O2$o<M/J#Kd*(/G{DWNSg`5a+a* ufY:~' );
define( 'AUTH_SALT',        ';NF;>Ip9_N8_B0CS|SqE}Q[(ye9SZ4}~3Eydlf`$ T25Q8p:~a]v= T^4FrUU0<u' );
define( 'SECURE_AUTH_SALT', 'e>!m7ek$a=@j:cA[[sh4^}^sBk7[SH)TTtsBbEyszG92T/G`}M`_`ql*,-Tm^Y58' );
define( 'LOGGED_IN_SALT',   ',:Q0@b jlsZ,Yb*DwBw@xaNl2hzW~qeZx g/s?^p4m5X zRl~tS[7AWi,^h_ptes' );
define( 'NONCE_SALT',       's(x-YxdQ9p1G%@z0@>P-5/u5+1Ndf#aiJ k7bkYD*81yTJ+E(c]8BUi=d1+muV^I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ttm_';

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
