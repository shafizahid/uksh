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
 
define('WP_HOME','http://localhost/uksh');
define('WP_SITEURL','http://localhost/uksh');

// define('WP_HOME','http://www.32mobiles.com/demo/uksh/');
// define('WP_SITEURL','http://www.32mobiles.com/demo/uksh/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'whathpxq_uksh_wp');
define( 'DB_NAME', 'uksh_wp' );

/** MySQL database username */
// define('DB_USER', 'whathpxq_uksh');
define( 'DB_USER', 'root' );

/** MySQL database password */
// define('DB_PASSWORD', '#U%iw;]4}ra+');
define( 'DB_PASSWORD', '' );


/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sz@r/t}qY>D}p|6kD$x}|=8vX:VE{5NHbB.ab^r&/hNemu?ndqbt{aldQS?i^cDc');
define('SECURE_AUTH_KEY',  '<P+RxmCjKkr9K$=@([[A3uu(t-dRdc`)F?M{~[Fg;Z@8GtmS+T-%N B>|SdEa2tX');
define('LOGGED_IN_KEY',    'Xl*k,fsU?,~5n-L_-.Zoco,/R~nai7<31E8(-2oAt0NtVGW06+NrH<>@<v_O|tyG');
define('NONCE_KEY',        'op@?{qTG`b <}8m>kfiT*mi+^]*SWN5l-B%3;w8=s:!=9Sfa<+4i=Hz%2RI]3RCO');
define('AUTH_SALT',        'U[kw0a0o-o#T?Q4cR=Vy$!+72D,E*0 ux(V~=>X(:9&8}PB1a)VE|7HD@_KW uxG');
define('SECURE_AUTH_SALT', '6p_9Z*)(2sB/`J`LH4)%5pbC29|2zw*M-z^ga}@3~Z*|b1OV{ e[#coDMAvAIeE<');
define('LOGGED_IN_SALT',   'i(% U$^]3$T+7vI^L6Ien4hHX%v;Q6 z_P_ueH:K+d.k66D`Nv:HQ`kx^Xa!.BXb');
define('NONCE_SALT',       ']-:u8--2x0]hCl-t7WS,qwnjs[-?Y1?6-TV,2I3eb]qLiFU9F,ujVhM 3M+px=A(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_uk';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
