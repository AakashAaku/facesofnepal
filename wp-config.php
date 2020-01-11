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
define('DB_NAME', 'facesofnepaladvnltedb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');
#define('DB_HOST', '192.168.1.11');

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
define('AUTH_KEY',         'Jw $?kl9fMl.9I|s>saGOK!/ aV9Q |)iMo2RyPzO*3}!?zxW+o($~u^fkhHM~~`');
define('SECURE_AUTH_KEY',  'K]F7tD?GthW86:Y;m^MPlw&L%m,>P[EGS=s?eWm9Rv&~Ll9-E-f^x`X|[}Ti;@?,');
define('LOGGED_IN_KEY',    '>y9 xCq|i9T`&5XYmE7LG$K2X(E:}~At!f,ZlZtCN7qCH4try;ccve;G*w1~{2RW');
define('NONCE_KEY',        'YFgev{LncSbGLeuUteI(,^q5vBUd&I9<FOONGv$lM(=d5D)i(s.#^| 3q9NcQH^Q');
define('AUTH_SALT',        'e~Z$V,*Pi[Yb,Ht&~LE6@i1zMNgc9;D/]uJ~Cfaqqm*~n @9Fdx)SIhLC~.QrGpe');
define('SECURE_AUTH_SALT', 'qr#>Uw~&OgghzvjIZwXt=f_~)2zB3vzAe^AN(_!.e*;T6:~Q=CL,;uYxs9}:vZXW');
define('LOGGED_IN_SALT',   'EBKmYWQEmBvNrcg=u]Kh]40>.2(2o=s+;c0crm}rmY|)KcL![&prILhP,PKD|0Qe');
define('NONCE_SALT',       'O2Q#x%pPuE]WH7Bn(r;`O K-,q`IP>fiWRq|,^Xxj(Rf*P(Oh1H@ BeV0-kQ/VWc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbl_';

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
