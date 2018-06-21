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
define('DB_NAME', 'bambooDB3entb');

/** MySQL database username */
define('DB_USER', 'bambooDB3entb');

/** MySQL database password */
define('DB_PASSWORD', 'IXfow4GLXc');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'vJY>}Fgv@CVw[:cs}GJswGKd@14koUXn7Aqu<Ibf>{bruEIy$Jcf7BrvBIYv,UY');
define('SECURE_AUTH_KEY',  'X.3Tmq6EGZd:1hl~8OV-_Ohl59ps#9SW_]WptDHpt#Hae;2ex+gk48Rr,>Yz|>RVo');
define('LOGGED_IN_KEY',    '!NgHP+*2TmqADm$*PT.<AbuyAQu.<Xb{IbuyIM$^3Tnpw#GZd:1hl~1Kx~;Ohl59');
define('NONCE_KEY',        'gvzFNs|[Zc}0Jk@!iq6PT.<Xbu<AEuyEXb{6bu7Qq,<Xb,37nrBEYy{5Dpx#Ha');
define('AUTH_SALT',        '[VZ[9Csw9DWw]:dt:GKtxHKe~15lpvz}Yc}0Jj$^JY@}0gk47Rk@!RV|4Cor48Rs|');
define('SECURE_AUTH_SALT', 'svCVv>}Ys|8CswGJd@04dh14Oo!|RZ~15lo8CVw[:y$MQj7Bru7MU^>UYr{FIrvF');
define('LOGGED_IN_SALT',   'HX^.3Xm6ATu<{w-GOd_1hl~1KO~_SWl5DGex~9Ha~_]adl;69Hx*_Hai_5D@|8dgo');
define('NONCE_SALT',       'Ns|GV|[CdwzCSw|[Zd:1Kdw-KO-:ZdlQYcj3BFj$,EMfz^3Ycj3BFM$,>RYg^>Bgk');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
