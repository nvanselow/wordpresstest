<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('WP_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'o}_u+v5?id+^e|e<vwA+dl0C)*QkOSVZLTv84|)T~liF={*Nmp3xy^1Z/);a4|/S');
define('SECURE_AUTH_KEY',  'QQO+%{(V !M12+Z5GQ-R+w48|h|EZhal:XVm1Z7yy[pzk#k=QsLyMdm?+x,Pb|#e');
define('LOGGED_IN_KEY',    'E^v6(T$F{.SIs/&A#bkCL&T|B30@^{6eZ:|g]mtm;Y%e^p0Jfu&Z_pkcfl&3nO.Z');
define('NONCE_KEY',        ' gp%AbX|S~qlk)i@=q|pvDQch1XNfEX!BuuY%Syk@L`sZ]D{P-;#Xh-p7yWU.n[p');
define('AUTH_SALT',        ',ms{ur5]U)dksc+]3{ni%0-!@H}0>rU*Y=~GWWVp_-?6lw1saOrL7Gco:{:lE_OV');
define('SECURE_AUTH_SALT', 'G-]OS+Lkuc|24`a9B#Y}nZR(fE6/gcGpeK<>vFVS]H&m1=+Nh,%oq|;c&$0G/x|c');
define('LOGGED_IN_SALT',   'W@0s#kZ+4ZYdlrTGu~+(p@BYhY-YRQ)xmqtSO5c[/[S3Q{-0feEc:}bSHX,fRuA9');
define('NONCE_SALT',       'KU4d{[o0{v=fc7aYW96jJ~Fr> g7p5TGp^)jn-C-4:GFqBm}F=lk.S:HT,&f&IF*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', (getenv('ENV') == 'local' ? true : false));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
