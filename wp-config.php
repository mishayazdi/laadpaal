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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'loc.laadpaal.nl' );

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
define( 'AUTH_KEY',         'j_Ck{0bFgh#$bvO0*cO2>&d<=dH.Zq;H|z5e^0dz-^g-z<0]bPOFI&f7$sdnwNlj' );
define( 'SECURE_AUTH_KEY',  'CI>NH63hQHo^~V:^Xz?:Vg7tAGIsj|OUp2bsXnci)57{LLj1:Q@d4q tn4Li{t@T' );
define( 'LOGGED_IN_KEY',    'rm/%FRe{b7&t[ZP~)4|Q5IMAH>uH%Y[gNRu-ENE.Ram.3;sF(#:A)!]p*E7/:kv#' );
define( 'NONCE_KEY',        'vlFZ_.Kk/qq11I{E,^K((Hl[P#C]%K5ppg<Fy3@p(tIdWy0aDg2rDA[MsRrz]-X<' );
define( 'AUTH_SALT',        '7U`20X^lGNB*:=M}XI=A3At%2iL-%@HK5-HeI86J-3RHRWH1YdKV6R/Kcy%(OSD2' );
define( 'SECURE_AUTH_SALT', '=p8Vl3E-`LX,1lgRc9-@^UAZ7_!fV6Um;|N:#z]zWnE E-Wj*zm0a*D339/6Az{1' );
define( 'LOGGED_IN_SALT',   'WeRAq J.LW-b7{S1ug~]*#Jz.4J^c&R{>FuVytrP@PY4vehOW1^>WtNTc{O?=A3P' );
define( 'NONCE_SALT',       'lqBI9hv`q*$c~bx[:@2S;7Unj90`-`nZ_qhYP@f)=7}G2q8#_G_Ul?(WCJ_P()^^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ldwpl_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
