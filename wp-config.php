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
define('DB_NAME', 'mysql');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'r6aqGR<VLCbot>Tuv}r?s@r.uVzTPU#{DKC4PCve!/>aUmU&?XcA9e).YpK=Axo^');
define('SECURE_AUTH_KEY',  'k-I|dhdfxId![:=`pRnz(x 3S#ue0ttA`Hvz#A3V<N$,ext|,pZ#m&x:j7WI8I!X');
define('LOGGED_IN_KEY',    'Ti]GvqVzg9/E2e2{1UklrUury,[ZrHLR|[=NpE_R[]p[9,P pQgW1VdU3^Dm+h+@');
define('NONCE_KEY',        'NqK.]p-cS>ZTh/!UBOY2v6f+,c}V[BTx6464oV;RvblXIe;m=zabu3*Js<Ro~/>s');
define('AUTH_SALT',        'RZL@^ST+Zg3-,o#:V%e{STpn##B7ZPwj0x_&DJPlN,xk`LTbik[a(JE#bDt_N:2P');
define('SECURE_AUTH_SALT', 'q>>tGGIwmOipKyG/}WQ3Y65N/($e[J5$x)VYNED[Vos119Uuys.0>H0A[5JaxS}/');
define('LOGGED_IN_SALT',   '3gzA]Ds6!M7(9~n^e401W:;[#c`73 2o0ZdE<*~_b#W__y|{h&luOYK;|?B/I&]@');
define('NONCE_SALT',       'YL|q_-o`8sDB]So7p%F1U{`-teqZH,qA_{4*4?3hK_cQC)SJlqv>BCi;^Q5w2x6L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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