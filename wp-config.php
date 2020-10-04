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
define( 'DB_NAME', 'xprex_salon_db2' );

/** MySQL database username */
define( 'DB_USER', 'xprex_usr123' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xprex_pwd123' );

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
define( 'AUTH_KEY',         'HuMM*3Sp(ydjIs0;xUi9ue~+I+6,]{X%SpL)dJ2YjzT5/Z?k*{Z@xdwR0~yT!|%0' );
define( 'SECURE_AUTH_KEY',  '}Epe1s?}F1Wm*!c<8yl&%v?j8SptmA1l%(2(! vddM__@^B:[UYZr?W%weiE0t98' );
define( 'LOGGED_IN_KEY',    '&WD[]q_N&UqQ#D{bLYa4#q8V[XEh|wI|S%#Yw;gid?VJ]$dQfBE1J O+Sw;)KhQB' );
define( 'NONCE_KEY',        'd@Om$@~ur<%,q`noX:-d^l91<fwWpT.r6|#_BvNtW@=]EGW1pK`P<E]PcRdrY@`h' );
define( 'AUTH_SALT',        '2r wqP7+=zM][~yAqW@H0+Tj>!y<q+fBROTVX*g-xw:t!ZHZ~$eJL@@tIFuY~.cp' );
define( 'SECURE_AUTH_SALT', 'Ef>JS3*kX,=xaY-iHwZSFx2pG7F$;dRSM}-D`A600ngzSlcfwf=aw|45+4tH`A~%' );
define( 'LOGGED_IN_SALT',   'Z$27<t!Id[7Rm~y4Q;oP4Q]}+lV*,R~.j6lyz:>LD~w!Uiqgp8?KTqK=u^<*Sw:g' );
define( 'NONCE_SALT',       '#GJc9fp< 5w:Hp_q[u2K4;@L!Gp6.(X9F`.N}ZBQ)AKYc8{h9>>O@;$QAs9X7IdB' );

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
