<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2^f]au{{5ly.ChJea7ci^m`[6sW9~$@<tmZ=_T)K8m+#GeT5^Ah0v@G*Nk@{;Cy|' );
define( 'SECURE_AUTH_KEY',  'Ll=p.MF{5T?|#&{DbG)+;VofvA@qmLg]7)<:y]tPwUv](>>z<l<][nVv]ij$V*t0' );
define( 'LOGGED_IN_KEY',    'Yv2IO#h*B)AS1L+ 8RYNAv!/s2z}aBnBJ&V^I@8#![F+qVGibbz75@`:trW6vZT_' );
define( 'NONCE_KEY',        'pfa./lHymLDKJ_-co)9ytzX`s<+(5@sf7LY<Rx*t9umt>D:w(StT+8_zaur!UO~K' );
define( 'AUTH_SALT',        'dE>v@3JhL-mi0AxY9V%s49Vy*?V[6w.6{O_!tqgM^v$HLMNgGPC|t33q|DwVy%0a' );
define( 'SECURE_AUTH_SALT', 'S)9jPMP^4c3[WePPgePqX:d,!>S:Nm=_WT^9>OgCDue#rCbM!WW{ZHvk8e$50]KP' );
define( 'LOGGED_IN_SALT',   ',#%(z&0(=ieyQ6f><eGahV1$#F,7.BMuXnh$oB/8d5-DS!)6b8Li;&gZmCL9tJ,-' );
define( 'NONCE_SALT',       'n`T#j:wV2oL<#}5Q]ft)-qdYX/ES$^oQ`t>|i{L-.TBQkL)|fw$jBwwfhSd#gs&O' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
