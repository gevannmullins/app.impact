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
define( 'DB_NAME', 'app_impact_local' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'pQvLbm+,*?zWy8}C/V98P*~l<8+v Q`Ym/YpYQ;Z.dOOU~)mDMHR&]r6FGq*)}1,' );
define( 'SECURE_AUTH_KEY',  ');Flp=_]8>AKlBJKhWJ*;|yeJK7Ps*d-#@ uN5&*I(c.Op%XorW3Hn|vW9d!Ri#Y' );
define( 'LOGGED_IN_KEY',    'Rz}F<IqbP:o)*$E[]MXw|L`9EIKE&sFVE!Dt;O:!y: t~I/D/,e@aB?Nb}um[N18' );
define( 'NONCE_KEY',        '!5Xs=;S$#bVGwIzYhnUN-(fI?Y>92,AL!W4~V@9->Awk$J@0d?tqyaxC>Xo8IN-g' );
define( 'AUTH_SALT',        'fMejmLXnXyVJ{M1;JAy|&=`tFe:gu,*e[Q#/L{?#7?#jMx-bw0BT6S}&2k `?3/&' );
define( 'SECURE_AUTH_SALT', '^Q)a?gb$9rwp5(zPD/S~Vyr,e>0MKk<mts8@XsLrKr=c^o>v:Jk7GR[fzwf5&aqG' );
define( 'LOGGED_IN_SALT',   'r!Bx1KF&8+c$q5^3w*nF3$x!7?DCUJm@.KSG;`iyG):fI|>tq35UBF*sL%.78UdV' );
define( 'NONCE_SALT',       'aO0el2erDj643+4? >0W>mpZ{|tT$R3bvD;ZO%Tds`i@YJ_]a~{v(u?TEYPk}z (' );

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
