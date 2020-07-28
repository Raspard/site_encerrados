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
define( 'DB_NAME', 'site_encerrados' );

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
define( 'AUTH_KEY',         ',wz:^BfC_nLipysLEr}mJHi)uw=w&|>a1ky[a=qkA7{T*LvAnRBPr_.N1rthpTJc' );
define( 'SECURE_AUTH_KEY',  'MYp`#&G{1so-8c|33;kvB1cJRS9K#-f]y^,lET*+wq4U%/p>rjM5[D%)YaM%8p~t' );
define( 'LOGGED_IN_KEY',    'cc7#faJI4{1vcZP^ePfzc1UFzvjGv*62fPQpM7&c2;}skx!=E/;Y0f|0Y6Jq&|/h' );
define( 'NONCE_KEY',        '+ ;uXnSAY;:a(Drw}bSYalTkTB&yC$},njz8IB S=-;}oduF#^R1-{d_NLU>;1Yx' );
define( 'AUTH_SALT',        'wF]DTW)Cw@R>;acK54xZ$][jH6 >lgX/neo{+0::TwM8~EzpM?4L0}d+]1iqK)uD' );
define( 'SECURE_AUTH_SALT', 'bOyG*_2Q*B=5N&$4tV/p%}PR*45vQwS1NtFc]8*_}b-Jgm~:[BelQs{7IDmyu,R7' );
define( 'LOGGED_IN_SALT',   '^r:6Yuqo`;K(Gow.XuGTLkgU-fw9l_+Su>gv%3ko+xQkBA]fj#X{o/C%KTAmg?[6' );
define( 'NONCE_SALT',       'ElUG%}ln{Bm4R-k?#Hq@5|`!n@.H+,09oA~B9E]:xUC*R$7}66?8Qm*v[=IuiCs^' );

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
