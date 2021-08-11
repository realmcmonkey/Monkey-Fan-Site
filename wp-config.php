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
define( 'DB_NAME', 'monkey-fan-site_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'g[7Xpvw^(._DjJW$ROw8mhh`o^Q, V4QWy|d.C@C#5 Hsku-yMw{?K0hWaP%RlXT' );
define( 'SECURE_AUTH_KEY',  'eC6`BwB[IFM7OwytkjoCi;!*wX2rW.0yI*no$)mK[0q+n]^(e];lu@8QzB6j1kGx' );
define( 'LOGGED_IN_KEY',    'JgpA1qXH1Z&rS%ycOH:Y-c;M9yf(0U,f=J?pcr:XAT;LgWv(-3*kd*rk:fR.Hi5`' );
define( 'NONCE_KEY',        '*qH^filJ:b@P2jA%{m51sECXsPIZEbDAKZ%wA_^s^nmk#03=+>x^BTR4,XntXvbF' );
define( 'AUTH_SALT',        'cfY5pM ](lmlU{1:vG@C0}@7;R}%w]I%-J3u<Ch<7iKiIutjL.]oc/.H7&3rr,=%' );
define( 'SECURE_AUTH_SALT', '4G5Mm#V@)!*IY1i:Jkx]hp>S|SrWDIGA:;coP#oK6}cIItcCZ/&u%/+vO!,3LW0a' );
define( 'LOGGED_IN_SALT',   '3#Lw2No{]=rS*@>9wA?wsJFdKMDP>nTa;1HE_y,h8#.R:Am*Julu+PbbwQQu4CBh' );
define( 'NONCE_SALT',       '21_0`~uh=>%U3OQHyL0)X_6GYk^Uc9bU5*,ozuZ~DtR$GC7cF]Nkyii$h<5 RYll' );

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
