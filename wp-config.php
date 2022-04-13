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
define( 'DB_NAME', 'zuiderkrib-booking' );

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
define( 'AUTH_KEY',         'xx;+BlMj:=pr./@dCbCGGeZalX43U1-oLFChkd86+~^Wp_[U=/9%50EH5ZxWoMON' );
define( 'SECURE_AUTH_KEY',  'c$j`d,DfTgb=qB{[^WEM4QWzU :[LS#`;?kI|I?$t,M<-Oxupz<RRNOsd#Ln@|@7' );
define( 'LOGGED_IN_KEY',    '#eL.F&nN9J{?m-5a{FOc9zHF|a! wr= -;)[!9@3(}-stO%H:6a/5ACd7d%jhwIe' );
define( 'NONCE_KEY',        ']jgiYCj`H|G #wPl/he43tt|i^?TY?|[&taZLf4w;a|H(VT/r?$ZQ:aGsk0?>1t.' );
define( 'AUTH_SALT',        'F%=,0<0iQ%(}:>O[-R?W5Hq~Nvl c41GGPQ-4S9k`Ks(^Ew- !Y+gb@Ju*4U/q&~' );
define( 'SECURE_AUTH_SALT', '`3pt ?BYX7&WoT,0@B@j=cqn+N.kYG.t5x~m:0R^H}1.V/!0*!Mjn=IkbG$M&1! ' );
define( 'LOGGED_IN_SALT',   'Il,hE%<lk}d2pLTiW1aqQy,0d6o-<|Q>B{0zk+>[hr{~)r`xv7Cx=Z;C%vrky 5.' );
define( 'NONCE_SALT',       'i6Sq&]hfTz:4.=4X9y&,89W+^y QPB&HbIv8WmtP,dm*i+CetlSi $6FRZXZL;mQ' );

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
