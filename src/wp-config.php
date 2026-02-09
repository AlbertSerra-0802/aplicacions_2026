<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('FS_METHOD', 'direct');
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'liceu' );

/** Database password */
define( 'DB_PASSWORD', 'liceu' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F+l$I w8~17E^{P7x`2O#)y@>V/XP$f;2%[7f!nXTh<Y$4J5R!m}6*EGdJ<8Snd1' );
define( 'SECURE_AUTH_KEY',  'gGho-erQ,Qkd#xs6quO-Khkyju$(cwF9/e]EI@&$6!Q]m6gm?`cH#X>HL<+zjL*@' );
define( 'LOGGED_IN_KEY',    'lT,%%{j:5f*sFigIYy0A_bjG8U)x,|;cq+:AOCX(Rmlvwz;uR>^oAbuc!f.D;xf|' );
define( 'NONCE_KEY',        'SazMScUO7*Yx-mO7;Yei&KtAmq&N6/ $c6M<0To^5U0Uu07#4`JYTK) %QMvBKq9' );
define( 'AUTH_SALT',        'njd62vbKXS/;-6{RT?LCjE6~JXN2/0lP1(RVO}v5);ATeJ!QV*j3G1>&~%AD4~sq' );
define( 'SECURE_AUTH_SALT', 'W4|gW<GzT#V3gP$MJMR-CYW7xANyIyO_i{Vg0F|=Uhw6(HOvvs!rxi,{CQe!2?oq' );
define( 'LOGGED_IN_SALT',   '_r]L<cyY`fU5;E|:[bJj~Bw!43Y`}SrB$[jpss?[XVQlW7t[V%n7H$&a+x):jIiz' );
define( 'NONCE_SALT',       'IuZ O8P=)ixlnY];1AqA8fc@%a)uq+[uaVBEeX iS.Q[0$RUEJU(:.AGZ<;?Oo}s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'asv_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
