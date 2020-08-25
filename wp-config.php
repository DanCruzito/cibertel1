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
define( 'DB_NAME', 'word' );

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
define( 'AUTH_KEY',         'XT@mRZ?GAl]q?r6b>9[LhV|QfzfaQ*YXq}MeI8wbHL]Alz6~=w~1u02lWsU>,1)=' );
define( 'SECURE_AUTH_KEY',  'L^_pDO4ejX#2!nvglCnp.fm]9r[Fr+s,PC`<Y`rIjc5!!3awd-oa>3g7xfm*g;ws' );
define( 'LOGGED_IN_KEY',    'l]xbB@,)58b<tsWtj6+&)S>!c:J>@Vq0inJCl6TuYnS=aVwq@j+Q(liFv@D1rd[6' );
define( 'NONCE_KEY',        'k^(OP0f(L1,j9-H1pU@_UX.}~RMQA/1qxX(?ML[Q4Tw8AsNg/N0/Y7fe(RE>oS=l' );
define( 'AUTH_SALT',        'zbo?Y#h)^y]<}!Jf2|fj!)Gt_S<uC9)((e}7+,fRA4w+=>d}^E=_lk2EXQ_m.(y9' );
define( 'SECURE_AUTH_SALT', '.?J^0?oklHJ<J`74t9mk2u^pV~ag5k4x^YpTLG6mk)N]gHS?+s.v}5%(FVoKU:=(' );
define( 'LOGGED_IN_SALT',   'zENN(66eRBSzDy!~p2*#bgLMEV?%+z{q4ltuLNIy9gkH&.B%j/>-wF^ vRCJ7kSY' );
define( 'NONCE_SALT',       '<[orMA1A&az_UrTn;F+.%W;#}YznVsU]24#h@mDMn8q/V|{SE&{@E33lQFy,gN=@' );

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
