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
define( 'DB_NAME', 'olivier' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '(KWxc?oNp>tXK5}aDjxCjnU}}fJP-BjT`>@gUOxHY0I2$yN ~4,S~T< olzl$p(/' );
define( 'SECURE_AUTH_KEY',  '8pDh$mYX,m@[k|zd-4-E.)4F@!b|T9g5@TbN|>BBZY@HBKQeCW]%[`BA.)N(6#kB' );
define( 'LOGGED_IN_KEY',    'zo;9H2SN`hCWdf  ^@>&@)OW6fBtD_9KjL^T*3wR;}i#2D]Rv17_`x/%.)3flBkt' );
define( 'NONCE_KEY',        '`3!52,r]WERf !Vr0x]u!@DsWmTileL..T1F/K!s<oN?,vg%T}p%/or%S}z(C/^0' );
define( 'AUTH_SALT',        'K32abOg2_;[h(xwqAsY_a7bK6Pj-5?#;l 1VqDG~y(qTck#PELfTA<k?z@(1DE^H' );
define( 'SECURE_AUTH_SALT', '=Fts)|A}f]6%WBO/~d1%H:oVb)*sH~%y}j6F<*KeM, .7hUs4P.x)3qm/cI5)$6R' );
define( 'LOGGED_IN_SALT',   'A9LV$8E{T|y77c$!Z8scZqE8.:)NZ(dpb|%-#IYN~yJxWk<Q8x+|HD8JWA{E6(Mu' );
define( 'NONCE_SALT',       '4L`HWQsLK|)]Pbspk+K]y8~5kjIb:#QnnBSI/ZHjhK`9[EzNWxzb_%xUC!)~#bJB' );

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
