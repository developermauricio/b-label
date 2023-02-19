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
define( 'DB_NAME', 'blabel' );

/** Database username */
define( 'DB_USER', 'forgeblabel' );

/** Database password */
define( 'DB_PASSWORD', 'tjtfabe0b4ljfzjtygnz' );

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
define( 'AUTH_KEY',          'FcUok^Wj]exog*Z5Bg?v[Q0ULtrZJq$}K~!QTr{2nw^]NF8V?Xg:pp#%mi6XD*kG' );
define( 'SECURE_AUTH_KEY',   'Lads_*Snj&Hl73owYgAXrt)?d$Evv3hWJm-g-2Uvjq9#=it[/|:EOjHwfE|^<fpj' );
define( 'LOGGED_IN_KEY',     '^BwL }2Nad/grd?5oB`Vz@y=Ii6;<[x?[_3Z52{1M!z/9=A&8m_$p>X[d.[j=LSQ' );
define( 'NONCE_KEY',         '*x%|O@fLYX Dd5g%uil,j7}77I?P$>9cdf5gwJqJ8DL1Y7DXpA1T-c7Z=Vi.WM10' );
define( 'AUTH_SALT',         'O;yqc&K$_{cUpN][V7R2Pu>F{W&>]YS`6F`G@yzE|YzVOnc2J]1lxA1Z)N>OzBoP' );
define( 'SECURE_AUTH_SALT',  '&^T>rRb+9fLqTxd+sd2RXL*e(B ISowQK#{8&Me,?)%&o{&_&iya~K<$=YJPf<4}' );
define( 'LOGGED_IN_SALT',    '|eDMX[t(,SE}t|}Cjig_&o3}#_ Zs^VhJ$%VX,j0fz!Ma/~S(fv`|#.SN-NS#^#s' );
define( 'NONCE_SALT',        '|kUZF>6y118 R`Do%BVORH7N*5sBq6Idu Gci+>U|)1OC{Za,!?~*;B7XsBGoZG]' );
define( 'WP_CACHE_KEY_SALT', 'P3Q[a(8T8zKwb)T.6.kl6f_fS>@,:e_$-m~/PO[PgJqsYv<ZHDsds@A0`>qMV]I?' );


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
