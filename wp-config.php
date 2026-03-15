<?php
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
define( 'DB_NAME', 'i10801805_ravj1' );

/** Database username */
define( 'DB_USER', 'i10801805_ravj1' );

/** Database password */
define( 'DB_PASSWORD', 'K.lhOdxDBhoOQqK7Fle53' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'VfQRHOzCTVNg3kbeaUup3x8oH5nHhveLhgLeSAwug2BAetOfUQd01WfrImivqDTq');
define('SECURE_AUTH_KEY',  'RHAxFYVULGzfNtACS05A3wWMH1qqRCCcoPBX7PhvXbIz6sH5Vlzwn4m4pdiQQBPl');
define('LOGGED_IN_KEY',    '5NFfwEA54UteZUkhmP04EvQNH7e04SLlkCNFWYSPrn08MhgMnTua8ohtG3oH9cNl');
define('NONCE_KEY',        'kXKj51pSV9rimjlZxXFBDUNJ25UHZHzmV22i53pfCqWqYitUXkO8TtrryhyM94dO');
define('AUTH_SALT',        'qoX3hfuJ9CHkpVNHDOvG4zKnnxJs4baJnq6EwngnPzm8ZT4Gu0FBXJ1aR5sK6Cj2');
define('SECURE_AUTH_SALT', 'K5FNQNvCHZYGPPngBcVFcXQJh6QmNQbtz2F0zm5xMoRKaFsZqUBIe8Ed4M56b5uD');
define('LOGGED_IN_SALT',   '3nXm2OWKckKYjZulhm0qsr6lXWWB2kpnsbuQY4N9uvkQRL1neO1Hu1tKzhKAK04w');
define('NONCE_SALT',       'PEqwht5Gf7HpC8EoMAxDd8vrxooUltX82UtEEoIJSjS3UOnNWHMEeLJrLWP7AUCr');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
$table_prefix = 'nxlm_';

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

define('WP_MEMORY_LIMIT', '500M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
