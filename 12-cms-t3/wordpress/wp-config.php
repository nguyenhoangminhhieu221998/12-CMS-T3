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
define( 'DB_NAME', 'cms-v1-20191009' );

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
define( 'AUTH_KEY',         '@IK}=1[2Q|YW6Vxk}6q;#uX`/@*XpwXKQVnHEEbWypwa`I3Ir)MFhS_~YJ~9pHh2' );
define( 'SECURE_AUTH_KEY',  '+VUc(!O``Et*R?Bm(Oj5;q=X[G~Y]xWFF7zc4gwUr|zfGLWsggr/l},v&0m``(_,' );
define( 'LOGGED_IN_KEY',    ';3NYbG12Vt3tri.J2^VCn!C`m/;|t.~yN9wjsB6.t2=AxP9Z^5>q/TK{]o[jnoNZ' );
define( 'NONCE_KEY',        'UF4sQJJ./?ima6.Yohq--d=x@$:A^ TwbO68EhY=W}@>Yfa?`zT3WWnjB`XJ=X_B' );
define( 'AUTH_SALT',        'HWH#rL)L~~1WhQ#Z+jRed-A4cP< x%M|.iD/frf5;aSuJP6*7^M|wa5BB#+6e&k_' );
define( 'SECURE_AUTH_SALT', '+xcFwj{qaVuU-,9>MJQ9R-G8ZwH;>gfR.ew7Q&<-<nktmqC:+ob4R}Ha5}AA3g<F' );
define( 'LOGGED_IN_SALT',   'Ds2FFH@oM%=82-&q}7ACf;CA^=qb]Fa!4$oJ!{0CwYnm(|&L%Zd LG?%^-.&Bv ;' );
define( 'NONCE_SALT',       '*gNn.cV._isN0<6vk[}uaj#y nU.eF=HX9dB^7c~9D o7VzNECd_*Y<}1O@N?9~G' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
