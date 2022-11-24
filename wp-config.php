<?php /* BEGIN KINSTA DEVELOPMENT ENVIRONMENT */ ?>
<?php if ( !defined('KINSTA_DEV_ENV') ) { define('KINSTA_DEV_ENV', true); /* Kinsta development - don't remove this line */ } ?>
<?php if ( !defined('JETPACK_STAGING_MODE') ) { define('JETPACK_STAGING_MODE', true); /* Kinsta development - don't remove this line */ } ?>
<?php /* END KINSTA DEVELOPMENT ENVIRONMENT */ ?>
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sweeneymiller' );

/** Database username */
define( 'DB_USER', 'sweeneymiller' );

/** Database password */
define( 'DB_PASSWORD', 'CfQTiHzyi8VamAh' );

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
define( 'AUTH_KEY',          'Cqo[tAAj(A^*?|#~a*+2)eJ bYnS44,s:y<uE3ZKZ6.sp,-qABm_:u~p?dUSK!?G' );
define( 'SECURE_AUTH_KEY',   '(l(a&eb< &f1Py!Lbte<c#0ja)<|f3UoJmIBouN]v{bOKWmm1+`t,`RS{YV!%&?K' );
define( 'LOGGED_IN_KEY',     '$}KQ4ABvJiqn~D4S+~wCC:?bJ&m#L:r*+nDS|Q2Vp8.s+ QcT_$YQ&pvmikD*eK;' );
define( 'NONCE_KEY',         'QVuFKhBF*p7(^RG8hofR3E {N9Tcv]Nym5gDXsXQ{KTj/ia&ixU-_W1u}~5xvzK&' );
define( 'AUTH_SALT',         '.~?p,&VaZ~j*;72^n Trpd$YXQ3pZ8a%T@Tgc4,&P1o?cLYA07M!3!`D*^>jx=Y7' );
define( 'SECURE_AUTH_SALT',  '4(rRGG0}iZo/TL`$W8d O0*a^h]T6K1?cyZ=a9#>+ls&Sq[T99{(*4Kx?=+}D&f*' );
define( 'LOGGED_IN_SALT',    'd:;1;efZ`jw6q^RwXlAATDttj^Yp@!JBSyO-oX5Ix7m]$0Txd5#(l%K??yu+0q9b' );
define( 'NONCE_SALT',        'a?bat&N`3<%,57RkCAGKm2z>L38JRZP-Z#/.8LTMHQKqV[Dl.MsMJncOJRBK/0R@' );
define( 'WP_CACHE_KEY_SALT', '7<<.$jfmsdT!V3nQyT?HiY!<yuNaEtond;$=?1G-,5~*Zu:_{h@@s0ur$ovHhdAe' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
