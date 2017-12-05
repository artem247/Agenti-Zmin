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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'vwSUSgFwN');

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
define('AUTH_KEY',         'nm]]a8FE|5{1XH7X_l`hhM:47En&I:ZQ]:<k&lH0#TLug8iBdBh(AAQ;J><{21>Q');
define('SECURE_AUTH_KEY',  '1sj4h5nZG+pZ/DvvQXe>m kn;6-.tIdq{e=X=al@p^g*^UMJlet`5r1)og2mD7%<e');
define('LOGGED_IN_KEY',    ';3XDINM.s /s5ET?)X_/BmS?NqD#_{|+y_{5anw{=m`kxz:`D`rDh2] ;(PtQi):');
define('NONCE_KEY',        'pek}fD}Vp}Y/ayRwR6r@>]yUtbki!(?=(c1c2HhBSz#*y}1G|f8l2=;]!bbH&wM$');
define('AUTH_SALT',        '@O}>119@*:cz4,>%N=+iH{G4InLQ3|X9cNi1)eml*VW~$j=~Z,m>,7@7Vn%~ b/$');
define('SECURE_AUTH_SALT', 'q|F/PlrME2XQ]-2n#~uK1N,|ZLJX|p_qmOQ1P]pKkDq4bt^Xj$Gaz5*F5q-{J#{@');
define('LOGGED_IN_SALT',   'JBRj%HZ6Fm<-&6H7z#[GPtpt`[-.G>fZ<?+Lh0m9+p@m=[><7BJs$)L]E`[ch(mY');
define('NONCE_SALT',       'e1FlOn0!(Aa<k-yYu1_1+R[7O;)jLeFjqH1[|c;p>7%% E2-VamTEh,Cl!e:6Y)I');

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
