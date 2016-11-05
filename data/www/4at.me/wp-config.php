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
define('DB_NAME', 'test-147');

/** MySQL database username */
define('DB_USER', 'test-147');

/** MySQL database password */
define('DB_PASSWORD', 'CsMZBUWwmEH4T3ZQ');

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
define('AUTH_KEY',         'o;epn:%{*/^D}q(AH,y+KA&AEwa#_o]e 7Fx2?~*x,=Q<-U|yicBQ`G:~+q@z~]H');
define('SECURE_AUTH_KEY',  '~GGfgm7$W15G4ftA<ze9bw!S3r,8DTf`F`~vYIo9s)1-vf =x]=S )Cu#CoyXr(n');
define('LOGGED_IN_KEY',    'gk&_#y<ymJdK/2<y5hZ2-3IW*tryy,DZpDX+^>sd7yl?hx!):?+)52hiO#2X+5CI');
define('NONCE_KEY',        'HX>jHD+/:@KVHbN0;G5&if~@BMj>BTYlJ^pgXE*QR:.:8d?Qp:M98ez5|!66y,A<');
define('AUTH_SALT',        'QRd#Eg5,%_$> Nh ITGHrI299O>s5i<p}gjvuqbGbR#g+|iXnt$TFk~.<W>mjpNd');
define('SECURE_AUTH_SALT', 'LM~5V!iZBWabB<RZDU.Q!b_SrCRVtxU@!;?W}E*;F?8a#4/~eXFIl@pDh-9esd*>');
define('LOGGED_IN_SALT',   'JHwSeqD(!0]e73rrJzbD[E&^XTOlu/]J|E:5*W@F %P:m;*qzb.dZs]F~g|=NGJY');
define('NONCE_SALT',       '{V;WD>->EpF^muBg#VD5K+.;Zon]8>;&JO*,,Q/<cW/J*3#_H~wO43nm-nz@=&xS');

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
