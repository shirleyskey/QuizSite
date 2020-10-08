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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ZJ/,MS=N-)Y!EdgbLU(l;)|`bqE,x!~yp;KZ_#n{[FraEjy;_,k(b^$^i6Nr9E6 ' );
define( 'SECURE_AUTH_KEY',  'l]s&M!_Zds=`#Yh/)rL_5t@o;^q.j&|[ XT2v. RQz/W`b1{d}1T2!L.}4MHJq>P' );
define( 'LOGGED_IN_KEY',    'ZZR/cWv4or:q@-#3?Q:S0+D:Sh3D({ vgZN;EQ:Y;Mp8Yds 8CXQ#lbZ$C9JTl+>' );
define( 'NONCE_KEY',        '2:7daK&(yKL]c@lkiI*RT7!}i4||l-2_Vg)@zxW1J7y>Z%Z:Z9Ot2?_:,k~4BD0}' );
define( 'AUTH_SALT',        'G>Q{*O9s^!xrYMG>%(4t{G3uo:WkGF8WQf^>nwLFKgx0b_EoL;VhT|`jANd[,u-w' );
define( 'SECURE_AUTH_SALT', 'j$I8+xCpkA&;6+@C.=Az_[D8#cp&zt38oUcD}=iT|BX@^v=sLU:K~:huKFZ,0PAO' );
define( 'LOGGED_IN_SALT',   'H>`E;<5&Q$iNM_MVWpb:Yg[|3C}&Rd)gJD(:+1pL!@1=rq.#pXM3/|6+x:zprM=F' );
define( 'NONCE_SALT',       'KrlaShR|ujnV+!tI{lY*#xgLCH;p@WoMdiU1t(wR)Npr=Ea2ENU!M_[5s!p W;0N' );

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
