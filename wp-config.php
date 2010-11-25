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
if( strstr( $_SERVER["HTTP_HOST"], 'pkht' ) )
{
    define('DB_NAME', 'nsso_org');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost:8889');
}
elseif( strstr( $_SERVER["HTTP_HOST"], 'stage' ) )
{
    define('DB_NAME', 'db346256504');
    define('DB_USER', 'dbo346256504');
    define('DB_PASSWORD', 'nssodb100');
    define('DB_HOST', 'db718.oneandone.co.uk');
}
else
{

    define('DB_NAME', 'db348827382');

    /** MySQL database username */
    define('DB_USER', 'dbo348827382');

    /** MySQL database password */
    define('DB_PASSWORD', 'nssodb100');

    /** MySQL hostname */
    define('DB_HOST', 'db2942.oneandone.co.uk');
}

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
define('AUTH_KEY',         ' IT1n2t7[$F/U3JmT8RS&WKyz40fe#PKMZ@f+GLj__^g0Ae<hAyz3zKYmm4% 1To');
define('SECURE_AUTH_KEY',  ']Y]6mOF4%-X>{r`^wz|XFBb.zewA+0R2uL^a&f42l-)5cT]xZqEf8=1GoedvR{;M');
define('LOGGED_IN_KEY',    '8&z!pzKe$%sQoh(p+bmLYFzVK&$,qi Cs83:8m$Y?%)29<+^XuM]rAVqJ0>J*UUn');
define('NONCE_KEY',        '&DIW/bhoYL7|(<$.#Q.A4,fP%UMk97G,|Z/iGH !`dq23%ZJvTsRS`FskoQdJG,S');
define('AUTH_SALT',        'Y/6=) 48+} !i0=C[M&6S-^qx`-4s:16/Qer>$ ZWQ)(Lemx5?4S&R2QiyxIBL~:');
define('SECURE_AUTH_SALT', 'mH{IM}B-TZn|bIZHXSs0@cj;KYe@J_Iq/Ai7}e51)QGo}jO~yb?u5&5wL^_4{sp[');
define('LOGGED_IN_SALT',   '6hu#}e:[(kus;8Tc1+5LUL^#?NnE:}x%]@ut:qN`{48)%tqV8W_upbX1!|KSxC5.');
define('NONCE_SALT',       'D$x]VX+;Y_2B5H$~ 8peul:]P.L}*,:Zd/@~a6f8l~`hc}fLL{x9_^)t2o0A3FP~');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
