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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'w_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h%?%roo}>?*eTS.CN2MjP9F.KHo]LW$&ih,Pg}S^+4zSi@~b2o[c]p6]tDEi+~X2');
define('SECURE_AUTH_KEY',  '4cVra>bG7t&<rU^^fai)<Oe=*hUfiq$Qmv8$RQ}I(iC-!cP,29jwE#]f:*pP-$@e');
define('LOGGED_IN_KEY',    'hpT4YG:w8R_S(5D_JNThReeVeYFBm%FE!RKJNfslusU]/7P`S$bc2vu!Y)%n4Euz');
define('NONCE_KEY',        'cH,2Gc;bki=${{A1pz)7GOJt)qKPq1v]i?1UJB%vYKcI?0S=FCsWaM&:#@i;@|ny');
define('AUTH_SALT',        '@D{tjedi,Wl5+mFCn&;F/w^Uqn.tJf#qbRZWPbil8eU<+ shn8CC0 jY?G-+y+=9');
define('SECURE_AUTH_SALT', 'V3_^w/KY&bw[tWe-SRBZ6:8d5yYoWwOOy>9A5;qIcP$o /hYZ_Lb!f+eZY9-I4fI');
define('LOGGED_IN_SALT',   'n%lSeY!mf6h<=gmJ|(1S&@By]=s~eGBvbwe5^`2Zt4uJCy$?rz~s%U$WVXR$YjU ');
define('NONCE_SALT',       '2Ms%{NQm!{X;n9^=?+I>:s0enJ*N?E}BY_Mj2(^>l:$+Zqe@1X9;mVHA_MW][$KX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
