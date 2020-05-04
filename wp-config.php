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
define( 'DB_NAME', 'blusasbordadas' );

/** MySQL database username */
define( 'DB_USER', 'blusasuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'blusasbordadas' );

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
define( 'AUTH_KEY',         'z`XfGcu+qy1m{zikW^XbcS6:!<xM}sPln-Y?j%^(L1RaK0W0<HoUI!Bi&k~<g[-w' );
define( 'SECURE_AUTH_KEY',  'tKr*cUvkX-%28k?S:(/X=Xng S $Hpja}zr>v-;9a M~?EJLfG;ixl=AuP)^|q}W' );
define( 'LOGGED_IN_KEY',    'uw2EZ0C`515>T(Q2pY@q2HMH6kOYWU_~kQ:,W?F^u]X`Tkp$%ID}rl+:)4k2Qu3<' );
define( 'NONCE_KEY',        'R+?&F*gjgvCduy9[b| >kT/BKlpt_N-|h^%~&utjq<Hw+/W,mb^{f%[8UKjK#j_*' );
define( 'AUTH_SALT',        'TkQMGunb@M|2t/+8@rT[8&8!hV3;RBs[7s(V+&$5Fj]{&]34WaX^D!<9M(X};c~A' );
define( 'SECURE_AUTH_SALT', 'g}>*chmV2heH]~%to>,CHDd&FH%,d6OZW6%T]opun3mRwR8HJT!mh[8D?RJ}f7Qm' );
define( 'LOGGED_IN_SALT',   'S7A(v@WNY7&_|=oXyatTYPuV-3ts:uImZ]/-;P<&4B_FS._C-&(`JOAN7gR+%-h>' );
define( 'NONCE_SALT',       'W%*7v X/&O>jSMv>&kP7?U:fnMj~db(DEja3FzT,2K1=p={j]ee:`YcmzO2!3DJ:' );

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
