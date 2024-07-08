<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define('DB_NAME', 'local');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', 'root');
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
define('AUTH_KEY',         ' Dbr{8k8I*EuYGL5=QpCXEd_Mjy .Ja$aG3g!u2nssX+i9{!q3r?!RYc_?+v=8PC');
define('SECURE_AUTH_KEY',  'VE]Jevt;mD82ia!OUny**THh_x&wnYJn +8n,mA;I%lqPK82tUybRVdLJz4sI3H@');
define('LOGGED_IN_KEY',    '_|1YksEEpwuN]+xtr^gnG#&Yw~ejIH1w3jgO^R)#k^rsxNP4V{=+7|c*wFiZ2Gx7');
define('NONCE_KEY',        'O?M|qLwjodaM=T#)R,~$06|L16jJdKKtye5eN-d$^ueO*xX}:CJpdKoby7<RS*b}');
define('AUTH_SALT',        '*3nplIg]-:i7e<O4Xn?mf$`?#2u,04`{.%49<FV9G M@@I^:RaJ90Q3^Y=cvA;qo');
define('SECURE_AUTH_SALT', 'D#m,%,2:8S!@BSNJat|?mgkC,8.(Y:d5aS`8G{lL*x+QLq^/#N*ptu!<4h}dN?1^');
define('LOGGED_IN_SALT',   'kg%7u4,{r-P 8|Xh@h?!&8CFI#UO5+?qDQ8;nFn@t0|B)L0>-9tdBWg-]&OSS*Q$');
define('NONCE_SALT',       'TPJ_kgm8A#%;()?xA_WJwU0KI{N ]iIf&a%1iXJ]OJU(3pLH]Ugl)V<{B}DkiL#|');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');