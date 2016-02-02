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
define('DB_NAME', 'wp_shank');

/** MySQL database username */
define('DB_USER', 'wp_admin');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'Mr|gOYTNO0W8^[;n%%:.m@4=_0X*n7L1KH4Jv.6guVxt%=L[u9Ja^a-5p2nAEgOx');
define('SECURE_AUTH_KEY',  '6go+GS%+3pTRau$=8Q<w_wGBb=HveJkx2/p%ox4q|@drn^1qSyOlxgq@0U)_MW)z');
define('LOGGED_IN_KEY',    'Ds%a5+e]4-6[zgs3jqpvuk(r;PWaQUl-8-cXpaafT}A@._cm$4g||*u~}DI~P/k*');
define('NONCE_KEY',        'I@4eN](N/a5HsRBDs-#Qx$ .dQPe!YWzEnFAw:{$3t5qN<N-_C+QH4ZqkFWV%{+V');
define('AUTH_SALT',        '-t35q/7P_h800V:a+_6H{i`oR  [)w0TL<~YM-KxZt977vyxQ-f(>|{(}L#9I|e ');
define('SECURE_AUTH_SALT', 'Mfi8,MXFUQ/_g#+%X>*5OQu9f!k-a(ik`<E}u{{N6P^y-Fs~~rRc_;+ N +`9m.(');
define('LOGGED_IN_SALT',   ',lt&t?QaWMgwWE:uq}_IIxz-YatwFHC!=vv&O#+&6.SA+J|bwwxpHUVby%sr(r|o');
define('NONCE_SALT',       'zR_*7PK2l0 s#YvRj[Rbji|GU|M9FAxK-9ml;<$;M.eA,+VD<H4pA!$RJtBv2+ko');

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
