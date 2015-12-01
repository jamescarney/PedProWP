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
define('DB_NAME', 'PedProWP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Oh092291');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '-q>aVfvX-h):K|A@~}uwa!a@WcKWc}H;r-w+qABZX;b0AQ##;I,>s)Xnw]@[LWmj');
define('SECURE_AUTH_KEY',  '{+[Z2->>`yeSvYAhyFFn|k%h5W:?]{t;VLVF~|ZwfC#y:#Y;P9+g*aeVh-@YT&&r');
define('LOGGED_IN_KEY',    'Q#hNECDBuD=z-^&}[f O-^{)u*3+N#JYZ/y7r1z+r|A[qO^X)Pn|80Jx3j@;$EU-');
define('NONCE_KEY',        ' ZF[]9U@zAcl627]T:%s1S&zF#;h3|SJc)gbFzeCk?`C[E|?-5cpAr} ?{95}>SI');
define('AUTH_SALT',        '.(/--] ?H+Ar*%Nj^PmxB~|U$8s&MvRfk++Zu8*kiG3Q+@A85 %;2*&:4~+=eF|p');
define('SECURE_AUTH_SALT', 'l|#H-(glFw[X*-(4SM:J2@QNvKe}dfTZ;WJ%U-@nLz(=[._zx_*iM;4p!k=}/N+@');
define('LOGGED_IN_SALT',   'r&D+!I&?+y_H*V7;w.Ygj}WM@:u-GYgG]Nz@[7tfK%voP,YSRAVv`@HUNg.W5+FN');
define('NONCE_SALT',       '5-JXeIy*?%R~ vY@AuW2[=4%J_K_om(B)W+-v+YAYp-YXs2*`w*t$am}gk(W2F+3');

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

