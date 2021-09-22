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
define( 'DB_NAME', 'caribarang' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Z*LH!9iHb?~9P%2f/n:X>gCeBUplyuANlFdwEHFPk`L.Er>/]YI5^K]HJ4gB#L]N' );
define( 'SECURE_AUTH_KEY',  'M9B`Tv@o3{.F%*~mo?WJ~pr+8Gv*?<+`7,5ry<u4:[*je7z|ZG0?Z2vAbx&3-G@J' );
define( 'LOGGED_IN_KEY',    'e2%(=Ao#9JTf*cWR3|?Q#*>Py7,_cdrSQfK<)XDu9yP{(<RZDdhpSk?T].ehFlNv' );
define( 'NONCE_KEY',        'Mz`zZWF`iB.NXH$WDDocN4<w~wyR7co4AGevZcvl.VeNy|BX:vs@bU9n1zo#Qn+`' );
define( 'AUTH_SALT',        'aKH0PDE|?PXLj#?:V_B|}PG@<:)]~4kxb%}DeeRg3ajIdLvxe$gh~j=bn/Na{U/l' );
define( 'SECURE_AUTH_SALT', 'w!aZAz6_,_V>,p-F*? JGlYul7l=K<QmN}x>wrUhLEM-#7Z5spt (tPY_(SKMFOw' );
define( 'LOGGED_IN_SALT',   'Li_ecQ6{,L|TsghFHXm1PS-4Sio@$CWk*^rCM<nlYPm@AaQ5v#y%Ir{U$9MT|mC,' );
define( 'NONCE_SALT',       '.Gg|qGX?7D0pFxVECeDk`gYK0&vUp~1xH.OPpEp]/|,Mio>-noI1i)op-)h^2AcM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cbr_';

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
