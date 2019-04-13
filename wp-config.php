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
define( 'DB_NAME', 'sma83' );

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
define( 'AUTH_KEY',         'D!5OT{}sz^92F {6~NGF7Fx%jDfygM&R(Fo;jIa8CA0~|o& eadljBQ)-m^viKlL' );
define( 'SECURE_AUTH_KEY',  ',a$ZnT}S<Jd*k1p.z3v[$q@T{Gc%61!Hi^Vs_W if-GU(d 6U9LY/Vc3,&Xip?ls' );
define( 'LOGGED_IN_KEY',    '@`ig&tmdWoj#VLhjs^qjHmZsZ#w]P+/j9&6g=ToK2WONvnX~Sf<1Ye(_mW,LVDtk' );
define( 'NONCE_KEY',        'v$~45O@<AOiSsOsxmJ  f#A&44!0}=3J=v*Yp2PC[CV*Ma2FX2Mdz;mZewx|pdOp' );
define( 'AUTH_SALT',        'JcLXuzH@wsLJe<BD]+20+To&T|a!tCc9!rQ+Y|C,,|wrg+`/Q%mB)M%!2GT<nYS<' );
define( 'SECURE_AUTH_SALT', 'I#i9cSXF/UlYIVc4-duTENG[|1ex@,CwC$YuB>K_=rL$+&nVb4 ,vbT^DAWw=Gid' );
define( 'LOGGED_IN_SALT',   'tYH_xC);nnDVBlfiewV$kpa9@1SC,=gOyMib:q6ci||$BFtzb*W]p8vfk#h&.6%^' );
define( 'NONCE_SALT',       'ATiznUtZ`$fLa02SJX}>`gr~Oxl/Vt> RDKf>Ma|:IFv4O@AhPBh5wMlqA)9pZeE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sma83';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
