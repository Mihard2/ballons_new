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
define( 'DB_NAME', 'balloonsd' );

/** MySQL database username */
define( 'DB_USER', 'balloonsd_adm' );

/** MySQL database password */
define( 'DB_PASSWORD', 'balloonsduser' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XMd_rE:v3(Jsfy3X5b0c+VBZVTbs2;VC}P`8qz0U5o[g7uO =Y3&0d[o(7SzMSJ<' );
define( 'SECURE_AUTH_KEY',  'B~T-K+_;6oca;@J+q`X=!PnA3^#Fx&rX0:~lkC>4^t|zRHFUWD^Bwt[O[]4LB(Ri' );
define( 'LOGGED_IN_KEY',    'O0.$]l8V QlBP.dwp`&BnBvCbVY.oiQ@PD*gq$CWiL];B:?OUrx(CJA,kU27fCw0' );
define( 'NONCE_KEY',        '4FA=d#3*?xlxh-2&z>T$wm>NyW2*Wiw,xNS}tb,I:w&S!(` E0`>M{ZJHu10k9fx' );
define( 'AUTH_SALT',        '6.j2Q3^u8|><N1OsM6I`a!M2yJxbA/z%z7@n!XT}2EhH6x$tL&%Cgmd6&e5CJ)je' );
define( 'SECURE_AUTH_SALT', 'oE#)0PsjH+PU2OT|#2#bJ_%yc9OLq(#?FTV.2vd>IFE?1L:&}-eFnD^(*~I$wj3f' );
define( 'LOGGED_IN_SALT',   '|`pJfVWo1+dihkFK),xTDI-LPE;E3|u dG|7(]a:xEbrvDm~*bE,2!N+-iN}?y{y' );
define( 'NONCE_SALT',       'uDSjY.NM>*V<~v$PMS-irjrVY;eFANrTuDx0,o>ib:{F`lf52L#IRXaCyFr*635W' );

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
define('WP_MEMORY_LIMIT', '256');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
