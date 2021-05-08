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
define( 'AUTH_KEY',         ']l64o$:b!c !~/m[46pb-t$~Pod]?1:K<Xp3hxP<U7@o:0*tO2s_8*1 Id)kooy<' );
define( 'SECURE_AUTH_KEY',  '.qfW@E]Kc[pi-Y=o-,g?:3&6AcfGsc34df9M-f5{=~~OC&zBR4N]q}}U:.[Dg-#X' );
define( 'LOGGED_IN_KEY',    '@IA=[/os}%<!H>7k|{>q(,TkcxA2({jd647q)q;yYeH^t>Hj?4k4G 61aEYjC@Z{' );
define( 'NONCE_KEY',        'KK>+8(B^2Mf[>{~p#pnB4>%?qhTciz6Tm^DYAs:`1L)qEt%St%{Gg/uP51yZayO^' );
define( 'AUTH_SALT',        '~4RzXa2QrcmoU!P^S-9kyn[]o/[ _Au0]X#0&i4lrc$ti{_2S}v@:-vI5^wFvop%' );
define( 'SECURE_AUTH_SALT', 'P3I2%mY+KlW<ZY#`@r*RAujuBjOo%auOPu|lg}Q_Tn)lN^0wSYc }7k~f]00^zz8' );
define( 'LOGGED_IN_SALT',   'nn3OK}I:t|4TOe>An`wB/^LJA2OPt7! 0p37-s !V[3J3Y]qJ17j_HV{eKScuT]?' );
define( 'NONCE_SALT',       '^g..^FZ{&(cX?-_tEiqVo>l%fwTaj-O{.uASqc6O3ze3$*zULVC9t6ILCw<mosH+' );

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
