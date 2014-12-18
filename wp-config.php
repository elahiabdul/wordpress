<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         ')|}w.3yzFt.&.ui[i!-{JMHY=_)/|4X5Sgvft$kCrt<!up`Aq8o38AkCIbR;uV{G');
define('SECURE_AUTH_KEY',  ')h)o K/&3QTI3&}w.9or[q]P9cA|b?Sa@iVcJ,1+y77Kqq>]b{wg0)f~Ig7+F,Q}');
define('LOGGED_IN_KEY',    'f$#8a-E]!6r2hOxs)I0)!fk`]:?S?T$k:OY`#%~kbB_I)jxaE>+|SAbn(ME,D4 -');
define('NONCE_KEY',        'hi2|:x[hvli5:uJ*@^w(hchQr]#j+c(+-6IiGi)vx.j=jv40t2m,+Z(PBSK>%ZM-');
define('AUTH_SALT',        '2[`rt@$=>gq->UD9A-}-vn<Q7S*~/^oNZ!7+(hf|LP@7szp75*I;@HI%J[oKcNXh');
define('SECURE_AUTH_SALT', '$oL6>y]wDeAZiOj|d*-C&vue1FmLV{B$bv$Wes6DU41%,VV1:-*B-(&4r& rJDO:');
define('LOGGED_IN_SALT',   ',>82#&*|DKDW2j-Av6r<y*xIV-oAu@+94j4Xoe:3@9|G.^>`UleoZS_AyR`wV:_F');
define('NONCE_SALT',       '?8dcv/iD#$}g>`-|F!y?w9U0`Bl!k{&va}$K#fAj.+2[%Ck<bOpsB+#W^!U@9TA7');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
