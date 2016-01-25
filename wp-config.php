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
define('DB_NAME', 'stonedape_db');

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
define('AUTH_KEY',         '{kVS%dka gL1Uj0B1r+X;k%Jp]JO%A!|/:>g$q1C<2m-)t4rVZ/l^nBR3Yp)6|5J');
define('SECURE_AUTH_KEY',  '0 Uo0G&bV#-#V8+;Z8&X#=a+2xw<_qX-wF*!0Kh%sM_[YVsPKP<IAbW=gV*YC4Fs');
define('LOGGED_IN_KEY',    'z>U]1_HiA~Z-4j]}LQT+DL.sV?UE8W=gO/MC>@7x-04N{X=,:>%PE<1j=;TO+w`x');
define('NONCE_KEY',        '9L@6Gq<oy?B`F%-e^8ZuAnU;^0S+*uPE!Q#-~%ht5zeVcFlGJv1CI)W@knJ,l-fw');
define('AUTH_SALT',        'S7,/aASLUiCVa|m^6<wm+wR*VRMp<Gz8me+ >6EFUp%yuS1tv2-+,(tf@fnm44+Q');
define('SECURE_AUTH_SALT', 's}rt]5R=|LZsT$rrB2@b^eB/5Eg-xBNzi(-7`?|Ni4|0#pgkl|I +>1o/7L >X-!');
define('LOGGED_IN_SALT',   '|-UW9ys(XwT-Hgrbm*k)|K<X9AN0t8<-~H]m+-kQ-5&?HkJz$#qk]/qql.1N-$3Z');
define('NONCE_SALT',       'L}n]4|c8RC]+HQpM#kOnp} |*HCZ:{Tj H,Vwnu@x?}M-# Blt@^+8xj?-C_xTg|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sa_';

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
