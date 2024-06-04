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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'EWfbR,bkKkwI9LQh )T2%o:-g7!~#]s=i[?(oo{HmcDRTGVqei&}}vL/;q>~k:v_' );
define( 'SECURE_AUTH_KEY',  'sRCTSE39=VxLHPSetIhH]cR{z|=Chu&vhw=JFGz*Rw^TayaX?;Tk)FdeF(,s8UR1' );
define( 'LOGGED_IN_KEY',    'Bu[<TAk )!ty!6/r4Tt&]LwpQe<Ej~RYEl4o0u/}&i~s-kIV[F9WNpK?eygJu<~2' );
define( 'NONCE_KEY',        '2p%@$k/MQ5n_p,_q/}TFN{1<;RWf3LL|g&q=|Y?+8IdwMb)(acHKj:=S[4|gqcTQ' );
define( 'AUTH_SALT',        'ggZ07m xcEZo7^O=P8;7idB:t0bwR>/*OPB@2 XN(u! 8)Zo7JBy}G#%jk)f-F!y' );
define( 'SECURE_AUTH_SALT', 'rLucQJG=]RFDnjt=Vt=xlV$ATmX9&5_0amF3o#+Z[1ZxI`*R#+F{E$^R9g4/wsY/' );
define( 'LOGGED_IN_SALT',   'Ax(36?.fh3JA|2)`V+KmqvIUBe<R)eteIUF*)i*37wueT!y7ok$mQfnw6>!ZPv>^' );
define( 'NONCE_SALT',       '`/8AtoZ@P:{9{5?L$E7`.Wg[g-Tw<xn[F#Z{2pV!,ZaZQ$pBsJrk*w+=1iwzIde_' );

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
