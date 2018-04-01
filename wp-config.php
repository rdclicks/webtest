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
define('DB_NAME', 'rajdeep');

/** MySQL database username */
define('DB_USER', 'rajdeep');

/** MySQL database password */
define('DB_PASSWORD', 'rajdeep');

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
define('AUTH_KEY',         '2e/cTcl=#f!H]whksG{c)QZ8ho,*`-TY}HniYK/0Tz$-rAE=?5OXth~{ber]GjUs');
define('SECURE_AUTH_KEY',  'K:muj.CUr[Rf~?t6l?E=!u/F=qbPGh.%[#8qKZR!&B_j.*Ho=&:;qR|T`j[9VvV,');
define('LOGGED_IN_KEY',    '_O,`(wJy~,ZW!=J`d[9^>PEDZuK U|O!a4`v<4?b8#BnCQ6P) t}m8}!=821_b$_');
define('NONCE_KEY',        'B1KR!%V^3t8{bY7XI`{4E-H$re:P/!pEZ;be;b{}MJg;&y_qkq<g)6U;crq85f1i');
define('AUTH_SALT',        'J+nvpNo85 p|e:rSCp6w$`@)]b3J%$8<M:kJWm(bF`eHv;}svlj0(o`l*AGE(OC8');
define('SECURE_AUTH_SALT', '%@1F([{odh><cVd>2aVMIcR!.$Dj_sCQ4$#@<dtXi%`o[?1n0]_v~[=;%*x60Pof');
define('LOGGED_IN_SALT',   '+IyoOX(*UgLA%d5HSi(;g%q1Y.g8g%_jz} F6W+=Sn]KHD,J?|~?7$+q&0EwGqGY');
define('NONCE_SALT',       ' T(#:D<BIz@B=4FMN#iM8W-K:Z`y8)@oUS+og0dteJcGm}vjr )IQ7U14*bo&Lq<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rajd_';

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
