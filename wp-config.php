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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9d:U7vF5V&6.i6<+|IDb<Kjzgg7R]0Y#<AkRHA#$^+`Z-_6^nTT^|jwGG8EUVK+[');
define('SECURE_AUTH_KEY',  '-52Q)q`Dvtf$cZU9fl;;sR3v=eOSTl&3^dizOF-+4Vr7?=#wk%+zmowu(U&sa,BS');
define('LOGGED_IN_KEY',    'f Qai$C|*[~gpT1B&WXLHsY^-Fk|ogSZ$J=V2F1l7pSJc]5Lfc3(3Tzf/4+dS-^P');
define('NONCE_KEY',        's(33UtKSu|YxQYY{Q6nq)Y5S< QI77N2/OB|6<dYs.O=6mO-qCbd`-K-|Xsn4_|_');
define('AUTH_SALT',        '2 h:+7 -V-|MTzb_N@W?:/+V4fx3@YT1WkgBs3p=dNJ,mL,(Dv/0TP`&GuX =~L*');
define('SECURE_AUTH_SALT', 'rmZPW9**Ee>`qYyp=2Rj,QY_p4;H&u.~^B#}]gKc.3 tP3>.i .s.oh6ST>sU74w');
define('LOGGED_IN_SALT',   'T>cJDQn4tq%5G_l/6`|=^*Qd0,`Dti^<g|nT~fZl-vq7|ry-|a1N3VYr|(O1UR?m');
define('NONCE_SALT',       'AmNEZv[8k%lj;_Ydd _ P}C|~F/F6~m(`}G,9GCQtE%=XfVk.zwt3:=+#_;P,n+5');

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
