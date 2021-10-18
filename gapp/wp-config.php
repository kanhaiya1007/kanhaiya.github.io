<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'gapp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+K*kD~.=p7=j/G`-#!]|ydE`4vVTS]~F3o,:{}[J:YBE^j?]EYLrRZw/d:dhzLRT' );
define( 'SECURE_AUTH_KEY',  '5~ZCTeOz<+2_?5kw>O#_2S5x.~<4GAO#]ASMVt7RBZ@0hRIEuez+Z9MN*6YZ{0]#' );
define( 'LOGGED_IN_KEY',    'uPyl@aglL9Vy<?srOFe%87^Y=Is3IO#>#:-~r#ZW0IH)[`~xvuSy!J0&poM|y-1E' );
define( 'NONCE_KEY',        'Vsn>M&:unlUx^z~&KW@?S=7sR#9b).PSTqdlt2akYgB8P7|s)Z[j84 FT(O7SsL;' );
define( 'AUTH_SALT',        '8VITg6CknUzFaJI7sNh-3RW_`.}+bSg=mf0c7qO(sw51r%^~v$oSw#V|~OIULwz|' );
define( 'SECURE_AUTH_SALT', '4;[Y)(sle@JG/_@~9a2%30oA52<f+P)dEhV>Y1b4RIh %04!#QhwinQRQ.w5X.%o' );
define( 'LOGGED_IN_SALT',   ')wP~Q;y:pA];XExDk|@_G2MI8j{Qu)vq)S}%|4$S*q&DH[knXf?TI9{`{0KQ wt}' );
define( 'NONCE_SALT',       ',jo[XJC!1=nuVE{^)_fCfWG]31htHM~g$Nr10YXzE`B>tfdpSv+HN[tDbiHC(?M6' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
