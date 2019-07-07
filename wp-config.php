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
define( 'DB_NAME', 'amazingcollege' );

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
define( 'AUTH_KEY',         'g^nGi5vM.VXVgDX!=^BH5(z<(;p=K1^RWQ6K.Qtn{:.S$5XC=#a9sXlh}iB&q?&2' );
define( 'SECURE_AUTH_KEY',  'zS$FMQsAjRB[(S7Tw$g9(>LL#aIU}LkS56GXp$pPTa]Gy{/;bE%_TM<?~Pn}JDh#' );
define( 'LOGGED_IN_KEY',    '}t42}K_rhT2r5c2K=UIf0bzA%aA)Wtp[{zAfAM.50<(&Pv0~Apk]=nIcB2dg#vT}' );
define( 'NONCE_KEY',        'XiI6*P-S/w~HHhox]IVWX1Q|jWd3Tt{:a7(if7GnucwHU*.88R^{!` ,Z)FWWkqc' );
define( 'AUTH_SALT',        ',D;`h=&([x;*k231dH0#ACgP2NfXR(H;pU*:t*Z?+5+l sOTO10or%UIhCnAj]Z ' );
define( 'SECURE_AUTH_SALT', 'M_dgUSM{gCH<i{SmOaH)4, <j.G91PzZ!<6P1Ao 3ZaDjtFKxi4{kY7lKF(0T4+C' );
define( 'LOGGED_IN_SALT',   '$]sWYyFzH=;g`tdL*6IA<?Z+C{kGE-<KKz:5 >Y1`&p=$p@X K XzNXx1*23RDxp' );
define( 'NONCE_SALT',       'LL`nM?H6G!^(@IE%c>riYut7Q+dZE,J`1(Y69-A)?YwDQtcQPY1|fpOl&Lp-!]j6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_amazingcollege';

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
