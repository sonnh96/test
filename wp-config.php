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
define('DB_NAME', 'id8476805_wordpress');

/** MySQL database username */
define('DB_USER', 'id8476805_root');

/** MySQL database password */
define('DB_PASSWORD', '22101996');

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
define('AUTH_KEY',         'IG)h:f.<oR!Ras`0u7[eqyXVyk6/[8mVR.Gz$wdv@,h)2<gfiA*y~W&e&x3[GIVg');
define('SECURE_AUTH_KEY',  '$KXbHiMn1Kf9:`uY#]w&&ir$<tH60Jo^2y!%5`]LDYL]l`)yI#t|%-qfEO;tRs[z');
define('LOGGED_IN_KEY',    '2u>RX#!|q _Z`bDuCWZGyAU!hE~}Yz~Q~L$lN)a_v.2a/3or5@EERO;pI`,Wk` w');
define('NONCE_KEY',        '|g75{Iz/Se0kF;WrG~Q9nFkC&i S#Ifdqf59X$#oM]PrZZKPcbz/H$0Fpne!Nw>+');
define('AUTH_SALT',        'X!~dWbqTT?1M6{gYs)_~T_[tB}DDkzs^<j$s&BxB!uAi+zb<Y6jc<%OOj[vU?Cyd');
define('SECURE_AUTH_SALT', 'WVM5N#X+&,&a?h*&:JA:1%ZCrQpczp$kT)3h`LL3[0p,j$;-*Y^`dm|#>}IR]T[k');
define('LOGGED_IN_SALT',   '/zX!|RHT&Tlc2HUi@e@{y*C:;iI1^%M%D[+at{j7Z9gSN(JYKgR3O0@<HKN^e*C)');
define('NONCE_SALT',       'B=uR/1@4W rq5ilIM98{ ~4~:yK:Ixt CJWhWPlPMuY~U-jl}{7u]Ri4YYjL229R');

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

