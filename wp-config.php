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
define('DB_NAME', 'sanboxwordpressmultisite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'M/I^&a^fF=Gk02NRrWj7aBSoH$?g<]]{mo;=^H$*CrznZ>7q^Y-h04G-rQCs|kuN');
define('SECURE_AUTH_KEY',  '+Lf4%Rj-l~s*=->CqNgW|[FI{_<Z{MPjzVtM+qpBvP8? GgK!)%k?G_V[OpYxW?z');
define('LOGGED_IN_KEY',    ' T[@XQ>h3Qkqg/Pini^B-!21BbZ!2uwX1cP@d]*T2O+Nzf>sv9vi@j|*M|H1aGY7');
define('NONCE_KEY',        'P7-.x%]|H#`kf,b[BtNe^f!etnP/%)Vqdfz[Ka#>A3X}]n-_:_}.3J,S7+cy`WOG');
define('AUTH_SALT',        ',S Ji{2[c1w&P{I6-/ivVQuD)Fk.W,a.#j(mqua@!x0Crf*,<)@^mn;.@ApYF[<;');
define('SECURE_AUTH_SALT', '2 uh#Rrl|t{3rA)*@]u4<c4s{D%w+;Z9Mg_M.U3Xr{?x7;g@&ux|+gsMh{Q-H?+o');
define('LOGGED_IN_SALT',   ':g$kw>-8QvXyk&1WlJ]Z)?92KYKv8N~EMy9a(ZZcn)x:|!cGI=0-e-t7X$/V|/HB');
define('NONCE_SALT',       '(FwKe2V@Z5@?@Tcih&|y5M,gY3-j,*xFud#sUkHfDEk11u|&NPYPXsI`bRH j=mO');

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

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress-multisite-sandbox/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
