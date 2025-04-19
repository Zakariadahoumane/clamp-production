<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wildex58_wp' );

/** Database username */
define( 'DB_USER', 'wildex58_wp_user' );

/** Database password */
define( 'DB_PASSWORD', '6$6bWVxf&j7gksIp' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'G!J+aH_W516k(4m!~1X&(gr1AFN+3])z)*4:i6C3u0Mix|@7J3yy]NjuEijExk7A');
define('SECURE_AUTH_KEY', '8mGi2[(#Rba7!U5_ie_o0Xml18W6)7uMzpMA6)0u6wBd76aunvrIH~%]0|vFW&0C');
define('LOGGED_IN_KEY', 'W&(2M:%LncMQw[i+4iV6%;3E0U9l&+iEB50#142u7a3&~]%y]T1XYffJKgrk370:');
define('NONCE_KEY', 'SfYp94J17747z9[&&8~Y-OzQPdcohQc_Pg6vM%nO:JDYsm89D*d(7v3&6p~*dU!4');
define('AUTH_SALT', '2~!xVcLC3(mu[Xcn#+U%cbn_75jY::MM#yO9-Sru*zHV)F&T+]V6]%)@X5-O#ER3');
define('SECURE_AUTH_SALT', 'LXbR#l[Bh+m3c98JF0|y4X&GwzmC0~9/9b(d2RA*P~Ae[&vd-253|og6;CZ!C]Vl');
define('LOGGED_IN_SALT', 'k*1!0Y94JkcG:6B~c+hlU|YJa1IY+D/&)/1T]An(1M@r*s-9k4i9Ag+[mGGe+cYE');
define('NONCE_SALT', 'v~;!1RS7m:4/E26/AwU%m3o](@|&OJts5g)E42mdZA3a8ycV&ZdqKlyi+D845xu4');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wildex_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
define('WP_AUTO_UPDATE_CORE', false);

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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
