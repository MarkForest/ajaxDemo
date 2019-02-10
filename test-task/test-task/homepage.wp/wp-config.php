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
define('DB_NAME', 'wp_homepage_db');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '?EhxypUll//IOd8Cxn*eC`V1<(CLSTwa@]oAH?mK5C|7>SQ{FgOTGvp*48<5p?|)');
define('SECURE_AUTH_KEY',  ')9oTf&]/VY#eulJxOQu~@u&ZZSXlcc<LlbrV>3~*R33E[zwudr1j^)?-lb,)*^&8');
define('LOGGED_IN_KEY',    '9jJd3bwXH1O6i}nG^_z7;(Ph9xF$vU6Gr!DKYqC0Vbpo4fQ0]@:QU7p%@BBo4yON');
define('NONCE_KEY',        'j,CI&(#`0FX8Fa[aS,Ic4a$%=W`&[1Gq]DS?8` VV2n6G-,2vx~P* 2gR)r%$3^^');
define('AUTH_SALT',        'a8lRW@o|;|E64LT:]xL[4I9?^NOs}^B&u;1{Pe)o#en9GZ_Ofc!{R*zTRx?UWY*P');
define('SECURE_AUTH_SALT', 'OQ,$HPp_]{cuLsefy._SqT hfwKE,=pfjuw/*WGVBCjn?2KYBybzWh*L#<RPhbCZ');
define('LOGGED_IN_SALT',   '62vfxu$|gJdT$-/ynlLKucpJ|@daxmp2M|NzUzb:Z>w <Fy!i.b&-[ggtIn/OPIN');
define('NONCE_SALT',       'LsA]:f0.*rUfqg,|:xN`Qa2,~nykPk|efB!AreoSa*#fq,2`9v?x v!$r:^k7|hq');

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
