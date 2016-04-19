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
define('DB_NAME', 'daehwa_yongho');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         '@Ec~YAJ_X0rba!qk,XcCi<_x(Tz}m#8,zb7Ir/FE^-rF+h>e*}JW^EpW!8*A-&6n');
define('SECURE_AUTH_KEY',  '!!CZLi,[rP|Y^E5Xt!-kkAkj?}4K|,mL#BS$t-&#~ur^</B<+#A6aeijY.C9e@1;');
define('LOGGED_IN_KEY',    '~jBE~[mu{V>ScsR]iyu_QEu#A3slrKUn<w|F|rjq8^vM^S/8fT5[$QD*m4,O?S2A');
define('NONCE_KEY',        '6`#6I,Z3Z4IF1D4b|sa.xNC.!J>7aB<iiy<SLELh 4?PNp!A7B/*z(_#n9a6)cBq');
define('AUTH_SALT',        'Ss=S<n9d8JmsmZ4]>RR=6$yQ1rH:sk,PDsddFO#]^/3L&hvOi9Pj{QBUG:YO ]3p');
define('SECURE_AUTH_SALT', 'L8HO^8iBpj>])8U)P9n3]`x@9lSU-n`f!R|ms h,Zf,~Urft>GZ*?v*P<j6SRTec');
define('LOGGED_IN_SALT',   '.it=}W;;$IIf5ERGF[pa9Svg1sNvdf>&r/$ezeuRq[l5n9 u(p$^cY*?+Mz]r`bh');
define('NONCE_SALT',       ')l6nx!{&kwZBOW#$=;B:1oR$VPF46$CQvqNz{nS4oyto%dY!0VEfrUbWEP)Cf7Km');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'daehwa';

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
