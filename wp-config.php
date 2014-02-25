<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '891988_ggenes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'w-XCpw&3DhAbK@qug{h4d[9Ub%O(F[>SPvu<~r+$TDX{-$#s:LlkG|.[Dd!|uyrh');
define('SECURE_AUTH_KEY',  ')c7Tu>>Y&4(lR#d+F_(JJJO>Ij!_kdKQ%iCvrD+C27 lGrCP6v]U/guxH`<,=p62');
define('LOGGED_IN_KEY',    'pFk>N 9]|79knl~RC`]DASfjdw8ZFC[S>6v:za/Lp|C=0_v(UA ,lkJ&l!@}.c#[');
define('NONCE_KEY',        'HWTP?g(fs]>p%7C-}g}i]fexG-fvKT%agC|;g36|=]-?FCj=k3fV3Nz 6Sfnk`bN');
define('AUTH_SALT',        'b+-5q-pRN-bv#e|.C6sJZGjlWF+CK1m=(otcxK7_2FaHqTjtKd@>GZ=j,5%QxEW;');
define('SECURE_AUTH_SALT', 'E,j(a78y6V4~ni<N+;jVd&nX,=CrJaY>0(p.27tniQ]QZBj#fU)B=|/X,Z)V@#|=');
define('LOGGED_IN_SALT',   'e e8yJ5YP!-Lr[-}[2FeRYi+?+d}~v3&AXY]LX(|J|`kJvWA~^l;-i}UMuP2;6cx');
define('NONCE_SALT',       'AqII*)3{kmOC`U|K%? |wZMmMR.&aR1x&;N-H68qMkExbeE%{j9S)Ntf!4$+1FHP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');