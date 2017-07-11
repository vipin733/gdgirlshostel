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
define('DB_NAME', 'gdhostel');

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
define('AUTH_KEY',         'LhjE0F#Myl7KjCN8e9N~:aRT8KV=6Vb)I^x#>hH2%?^nS}1yox<xi3J~+j].*Fpo');
define('SECURE_AUTH_KEY',  'trdcdTwyA}diL5I)i.)#9Xg_15:F3K-^:x%0C+7i<MOse$Zsq<SP3XV89bajO {f');
define('LOGGED_IN_KEY',    'S7bmsn,lB>d&tsM-Snu/Rg}aP>B.T8o`juRbdPS[5+sWI2CPa8My~oYf//Z<|6t#');
define('NONCE_KEY',        'Vmkt_<(Gyq@8kc-_ETy^?3 R,{(I<o+SaQEh_Rh7kDR<aRMw;bz}V@bU3L{XeN9y');
define('AUTH_SALT',        '@Qsx.f,Z8 chyx|ZZmzY:]S 8s9XUamy-D898nG(,vxL_slINPk|Lx#a)h#Oq#3r');
define('SECURE_AUTH_SALT', '1QUeI- .=P1as&=/mSg/O7C]s uxB?gj+->W]^,n7Z2OS-H7G5|5&>z:hX(0E)6-');
define('LOGGED_IN_SALT',   '$kO;y=z02`9i8.plSS^OCtRX1f|bBYmU5Kg{}(vRv+#rK1EZ}|.W+Cl#L[O9W=KP');
define('NONCE_SALT',       ',4jvI`ZQr/!N1ISasB3S/L]G+BJ]# ,,XYS6&X,_IP==XT~#;r5rp=&Ml2T8fGt&');

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

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
