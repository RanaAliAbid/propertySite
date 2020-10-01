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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'propertydb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<Wq<:-81_T>KW=c5$u|DP#kqu)X8jm0>N:u_HeVZXNGD2p=e|~+<*-w?d<M(`CR2' );
define( 'SECURE_AUTH_KEY',  '~?[3uc`csD%I9m?N_KGw ESwuF&a]P7BL]tuzQ3`Z1Gbia(w#s@%u@y59tBU_p):' );
define( 'LOGGED_IN_KEY',    '+F5vlid]r@s0;euw.XW-4ie]9FNr~c[;w2QVu])m{,K`jfuaT(-.DEdQu07F2z.K' );
define( 'NONCE_KEY',        '9i!1|W{>ub-K7bubUN3tQ Zp|zd0:bs6U/os8C!(AO2[aW>ar_9Gn6L_F m8^|<5' );
define( 'AUTH_SALT',        '3|(`IG(j>N]VBW~8`Ru/HK}~gu+tM.##Q0?YzKfB{e:?5wxoFg KPxeG&#$j(!Be' );
define( 'SECURE_AUTH_SALT', 'oWqsmmys,DW~g_kvJ^+>--ofK^NjyF7Q mruzrt4X!)GgV,^1)d&jXmcg,lQ^#q]' );
define( 'LOGGED_IN_SALT',   'H8HLvB%?y~ujG#nQK)0K8}VuUY`T&Sf<k1qPV5hR(&m^Z+Y}uK o>S#!U<L._}g)' );
define( 'NONCE_SALT',       'p|T^}:gtk%Jq$z~fwUb5?dG+9]ocv?nnE6Ig-6w3O|Ew%*9;ln, |uf4R<QyNfLG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
