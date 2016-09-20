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
define('DB_NAME', 'spatialinstability');

/** MySQL database username */
define('DB_USER', 'cryostassiss');

/** MySQL database password */
define('DB_PASSWORD', 'test123');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '$K3?l+h[fY`%Z9[ffp~#f(H]NFA@&B~($skmZbaQ_Y6KxDJ_]ub0iM%j6)1T!Xb]');
define('SECURE_AUTH_KEY',  ' .YwC/^`hp:l9Gm|ih}E?eH[18,m5AiFeGHVb$;KfVi(Tl;wEF6};TM0g=I!P 4,');
define('LOGGED_IN_KEY',    '$ el=emsjf.`yR]`b^Nu($F,-q(7`,WscF6q:hqt UItISC)cND_NsUF[:vQv7&(');
define('NONCE_KEY',        ',k^+9l=-V*Kdr0t/n__cNbD2UW{uV/W>yNnL@Ms%jKhX*7y(}oDbRs*</:e}{#*u');
define('AUTH_SALT',        'Vt3;1)x6zhsiAOAd3BlB?/w` Az@wB<UZ.NWqMKi;MorJ76DG_*(>of91CoV1bh@');
define('SECURE_AUTH_SALT', 'ky:u!h=Y}Cu|RX_+yoDg?.ka^Frob9_W[wqVyxm^]RmfH4RK)Ef=7|LVBRj+ZrJ1');
define('LOGGED_IN_SALT',   '$i+W,%R} pwlyDB!cG;e@S=( ^|@a(bvrKqQlt8?S!0];TT5T%Yme5XsLRgh!!wk');
define('NONCE_SALT',       'cK0*0i|PIrr-Ua3VjQtn,J#}=9b4M3q^{@tlMV22uNMw|wE=eu1Jr]bxTqxzkmG-');

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
