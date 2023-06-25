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
define( 'DB_NAME', 'Adham' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'F=:V^6bpbh^$/C#)mm=UK:Z^vvOZ7*fP[A78(jAxJqDam]n3TiG(raMoW2Me:A=I' );
define( 'SECURE_AUTH_KEY',  '?(n{~=F-4!h#]vuv{y((|L#g?7#R4ax:zvYg%m:5`=Q)Q[DoGH8aacx!jR/DVe%K' );
define( 'LOGGED_IN_KEY',    '7;N`@gI@ts=j#vQ4}1OYPfKV1`%LqB~28ayu>&| /fU?aEu?8hh`1z; H?UA<8cf' );
define( 'NONCE_KEY',        ']HC0wf1=_>UP^%;br7A(yGGQH~1cFF2/(wCHF8n1X%E|Pwtk/:qy/dd4[o*aynqb' );
define( 'AUTH_SALT',        '|L1V te|?{&35 yE_lJxE@C}:t^bR8KPV~@uA|Z@K}f}vR&o=DII@U}Rt` p(5q;' );
define( 'SECURE_AUTH_SALT', '9MRg3gb7& [9NrSeR}T6R`>&-8>f3/&y):20;Zs:DJ-0_(#O}ge,>&6+,Bn&04TP' );
define( 'LOGGED_IN_SALT',   'a3l4te;mA-P$c?SQc|q/Yy4Ikl!|<z=B![E^Ob5ZO^k)3n&55FA|n9{(X{jdq1Vr' );
define( 'NONCE_SALT',       '[jh&|OPo3BNX;}R3)JZHOD4*lp{?*bl]%~4{=VaG9J~<1L+6u$q&QErs;G2ZJ-Sn' );

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
// define( 'WP_DEBUG', true );
// define( 'WP_DEBUG_DISPLAY', true );
// define( 'WP_DEBUG_LOG', true );
// define( 'SCRIPT_DEBUG', true );

if ( ! defined( 'FS_METHOD' ) ) define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('DISALLOW_FILE_EDIT', false);
define('DISALLOW_FILE_MODS', false);