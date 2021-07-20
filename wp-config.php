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
define( 'DB_NAME', 'bbc' );

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
define( 'AUTH_KEY',         '+ri%gda<qgq&kr0 mbqo+Y(1UcPSg<h+F;uAEaC8DzJae.+,RymQ0[.z&#um6;75' );
define( 'SECURE_AUTH_KEY',  'hvWz9g2l@;IE!%F6q5kxzKb+R2I/sHpxmtI}?A5y.D=,S,i,N$XhdrC*/ -G_Pxw' );
define( 'LOGGED_IN_KEY',    '8RcEJ7RcbXQ:HyA6I=^yd`r*8>B5nF#-^%gaZ.a{DFuQ,27va6)Z<W)TG=:&;#S;' );
define( 'NONCE_KEY',        '~gvQ^I*gqFiTLDoEi UbMwG#tIg4W4^y.%{<8{Azh@9Ihf6+Y0Y(Bv<1^V3Si:~z' );
define( 'AUTH_SALT',        '}f{%3:.*~xRXR}yN+MC-)-xvj./hp^V!b=c8R@1zL#MD^Ol5XkeZL*8.1b+n5#O!' );
define( 'SECURE_AUTH_SALT', '&O/+P7Ekr/%g[fcU*aaV7&T/eW|qZhO)F?4bzD!9Jc heUw]6>MVoYk;qhrt~tnS' );
define( 'LOGGED_IN_SALT',   't<XDAkH(VIqLQCfj<t@,GV-1Ad>L3flB4o@(,IO/y qih0}KXPg3YtEpvUVmq Hj' );
define( 'NONCE_SALT',       'n$[]4&|nRi@q{5ukU1E7g~lcWIv:,;[{GY=b$CdvaBdo>Ff%&w#?z_PEX=$%muf]' );

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
