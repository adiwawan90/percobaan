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
define('DB_NAME', 'db_myblog');

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
define('AUTH_KEY',         'a%~>~gIMCd&Th2R@t=.$8@H}Y<)R/J9y8tl;Z0f6d1txBi.h=.U3EsWzt:50QtD,');
define('SECURE_AUTH_KEY',  '/g8T$F$}b-/Y7(;rryr*kUQqqWY?0F,(O#sNZECO6l)Pd/~reP-LY+Y_j,W4#4K`');
define('LOGGED_IN_KEY',    '_[&:lW<-K)j.JFpvB|AnBO9t*m6R#uUR9| &aq:xW]]H`LJY_%T=[Nd=Z7B}@EGf');
define('NONCE_KEY',        'FV;mnr#L&WM26]]S0Zam7z+Q[V#z@6*85qh2M_I]9S=^9PQw:H;Hq:70##=oHwiV');
define('AUTH_SALT',        'pT,2>+@Eh64&wws(|a[:{{,q<L!DKC|43u*^>kLk!4y`A0u0ScyKrAPOZCXAswYc');
define('SECURE_AUTH_SALT', '4f8T9$f48@A#{xS@Y7C;LK$*gE.E#b7()BRfIr)Pf}ySD/<e)b-dN-EX1,b^Y%ew');
define('LOGGED_IN_SALT',   '`#o]d:Yn]oWZVU|x3$ley:!3N_<#M96k Z0P2vG|FoaA0jx`wqrhZJ8.,=NDt@vz');
define('NONCE_SALT',       'S?tRc8M_B}vjjgqZw0*HJ,KHUEI-NC#82JB@o O]83BogS|.$/fV3JHcAXgf_]-n');

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
