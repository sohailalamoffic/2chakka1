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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f%fVVC:0KZ1=N0~z4Qn`1RA=]y:Y)7d!uhRm!-#T_*[X&[pIxR ZrBA1Bk)-;$|P' );
define( 'SECURE_AUTH_KEY',  '#:)Or73(+}IHsCr.@#2GyS@R9eIS~iy^4n19ru?&Y]cwi2A>0MQ0u&,L2NV5@ljJ' );
define( 'LOGGED_IN_KEY',    'y< ZyWTvxKSWU}Q&UkOeqiCzmgj3@H}8:#:K=2=,Ym)}I0=! Zm!=s)JVkEJ**^1' );
define( 'NONCE_KEY',        'BL:!$$aRZJ79P{X@ZyP12oNl1Ytxf?i${jkswE#`~.-I<_tP|:3GNju0YuP CtXy' );
define( 'AUTH_SALT',        '@L:*164$+jL6v`+14X R.cEC{Jonuwd Z7Ab`]UA2j/d*>h|2!+d@8f}:ftzjq(!' );
define( 'SECURE_AUTH_SALT', 'cGP/+7By$$Y 3V<6,8_w>*L qx@S#/xT#Z?!4J=kcmPaLB$<gM!JsM/B[O),1o*V' );
define( 'LOGGED_IN_SALT',   'F@e|u&&<HD`C$YWw:3j_/7{`$B0,l cY!dBNcIre(|FFY-oy}+HAMVxlJ$y.:qq<' );
define( 'NONCE_SALT',       'dw ky`*PQbVap0+[YGib|+7UwNp~w;eV,MUY]f;AL;|?Nvt-Y~ZpjV94LWGCN2cT' );

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
