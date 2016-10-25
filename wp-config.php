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
define('DB_NAME', 'iglesias');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'eLm:X$%I}K:ku$P^J(2ng`aP_OJbs^$p/YB*C750[<c!Qn2U^(x^dahu)fs=BqB$');
define('SECURE_AUTH_KEY',  'kt{|d[|#WsMCg%)Mi69GaNQDZ[/z(/V>er06|Mu=($bAc>>eSu4f7V}BK/qTk9:1');
define('LOGGED_IN_KEY',    'X+7}/3i4b?D@>^MFV}BAM;Ig,7=c5N//0Q&&7K)xI?r>CHCXZe3L)s3!`m?yLjwm');
define('NONCE_KEY',        '.5i6u:}64wpdCX[$p5q*@%7hc*eUE6hQm_~wwk=<E:%+^$OYU8LPVIm}CfO>kH/i');
define('AUTH_SALT',        '>8!$C|#wr{H/Dptv0Ya~C[89$mV2Dxk(+q#3GWicARK7m{BslUbArq`5g[V{u,]Y');
define('SECURE_AUTH_SALT', '-7h#%xn OrE12s!x{K^D{:o)s7DNsG|}T|`Dp)S8;y#gN:RhIcU*BibI?22n9{%0');
define('LOGGED_IN_SALT',   ':#WMUGlBMB1>R~Vu0R5&B3>8k{V#=i:P8O_B?3V:ljU)!#_yY5KEGlRZ3j+`dJ,h');
define('NONCE_SALT',       'tou^65bJ4cQj;2vf:RrGq$!py*gFr`#aeC! 2!Od:zYOhC#L}7g2k9fDbh!o$eQz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'igl_';

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
