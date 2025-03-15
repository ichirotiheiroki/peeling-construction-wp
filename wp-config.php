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
define( 'DB_NAME', 'db_peeling' );

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
define( 'AUTH_KEY',         'gSe4=2SL>@ed~Y`_d29[DluQxhx*+a7!s`-G8/E.i|et&6vdVB#h|AHNzI,%&b*i' );
define( 'SECURE_AUTH_KEY',  'Hab{M`>8b.>}_bSLsjb4u(>(4jwE[P-OEITGe3qFILA4w:9?,(G_+K[$0=JkT+Hl' );
define( 'LOGGED_IN_KEY',    '4p.,GZ:,ibIypj`3cqayy8o/A[(wpgpf=CM5xXtR!F=M$/x%4$Q/0ottG(hV(A/^' );
define( 'NONCE_KEY',        'v5Q|7QP:X!VoWuL{|J_ER[mJr3:h4al&u%*/]#Y{)j(LOctv#Ic>GzY7=o@s$QFT' );
define( 'AUTH_SALT',        'oOuinKGbs6P?nWvqJ|jf^-U%3h<95tNf_v8J*|n]&)1rz,)ZX?EX{NrHuSWhvR5Z' );
define( 'SECURE_AUTH_SALT', '?AG4.p|]?ZcS^KV>`*XaG$m&N6G9PKC4resW&ug3~axoRh-T~1D[-Ir ftdJT!cu' );
define( 'LOGGED_IN_SALT',   'EdL%]Z:@kudAdiN{py}O1(;wkCgsc}v#q<$~gs gY)|dttWMqN[SQ}h1a i8.~j*' );
define( 'NONCE_SALT',       '. h&;gOswD+r6tB}sJ<[clhXFL{W]]MCo`!78RD,&Sn9JUJh&e8ivQrtBDxVDOtu' );

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
$table_prefix = 'pl_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
