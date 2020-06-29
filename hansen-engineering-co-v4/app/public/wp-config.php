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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+B0CrHi+CofKLj537VHZ1VGndPUVTRlMeYwezm260HfSfCU63kf6yUiGuJ+TPwifIWSjrU/HnJD63BXU4Fe0UA==');
define('SECURE_AUTH_KEY',  '5CGixwYUbFRpn2c05Sk7JtNBhHVdmaAFQW1MIQEPmQn2zsp/MsX92SdQKLb3b7VpLe8QE9TbtPOdn92aElr76Q==');
define('LOGGED_IN_KEY',    '0vBu6U1LDuUZCz37CKVw0ZMa8H/XRjbN1VVDVeRGv9lT57ig49hAckPzk6mxg7NwTSA58WDUcR+XrlDEw4MsMA==');
define('NONCE_KEY',        'Jj9QPqQgHOHgk97wthY6XhrbfQoxF61J3GvRE1eZG1loJgH3YRoppMj6dE2dYAFwfUrDN7jXAAYUpNgNx6m8og==');
define('AUTH_SALT',        'GvkNjwqWHilhUnSgkWUJPxJRHcEdpH3Z9bvn2fuIbBG2xcCIl1QBwQiGE3wKm2NTmbxOoOa01qEx6CFlDY3Lug==');
define('SECURE_AUTH_SALT', 'SCJCYtSCPwksCjKyoPJTRxonmL0NO90jKd/DibdoLvntAU/hLPDotZdBkbwQzTIKjjD8RReSgeIM0MyLZ0WhFQ==');
define('LOGGED_IN_SALT',   'XKSf6JQxEyY74C6VuAkppKb2n7GizqRPH2GH7nj9/tw5MjsrZhVJx+ecHz4D7BbzwtOWbnTDxuoj51VWl4nySg==');
define('NONCE_SALT',       'na27k5uw914Mw/talBLpRdK0QBG3T/mRkxUln2L+Yt/j4gS5WX2Xwm0W8k+hthKpDRVekjQ7E8IBXlFswgBGyQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
