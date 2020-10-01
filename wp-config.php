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
define( 'DB_NAME', 'propertysite_db' );

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
define( 'AUTH_KEY',         '|`$PLn1SfXJ7=9=&&X75Ay,df./=aHw8|]o=:r{8!=Hyk|O?@q8OB1-?HG4BN8b[' );
define( 'SECURE_AUTH_KEY',  '=}S+q?j<k@uYMoOxnqxzE}bgf`86bqK0drEc_b$_:@Dh[p^g$hhn>3@PSlc-c$4+' );
define( 'LOGGED_IN_KEY',    '.-]@A*r.x=y~UM0$3 :rbb(FZ`p7p[5xiBhDzXe6.ZnAIL}$O~2s694nC}yL.KF6' );
define( 'NONCE_KEY',        'w[|Un>B$!J,f%iOM>(?/@3)<=K_?QNsUaI6%`pCI]@(y!Gc0M?X~q!kG??^BTen7' );
define( 'AUTH_SALT',        '15|MlQN+~$y?iWC;KE9;B-5{d3HXxoZIt$Z&v-qI;US`#8=K_Bkt_SIXYFw[45w/' );
define( 'SECURE_AUTH_SALT', 'H1ogPJV3nuI|,Ga3&jh$z=fsijtSFW,z^^,1v;)*yVdn4q29LiX3=WSJ&N/Z6!mD' );
define( 'LOGGED_IN_SALT',   'JU1Ae*6D_XjyX/G}9iY5?oD#bZ=F.U9<cN`I^1d{$ia`j}IOVoi*5p^) T^d8n&e' );
define( 'NONCE_SALT',       'y+?%osnn{PJ_i&~)l<XazDyns^&qZG%5vK&Ff.,(CLV7$B-HhK1DH/#iDvi0I8t>' );

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
