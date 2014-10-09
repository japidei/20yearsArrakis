<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_20');

/** MySQL database username */
define('DB_USER', 'wordpress_2');

/** MySQL database password */
define('DB_PASSWORD', '6x8$lPm5QO');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tut!AMsFWmILVUB%8FIFj8aE553uN%RVjTUj!LBRMw!6oCmSYjzwnWFonfK&rreR');
define('SECURE_AUTH_KEY',  'C(!ApNYe(%QCUhxxo6U^16ctAmN4@gwFQJA^g5!A&#!U(6wwUySw7Gqr1zoyuVM!');
define('LOGGED_IN_KEY',    'TPU(UOUWo&Yr^no6AT$DCOU5dH4*wm$meDKRRld)ACvxv42zljlfXQuHlfz#IK65');
define('NONCE_KEY',        'NrAHLe0Qr#44mdcLYJ6BCc8Fz%m1uA!&vYpHeTi6kXU38dKIOsRUf^t6g(ljYJD&');
define('AUTH_SALT',        '%opSAbc$JT39v*P07I5WjBxByW5f0c0BijDSJnkQcie(vOGo&27t6FcrEa8VO4QG');
define('SECURE_AUTH_SALT', 'U6nK87W&9CfGZ)vgKCPf3PH%9R#QlNx3q*@7kD*cNQRH9ekLLh*&lz!4^V)!9*W#');
define('LOGGED_IN_SALT',   'kU%*AglE09@5c6%6)cK(E#YCxzsttoYyG3vVw8*BS08%Pv#kpd6nCs4#G@0tuBek');
define('NONCE_SALT',       'ReYtg35f%bAg2OY0UHHE2%1tA(V0wZ5doM6Coi!&$zOU5IYJgPYQ9mr7TKVhg0OC');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
