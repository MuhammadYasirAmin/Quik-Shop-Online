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
define( 'DB_NAME', 'quick_shop_online' );

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
define( 'AUTH_KEY',         '1FAf5By}eu& ]m+K MaG)_MrIFq;9t0t-e-T|E*y]m7,qr1yq#kfoZ>*AmW8{iJu' );
define( 'SECURE_AUTH_KEY',  '~DqJX%{h`3g{JY]TU*YKgQ5wh1A+ 2CWlP59Nc:IyF K*ESVUSr8WQ#vo[4gB#O!' );
define( 'LOGGED_IN_KEY',    '{7rQ*TG2/(!kjH0WimO9sny(5b4SS<V1pbY`wOfF&ixmN-}bQU}A^c&Sy,%<Fu7{' );
define( 'NONCE_KEY',        'x^,#OfJ(@`b`(p_So_BVO+[xsZU2.}FIyJ8Fg;Ou8%uNi>g7^N-k3)1I 6+%ojrh' );
define( 'AUTH_SALT',        'B1_ypcg/.Y=Ei{gspsH9sYSw4l@ZqO3Yu>%U|6PMP5_h9;CGM$Wf+}$Mlq{CJ uJ' );
define( 'SECURE_AUTH_SALT', '#Izg+Gx%ZL0.~2G{hClK.ANCn.bJ:GITX(:4k0=L_6G,#(.Ynx=Y  $!krv#5*)l' );
define( 'LOGGED_IN_SALT',   'n~@%RPM0-RW{yL>LfblGOjBAT.a)!M/Ci=j+elS;qm}epe:^T~c>py]`y{|#WI4|' );
define( 'NONCE_SALT',       '9<z{]F*EtWTik0)QWmNb%QLZvjOe,CDq7bY -.&mn|3QW?t)q$W sxSrO9Fmx?x6' );

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
