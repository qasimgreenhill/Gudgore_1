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
define( 'DB_NAME', 'gudgore' );

/** Database username */
define( 'DB_USER', 'gudgoreUser' );

/** Database password */
define( 'DB_PASSWORD', 'gudgore' );

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
define( 'AUTH_KEY',         '<L*!6x1>vT7zkmoX$#%uS>9k{b@b%L1Z%PG@*r/]DMLGz|Gu<2fV).:!6hYL]~nK' );
define( 'SECURE_AUTH_KEY',  '-,SNXt(WV9{fB8w`s9xQ,u9U-b#xs. q>sDL+X{Hh*4`|p&OQ{`V]IWOt?ZPVykh' );
define( 'LOGGED_IN_KEY',    '7$H#GEuTZ[d`nnIZVb(>[N_}KgQHv6#`8xb)}_Xk$:oDIqoMOpvKTV/:dKOz8 v<' );
define( 'NONCE_KEY',        'qQ)YA8V|{`}HNsSJw:H8^:^])%9{j]lwaM*Fnyde0POqv7 `Acdwt)a7s;]TsLKE' );
define( 'AUTH_SALT',        '`TQ$tah&Wk0n;#,ck[5`_ZkH0II|ZZB8-It~#-Zm1BznZQ5U~+Q+|qD3R_?PG~)]' );
define( 'SECURE_AUTH_SALT', '78c_`#iy1?K6bgRua?_JoXZSg27@$([t,RjEWrz-,#q;,FG{Xb)oN.mBwaB4a(++' );
define( 'LOGGED_IN_SALT',   '+5}-?~ 8g0&=S*KV .-h0Q((5<F[ml!w;.?3U)Muv:HD!6JzDi#AM5`IKSAM3dI7' );
define( 'NONCE_SALT',       'pJHE-8!= O;B7WWK~^`_-{<#}s)WLWwHF*cS,i&5926vm)3lveM{h+8JB=Y_hD?i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
