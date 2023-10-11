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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'mpizzolo' );

/** Database password */
define( 'DB_PASSWORD', 'mateo123' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         '}IhiPl/sS`H1ZRFI|)7B KJ_C^:|[->0QwR7N+Hh#oZY|>6U+:-ojpPYEN07{8qA');
define('SECURE_AUTH_KEY',  'W&b-#B1*m~s90zyl]Afa,AlX,pq4M/F-=-8u5m*#M%B3}sdl=c%`VaWc#g[`q;ey');
define('LOGGED_IN_KEY',    '+qWZ|>tgI4*Pu,[penbEn*UGe<lfjv%OV|%.0@BDsK`w4Ko$JKZkT,QN9:vk]g$[');
define('NONCE_KEY',        'Z Wb>.m mcnn mZPdt/.^|^x$5H@P$(bjQpkFfr|;^7zzbR$ +,uKo7CMC8X=<6c');
define('AUTH_SALT',        ':6Y<kh=*~{:S6nq P=J$Q0BJEry{fqrhJx6XQ$wp[-;z|8w#-1l!0p+ P{]|sGb,');
define('SECURE_AUTH_SALT', '-O2yci-^xjw r6ZS63UU?)D2re<^o--%JAq.a8T?Xl6Q>rwsf1& C<tg3J<,PGUR');
define('LOGGED_IN_SALT',   'X.v-cDZC2^lYx[D(GJ[:NPF*n|mL_>Q$w?zKhVu11|:(=/eY6uRsoU/x5F]q*y}S');
define('NONCE_SALT',       'bt~gT!LYLRGAp&(f]d`r;K=[H>V>A+Rptd(L5ohT)k9;OrI0wbY:s+|UJw(]w(hy');
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
