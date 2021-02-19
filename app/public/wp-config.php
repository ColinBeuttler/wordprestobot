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
define('AUTH_KEY',         'bZ1j+nWXwQDxFVu7E2dLX0RAWJNdDLuE7WQgt6jsZWFDGETIXHfqMfo15c6TRf9jYj7T0LJx3BaXKcs8VCzm0w==');
define('SECURE_AUTH_KEY',  'fOq7kaHY1Bl19jTT143tqOQyG8hcta0Ir4KZuk8nk1Sbj+zIEnAk/jelhhakrNpF06X8GxoOlFZSr+u04hqiKw==');
define('LOGGED_IN_KEY',    'cl2Q5ENm9f8/6A1p/gbukKtI4InPNyfIDrzHWqcBO9kDB4I7eFpidfpIclpYYrSuD6xEwRt6HBk+xmarCXqQaQ==');
define('NONCE_KEY',        'HQ7s4V0s74K6DEHLqfUXI1GiyCU4XlNeiiHtfy0OoUaVxhWrc1WKwfMkns2QGOilJShif5SrJB00Yhb5GmDXIw==');
define('AUTH_SALT',        'LkswK0D/PnERkADP91tHOvUg0tKm+YSpKVuKumlgfRjA8gxPgCIJhe3fbrmnDEz8BNdlnMx3slmS1THpv/r8Og==');
define('SECURE_AUTH_SALT', 'zm5n/PuxQsH/g1PqbE5AA6HGOJxS/DMuzmQmk/VT+nfqndy3Y+95VHHHxJ+dhcS3tbMJ0MHNpUPSokrp4ijrWQ==');
define('LOGGED_IN_SALT',   'y+CTyOuWudF1DSgFm/yS+MkXSod66vX1eB8NcJjxLAr0B98hF3tXV0NThoRqNcOFM7KVOzCKmFQUP5GqcR2Xqg==');
define('NONCE_SALT',       'JGE79xSrlRWZLqUNWRiW+dNlg+1OGmKsSAuqYw3qLxz63AkUJtTR3LR71gGOiK75qXioos8BvdyHQrrRNKNd4w==');

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
