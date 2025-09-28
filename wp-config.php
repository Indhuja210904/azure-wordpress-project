<?php
define('WP_HOME', 'https://wordpress-task-dgfeezgea4dfaqec.westus3-01.azurewebsites.net');
define('WP_SITEURL', 'https://wordpress-task-dgfeezgea4dfaqec.westus3-01.azurewebsites.net');
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'dbadmin' );

/** Database password */
define( 'DB_PASSWORD', 'Server123' );

/** Database hostname */
define( 'DB_HOST', 'new-server1.mysql.database.azure.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );



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
define('AUTH_KEY',         '0+Sat14XLd?5[uHTR3OJa]pWTn#F;gDN_[h=;wd+||v@LH)EdP/F!s:JsLy]S+Oz');
define('SECURE_AUTH_KEY',  'LaT?#{:i$6tI#4tnhg$#|#?eGz. -*L4.(n;?.v4~6E|h(T6#;o58<ym!T7E6iW*');
define('LOGGED_IN_KEY',    ' )P|b>42Wo.!XoX%+0M3&^*Lf;qb7d+AQhemiQ5e}o-;(X[BY.X+2n(st-^!(Ef@');
define('NONCE_KEY',        '>}RF<N&p:{x8}mX]k=-3&Q]nSn{JwQw-rnw&x&<bG)evQVKZ(dN}30RFvW{T3qd-');
define('AUTH_SALT',        'K _b`s|`o;f(,*5F0Re]Gx{Bu:V#<jX BL`|K*|<Amtv_G&28u|$n] {Bi`N8hOP');
define('SECURE_AUTH_SALT', ' S%+urXhG+V]_p7f3aZY=)k.rQ`$ivXZD7|a-L)-uy<Ie/Y:/}EJK.Um/0O@#:E@');
define('LOGGED_IN_SALT',   'It_J|C>_H%+06P0{-3hedby<aE!*AoxK,;)@r6:FqD>nXD%w0.XE_im!djiw]M=+');
define('NONCE_SALT',       'PtkZmx9I<0F<A&P2Zn,;CnbH+zk-=g^nM3n29apmy^Nvw,Juyn?UlQd:AZ[W%%Ov');
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

define('FORCE_SSL_ADMIN', true); // <-- ADD THIS LINE

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
