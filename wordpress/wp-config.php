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
define( 'DB_NAME', 'parallax' );

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
define( 'AUTH_KEY',         'Z{1@WsC$c(}(JiMZx{#j<Dm`#hl?j0Xv25W$Q0v_m5?):*sz{I=CZ >:45it%5(*' );
define( 'SECURE_AUTH_KEY',  's%DI.i&KXzJd+U:d!#+!3(-o4{Dw~@$5$ >UQ;Da}$+]JtWP ,z(b>Q;V$!xL}ML' );
define( 'LOGGED_IN_KEY',    'UfN0V]K@R.(_vLpsF5HFFn]9bXN32P/CIrF/mDWb^^2Xpc_,-^)&Q7vpg+8O6[1V' );
define( 'NONCE_KEY',        '6f:J`$/> $uke.B2#d@]XHw{@:H.(?;SYmnhrH.^(n?XTEf_crvN x0Ia`AVY5hn' );
define( 'AUTH_SALT',        'D9)j7Q|t,QqH3`RqXE1LxHg(O?m`&*(H58;K-@<I`$DT[]0+iP+N%qM!MZW$#i;j' );
define( 'SECURE_AUTH_SALT', '!4Od~:668wvk$MMwc^=Ag=axx1,.E3ADia1}Yw9i}2&v22H{cL%V1jdkIvFg UV.' );
define( 'LOGGED_IN_SALT',   'K_Gsf9#O|BA~JL>7u]^~]n=NLW+JGq82,SQcUxnkaY95no`_!!-iI=j=zCOGtljM' );
define( 'NONCE_SALT',       '$Dn@vBi>EY0,8K=!yB%<Ur;:SWaj&m1b5ruEJJ5aYUC[ b[4VY>:>~Xi2Z>6bMFB' );

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
